<?php
require_once('include.php');
$title = 'Savings Top Up | ' . $siteName;
$desc = '';

$msg = '';
if (isset($_GET['id'])) {
 $saving_id = $_GET['id'];
} else {
 header("location:my-savings");
}
if (isset($_POST['submit'])) {
 $payment_id = $bassic->randGenerator();
 $email = $sqli->getEmail($_SESSION['user_code']);
 $amount = $_POST['amount'];
 $payment_proof = '';
 $bank_id = '';
 $status = 'confirmed';
 $type = 'Savings Top-Up';
 $date_pay = $bassic->getDate();
 $savings_account_balance = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'savings_account');
 $available_balance = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance');
 $savings_balance = $sqli->getMySavings($saving_id, 'actual_balance');

 if (!empty($amount)) {
  if ($available_balance > $amount) {

   $new_savings_balance = $savings_balance + $amount;
   $fields = array('amount', 'actual_balance');
   $values = array($new_savings_balance, $new_savings_balance);
   $cal->update($my_savings, $fields, $values, 'saving_id', $saving_id);

   $new_savings_account_balance = $savings_account_balance + $amount;
   $fields = array('savings_account');
   $values = array($new_savings_account_balance);
   $cal->update($user_tb, $fields, $values, 'email', $sqli->getEmail($_SESSION['user_code']));

   $new_account_balance = $available_balance - $amount;
   $fields = array('main_account_balance');
   $values = array($new_account_balance);
   $cal->update($user_tb, $fields, $values, 'email', $sqli->getEmail($_SESSION['user_code']));

   $fieldup = array('id', 'payment_id', 'email', 'amount', 'payment_proof', 'bank_id', 'status', 'date_pay', 'type');
   $valueup = array(null, $payment_id, $email, $amount, $payment_proof, $bank_id, $status, $date_pay, $type);

   if ($cal->insertDataB($top_up, $fieldup, $valueup)) {
    $msg = 'Saviings top up was successful!';
   } else {
    $msg = 'Unexpected error occured!';
   }
  } else {
   $msg = 'You do not have enough balance to carry out this transaction!';
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
        <!-- <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">

                                        <li class="nav-item">
                                            <a class="nav-link" href="make-investment">Invest</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="withdraw">Withdraw</a>
                                        </li>

                                    </ul>
                                </div> -->
        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
         <div class="nk-block-head-content text-center">
          <h2 class="nk-block-title fw-normal">Top Up Account</h2>
          <div class="nk-block-des">
           <div class="coin-info">
            <span style="font-size: 12px; color: orange;">Account Balance: <?php print $base_currency; ?><?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance'), 2); ?> </span> |

            <span style="font-size: 12px; color: orange;">Savings Balance: <?php print $base_currency; ?> <?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'savings_account'), 2); ?></span>

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
              <h5 class="title">Amount</h5>
              <input type="text" class="form-control form-control-lg form-control-number" id="amount" name="amount" placeholder="1000">
              <span>Old Balance: <?php print $base_currency; ?><?php print $sqli->getMySavings($saving_id, 'actual_balance'); ?></span>
             </div>
            </div>

            <div class="nk-kycfm-footer">
             <div class="nk-kycfm-action pt-2">


              <button name="submit" type="submit" class="btn btn-lg btn-primary theme-button btn btn-raised btn-success waves-effect">Make Payment</button>

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