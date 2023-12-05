  <?php $actova1 = '';
  $actova2s = 'active';
  $actova3 = '';
  $actova4 = '';
  $actova5 = '';
  $actova6 = '';
  $actova7 = '';
  $actova8 = '';
  $actova9 = '';
  $actova10 = ''; ?>
  <?php require_once('../../con-cot/conn_sqli.php'); ?>
  <?php require_once('../../lib/basic-functions.php'); ?>
  <?php require_once('../../library.php'); ?>
  <?php require_once('../../select-library.php'); ?>
  <?php require_once('../../emails_lib.php'); ?>
  <?php $bassic->checkLogedINAdmin('login'); ?>
  <?php

  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }

  $no_of_records_per_page = 100;
  $offset = ($page - 1) * $no_of_records_per_page;

  $total_pages_sql = "SELECT COUNT(*) FROM $top_up";
  $result = query_sql($total_pages_sql);
  $total_rows = mysqli_fetch_array($result)[0];
  $total_pages = ceil($total_rows / $no_of_records_per_page);

  //confirm-deposit
  if (isset($_GET['start'], $_GET['end']) && !empty($_GET['start']) && !empty($_GET['end'])) {
    $_SESSION['start'] = $_GET['start'];
    $_SESSION['end'] = $_GET['end'];
  } else {
    $_SESSION['start'] = 0;
    $_SESSION['end'] = 100;
  }
  if (isset($_GET['confirm-deposit']) && !empty($_GET['confirm-deposit'])) {
    $getid = $_GET['confirm-deposit'];
    $mai_id = $cal->selectFrmDB($top_up, 'payment_id', 'id', $getid);

    $email_id = $cal->selectFrmDB($top_up, 'email', 'id', $getid);
    $name_id = $cal->selectFrmDB($user_tb, 'first_name', 'email', $email_id);
    $amount = $cal->selectFrmDB($top_up, 'amount', 'id', $getid);
    if (!empty($getid)) {
      $fields = array('status');
      $values = array('confirmed');
      $msg = $cal->update($top_up, $fields, $values, 'id', $getid);

      //user
      $fields = array('payment_activation_status');
      $values = array('yes');
      $msg = $cal->update($user_tb, $fields, $values, 'email', $email_id);

      ///balance
      $available_balance = $cal->selectFrmDB($user_tb, 'main_account_balance', 'email', $email_id);
      $new_account_balance = $available_balance + $amount;
      $fields = array('main_account_balance');
      $values = array($new_account_balance);
      $msg = $cal->update($user_tb, $fields, $values, 'email', $email_id);

      $email_call->ConfirmPaymentNotify($amount, $plan = '', $coin = '', $mai_id, $name_id, $email_id);
      header("location:top-up?done=" . $msg);
    }
  }

  //Unconfirm-deposit
  if (isset($_GET['unconfirm-deposit']) && !empty($_GET['unconfirm-deposit'])) {
    $getid = $_GET['unconfirm-deposit'];
    $mai_id = $cal->selectFrmDB($top_up, 'payment_id', 'id', $getid);

    $email_id = $cal->selectFrmDB($top_up, 'email', 'id', $getid);
    $name_id = $cal->selectFrmDB($user_tb, 'first_name', 'email', $email_id);
    $amount = $cal->selectFrmDB($top_up, 'amount', 'id', $getid);

    if (!empty($getid)) {
      $fields = array('status');
      $values = array('pending');
      $msg = $cal->update($top_up, $fields, $values, 'id', $getid);

      ///balance
      $available_balance = $cal->selectFrmDB($user_tb, 'main_account_balance', 'email', $email_id);
      $new_account_balance = $available_balance - $amount;
      $fields = array('main_account_balance');
      $values = array($new_account_balance);
      $msg = $cal->update($user_tb, $fields, $values, 'email', $email_id);

      $email_call->unconfirmPaymentNotify($amount, $plan = '', $coin = '', $mai_id, $name_id, $email_id);
      header("location:top-up?done=" . $msg);
    }
  }

  if (isset($_GET['del']) && !empty($_GET['del'])) {
    if (query_sql("DELETE FROM $top_up WHERE `id`='" . $_GET['del'] . "' LIMIT 1")) {
      $msg = 'Delete process was successful!';
      header("location:top-up?done=" . $msg);
    } else {
      $msg = 'Info Faild to delete!';
      header("location:top-up?done=" . $msg);
    }
  }


  if (isset($_GET['done']) && !empty($_GET['done'])) {
    $msg = $_GET['done'];
  } ?>
  <!DOCTYPE html>
  <html lang="en">
  <?php
  $title = 'Top Ups |';
  require_once('head.php') ?>
  <style>
    .chat-launcher {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 70px;
      height: 70px;
      z-index: 12;
      background: #C5BC34;
      color: #fff;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.16), 0 6px 12px rgba(0, 0, 0, 0.32);
      text-align: center;
    }

    .chat-launcherB {
      position: fixed;
      bottom: 20px;
      right: 130px;
      width: 80px;
      height: 70px;
      z-index: 12;
      background: #D39728;
      color: #fff;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.16), 0 6px 12px rgba(0, 0, 0, 0.32);
      text-align: center;
    }
  </style>

  <body>
    <!-- container section start -->
    <section id="container" class="" style="margin-bottom:100px;">
      <?php require_once('header.php') ?>
      <?php require_once('sidebar.php') ?>
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> top-up</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
                <li><i class="fa fa-laptop"></i> Users top-up</li>
                <li><a data-toggle="modal" href="#AlldelPACKSTDATA">
                    <button title="" id="sub" class="chat-launcherB" type="submit" name="sub">Confrim</button>
                  </a></li>
              </ol>
            </div>
          </div>

          <?php if (!empty($msg)) { ?>
            <div class="row">
              <div id="go" class=" col-lg-12">
                <div id="go" class="alert alert-warning" style="text-align: center; color:#333;"><?php print @$msg; ?> <i id="remove" class="fa fa-remove pull-right"></i></div>
              </div>
            </div>
          <?php } ?>


          <div class="row" style="margin-bottom:20px;">
            <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="col-lg-12" style="margin-bottom:10px;"><input class="form-control" id="search" type="text" placeholder="Search Participant  Email, top-up ID"></div>
              <div class="col-lg-12">
                <div id="searchresults"></div>
              </div>
              <script type="text/javascript" src="../../js/search2.js"></script>
            </form>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <?php $select->SelectTopUp($offset, $no_of_records_per_page); ?>
            </div>

            <div class="col-lg-12">
              <ul style="float: right;" class="pagination">
                <li><a href="?page=1">First</a></li>
                <li class="<?php if ($page <= 1) {
                              echo 'disabled';
                            } ?>">
                  <a href="<?php if ($page <= 1) {
                              echo '#';
                            } else {
                              echo "?page=" . ($page - 1);
                            } ?>">Prev</a>
                </li>
                <li class="<?php if ($page >= $total_pages) {
                              echo 'disabled';
                            } ?>">
                  <a href="<?php if ($page >= $total_pages) {
                              echo '#';
                            } else {
                              echo "?page=" . ($page + 1);
                            } ?>">Next</a>
                </li>
                <li><a href="?page=<?php echo $total_pages; ?>">Last</a></li>
              </ul>
            </div>

          </div><!--/.row-->

        </section>

        <!--main content end-->
      </section>
      <!-- container section start -->
    </section>

    <h4 align="center">&copy;</h4>

    <!-- javascripts -->
    <?php require_once('jsfiles.php') ?>
    <!-- charts scripts -->
  </body>

  </html>

  <script type="text/javascript">
    $(document).ready(function(e) {
      $('#depo').click(function() {
        if ($('#plan').val() == "" || $('#amount').val() == "") {
          sweetError('Please fill all fields!');
        } else {
          document.getElementById('sudep').click();
        }
      });
    });


    $(document).ready(function(e) {
      $('#clik').css("cursor", "pointer");
      $('#topp').hide();
    });

    function refreshThisPage() {
      window.location.reload();
    }

    $(document).ready(function() {
      $('input#parent').click(function() {
        if (this.checked) {
          $('input#child').attr('Checked', 'Checked');
        } else {
          $('input#child').removeAttr('Checked');
        }
      });

      $('input#pwarent').toggle(
        function() {
          $('input#child').attr('Checked', 'Checked');
        },
        function() {
          $('input#child').removeAttr('Checked');
        }
      );
    });


    function confrimTRN() {
      var selected = new Array();
      $('input[name="moveP"]:checked').each(function() {
        selected.push(this.value);
      });
      if (selected != "" & selected != 0) {
        $.ajax({
          url: "jason-php-code-processor2.php", // link of your "whatever" php
          type: "POST",
          async: true,
          cache: false,
          data: {
            xpDELSELSTD: selected
          }, // all data will be passed here
          success: function(data) {
            sweetUnpre(data); // The data that is echoed from the ajax.php
            setTimeout(refreshThisPage, 6000);
          }
        });
        sweetUnpre("Processing...");
      } else {
        sweetUnpre('Oops!, select a top-up to confirm!');
      }
    }
  </script>