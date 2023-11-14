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
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-9 text-center">
                  <h1 class="fw-bold">Putting our clients first <span class="text-highlight">since 2018</span></h1>
                    <p class="lead text-muted"><?php print $siteName;?> forex exchange is a global arbitrage broker that its activities revolves around buying and selling of crypto assets from the real crypto market exchangers using a robotic system. 
                    <br /><br />
                    As a premium content crypto currency trading company,  we have created a comprehensive group of tools that allows you to estimate the intrinsic value of investments.
                    </p>
                </div>
                <div class="col-12 mt-3">
                    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 gy-2 gy-md-2 gx-0 gx-md-2 gx-lg-4">
                        <div class="col d-flex align-items-start">
                            <div class="icon-wrap bg-info flex-shrink-0 me-2">
                                <i class="fas fa-leaf fa-lg text-white"></i>
                            </div>
                            <div>
                                <h3 class="h4 fw-bold">Philosophy</h3>
                                <p>Embracing the fundamental and technical aspects of the forex market and continuously seeking knowledge to adapt to market changes.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <div class="icon-wrap bg-info flex-shrink-0 me-2">
                                <i class="fas fa-hourglass-end fa-lg text-white"></i>
                            </div>
                            <div>
                                <h3 class="h4 fw-bold">History</h3>
                                <p>Founded in 2018, <?php print $siteName;?> has been at the forefront of the foreign exchange market for over 5+ years. Our mission is to provide individuals and businesses with a reliable and efficient platform to trade currency pairs from all over the world. With a team of experienced traders and a commitment to using the latest technology, we have become one of the leading players in the forex industry. Our clients trust us for our transparent and fair trading practices, and we strive to maintain that trust every day by continuously improving our services.</p>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <div class="icon-wrap bg-info flex-shrink-0 me-2">
                                <i class="fas fa-flag fa-lg text-white"></i>
                            </div>
                            <div>
                                <h3 class="h4 fw-bold">Culture</h3>
                                <p>At <?php print $siteName;?>, our culture is built on the core values of collaboration, integrity, and innovation. We believe that by working together and leveraging each other's strengths, we can achieve great things. Our traders and staff are encouraged to share ideas and perspectives, fostering an environment of continuous learning and growth.
                                <br /><br />

                                Integrity is at the heart of everything we do, and we are committed to transparent and ethical trading practices. Our clients can trust us to always act in their best interests.
                                <br /><br />

                                Innovation is also a key part of our culture. We believe in constantly improving our technology and processes to provide our clients with the best possible experience. Whether it's through our state-of-the-art trading platform or our commitment to providing personalized support, we are always looking for ways to stay ahead of the curve.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section content end -->
    <!-- section content begin -->
    <section class="pt-2 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-white" style="background-image: url(img/blockit/in-team-background-1.png); background-repeat: no-repeat;">
                        <div class="card-body py-4">
                            <div class="row justify-content-center text-center mb-1">
                                <div class="col-md-10 col-lg-8">
                                    <h2 class="fw-bold">Our Leaders</h2>
                                    <p>We are a group of passionate, independent thinkers who never stop exploring new ways to improve trading for the self-directed investor.</p>
                                </div>
                            </div>
                            <div class="row row-cols-md-1 row-cols-lg-3 text-center gy-2 gy-md-3 gx-0 gx-md-3 gx-lg-5 mb-3">
                                <div class="col">
                                    <img class="mb-2" src="img/blockit/in-team-1.png" alt="image-team" width="200" height="200">
                                    <h5 class="fw-bold mb-1">Cynthia Dixon</h5>
                                    <span class="badge bg-secondary mb-2">Chief Executive Officer</span>
                                    <p></p>
                                    <!-- <div>
                                        <a class="color-facebook me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="color-twitter me-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="color-linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div> -->
                                </div>
                                <div class="col">
                                    <img class="mb-2" src="img/blockit/in-team-4.png" alt="image-team" width="200" height="200">
                                    <h5 class="fw-bold mb-1">Bryan Greene</h5>
                                    <span class="badge bg-secondary mb-2">Human Resources</span>
                                    <p></p>
                                    <!-- <div>
                                        <a class="color-behance me-2" href="#"><i class="fab fa-behance"></i></a>
                                        <a class="color-twitter me-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="color-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </div> -->
                                </div>
                                <div class="col">
                                    <img class="mb-2" src="img/blockit/in-team-2.png" alt="image-team" width="200" height="200">
                                    <h5 class="fw-bold mb-1">Arthur Parker</h5>
                                    <span class="badge bg-secondary mb-2">Executive Assistant</span>
                                    <p></p>
                                    <!-- <div>
                                        <a class="color-dribbble me-2" href="#"><i class="fab fa-dribbble"></i></a>
                                        <a class="color-twitter me-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="color-pinterest" href="#"><i class="fab fa-pinterest"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section content end -->
    <!-- section content begin -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="row row-cols-1 row-cols-lg-2 align-items-center gy-3">
                        <div class="col text-md-center text-lg-start">
                            <h4 class="fw-bold text-muted mb-1">Number speaks</h4>
                            <h1 class="fw-bold">We always ready<br>for a challenge.</h1>
                            <a href="accounts/register" class="btn btn-info mt-2">Get Started<i class="fas fa-angle-right fa-xs ms-1"></i></a>
                        </div>
                        <div class="col">
                            <div class="row align-items-start gx-0 mb-2 mb-md-4">
                                <div class="col-12 col-md-3 text-md-end border-bottom border-info">
                                    <h1 class="fw-bold text-info">
                                        <span class="count" data-counter-end="410">0</span>
                                    </h1>
                                </div>
                                <div class="col-12 col-md-9 mt-2 mt-md-0 ps-md-4">
                                    <h5 class="fw-bold">Trading instruments</h5>
                                    <p>Share trading skills with millions of investors.</p>
                                </div>
                            </div>
                            <div class="row align-items-start gx-0">
                                <div class="col-12 col-md-3 text-md-end border-bottom border-info">
                                    <h1 class="fw-bold text-info">
                                        <span class="count" data-counter-end="27">0</span>
                                    </h1>
                                </div>
                                <div class="col-12 col-md-9 mt-2 mt-md-0 ps-md-4">
                                    <h5 class="fw-bold">Countries covered</h5>
                                    <p>Includes trading of international stock market indices such as the United States, Europe, Asia, Australia, etc;.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section content end -->
    </main>
    <!-- footer begin -->
    <?php require_once('footer.php');?>