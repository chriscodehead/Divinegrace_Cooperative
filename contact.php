<?php
require_once('include.php');
$title = 'Contact Us - ' . $siteName;
require_once('head.php');
$active3 = 'active'; ?>

<body>

 <!-- Preloader Area Start -->
 <!-- <div class="preloader-area position-fixed text-center bg1" id="preloader">
        <div class="cube-wrapper">
            <div class="cube-folding">
                <span class="leaf1"></span>
                <span class="leaf2"></span>
                <span class="leaf3"></span>
                <span class="leaf4"></span>
            </div>
            <span class="loading" data-name="Loading">Rible</span>
        </div>
    </div> -->
 <!-- Preloader Area End -->

 <!-- Start Navbar Area -->
 <?php require_once('header.php'); ?>
 <!-- End Navbar Area -->

 <!-- About Hero Warp Start -->
 <div class="inner-hero-warp">
  <div class="container">
   <div class="inner-hero-content">
    <h1>Connect With Us</h1>
    <p>we are always available 24/7 feel free to send us a message.</p>
   </div>
  </div>
 </div>
 <!-- About Hero Warp End -->

 <!-- Contact Warp Start -->
 <div class="contact-warp ptb-100">
  <div class="container">
   <div class="row">
    <div class="col-lg-6">
     <div class="contact-content single-section">
      <span class="features-title">Contact Us</span>
      <h2>Get In Touch With Us</h2>
      <p>24/7 support you can trust.</p>
      <div class="contact-widget d-flex align-items-center ">
       <div class="icon-style">
        <div class="icon">
         <img src="assets/images/svgs/contact1.svg" class="contact1" alt="contact1">
        </div>
       </div>
       <div class="content">
        <h5>Connect With Email</h5>
        <a href="mailto:<?php print $siteEmail; ?>"><span class="__cf_email__"><?php print $siteEmail; ?></span></a>
       </div>
      </div>
      <div class="contact-widget d-flex align-items-center ">
       <div class="icon-style">
        <div class="icon">
         <img src="assets/images/svgs/contact2.svg" class="contact1" alt="contact1">
        </div>
       </div>
       <div class="content">
        <h5>Connect With Call</h5>
        <a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a>
       </div>
      </div>
      <div class="contact-widget d-flex align-items-center ">
       <div class="icon-style">
        <div class="icon">
         <img src="assets/images/svgs/contact3.svg" class="contact1" alt="contact1">
        </div>
       </div>
       <div class="content">
        <h5>Connect With Locations</h5>
        <span><?php print $siteAddress; ?></span>
       </div>
      </div>
     </div>
    </div>
    <div class="col-lg-6">
     <div class="massage-warp">
      <!-- <h3>Send A Message</h3> -->
      <form>
       <div class="row">
        <div class="col-lg-12">
         <div class="input-box">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="First Name">
         </div>
        </div>
        <div class="col-lg-6">
         <div class="input-box">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
         </div>
        </div>
        <div class="col-lg-6">
         <div class="input-box">
          <label for="exampleFormControlInput1" class="form-label">Phone</label>
          <input type="terl" class="form-control" id="phone" name="phone" placeholder="Phone">
         </div>
        </div>
        <div class="col-lg-12">
         <div class="input-box">
          <label for="exampleFormControlInput1" class="form-label">Your Message</label>
          <textarea type="text" id="message" name="message" class="form-control" placeholder="Type Your Text Here......."></textarea>
         </div>
        </div>
        <div class="col-lg-6">

         <button class="default-btn heading-color" type="button" id="n" onClick="contatMail();">Send Message</button>

        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- Contact Warp End -->


 <?php require_once('footer.php'); ?>
 <script type="text/javascript">
  $('#n').css("cursor", "pointer");

  function contatMail() {
   /* $('i#sp5').attr("class", "fa fa-spinner fa-spin"); */
   var hr = new XMLHttpRequest();
   var url = "reg_process.php";
   var cotactmail = document.getElementById('email').value;
   var name = document.getElementById('name').value;
   var phone = document.getElementById('phone').value;
   var message = document.getElementById('message').value;
   var vars = "cotactmail=" + cotactmail + "&name=" + name + "&message=" + message + "&phone=" + phone;
   if (cotactmail == "" || name == "" || message == "") {
    sweetUnpre("Please fill all necessary fields!");
    $('i#sp5').attr("class", "");
   } else {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(cotactmail)) {
     sweetUnpre('Please use a valid email address!');
     $('i#sp5').attr("class", "");
    } else {

     hr.open("POST", url, true);
     hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     // Access the onreadystatechange event for the XMLHttpRequest object
     hr.onreadystatechange = function() {
      //  console.log(hr);
      if (hr.readyState == 4 && hr.status == 200) {
       var return_data = hr.responseText;
       sweetUnpre(return_data);
       $('i#sp5').attr("class", "");
       //setTimeout(refreshPage,2000);
       document.getElementById('email').value = "";
       document.getElementById('name').value = "";
       document.getElementById('message').value = "";
      }
     }
     hr.send(vars); // Actually execute the request
    } //email
    sweetUnpre('processing...');
   } //else empty
  }
 </script>