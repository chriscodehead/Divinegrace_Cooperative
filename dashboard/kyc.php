<?php
require_once('include.php');
$title = 'KYC | ' . $siteName;
$desc = '';
require_once('head.php');

if (isset($_POST['verify'])) {
 $email = $sqli->getEmail($_SESSION['user_code']);
 $pic_name  = $_FILES['image']['name'];
 $pic_tmp = $_FILES['image']['tmp_name'];
 $pic_size = $_FILES['image']['size'];
 $type = $_POST['type'];
 $gen_Num = $bassic->randGenerator();
 $extension_Name = $bassic->extentionName($pic_name);
 $new_name = $gen_Num . uniqid() . $extension_Name;
 $path = '../photo/' . $new_name;
 $picvalidation = $bassic->picVlidator($pic_name, $pic_size);

 if (!empty($pic_name) && !empty($type)) {
  if (empty($picvalidation)) {
   $upl = $bassic->uploadImage($pic_tmp, $path);
   if (empty($upl)) {
    $fields = array('id_type', 'id_document', 'id_document_status');
    $values = array($type, $new_name, 'no');
    $update = $cal->update($user_tb, $fields, $values, 'email', $email);

    if ($update) {
     $msg = 'Your document update was successful';
    } else {
     print 'Error! Please try again.';
    }
   } else {
    $msg =  $upl;
   }
  } else {
   $msg =  $picvalidation;
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
        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
         <div class="nk-block-head-content text-center">
          <h2 class="nk-block-title fw-normal">KYC</h2>
          <div class="nk-block-des">
           <p>Ensure you upload your KYC information.</p>
          </div>
         </div>
        </div>
        <div class="nk-block">
         <div class="card card-bordered">
          <div class="nk-kycfm">
           <center>
            <div class="nk-kycfm-head">
             <a target="_blank" href="<?php print '../photo/' . $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'id_document'); ?>"><img id="btn" style="width:130px; height:130px; margin-right: 20px;" src="<?php print '../photo/' . $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'id_document'); ?>" alt="" class="avatar-lg rounded-circle img-thumbnail"></a>

             <?php $veri = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'id_document_status');
             if ($veri == 'Verified') {
             ?>
              <div style="display:inline-block; font-weight:bold; border-radius: 10%; padding: 5px 10px; background-color:orange; color:white !important; font-size:11px;">
               Verified
              </div>

             <?php } else { ?>

              <div style="display:inline-block; font-weight:bold; border-radius: 10%; padding: 5px 10px; background-color:#eee; color:#000 !important; font-size:11px;">
               Not Verified
              </div>
             <?php } ?>

            </div>
           </center>
           <div class="nk-kycfm-head">
            <?php $veri = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'id_document_status');
            if ($veri == 'Verified') {
            } else { ?>
             <div class="nk-kycfm-count">01</div>
             <div class="nk-kycfm-title">
              <h5 class="title">Upload Verification Document</h5>

             </div>
            <?php } ?>
           </div>


           <?php $veri = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'id_document_status');
           if ($veri == 'Verified') { ?>

            <!-- <a target="_blank" href="../photo/<?php print $cal->selectFrmDB($user_tb, 'id_document', 'email', $sqli->getEmail($_SESSION['user_code'])); ?>"><img src="../photo/<?php print $cal->selectFrmDB($user_tb, 'id_document', 'email', $sqli->getEmail($_SESSION['user_code'])); ?>" width="250" /></a> -->

           <?php } else { ?>

            <form method="post" enctype="multipart/form-data">
             <div class="nk-kycfm-content">

              <div class="row g-4">

               <div class="col-lg-12">
                <?php if (!empty($msg)) { ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php print @$msg; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
                <?php } ?>
               </div>

               <div class="col-md-12">
                <div class="form-group">
                 <div class="form-label-group">
                  <label class="form-label">Username <span class="text-danger">*</span></label>
                 </div>
                 <div class="form-control-group">
                  <select name="type" id="type" class="profile-select form-control">
                   <option value="Drivers License">Drivers License</option>
                   <option value="International Passport">International Passport</option>
                   <option value="National ID">National ID</option>
                  </select>
                 </div>
                </div>
               </div>

               <div class="col-md-12">
                <div class="form-group">
                 <div class="form-label-group">
                  <label class="form-label">Select Your ID <span class="text-danger">*</span></label>
                 </div>
                 <div class="form-control-group">
                  <input type="file" name="image" accept="image/*" value="" type="text" class="form-control form-control-lg">
                 </div>
                </div>
               </div>

              </div>

             </div>

             <div class="nk-kycfm-footer">
              <div class="nk-kycfm-action pt-2">
               <button id="btn" type="submit" name="verify" class="btn btn-lg btn-primary">Update your kyc <i id="sp2" class="coin ni ni-send"></i></button>
              </div>
             </div>
            </form>

           <?php } ?>

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
     $(document).ready(function() {
      $('#btn').css("cursor", "pointer");
     });
    </script>