<?php
require_once('include.php');
$title = 'Deposit | ' . $siteName;
$desc = '';
require_once('head.php');

$msg = @$_GET['message'];
if (isset($_POST['submit'])) {
  $plan_type = $_POST['plan'];
  $plan = 'LEVEL' . $plan_type;
  $min = $_POST['min' . $plan_type];
  $max = $_POST['max' . $plan_type];
  $transaction_id = $bassic->randGenerator();
  $email = $sqli->getEmail($_SESSION['user_code']);
  $amount = $_POST['amount'];
  $profit_acumulation = 0;
  $deposit_status = 'confirmed';
  $duration = $_POST['duration' . $plan_type];
  $pause_status = '0';
  $day = $duration * 30;
  $expire_time = time() + ($day * 24 * 60 * 60);
  $date_created = $bassic->getDate();
  $fname = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'first_name');

  if (!empty($amount) && !empty($plan_type)) {

    if ($amount < $min || $amount > $max) {
      $msg = 'You investment amount must fall within the investment range of $' . $min . ' - $' . $max . '. Thank you' . $plan_type;
    } else {
      $account_balance = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance');
      $new_account_balance = $account_balance - $amount;
      if ($account_balance > $amount) {
        $fields = array('id', 'transaction_id', 'email', 'amount', 'profit_acumulation', 'plan', 'deposit_status', 'duration', 'pause_status', 'expire_time', 'date_created');
        $values = array(null, $transaction_id, $email, $amount, $profit_acumulation, $plan, $deposit_status, $duration, $pause_status, $expire_time, $date_created);
        $insert = $cal->depositBTC($investment_tb, $fields, $values);

        if ($insert) {

          $fields = array('main_account_balance');
          $values = array($new_account_balance);
          $pasER = $cal->update($user_tb, $fields, $values, 'email', $sqli->getEmail($_SESSION['user_code']));

          $subjt = 'You placed and investment!';
          $message = 'Hi ' . $fname . ', your investment of ' . $base_currency . $amount . ' was successfully. Plan:' . $plan;
          $siteName = $siteName;
          $siteDomain = $domain;
          $email_call->generalMessage($subjt, $message, $email, $siteName, $siteDomain);

          $msg = 'Your trade was successful!';
          header("location:trade-request-history");
        } else {
          $msg = 'Unexpected Error! Please try again.';
        }
      } else {
        $msg = 'Insufficient fund to carry out this transaction!';
      }
    }
  } else {
    $msg = 'Fill all fields!';
  }
}
?>

