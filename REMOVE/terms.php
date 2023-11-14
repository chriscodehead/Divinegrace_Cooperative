<?php require_once('include.php');
$title = $siteName.' | Terms and Condition';
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
                        <h2 class="fw-bold blog-find-heading mb-3"><i class="fas fa-tags fa-xs me-1 position-relative" style="top: 4px;"></i>User Agreement</h2>
                        <div class="blog-find">
                            <p><h3>Introduction:</h3> These terms and conditions govern the relationship between <?php print $siteName;?> Forex Trading (hereinafter referred to as "Company") and the client(s) who trade with the company (hereinafter referred to as "Client"). By trading with the company, the client agrees to be bound by these terms and conditions.
                            </p><p>
                            <h3>Client Representations:</h3> The client represents and warrants to the company that the client is of legal age and has the legal capacity to enter into these terms and conditions. The client further represents and warrants to the company that the client will not use the services provided by the company for any illegal purpose.
                            </p><p>
                            <h3>Trading:</h3> The client acknowledges that trading in the forex market involves a high degree of risk and may result in the loss of all of the client's investment. The company makes no representations or warranties of any kind, express or implied, regarding the profitability or likelihood of success of any trade.
                            </p><p>
                            <h3>Account Management:</h3> The client acknowledges that the client is responsible for managing the client's own account and for making all trading decisions. The company will not be responsible for any loss incurred by the client as a result of the client's own trading decisions.
                            </p><p>
                            <h3>Confidentiality:</h3> The client acknowledges that the client is aware that the company may have access to confidential information about the client and agrees to keep such information confidential.
                            </p><p>
                            <h3>Limitation of Liability:</h3> The company will not be liable for any damages or losses arising from the client's use of the services provided by the company, including, but not limited to, any losses incurred as a result of the client's own trading decisions.
                            </p><p>
                            <h3>Governing Law:</h3> These terms and conditions shall be governed by and construed in accordance with the laws of the jurisdiction in which the company is located.
                            </p><p>
                            <h3>Amendment:</h3> The company may, in its sole discretion, modify these terms and conditions at any time without prior notice to the client. The client's continued use of the services provided by the company will be deemed to be acceptance of the modified terms and conditions.
                            </p><p>
                            <h3>Termination:</h3> Either the company or the client may terminate the client's use of the services provided by the company at any time and for any reason.
                            </p><p>
                            <h3>Entire Agreement:</h3> These terms and conditions constitute the entire agreement between the client and the company and supersede all prior agreements and understandings between the parties.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- section content end -->
    </main>
    <!-- footer begin -->
    <?php require_once('footer.php');?>