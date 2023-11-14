<?php
require_once('include.php');

if (isset($_POST['sub'])) {
 $name = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'first_name') . ' ' . $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'last_name');
 $account_name = mysqli_real_escape_string($link, $_POST['account_name']);
 $account_number = mysqli_real_escape_string($link, $_POST['account_number']);
 $bank_name = mysqli_real_escape_string($link, $_POST['bank_name']);
 if (!empty($account_name)) {
  $feilds = array('account_name', 'account_number', 'bank_name');
  $value = array($account_name, $account_number, $bank_name);
  $msg = $cal->update($user_tb, $feilds, $value, 'email', $sqli->getEmail($_SESSION['user_code']));
  $email_call->updateBankDetails($name, $sqli->getEmail($_SESSION['user_code']));
 } else {
  $msg =  "Please enter a valid bank details!";
 }
}

$title = 'Add Account Details | ' . $siteName;
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
          <h2 class="nk-block-title fw-normal">Add Payment Details</h2>
          <div class="nk-block-des">
           <p>Please provide your Account Details in the field provided below. </p>
          </div>
         </div>
        </div>
        <?php if (!empty($msg)) { ?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php print @$msg; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
        <?php } ?>
        <form enctype="multipart/form-data" action="" method="post">
         <div class="nk-block">
          <div class="card card-bordered">
           <div class="nk-kycfm">

            <div class="nk-kycfm-head">
             <div class="nk-kycfm-count">1</div>
             <div class="nk-kycfm-title">
              <h5 class="title">Payment Details</h5>
              <p class="sub-title"></p>
             </div>
            </div>

            <div class="nk-kycfm-content">
             <div class="row g-4">
              <div class="col-md-12">
               <div class="form-group">
                <div class="form-label-group">
                 <label class="form-label">Enter Account Name <span class="text-danger">*</span></label>
                </div>
                <div class="form-control-group">
                 <input value="<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'account_name'); ?>" name="account_name" id="account_name" type="text" class="form-control form-control-lg">
                </div>
               </div>
              </div>
             </div>
            </div>

            <div class="nk-kycfm-content">
             <div class="row g-4">
              <div class="col-md-12">
               <div class="form-group">
                <div class="form-label-group">
                 <label class="form-label">Enter Account Number <span class="text-danger">*</span></label>
                </div>
                <div class="form-control-group">
                 <input value="<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'account_number'); ?>" name="account_number" id="account_number" type="text" class="form-control form-control-lg">
                </div>
               </div>
              </div>
             </div>
            </div>


            <div class="nk-kycfm-content">
             <div class="row g-4">
              <div class="col-md-12">
               <div class="form-group">
                <div class="form-label-group">
                 <label class="form-label">Enter Bank Name <span class="text-danger">*</span></label>
                </div>
                <div class="form-control-group">
                 <input value="<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'bank_name'); ?>" name="bank_name" id="bank_name" type="text" class="form-control form-control-lg">
                </div>
               </div>
              </div>
             </div>
            </div>

            <div class="nk-kycfm-footer">
             <div class="nk-kycfm-action pt-2">
              <button type="submit" name="sub" id="sub" class="btn btn-lg btn-primary">Update Bank Details</button>
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
    <!-- content @e -->
    <?php require_once('footer.php'); ?>