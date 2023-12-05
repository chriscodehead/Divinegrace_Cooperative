<?php
require_once('include.php');
$title = 'Deposit | ' . $siteName;
$desc = '';
require_once('head.php');

$msg = '';
if (isset($_POST['request'])) {
  $min = $_POST['min'];
  $max = $_POST['max'];
  $plan_type = $_POST['plan_type'];
  $transaction_id = $bassic->randGenerator();
  $email = $sqli->getEmail($_SESSION['user_code']);
  $amount = $_POST['amount'];
  $profit_acumulation = 0;
  $plan = $_POST['plan'];
  $deposit_status = 'processing';
  $duration = $_POST['duration'];
  $pause_status = '0';
  $expire_time = time() + ($duration * 60 * 60);
  $date_created = $bassic->getDate();
  $fname = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'first_name');

  if (!empty($amount) && !empty($plan)) {

    if ($amount < $min || $amount > $max) {
      $msg = 'You investment amount must fall within the investment range of $' . $min . ' - $' . $max . '. Thank you';
    } else {
      $account_balance = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance');
      $new_account_balance = $account_balance - $amount;
      if ($account_balance > $amount) {
        $fields = array('id', 'transaction_id', 'email', 'amount', 'profit_acumulation', 'plan', 'deposit_status', 'duration', 'pause_status', 'expire_time', 'date_created');
        $values = array(null, $transaction_id, $email, $amount, $profit_acumulation, $plan, $deposit_status, $duration, $pause_status, $expire_time, $date_created);
        $insert = $cal->depositBTC($deposit_tb, $fields, $values);

        if ($insert) {

          $fields = array('main_account_balance');
          $values = array($new_account_balance);
          $pasER = $cal->update($user_tb, $fields, $values, 'email', $sqli->getEmail($_SESSION['user_code']));

          $subjt = 'You placed and investment!';
          $message = 'Hi ' . $fname . ', your investment of ' . $base_currency . $amount . ' was successfully. Plan:' . $plan;
          $siteName = $siteName;
          $siteDomain = $domain;

          $fieldup = array("request");
          $valueup = array($plan);
          $update = $cal->update($user_tb, $fieldup, $valueup, 'email', $sqli->getEmail($_SESSION['user_code']));
          $email_call->generalMessage($subjt, $message, $email, $siteName, $siteDomain);

          $msg = 'Your trade was successful!';
          header("location:trade-request-history");
        } else {
          $msg = 'Error! Please try again.';
        }
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
                      <p>Start earning by creating an investment.</p>
                    </div>
                  </div>
                </div>

                <?php if (isset($_GET['error']) && !empty($_GET['error'])) { ?>
                  <div class="alert alert-warning">
                    <div class="alert-cta flex-wrap flex-md-nowrap">
                      <div class="alert-text">
                        <p><?php print @$_GET['error']; ?></p>
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

                                          <p class="cont">
                                            <center>
                                              <div class="user-avatar sm bg-blue"><span>
                                                  <input checked value="LEVEL<?php print $i; ?>" type="radio" name="plan" id="plan<?php print $i; ?>"></span>
                                              </div>
                                            </center>
                                          </p>
                                          <input type="hidden" name="min" value="<?php print $row['min' . $i]; ?>">
                                          <input type="hidden" name="max" value="<?php print $row['max' . $i]; ?>">
                                          <input type="hidden" name="plan_type" value="<?php print $i; ?>">
                                          <input type="hidden" name="duration" value="<?php print $row['duration' . $i]; ?>">
                                        </div>
                                        <div class="project-progress">
                                          <div class="project-progress-details">
                                            <div class="project-progress-percent"></div>
                                          </div>
                                          <div class="progress progress-pill progress-md bg-light">
                                            <div class="progress-bar" data-progress="93.5"></div>
                                          </div>
                                        </div>
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
                            <input type="text" class="form-control form-control-lg form-control-number" id="amount" name="amount" placeholder="0.055960">
                          </div>
                        </div>


                        <div class="nk-kycfm-footer">
                          <div class="nk-kycfm-action pt-2">

                            <button id="sub" name="submit" style="display: none;" type="submit" class="btn btn-raised btn-primary btn-round waves-effect"></button>

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
            var plan = $('input[name="plan"]:checked').val();
            //document.getElementById('plan').value;
            var coin = document.getElementById('coin').value;
            var vars = "amount=" + amount;
            if (amount == "" || coin == "" || plan == "") {
              sweetUnpre("Please fill all necessary fields!");
            } else {
              if (parseInt(amount) < <?php print $siteMinA; ?>) {
                sweetUnpre("Error! Min is $<?php print $siteMinA; ?>!");
              } else {

                if (plan == 'LEVEL1' && parseInt(amount) < <?php print $siteMinA; ?>) {
                  sweetUnpre("Error! `<?php print $planA; ?> Plan` Min $<?php print $siteMinA; ?> - Max $<?php print $siteMaxA; ?>");
                } else {



                  if (plan == 'LEVEL2' && parseInt(amount) < <?php print $siteMinB; ?>) {
                    sweetUnpre("Error! `<?php print $planB; ?> Plan` Min $<?php print $siteMinB; ?> - Max $<?php print $siteMaxB; ?>");
                  } else {



                    if (plan == 'LEVEL3' && parseInt(amount) < <?php print $siteMinC; ?>) {
                      sweetUnpre("Error! `<?php print $planC; ?> Plan` Min $<?php print $siteMinC; ?> - Max $<?php print $siteMaxC; ?>");
                    } else {

                      if (plan == 'LEVEL4' && parseInt(amount) < <?php print $siteMinD; ?>) {
                        sweetUnpre("Error! `<?php print $planD; ?> Plan` Min $<?php print $siteMinD; ?> - Max $<?php print $siteMaxD; ?>");
                      } else {


                        if (plan == 'LEVEL5' && parseInt(amount) < <?php print $siteMinE; ?>) {
                          sweetUnpre("Error! `<?php print $planE; ?> Plan` Min $<?php print $siteMinE; ?> - Max $<?php print $siteMaxE; ?>");
                        } else {
                          $('#sub').click();
                        }
                      }
                    }
                  }
                }
              } //end
            } //end starter
          } //else empty
        </script>