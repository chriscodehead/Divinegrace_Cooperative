<?php
require_once('include.php');
$title = 'Deposit | ' . $siteName;
$desc = '';
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

           </div>
          </div>
         </div>
        </div>


        <form enctype="multipart/form-data" method="post" action="deposit_btc.php">
         <div class="nk-block">
          <div class="card card-bordered">
           <div class="nk-kycfm">


            <div class="nk-kycfm-content">
             <h6 class="title mt-4">To avoid delays when verifying your payments, Please make sure:</h6>
             <ul class="list list-sm list-checked">
              <li>You upload proof of payment.</li>
              <li>You select the right bank you are making payment too.</li>
             </ul>
            </div>

            <div class="nk-kycfm-footer">
             <div class="nk-kycfm-action pt-2">


              <button name="submit" type="button" class="btn btn-lg btn-primary theme-button btn btn-raised btn-success waves-effect">Sent Payment Proof to </button>

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