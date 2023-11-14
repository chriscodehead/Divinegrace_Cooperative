<?php require_once('include.php');
$title = $siteName . ' - CYRPTO TRADING, FOREX EXCHANGE AND GLOBAL ABITRAGE BROKER';
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
    <?php require_once('header.php'); ?>
    <!-- header end -->
    <main>
        <!-- slideshow content begin -->
        <section>
            <div id="main-slideshow" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="carousel-caption d-flex align-items-center">
                            <div class="container">
                                <div class="row gx-md-5 align-items-md-center">
                                    <div class="col-md-8 col-xl-6 order-first">
                                        <h1 class="fw-bold display-5">Access a wealth of trading.</h1>
                                        <p class="lead mt-3 mb-4 d-none d-xl-block">Trade Crypto, Forex, commodities, indices, stocks and even more popular financial products.</p>
                                        <a href="accounts/register" class="btn btn-warning">Start trading<i class="fas fa-bolt ms-1"></i></a>
                                        <a href="accounts/login" class="btn btn-link ms-3 d-none d-xl-inline"><i class="fas fa-arrow-right"></i>Trade Now!</a>
                                    </div>
                                    <div class="col-md-4 col-xl-6 order-last">
                                        <div class="in-carousel-image">
                                            <img src="img/in-cirro-slide-1.jpg" alt="slide" width="856" height="570" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-flex align-items-center">
                            <div class="container">
                                <div class="row gx-md-5 align-items-md-center">
                                    <div class="col-md-8 col-xl-6 order-first">
                                        <h1 class="fw-bold display-5">Crypto Trading, Trade Forex, commodities, indices, stocks.</h1>
                                        <p class="lead mt-3 mb-4 d-none d-xl-block">Become one of the millions investors in the world and invest in global trending products.</p>
                                        <a href="accounts/register" class="btn btn-warning">Start trading<i class="fas fa-bolt ms-1"></i></a>
                                        <a href="accounts/login" class="btn btn-link ms-3 d-none d-xl-inline"><i class="fas fa-arrow-right"></i>Try Now!</a>
                                    </div>
                                    <div class="col-md-4 col-xl-6 order-last">
                                        <div class="in-carousel-image">
                                            <img src="img/in-cirro-slide-2.jpg" alt="slide" width="856" height="570" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-flex align-items-center">
                            <div class="container">
                                <div class="row gx-md-5 align-items-md-center">
                                    <div class="col-md-8 col-xl-6 order-first">
                                        <h1 class="fw-bold display-5">Trading environment with the best pricing.</h1>
                                        <p class="lead mt-3 mb-4 d-none d-xl-block">Trade Popular Assets Grasp Investment Opportunities.</p>
                                        <a href="accounts/register" class="btn btn-warning">Free Training Account<i class="fas fa-bolt ms-1"></i></a>
                                        <a href="accounts/login" class="btn btn-link ms-3 d-none d-xl-inline"><i class="fas fa-arrow-right"></i>Trade Now!</a>
                                    </div>
                                    <div class="col-md-4 col-xl-6 order-last">
                                        <div class="in-carousel-image">
                                            <img src="img/in-cirro-slide-3.jpg" alt="slide" width="856" height="570" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators"></div>
                <button class="carousel-control-prev" type="button" data-bs-target="#main-slideshow" data-bs-slide="prev"></button>
                <button class="carousel-control-next" type="button" data-bs-target="#main-slideshow" data-bs-slide="next"></button>
            </div>
        </section>

        <!-- section content begin -->
        <section class="py-5 in-cirro-2">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12">
                        <h1 class="mb-1">INVESTMENT PACKAGE</h1>
                        <p><?php print $siteName; ?> IS A UNIQUE DECENTRALIZED DIGITAL ARTIFICIAL INTELLIGENCE SYSTEM WITH 99% SECURED PROFITS RETURN ON DAILY BASIS.</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-2 g-md-2 gx-lg-2">
                    <div class="col col-lg-4 d-flex align-items-stretch">
                        <div class="card col-lg-12">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-1.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4"><?php print $planA; ?></h2>
                                <center>
                                    <h3><?php print $percentageA; ?>% <?php print $durationA; ?></h3>
                                </center>
                                <p>Min: $<?php print $siteMinA; ?></p>
                                <p>Max: $<?php print $siteMaxA; ?></p>
                                <p>R.O.I: <?php print $percentageA; ?>%</p>
                                <p>REF: <?php print $siteRefA; ?>%</p>
                                <a href="accounts/register"><button class="btn btn-success">Get Started!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 d-flex align-items-stretch">
                        <div class="card col-lg-12">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-2.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4"><?php print $planB; ?></h2>
                                <center>
                                    <h3><?php print $percentageB; ?>% <?php print $durationB; ?></h3>
                                </center>
                                <p>Min: $<?php print $siteMinB; ?></p>
                                <p>Max: $<?php print $siteMaxB; ?></p>
                                <p>R.O.I: <?php print $percentageB; ?>%</p>
                                <p>REF: <?php print $siteRefB; ?>%</p>
                                <a href="accounts/register"><button class="btn btn-success">Get Started!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 d-flex align-items-stretch">
                        <div class="card col-lg-12">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4"><?php print $planC; ?></h2>
                                <center>
                                    <h3><?php print $percentageC; ?>% <?php print $durationC; ?></h3>
                                </center>
                                <p>Min: $<?php print $siteMinC; ?></p>
                                <p>Max: $<?php print $siteMaxC; ?></p>
                                <p>R.O.I: <?php print $percentageC; ?>%</p>
                                <p>REF: <?php print $siteRefC; ?>%</p>
                                <a href="accounts/register"><button class="btn btn-success">Get Started!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-4 d-flex align-items-stretch">
                        <div class="card col-lg-12">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4"><?php print $planD; ?></h2>
                                <center>
                                    <h3><?php print $percentageD; ?>% <?php print $durationD; ?></h3>
                                </center>
                                <p>Min: $<?php print $siteMinD; ?></p>
                                <p>Max: $<?php print $siteMaxD; ?></p>
                                <p>R.O.I: <?php print $percentageD; ?>%</p>
                                <p>REF: <?php print $siteRefD; ?>%</p>
                                <a href="accounts/register"><button class="btn btn-success">Get Started!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-4 d-flex align-items-stretch">
                        <div class="card col-lg-12">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4"><?php print $planE; ?></h2>
                                <center>
                                    <h3><?php print $percentageE; ?>% <?php print $durationE; ?></h3>
                                </center>
                                <p>Min: $<?php print $siteMinE; ?></p>
                                <p>Max: $<?php print $siteMaxE; ?></p>
                                <p>R.O.I: <?php print $percentageE; ?>%</p>
                                <p>REF: <?php print $siteRefE; ?>%</p>
                                <a href="accounts/register"><button class="btn btn-success">Get Started!</button></a>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/in-cirro-2-icon-4.svg" alt="icon" width="46" height="46" />
                            <h2 class="h5 mt-4">Low Commissions</h2>
                            <p>We offer foreign exchange trading services with reduced fees or commissions compared to other forex brokers. This feature is attractive to cost-conscious traders as it can result in lower overall trading costs and potentially higher profits. By offering low commissions, we positioning ourself as a more affordable option for individual traders to participate in the forex market and benefit from currency price movements.</p>
                        </div>
                    </div>
                </div>-->
                </div>
            </div>
        </section>
        <!-- section content end -->


        <section class="py-5 bg-primary text-white in-cirro-1">
            <div class="container">
                <div class="row gy-2 gy-md-2 gx-lg-3">
                    <div class="col-md-12 col-lg-5">
                        <h1 class="text-white">Experience superior trading conditions</h1>
                        <p>View our impressive trading statistics and find out more about how we execute trading orders.</p>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="row row-cols-1 row-cols-md-3 mt-1">
                            <div class="col">
                                <div class="border-decor pt-1 pb-3 px-3">
                                    <h1 class="text-info">
                                        14ms </h1>
                                    <p class="text-warning mb-0">Ultra-fast Execution</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border-decor pt-2 pt-md-1 pb-3 px-3">
                                    <h1 class="text-info">1:200</h1>
                                    <p class="text-warning mb-0">Maximum Leverage</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border-decor pt-2 pt-md-1 pb-3 px-3">
                                    <h1 class="text-info">2100+</h1>
                                    <p class="text-warning mb-0">Trading Instruments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="row row-cols-1 row-cols-md-4 row-cols-lg-6 gx-5 gy-3 gy-lg-0">
                            <div class="col">
                                <div class="ticker-image d-flex align-items-center">
                                    <img class="opacity-75" src="img/in-cirro-1-ticker-1.svg" alt="ticker-logo" width="138" height="34">
                                </div>
                                <div class="ticker-price">
                                    2,120.67 (3.40%)<span class="ticker-down-arrow"><i class="fas fa-circle-down"></i></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ticker-image d-flex align-items-center">
                                    <img class="opacity-75" src="img/in-cirro-1-ticker-2.svg" alt="ticker-logo" width="139" height="35">
                                </div>
                                <div class="ticker-price">
                                    244.97 (2.70%)<span class="ticker-up-arrow"><i class="fas fa-circle-up"></i></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ticker-image d-flex align-items-center">
                                    <img class="opacity-75" src="img/in-cirro-1-ticker-3.svg" alt="ticker-logo" width="135" height="27">
                                </div>
                                <div class="ticker-price">
                                    160.87 (5.01%)<span class="ticker-down-arrow"><i class="fas fa-circle-down"></i></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ticker-image d-flex align-items-center">
                                    <img class="opacity-75" src="img/in-cirro-1-ticker-4.svg" alt="ticker-logo" width="130" height="20">
                                </div>
                                <div class="ticker-price">
                                    639.30 (1.20%)<span class="ticker-up-arrow"><i class="fas fa-circle-up"></i></span>
                                </div>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="ticker-image d-flex align-items-center">
                                    <img class="opacity-75" src="img/in-cirro-1-ticker-5.svg" alt="ticker-logo" width="137" height="32">
                                </div>
                                <div class="ticker-price">
                                    121.08 (2.30%)<span class="ticker-up-arrow"><i class="fas fa-circle-up"></i></span>
                                </div>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="ticker-image d-flex align-items-center">
                                    <img class="opacity-75" src="img/in-cirro-1-ticker-6.svg" alt="ticker-logo" width="114" height="31">
                                </div>
                                <div class="ticker-price">
                                    104.78 (1.08%)<span class="ticker-up-arrow"><i class="fas fa-circle-up"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->


        <section style="background-color:#FFF; background-image: background-position:center; background-image:url(img/bgline.jpg); background-repeat:no-repeat; background-position:left; background-repeat:repeat-y;" class="absolute-img-wrap">


            <div class="container" style="padding-top: 50px;">
                <div class="row">
                    <div class="col-lg-5 col-md-12 text-lg-left text-md-center md-mb-5">
                        <div class="main-title mb-2rem text-lg-left wow fadeIn" data-wow-delay="300ms">

                            <h2 style="text-align:left; font-weight:bolder; color:#000"> <br><span style="color:#000; margin-top:5px; margin-bottom:5px">SUPERFAST</span> AUTOMATED TRADING PLATFORM </h2>
                            <p style="text-align:left; color:#000"> Trade on one of the world's most popular trading platforms with access to dedicated support and integrated trading tools and investment options, Feel free to cashout your profit anyday.
                            </p>

                            <div style=" margin-bottom:40px; width:100%">

                                <video width="100%" autoplay="" loop="" muted="" playsinline="" poster="media/video-poster-2.jpg">


                                    <source src="videos2.mp4" type="video/mp4">


                                </video>
                                <h3 style="color:#003399">Get A Blockchain Wallet</h3>

                                <p>

                                    The Bitcoin blockchain is a public record of all Bitcoin transactions. You might also hear the term used as a “public ledger.” The blockchain shows every single record of bitcoin transactions in order, dating back to the very first one. </p>
                                <a style="padding-bottom:10px; width:100%; background-color:#FFF; color:#003399;  border-radius:17px; border:none; padding-top:10px;margin-bottom:40px; text-align:center;font-size:1.6em; border:solid 1px #003399" href="https://support.blockchain.com" class="btn btn-green btn-medium text-extra-small display-inline-block">VISIT BLOCKCHAIN</a>

                            </div>

                        </div>

                    </div>


                    <div class="col-lg-1 col-md-12 absolute-img right-img">

                    </div>

                    <div class="col-lg-6 col-md-12 absolute-img right-img">
                        <div class="d-lg-inline-block">
                            <div class="image">
                                <img alt="coinfx" src="img/coin.gif" width="100%">

                                <center> <br>
                                    <a style="padding-bottom:20px; width:100%; background-color:#09F; color:#FFFFFF; border-radius:12px; border:none; margin-bottom:20px; padding-top:20px; text-align:center; color:#FFFFFF; font-size:1em" href="accounts/register" class="btn btn-green btn-medium text-extra-small display-inline-block">REGISTER NEW</a>

                                    <a style="padding-bottom:20px; width:100%; background-color:#0F3; color:#FFFFFF; border-radius:12px; border:none; padding-top:20px;margin-bottom:40px; text-align:center; color:#FFFFFF; font-size:1em" href="accounts/login" class="btn btn-green btn-medium text-extra-small display-inline-block">DASHBOARD LOGIN</a>
                                </center>

                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="container" style="padding-top: 50px;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-lg-left text-md-center md-mb-5">
                        <div class="main-title mb-2rem text-lg-left wow fadeIn" data-wow-delay="300ms">

                            <h2 style="text-align:left; font-weight:bolder; color:#000"> <br><span style="color:#000; margin-top:5px; margin-bottom:5px">HOW TO</span> BECOME A LEADER </h2>
                            <p style="text-align:left; color:#000"> <strong> Joining our Associate Program and be Part of our Company Representative</strong><br />

                                To be part of this great opportunity of becoming one of the company country agent and leader, you have TWO options for this great offer.<br /><br />

                                1) Either you take part of the company max plans (Alpha, Silver or Gold Plan) with this you're qualified to be part of this Company Country Agent (CCA).
                            </p>
                            <p style="text-align:left; color:#000">

                                2) Refer at least 30 New investors into the company with your Coupon ID.<br /><br />

                                This qualifies you to be entitled with many unlimited benefits that this great company has to offer.<br />
                                Bissmarc is here to serve you even much better. Transparency and uniqueness is our trademark!
                            </p>



                        </div>

                    </div>


                </div>
            </div>



        </section>

        <!-- section content begin -->
        <section class="py-5 in-cirro-2">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12">
                        <h1 class="mb-1">Best-in-class crypto and forex execution</h1>
                        <p class="lead">Access Tier-1 liquidity to receive higher fill-rates and significant price improvements.</p>
                        <p>
                            <?php print $siteName; ?> forex exchange is a global arbitrage broker that its activities revolves around buying and selling of crypto assets from the real crypto market exchangers using a robotic system.
                        </p>
                        <p>
                            As a premium content crypto currency trading company, we have created a comprehensive group of tools that allows you to estimate the intrinsic value of investments.
                        </p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-2 g-md-2 gx-lg-2">
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-1.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Tier 1 liquidity</h2>
                                <p>We provides access to Tier 1 liquidity, ensuring deep and competitive pricing for all your trades. With direct access to the world's largest financial institutions and a wide range of trading instruments, you can take advantage of fast and reliable execution with minimal slippage. Experience the benefits of Tier 1 liquidity with us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-2.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Safe and Secure</h2>
                                <p>The safety and security of your funds is our top priority. We employ the latest technology and strict security protocols to ensure your investments are protected at all times. Rest assured that with us, your funds are in safe hands.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Innovative platform</h2>
                                <p>We offers a cutting-edge, innovative trading platform designed to give you a seamless and efficient trading experience. With advanced charting tools, real-time market analysis, and a user-friendly interface, you can trade with confidence and ease. Join us and experience the future of Forex trading today.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-4.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Low Commissions</h2>
                                <p>We offer foreign exchange trading services with reduced fees or commissions compared to other forex brokers. This feature is attractive to cost-conscious traders as it can result in lower overall trading costs and potentially higher profits. By offering low commissions, we positioning ourself as a more affordable option for individual traders to participate in the forex market and benefit from currency price movements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->


        <section class="py-5 in-cirro-2">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12">
                        <h1 class="mb-1">We invest majorly on</h1>

                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gy-2 g-md-2 gx-lg-2">
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-1.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Cryptocurrency Investment</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-2.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Business Management</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Forest Trading &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-4.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Real Estate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Loans &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Funds Investment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Stock Trading &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/in-cirro-2-icon-3.svg" alt="icon" width="46" height="46" />
                                <h2 class="h5 mt-4">Indice &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h2>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5 in-cirro-2">
            <div class="container">
                <div class="row margin-8px-bottom">
                    <div class="col-md-7 col-sm-7 wow fadeInLeft animated" style="margin-bottom:30px">
                        <h2 style="text-align:left; font-weight:bolder; color:#000"> Hi-tech <br><span style="color:#000; margin-top:5px; margin-bottom:5px">forex trading tools</span></h2>
                        <video width="100%" autoplay="" loop="" muted="" playsinline="" poster="media/video-poster-2.jpg">


                            <source src="video.mp4" type="video/mp4">


                        </video>
                    </div>
                    <div class="col-md-5 col-sm-5 shop_info wow fadeInRight animated text-left" style="margin-bottom:30px">
                        <h6 class="text-uppercase alt-font text-extra-gray margin-20px-bottom font-weight-500 sm-width-100 xs-width-100 xs-margin-30px-top">
                            Digital Bitcoin Private Server Hosting package </h6>
                        <div class="text-large text-uppercase main-font text-blue margin-20px-bottom font-weight-500 sm-width-100 xs-width-100">

                        </div>
                        <p class="margin-15px-bottom">

                        </p>
                        <div style="width:100%; height:400px;">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container" style="width: 100%; height: 100%;">
                                <iframe scrolling="no" allowtransparency="true" style="box-sizing: border-box; height: 100%; width: 100%;" src="https://s.tradingview.com/embed-widget/market-overview/?locale=en#%7B%22colorTheme%22%3A%22light%22%2C%22dateRange%22%3A%2212M%22%2C%22showChart%22%3Atrue%2C%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Atrue%2C%22showSymbolLogo%22%3Atrue%2C%22plotLineColorGrowing%22%3A%22rgba(33%2C%20150%2C%20243%2C%201)%22%2C%22plotLineColorFalling%22%3A%22rgba(33%2C%20150%2C%20243%2C%201)%22%2C%22gridLineColor%22%3A%22rgba(240%2C%20243%2C%20250%2C%201)%22%2C%22scaleFontColor%22%3A%22rgba(120%2C%20123%2C%20134%2C%201)%22%2C%22belowLineFillColorGrowing%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22belowLineFillColorFalling%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22symbolActiveColor%22%3A%22rgba(33%2C%20150%2C%20243%2C%200.12)%22%2C%22tabs%22%3A%5B%7B%22title%22%3A%22Indices%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22d%22%3A%22S%26P%20500%22%7D%2C%7B%22s%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22d%22%3A%22Nasdaq%20100%22%7D%2C%7B%22s%22%3A%22FOREXCOM%3ADJI%22%2C%22d%22%3A%22Dow%2030%22%7D%2C%7B%22s%22%3A%22INDEX%3ANKY%22%2C%22d%22%3A%22Nikkei%20225%22%7D%2C%7B%22s%22%3A%22INDEX%3ADEU30%22%2C%22d%22%3A%22DAX%20Index%22%7D%2C%7B%22s%22%3A%22FOREXCOM%3AUKXGBP%22%2C%22d%22%3A%22FTSE%20100%22%7D%5D%2C%22originalTitle%22%3A%22Indices%22%7D%2C%7B%22title%22%3A%22Commodities%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22CME_MINI%3AES1!%22%2C%22d%22%3A%22S%26P%20500%22%7D%2C%7B%22s%22%3A%22CME%3A6E1!%22%2C%22d%22%3A%22Euro%22%7D%2C%7B%22s%22%3A%22COMEX%3AGC1!%22%2C%22d%22%3A%22Gold%22%7D%2C%7B%22s%22%3A%22NYMEX%3ACL1!%22%2C%22d%22%3A%22Crude%20Oil%22%7D%2C%7B%22s%22%3A%22NYMEX%3ANG1!%22%2C%22d%22%3A%22Natural%20Gas%22%7D%2C%7B%22s%22%3A%22CBOT%3AZC1!%22%2C%22d%22%3A%22Corn%22%7D%5D%2C%22originalTitle%22%3A%22Commodities%22%7D%2C%7B%22title%22%3A%22Bonds%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22CME%3AGE1!%22%2C%22d%22%3A%22Eurodollar%22%7D%2C%7B%22s%22%3A%22CBOT%3AZB1!%22%2C%22d%22%3A%22T-Bond%22%7D%2C%7B%22s%22%3A%22CBOT%3AUB1!%22%2C%22d%22%3A%22Ultra%20T-Bond%22%7D%2C%7B%22s%22%3A%22EUREX%3AFGBL1!%22%2C%22d%22%3A%22Euro%20Bund%22%7D%2C%7B%22s%22%3A%22EUREX%3AFBTP1!%22%2C%22d%22%3A%22Euro%20BTP%22%7D%2C%7B%22s%22%3A%22EUREX%3AFGBM1!%22%2C%22d%22%3A%22Euro%20BOBL%22%7D%5D%2C%22originalTitle%22%3A%22Bonds%22%7D%2C%7B%22title%22%3A%22Forex%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22s%22%3A%22FX%3AGBPUSD%22%7D%2C%7B%22s%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22s%22%3A%22FX%3AUSDCHF%22%7D%2C%7B%22s%22%3A%22FX%3AAUDUSD%22%7D%2C%7B%22s%22%3A%22FX%3AUSDCAD%22%7D%5D%2C%22originalTitle%22%3A%22Forex%22%7D%5D%2C%22utm_source%22%3A%22intrxgloblcon.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-overview%22%2C%22page-uri%22%3A%22intrxgloblcon.com%2F%22%7D" frameborder="0"></iframe>


                                <style>
                                    .tradingview-widget-copyright {
                                        font-size: 13px !important;
                                        line-height: 32px !important;
                                        text-align: center !important;
                                        vertical-align: middle !important;
                                        /* @mixin sf-pro-display-font; */
                                        font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                                        color: #9db2bd !important;
                                    }

                                    .tradingview-widget-copyright .blue-text {
                                        color: #2962FF !important;
                                    }

                                    .tradingview-widget-copyright a {
                                        text-decoration: none !important;
                                        color: #9db2bd !important;
                                    }

                                    .tradingview-widget-copyright a:visited {
                                        color: #9db2bd !important;
                                    }

                                    .tradingview-widget-copyright a:hover .blue-text {
                                        color: #1E53E5 !important;
                                    }

                                    .tradingview-widget-copyright a:active .blue-text {
                                        color: #1848CC !important;
                                    }

                                    .tradingview-widget-copyright a:visited .blue-text {
                                        color: #2962FF !important;
                                    }
                                </style>
                            </div>
                            <!-- TradingView Widget END -->


                        </div>
                        Bitcoin is digital, so it's only available in electronic form. This feature makes Bitcoin very difficult to counterfeit, unlike units of fiat currency. Theoretically, a group of miners could obtain control of 51% of the Bitcoin Network's hashing (or processing) power, which would allow nefarious parties to potentially double-spend their bitcoins and even reverse transactions.
                        However, obtaining this much processing power would be prohibitively difficult, and this helps keep the Bitcoin Network secure.
                        <p></p>
                        <p>
                            <?php print $siteName; ?> is happy to bring you a free Virtual Private Server service, or VPS, so you can take advantage of the most powerful trading platform anywhere, any time, and on any device!

                        </p>

                    </div>
                </div>



            </div>
        </section>



        <!-- section content begin -->
        <section class="py-5 in-cirro-3">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-6 wow fadeInLeft animated">

                        <div style="width:100%">
                            <h2 style="color:#000; dont-w
                bolder" class="alt-font font-weight-600 progress-intro">INVEST IN BITCOIN, EARN PROFIT IN SECONDS</h2>
                        </div>
                        <div style="width:100%">
                            <p style="">Here at <?php print $siteName; ?> we accept your investment, we verify and grow it at a certain speed. you cashout your profit instantly and re-invest again.That is how we do here, below are lists of top paid investors making profits all the time. You too can be a part of this movement now. Simply invest to join</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center gx-5 mb-3">
                    <div class="col-md-12 col-lg-5 mb-5 mb-md-3 mb-lg-0">
                        <span class="badge bg-secondary mb-3">Popular instruments</span>
                        <h1 class="mt-2 mb-1">Live prices on popular markets</h1>
                        <p class="lead mb-4">Inform your decisions with timely dispatches from our team of global analysts.</p>
                        <a href="#" class="btn btn-link"><i class="fas fa-arrow-right"></i>Find out more</a>
                    </div>
                    <div class="col-md-12 col-lg-7 mt-md-5">
                        <div class="card card-body ms-lg-5">
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Market summary</span></a> by TradingView</div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                                    {
                                        "width": "100%",
                                        "height": 450,
                                        "symbolsGroups": [{
                                                "name": "Indices",
                                                "originalName": "Indices",
                                                "symbols": [{
                                                        "name": "FOREXCOM:SPXUSD",
                                                        "displayName": "S&P 500"
                                                    },
                                                    {
                                                        "name": "FOREXCOM:NSXUSD",
                                                        "displayName": "US 100"
                                                    },
                                                    {
                                                        "name": "FOREXCOM:DJI",
                                                        "displayName": "Dow 30"
                                                    },
                                                    {
                                                        "name": "INDEX:NKY",
                                                        "displayName": "Nikkei 225"
                                                    },
                                                    {
                                                        "name": "INDEX:DEU40",
                                                        "displayName": "DAX Index"
                                                    },
                                                    {
                                                        "name": "FOREXCOM:UKXGBP",
                                                        "displayName": "UK 100"
                                                    }
                                                ]
                                            },
                                            {
                                                "name": "Futures",
                                                "originalName": "Futures",
                                                "symbols": [{
                                                        "name": "CME_MINI:ES1!",
                                                        "displayName": "S&P 500"
                                                    },
                                                    {
                                                        "name": "CME:6E1!",
                                                        "displayName": "Euro"
                                                    },
                                                    {
                                                        "name": "COMEX:GC1!",
                                                        "displayName": "Gold"
                                                    },
                                                    {
                                                        "name": "NYMEX:CL1!",
                                                        "displayName": "Crude Oil"
                                                    },
                                                    {
                                                        "name": "NYMEX:NG1!",
                                                        "displayName": "Natural Gas"
                                                    },
                                                    {
                                                        "name": "CBOT:ZC1!",
                                                        "displayName": "Corn"
                                                    }
                                                ]
                                            },
                                            {
                                                "name": "Bonds",
                                                "originalName": "Bonds",
                                                "symbols": [{
                                                        "name": "CME:GE1!",
                                                        "displayName": "Eurodollar"
                                                    },
                                                    {
                                                        "name": "CBOT:ZB1!",
                                                        "displayName": "T-Bond"
                                                    },
                                                    {
                                                        "name": "CBOT:UB1!",
                                                        "displayName": "Ultra T-Bond"
                                                    },
                                                    {
                                                        "name": "EUREX:FGBL1!",
                                                        "displayName": "Euro Bund"
                                                    },
                                                    {
                                                        "name": "EUREX:FBTP1!",
                                                        "displayName": "Euro BTP"
                                                    },
                                                    {
                                                        "name": "EUREX:FGBM1!",
                                                        "displayName": "Euro BOBL"
                                                    }
                                                ]
                                            },
                                            {
                                                "name": "Forex",
                                                "originalName": "Forex",
                                                "symbols": [{
                                                        "name": "FX:EURUSD",
                                                        "displayName": "EUR/USD"
                                                    },
                                                    {
                                                        "name": "FX:GBPUSD",
                                                        "displayName": "GBP/USD"
                                                    },
                                                    {
                                                        "name": "FX:USDJPY",
                                                        "displayName": "USD/JPY"
                                                    },
                                                    {
                                                        "name": "FX:USDCHF",
                                                        "displayName": "USD/CHF"
                                                    },
                                                    {
                                                        "name": "FX:AUDUSD",
                                                        "displayName": "AUD/USD"
                                                    },
                                                    {
                                                        "name": "FX:USDCAD",
                                                        "displayName": "USD/CAD"
                                                    }
                                                ]
                                            }
                                        ],
                                        "showSymbolLogo": true,
                                        "colorTheme": "light",
                                        "isTransparent": false,
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->
        <!-- section content begin -->
        <section class="py-5 in-cirro-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <div class="row gx-0 d-flex align-items-center position-relative">
                                <div class="col-md-5 col-lg-6">
                                    <img class="testi-image" src="img/in-cirro-4-people.png" alt="testimonial" width="418" height="441" />
                                </div>
                                <div class="col-md-7 col-lg-6">
                                    <blockquote class="blockquote">
                                        <p>They are very knowledgeable and provide our clients with excellent customer service.</p>
                                    </blockquote>
                                    <h2 class="h6 mt-3 mb-0">Laura Tina</h2>
                                    <span class="blockquote-footer">NeoTrade Systems Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->
        <!-- section content begin -->
        <section class="py-5 in-cirro-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <h1 class="mb-1">Some of the things you may want to know</h1>
                        <p class="lead mb-4">We answered questions so you don’t have to ask.</p>
                        <a href="about" class="btn btn-link"><i class="fas fa-arrow-right"></i>Find more about us</a>
                    </div>
                    <div class="col-md-12 col-lg-6 mt-5 mt-lg-0">
                        <div class="accordion accordion-style-5 mt-n2 mb-3" id="sampleFive">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a5One" aria-expanded="true">
                                        How do I open an account with <?php print $siteName; ?>?
                                    </button>
                                </h2>
                                <div id="a5One" class="accordion-collapse collapse show" data-bs-parent="#sampleFive">
                                    <div class="accordion-body">
                                        <p>Go to the registration page to sign up for free to open an account with us.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a5Two" aria-expanded="false">
                                        How much money do I need to open an account?
                                    </button>
                                </h2>
                                <div id="a5Two" class="accordion-collapse collapse" data-bs-parent="#sampleFive">
                                    <div class="accordion-body">
                                        <p>The minimum deposit to start trading with us is <?php print $siteMinA; ?>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a5Three" aria-expanded="false">
                                        How do I fund my account?
                                    </button>
                                </h2>
                                <div id="a5Three" class="accordion-collapse collapse" data-bs-parent="#sampleFive">
                                    <div class="accordion-body">
                                        <p>After creating an account visit your dashboard, then go to the deposit section to get started.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a5Four" aria-expanded="false">
                                        How will my withdrawal be processed?
                                    </button>
                                </h2>
                                <div id="a5Four" class="accordion-collapse collapse" data-bs-parent="#sampleFive">
                                    <div class="accordion-body">
                                        <p>Our withdrawal process is instant but might take up to 24 hours to reflect on your payment account. We have a withdrawal charge of $<?php print $withdrawal_charge; ?> and a minimum withdrawal of $<?php print $minimum_withdrawal; ?></p>
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
        <section class="py-4 bg-info in-cirro-6">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-md-flex justify-content-md-start align-items-center">
                        <div class="border-end-md pe-md-5 d-block">
                            <h2 class="text-white mb-0">Start investing today.</h2>
                        </div>
                        <div class="mt-3 mt-md-0 ps-md-5">
                            <a href="accounts/register" class="btn btn-link"><i class="fas fa-arrow-right"></i>Open account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->
    </main>
    <?php require_once('footer.php'); ?>