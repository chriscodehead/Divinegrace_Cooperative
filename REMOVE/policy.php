<?php require_once('include.php');
$title = $siteName.' | Privacy Policy';
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
    <main data-title="blog-find">
        <!-- section content begin -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <p class="text-muted mb-0 blog-find-text">Last Updated (<?php print $siteYear;?>)</p>
                        <h2 class="fw-bold blog-find-heading mb-3"><i class="fas fa-tags fa-xs me-1 position-relative" style="top: 4px;"></i>Privacy Policy</h2>
                        <div class="blog-find">
                            <p><h3>Introduction:</h3>
                            At <?php print $siteName;?>, we understand the importance of protecting our clients' personal and financial information. Our Privacy Policy outlines how we collect, use, and protect your information to ensure the privacy and security of our clients.
                            </p><p>
                            <h3>Information Collection:</h3>
                            We collect personal information such as your name, address, phone number, email address, and financial information such as bank account and credit card information when you create an account with us. This information is necessary to provide you with the best possible service and ensure the security of your funds.
                            </p><p>
                            <h3>Information Use:</h3>
                            The information we collect is used to provide you with our forex trading services, to process transactions, and to keep you informed about our products and services. We may also use your information to improve our services and to detect and prevent fraud.
                            </p><p>

                            <h3>Information Sharing:</h3>
                            We will not share your personal information with third parties except as required by law or to protect our rights and interests. In cases where we need to share your information with third parties, we will only do so with your explicit consent.
                            </p><p>

                            <h3>Data Security:</h3>
                            We take the security of your personal information seriously and use appropriate measures to protect it from unauthorized access, use, disclosure, alteration, or destruction. This includes secure servers, firewalls, and encryption.
                            </p><p>

                            <h3>Accessing Your Information:</h3>
                            You have the right to access and correct your personal information at any time. You can do this by logging into your account or by contacting us directly.
                            </p><p>

                            <h3>Changes to This Policy:</h3>
                            We may update this Privacy Policy from time to time. If we make any material changes to this policy, we will notify you by posting the updated policy on our website.
                            </p><p>

                            <h3>Contact Us:</h3>
                            If you have any questions or concerns about our Privacy Policy, please contact us at <?php print $siteEmail;?>.
                            </p><p>

                            <h3>Effective Date:</h3>
                            This Privacy Policy was last updated on <?php print $siteYear;?>.
                            </p><p>

                            <h3>Acceptance:</h3>
                            By using our services, you agree to our Privacy Policy and the collection, use, and sharing of your personal information as outlined in this policy.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- section content end -->
    </main>
    <!-- footer begin -->
    <?php require_once('footer.php');?>