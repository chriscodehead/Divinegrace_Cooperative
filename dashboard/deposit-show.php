<?php
require_once('include.php');
$title = 'Deposit | ' . $siteName;
$desc = '';
if (isset($_GET['id']) && !empty($_GET['id'])) {
  $amount = $_GET['id'];
} else {
  header("location:deposit");
}
//$sqli->GetTopup($pid, 'amount'); 
$msg = '';
if (isset($_POST['submit'])) {
  $payment_id = $bassic->randGenerator();
  $email = $sqli->getEmail($_SESSION['user_code']);
  $amount = $amount;
  $payment_proof = '';
  $bank_id = @$_POST['coin'];
  $status = 'pending';
  $date_pay = $bassic->getDate();

  if (!empty($amount)) {

    $fieldup = array('id', 'payment_id', 'email', 'amount', 'payment_proof', 'bank_id', 'status', 'date_pay');
    $valueup = array(null, $payment_id, $email, $amount, $payment_proof, $bank_id, $status, $date_pay);
    if ($cal->insertDataB($top_up, $fieldup, $valueup)) {

      $name = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'first_name') . ' ' . $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'last_name');

      $siteWhatsApp = 'https://api.whatsapp.com/send?phone=' . $siteWhatsApp . '&text=Hi ' . $siteName . ' Support, My name is ' . $name . '. I just made payment of N' . $amount . ' to your platform account number, can you please confrim the transaction with ID: ' . $payment_id . '. I will be sending the payment screenshot shortly. Thank you';

      header("location:" . $siteWhatsApp);
    } else {
      $msg = 'Unexpected error occured!';
    }
  } else {
    $msg = 'Fill all necessary fields!';
  }
}



require_once('head.php'); ?>

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

                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                  <div class="nk-block-head-content text-center">
                    <h2 class="nk-block-title fw-normal">Top Up Account</h2>
                    <div class="nk-block-des">
                      <div class="coin-info">
                        <span style="font-size: 30px; color: orange;" class="coin-name">Balance: <?php print $base_currency; ?><?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance'), 2); ?> </span>

                      </div>
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

                <form enctype="multipart/form-data" method="post" action="">
                  <div class="nk-block">
                    <div class="card card-bordered">
                      <div class="nk-kycfm">



                        <div class="nk-kycfm-content">
                          <div class="">
                            <h5 class="title">Amount: <?php print $base_currency; ?><?php print $amount; ?></h5>
                          </div>
                        </div>

                        <div class="nk-kycfm-content">
                          <div class="nk-kycfm-note">
                            <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
                            <p>Send payment to any of the bank details below and send payment proof to the admin for confirmation.</p>
                          </div>

                          <ul class="nk-kycfm-control-list g-3">
                            <?php for ($a = 1; $a <= 5; $a++) { ?>
                              <?php if ($sqli->getPaymentAccount('show' . $a) == 'no') {
                              } else { ?>
                                <li class="nk-kycfm-control-item col-12">
                                  <input value="<?php print $a; ?>" class="nk-kycfm-control" type="radio" name="coin" id="coin<?php print $a; ?>" data-title="coin<?php print $a; ?>" <?php if ($a == 1) print 'checked'; ?>>
                                  <label class="nk-kycfm-label" for="coin<?php print $a; ?>">
                                    <span class="nk-kycfm-label-icon">
                                      <div class="label-icon">
                                        <em class="icon ni ni-slack-hash x4"></em>
                                      </div>
                                    </span>
                                    <span class="nk-kycfm-label-text" style="font-size: 16px;">
                                      <span style="color: ;"> <?php print $sqli->getPaymentAccount('name' . $a); ?></span> <br />

                                      <span style="color: blue; font-size: 27px;"> <?php print $sqli->getPaymentAccount('number' . $a); ?></span> <br />

                                      <span style="color: ;"> <?php print $sqli->getPaymentAccount('bank' . $a); ?> </span>

                                    </span>
                                  </label>
                                </li>
                            <?php }
                            } ?>
                          </ul>


                        </div>

                        <div class="nk-kycfm-footer">
                          <div class="nk-kycfm-action pt-2">
                            <h4> I have made payments?</h4>

                            <button name="submit" type="submit" class="btn btn-lg btn-primary theme-button btn btn-raised btn-success waves-effect">Comfirm You Made Payments</button>

                          </div>
                        </div>

                        <div class="nk-kycfm-content">
                          <h6 class="title mt-4">To avoid delays when verifying your payments, Please make sure:</h6>
                          <ul class="list list-sm list-checked">
                            <li>You send proof of payment to admin.</li>
                            <li>You pay the exact amount to the bank details displayed.</li>
                          </ul>
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