<body class="nk-body npc-crypto bg-white has-sidebar ">
  <div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
      <?php require_once('side-bar.php'); ?>
      <!-- wrap @s -->
      <div class="nk-wrap ">
        <?php require_once('header.php'); ?>
        <!-- content @s -->


        <div class="nk-content nk-content-fluid">
          <div class="container-xl wide-lg">
            <div class="nk-content-body">
              <div class="kyc-app wide-sm m-auto">
                <div class="buysell-nav text-center">
                  <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                    <li class="nav-item">
                      <a class="nav-link" href="withdrawal-history">Withdrawal History</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="all-transaction">All Transaction</a>
                    </li>
                  </ul>
                </div>
                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                  <div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal">Create Investment</h2>
                    <div class="nk-block-des">
                      <p>Start earning by creating an investment. <?php print $sqli->countInvestments($sqli->getEmail($_SESSION['user_code']), 2); ?></p>
                    </div>
                  </div>
                </div>

                <?php if (isset($msg) && !empty($msg)) { ?>
                  <div class="alert alert-warning">
                    <div class="alert-cta flex-wrap flex-md-nowrap">
                      <div class="alert-text">
                        <p><?php print @$msg; ?></p>
                      </div>
                    </div>
                  </div>
                <?php } ?>

                <form enctype="multipart/form-data" method="post" action="deposit_btc.php">
                  <div class="nk-block">
                    <div class="card card-bordered">


                      <div class="nk-kycfm">

                        <div class="nk-kycfm-content">
                          <h5 class="title">Select Plan</h5>
                          <div class="nk-block">
                            <div class="row g-gs">


                              <?php
                              $sql = query_sql("SELECT * FROM $settings where `id`=1");
                              $i = 1;
                              $row = mysqli_fetch_assoc($sql);
                              for ($i = 1; $i <= 6; $i++) {
                                if ($i == 1) {
                                  $chk = 'checked';
                                } else {
                                  $chk = '';
                                }
                              ?>
                                <div class="col-sm-6 col-xl-4">
                                  <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                      <div class="project">
                                        <div class="project-head">
                                          <h6><?php print $row['level' . $i]; ?></h6>
                                        </div>
                                        <div class="project-details">
                                          <p>Min: <?php print $base_currency; ?><?php print number_format($row['min' . $i]); ?> </p>

                                          <p> Max: <?php print $base_currency; ?><?php print number_format($row['max' . $i]); ?></p>

                                          <p>R.O.I: <?php print $base_currency; ?><?php print number_format($row['profit' . $i]); ?> Monthly After
                                            <?php print $row['duration' . $i]; ?> Months
                                          </p>

                                          <p> Slot: <?php print $base_currency; ?><?php print number_format($row['slot' . $i]); ?></p>

                                          <p class="cont">
                                            <center>
                                              <div class="user-avatar sm bg-blue"><span>
                                                  <input <?php print $chk; ?> value="<?php print $i; ?>" type="radio" name="plan" id="plan<?php print $i; ?>"></span>
                                              </div>
                                            </center>
                                          </p>
                                          <input type="hidden" name="min<?php print $i; ?>" id="min<?php print $i; ?>" value="<?php print $row['min' . $i]; ?>">
                                          <input type="hidden" name="max<?php print $i; ?>" id="max<?php print $i; ?>" value="<?php print $row['max' . $i]; ?>">
                                          <input type="hidden" name="plan_type<?php print $i; ?>" id="plan_type<?php print $i; ?>" value="<?php print $i; ?>">
                                          <input type="hidden" id="duration<?php print $i; ?>" name="duration<?php print $i; ?>" value="<?php print $row['duration' . $i]; ?>">
                                        </div>
                                        <div class="project-progress">
                                          <div class="project-progress-details">
                                            <div class="project-progress-percent"></div>
                                          </div>
                                          <div class="progress progress-pill progress-md bg-light">
                                            <div class="progress-bar" data-progress="93.5"></div>
                                          </div>
                                          <center style="margin-top: 20px;">
                                            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php print $i; ?>" class="btn btn-primary text-white">Details</a>
                                          </center>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop<?php print $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php print $row['level' . $i]; ?> Details</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <?php print $row['description' . $i]; ?>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              <?php } ?>




                            </div>
                          </div>
                        </div>
                        <!--  -->


                        <div class="nk-kycfm-content">
                          <div class="">
                            <h5 class="title">Amount</h5>
                            <input type="text" class="form-control form-control-lg form-control-number" id="amount" name="amount" placeholder="10000">
                          </div>
                        </div>


                        <div class="nk-kycfm-footer">
                          <div class="nk-kycfm-action pt-2">

                            <button style="display: none;" id="sub" name="submit" type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Invest Now!</button>

                            <button name="submit" type="button" onClick="invest();" class="btn btn-lg btn-primary theme-button btn btn-raised btn-success waves-effect">Invest Now!</button>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

        <div class="nk-content nk-content-fluid">
          <div class="container-xl wide-lg">
            <div class="nk-content-body">
              <div class="kyc-app wide-sm m-auto">

                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                  <div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal text-warning"></h2>
                    <div class="nk-block-des">

                      <p>
                      <div class="nk-kycfm-footer">
                        <div class="nk-kycfm-action pt-2">
                          <a href="./" class="btn btn-lg btn-primary">Back to home</a>
                        </div>
                      </div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- content @e -->
        <?php require_once('footer.php'); ?>
        <script type="text/javascript" src="js/functionsmain.js"></script>
        <script>
          function invest() {
            var hr = new XMLHttpRequest();
            var url = "code_prosessor.php";
            var amount = document.getElementById('amount').value;
            var plan_type = $('input[name="plan"]:checked').val();
            var plan = 'LEVEL' + plan_type;
            var min = document.getElementById('min' + plan_type).value;
            var max = document.getElementById('max' + plan_type).value;
            var vars = "amount=" + amount;
            if (amount == "" || plan == "") {
              sweetUnpre("Please fill all necessary fields!");
            } else {

              if (parseInt(amount) < min || parseInt(amount) > max) {
                sweetUnpre('You investment amount must fall within the investment range of $' + min +
                  ' - $' + max +
                  '. Thank you');
              } else {

                $('#sub').click();
              }

            } //end starter
          } //else empty

          const myModal = document.getElementById('myModal')
          const myInput = document.getElementById('myInput')

          myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
          })
        </script>