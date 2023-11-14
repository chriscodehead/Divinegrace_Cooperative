<?php require_once('include.php');
$title = $siteName.' | Refund Policy';
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
                        <h2 class="fw-bold blog-find-heading mb-3"><i class="fas fa-tags fa-xs me-1 position-relative" style="top: 4px;"></i>Refund Policy</h2>
                        <div class="blog-find">
                            <p>
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