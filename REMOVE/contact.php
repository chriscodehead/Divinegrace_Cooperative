<?php require_once('include.php');
$title = $siteName.' | About';
require_once('head.php');
?>

<body>
    <!-- page loader begin -->
    <div class="page-loader w-100 h-100 bg-white d-flex justify-content-center align-items-center position-fixed overflow-hidden">
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
    </div>
    <!-- page loader end -->
    <!-- header begin -->
    <?php require_once('header.php');?>
    <!-- breadcrumb content begin -->
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h6 class="d-none">Breadcrumb</h6>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb content end -->
    <!-- header end -->
    <main>
    <!-- section content begin -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <iframe class="w-100 bg-light rounded-1 gmap h-300 h-md-400 h-lg-500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10600.5248164368!2d144.95966577016594!3d-37.81707816290683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1645280096951!5m2!1sen!2sid">
                    </iframe> -->
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-11 col-lg-8 mt-2">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3">
                            <div class="col text-center">
                                <h5 class="fw-bold mb-1">Address</h5>
                                <p class="text-muted"><?php print $siteAddress;?></p>
                            </div>
                            <div class="col text-center">
                                <h5 class="fw-bold mb-1">Email</h5>
                                <p class="text-muted"><?php print $siteEmail;?><br>for public inquiries</p>
                            </div>
                            <div class="col text-center">
                                <h5 class="fw-bold mb-1">Call</h5>
                                <p class="text-muted"><?php print $sitePhone;?><br>Mon - Fri, 9am - 5pm</p>
                            </div>
                        </div>
                        <hr class="my-2">
                        <h1 class="pt-2 text-center">Have a <span class="text-highlight">questions?</span></h1>
                      <p class="lead text-muted text-center">Let's get in touch</p>
                        <form id="contact-form" class="row g-1 mt-2" novalidate="">
                            <div class="col-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user fa-xs text-muted"></i></span>
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Full name" aria-label="Full name" required="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope fa-xs text-muted"></i></span>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Email address" aria-label="Email address" required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-pen fa-xs text-muted"></i></span>
                                    <input class="form-control" id="subject" name="subject" type="text" placeholder="Subject" aria-label="Subject" required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="6" required=""></textarea>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-info" type="button" id="n" onClick="contatMail();">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- success notification begin -->
        <div class="position-fixed bottom-0 end-0 p-4" style="z-index: 2">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body text-primary">
                    <i class="fas fa-check-circle me-1"></i>Your message has been sent successfully. Thank you!
                </div>
            </div>
        </div>
        <!-- success notification end -->
    </section>
    <!-- section content end -->
    </main>
    <!-- footer begin -->
    <?php require_once('footer.php');?>
     <script type="text/javascript">
$('#n').css("cursor", "pointer");

function contatMail() {
    /* $('i#sp5').attr("class", "fa fa-spinner fa-spin"); */
    var hr = new XMLHttpRequest();
    var url = "reg_process.php";
    var cotactmail = document.getElementById('email').value;
    var name = document.getElementById('name').value;
    var message = document.getElementById('message').value;
    var vars = "cotactmail=" + cotactmail + "&name=" + name + "&message=" + message;
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


