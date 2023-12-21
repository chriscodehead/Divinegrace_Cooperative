<nav class="navbar navbar-expand-lg top-navbar" id="navbar">
 <div class="container">
  <a class="navbar-brand" href="./">
   <img src="img/logo.png" width="150px" class="navbar-logo" alt="logo">
  </a>
  <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
   <span class="burger-menu">
    <span class="top-bar"></span>
    <span class="middle-bar"></span>
    <span class="bottom-bar"></span>
   </span>
  </a>
  <div class="collapse navbar-collapse">
   <ul class="navbar-nav mx-auto style2">

    <li class="nav-item">
     <a href="./" class="nav-link <?php print $active1; ?>">
      Home
     </a>
    </li>

    <li class="nav-item">
    <li class="nav-item">
     <a href="about" class="nav-link <?php print $active2; ?>">About <span>Us</span></a>
    </li>
    </li>

    <li class="nav-item">
    <li class="nav-item">
     <a href="accounts/register" class="nav-link">Register</a>
    </li>
    </li>

    <li class="nav-item">
    <li class="nav-item">
     <a href="accounts/login" class="nav-link">Login </a>
    </li>
    </li>

    <li class="nav-item">
     <a href="contact" class="nav-link <?php print $active3; ?>">Contact
      <span>Us</span> </a>
    </li>
   </ul>

   <div class="others-option d-flex align-items-center">
    <div class="option-item">
     <a href="contact" class="default-btn home-one-main">Get In Touch</a>
    </div>
   </div>
  </div>
 </div>
</nav>


<!-- Start Mobile Device Navbar Area -->
<div class="responsive-navbar offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
 <div class="offcanvas-header">
  <a href="./" class="logo d-inline-block">
   <img src="img/logo.png" width="150px" alt="logo">
  </a>
  <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
   <i class="ri-close-line"></i>
  </button>
 </div>
 <div class="offcanvas-body">
  <div class="accordion" id="navbarAccordion">

   <div class="accordion-item">
    <a class="accordion-button without-icon" href="./">
     Home
    </a>
   </div>

   <div class="accordion-item">
    <a class="accordion-button without-icon" href="contact">
     About Us
    </a>
   </div>

   <div class="accordion-item">
    <a class="accordion-button without-icon" href="accounts/register">
     Register
    </a>
   </div>

   <div class="accordion-item">
    <a class="accordion-button without-icon" href="accounts/login">
     Login
    </a>
   </div>

   <div class="accordion-item">
    <a class="accordion-button without-icon" href="contact">
     Contact Us
    </a>
   </div>

  </div>
  <div class="others-option d-flex align-items-center">
   <div class="option-item">
    <a href="contact" class="default-btn home-one-main">Get In Touch</a>
   </div>
  </div>
 </div>
</div>
<!-- End Mobile Device Navbar Area -->