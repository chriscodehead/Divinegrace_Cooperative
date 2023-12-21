<?php
require_once('include.php');
$title = 'Home - ' . $siteName;
require_once('head.php');
$active1 = 'active'; ?>

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

    <!-- Hero Warp Start -->
    <div class="hero-style1-warp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-style1-content">
                        <span class="title">Invest and Reap Rewards</span>
                        <h1>
                            <img src="assets/images/shapes/content-shape1.png" class="content-shape1" alt="content-shape">
                            Embrace Prosperity with Purpose
                        </h1>
                        <p>At <?php print $siteName; ?>, we believe in the power of unity, growth, and shared success. Welcome to a community where your investments don't just yield financial returns but also bring valuable incentives directly to your doorstep.</p>
                        <div class="hero-style1-btn d-flex align-items-center">
                            <a href="accounts/register" class="default-btn">Get Started—It's Free</a>
                            <a href="about" class="hero-service-btn">
                                <i class="flaticon-trend"></i>
                                Explore More
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-style1-image">
                        <img src="assets/images/heros/hero1.png" class="hero1" alt="hero">
                        <div class="image" data-cues="slideInLeft">
                            <img src="assets/images/small-images/hero1.png" class="small1" alt="hero">
                        </div>
                        <div class="image" data-cues="slideInDown" data-interval="-200">
                            <img src="assets/images/small-images/hero2.png" class="small2" alt="hero">
                        </div>
                        <div class="image" data-cues="slideInUp">
                            <img src="assets/images/small-images/hero3.png" class="small3" alt="hero">
                        </div>
                        <div class="image" data-cues="slideInLeft">
                            <img src="assets/images/small-images/hero4.png" class="small4" alt="hero">
                        </div>
                    </div>
                    <div class="responsive-image">
                        <img src="assets/images/heros/responsive1.png" class="responsive-image" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="all-shapes">
            <img src="assets/images/shapes/hero-shape1.png" class="hero-shape1" alt="hero-shape">
            <img src="assets/images/shapes/hero-shape2.png" class="hero-shape2" alt="hero-shape">
            <img src="assets/images/shapes/hero-shape3.png" class="hero-shape3" alt="hero-shape">
            <img src="assets/images/shapes/hero-shape4.png" class="hero-shape4" alt="hero-shape">
            <img src="assets/images/shapes/hero-shape5.png" class="hero-shape5" alt="hero-shape">
        </div>
    </div>
    <!-- Hero Warp End -->


    <!-- Slide Text Warp Start-->
    <div class="slide-text-warp">
        <div class="container-fluid">
            <div class="text-slide">
                <h1>
                    <span>
                        <img src="img/slider1.png" class="slider-text1" alt="slider-text">
                    </span>
                    <span>
                        <img src="img/slider2.png" class="slider-text1" alt="slider-text">
                    </span>
                    <span>
                        <img src="img/slider3.png" class="slider-text1" alt="slider-text">
                    </span>
                    <span>
                        <img src="img/slider4.png" class="slider-text1" alt="slider-text">
                    </span>
                    <span>
                        <img src="img/slider5.png" class="slider-text1" alt="slider-text">
                    </span>
                    <span>
                        <img src="img/slider6.png" class="slider-text1" alt="slider-text">
                    </span>
                </h1>
            </div>
        </div>
    </div>
    <!-- Slide Text Warp End -->


    <!-- Solution Warp Start -->
    <div class="solution-warp ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="solution-image">
                        <div class="anm" data-cues="slideInLeft">
                            <img src="assets/images/small-images/solution1.png" class="small-solution1" alt="solution">
                        </div>
                        <div class="anm" data-cue="slideInUp">
                            <img src="assets/images/small-images/solution2.png" class="small-solution2" alt="solution">
                        </div>
                        <div class="anm" data-cues="slideInLeft">
                            <img src="assets/images/small-images/solution3.png" class="small-solution3" alt="solution">
                        </div>
                        <img src="assets/images/small-images/solution4.png" class="small-solution4" alt="solution">
                        <div class="anm" data-cues="slideInLeft">
                            <img src="assets/images/small-images/solution5.png" class="small-solution5" alt="solution">
                        </div>
                        <img src="assets/images/shapes/solution-shape1.png" class="solution-shape1" alt="solution">
                    </div>
                    <div class="responsive-image">
                        <img src="img/png-clipart-grocery-store-kabul.png" class="responsive-image" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="solution-content single-section">
                        <h2>About us</h2>
                        <p>Welcome to <?php print $siteName; ?>, where purpose meets prosperity and community thrives. Established with a vision to redefine the landscape of financial platforms, <?php print $siteName; ?> is more than just an investment hub—it's a circle of shared growth and tangible rewards.</p>

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Our Mission</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Join the Family</button>
                            </li>



                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                                <div class="solution-tab-content">
                                    <h4></h4>
                                    <p>
                                        At <?php print $siteName; ?>, our mission is clear—to empower individuals on their journey to financial success while fostering a sense of unity and community. We believe in creating a platform that not only secures your investments but also adds significant value to your everyday life.</p>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                                <div class="solution-tab-content">
                                    <h4></h4>
                                    <p>Embark on a journey where your financial goals align with a purpose-driven community. Join <?php print $siteName; ?> Family Circle Limited and experience the fusion of smart investments, secure savings, and meaningful incentives. Together, we create a circle of <?php print $siteName; ?>—where every member contributes to the shared prosperity of the family.
                                    </p>
                                    <p>
                                        At <?php print $siteName; ?>, your aspirations are not just welcomed; they are celebrated. Your success is our success, and we invite you to be a part of a financial revolution that goes beyond numbers. Welcome to <?php print $siteName; ?> Family Circle Limited—where purposeful investments meet tangible rewards, and community takes center stage.</p>

                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/images/shapes/solution-shape2.png" class="solution-shape2" alt="solution-shape">
    </div>
    <!-- Solution Warp End -->

    <!-- Boost Slider Warp  Start -->
    <div class="boost-slider-warp">
        <!-- Boost Warp Start -->
        <div class="boost-warp-start pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Why Choose <?php print $siteName; ?>?</h2>
                    <p>With <?php print $siteName; ?>, unlocking your potential and achieving your goals becomes a seamless journey.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                        <div class="boost-card style1">
                            <div class="icon-content d-flex align-items-center">
                                <div class="icon">
                                    <div class="rounded-icon">
                                        <i class="flaticon-strategy"></i>
                                    </div>
                                </div>
                                <h3>
                                    <a href="#">Transparent Transactions</a>
                                </h3>
                            </div>
                            <p> Experience clarity in every transaction with our transparent and trustworthy platform.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                        <div class="boost-card style2">
                            <div class="icon-content d-flex align-items-center">
                                <div class="icon">
                                    <div class="rounded-icon">
                                        <i class="flaticon-coding"></i>
                                    </div>
                                </div>
                                <h3>
                                    <a href="#">Incentives Beyond Money</a>
                                </h3>
                            </div>
                            <p>We believe in adding value to your life. Receive not just financial returns but also practical incentives that make a difference.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                        <div class="boost-card style3">
                            <div class="icon-content d-flex align-items-center">
                                <div class="icon">
                                    <div class="rounded-icon">
                                        <i class="flaticon-data-analytics"></i>
                                    </div>
                                </div>
                                <h3>
                                    <a href="#">Secure Savings</a>
                                </h3>
                            </div>
                            <p>Your financial security is our priority. Invest and save with confidence, knowing your future is in capable hands.</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/images/shapes/boost-shape1.png" class="boost-shape1" alt="boost-shape">
            <img src="assets/images/shapes/boost-shape2.png" class="boost-shape2" alt="boost-shape">
        </div>

    </div>
    <!-- Boost Slider Warp  End -->

    <!-- Supervise Warp Start -->
    <div class="supervise-warp pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="supervise-image">
                        <img src="assets/images/supervise/supervise1.png" class="supervise1" alt="supervise">
                        <div class="anm" data-cues="slideInLeft" data-interval="-200">
                            <img src="assets/images/small-images/supervise1.png" class="small-supervise1" alt="image">
                        </div>
                        <div class="anm" data-cues="slideInRight" data-interval="-200">
                            <img src="assets/images/small-images/supervise2.png" class="small-supervise2" alt="image">
                        </div>
                        <img src="assets/images/shapes/supervise-shape1.png" class="supervise-shape1" alt="image">
                        <img src="assets/images/shapes/supervise-shape2.png" class="supervise-shape2" alt="image">
                    </div>
                    <div class="responsive-image">
                        <img src="img/woman-shopping-vegetables-supermarket.jpg" class="responsive-image" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 pt-5">
                    <div class="single-section supervise-content">
                        <h2>Join us on the Path to Prosperity</h2>
                        <p>Discover a unique blend of financial growth, community support, and practical incentives at <?php print $siteName; ?>. Whether you're looking to invest wisely or save for a brighter future, our platform is designed to cater to your needs.
                        </p>
                        <!-- <p>
                            Take the first step toward a prosperous journey with <?php print $siteName; ?>—where investments flourish, savings thrive, and communities prosper. Welcome to a circle of <?php print $siteName; ?>, welcome to <?php print $siteName; ?>.</p> -->
                        <ul class="supervise-list">
                            <li>
                                <div class="icon">
                                    <div class="rounded-icon style1">
                                        <i class="flaticon-software-as-service"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4> Invest and Reap Rewards</h4>
                                    <p>Dive into a world of financial opportunities with us. Your investments here not only earn you monetary incentives but also tangible rewards to enhance your everyday life. Imagine receiving a carton of indomitable noodles, premium detergent, flavorful Knor cubes, and essential salt—all as a token of appreciation for being a part of our growing family.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <div class="rounded-icon style2">
                                        <i class="flaticon-experiments"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Secure Savings for a Brighter Future</h4>
                                    <p>We understand the importance of saving for the future. <?php print $siteName; ?> provides a safe and secure platform for you to save money, ensuring a path to financial stability and a brighter tomorrow.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <div class="rounded-icon style3">
                                        <i class="flaticon-cloud-servers"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Community, Unity, Prosperity</h4>
                                    <p>Our vision goes beyond mere financial transactions. We aim to build a strong, supportive community that grows together. Join us in creating a circle of <?php print $siteName; ?>, where every member contributes to the collective prosperity of the family.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Supervise Warp End -->

    <!-- Most Warp Start -->
    <div class="most-warp" style="background: #FFF8F0;">
        <div class="container">
            <div class="inner-most-warp">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p></p>
                </div>
                <div class="row align-items-end">
                    <div class="col-lg-12">
                        <div class="most-accordion">
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is <?php print $siteName; ?>?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p><?php print $siteName; ?> is a community-driven platform that offers both investment opportunities and secure savings. We believe in fostering unity, prosperity, and providing tangible incentives to our members.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How does the investment process work?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Investing with <?php print $siteName; ?> is simple. Choose your investment plan, make a secure transaction, and watch your financial portfolio grow. In addition to monetary returns, you'll receive practical incentives such as indomitable noodles, detergent, Knor cubes, and salt.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Are my investments secure with <?php print $siteName; ?>?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, absolutely. We prioritize the security of your investments. Our platform is designed with robust measures to ensure the safety and confidentiality of your financial transactions.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            What sets <?php print $siteName; ?> apart from other investment platforms?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p><?php print $siteName; ?> goes beyond traditional investments by offering tangible incentives that enhance your daily life. We believe in creating a community where every member contributes to shared prosperity.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Can I save money with <?php print $siteName; ?>?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Yes, <?php print $siteName; ?> provides a secure avenue for saving money. Our platform allows you to save with confidence, knowing that your future is in capable hands.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How transparent are the transactions on <?php print $siteName; ?>?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Transparency is at the core of our values. We ensure clear and open communication throughout every transaction, providing you with a trustworthy and reliable investment experience.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            What practical incentives can I expect to receive?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>As a token of appreciation, you can receive incentives such as a carton of indomitable noodles, premium detergent, flavorful Knor cubes, and essential salt, in addition to monetary returns.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            How do I join <?php print $siteName; ?>?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Joining is easy! Simply visit our website, follow the registration process, and start your journey toward financial growth and community prosperity.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            How can I get in touch with customer support?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>For any inquiries or assistance, our customer support team is readily available. Feel free to reach out through our contact page on the website, and we'll be happy to assist you.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Is <?php print $siteName; ?> suitable for long-term investments?
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Absolutely. <?php print $siteName; ?> is designed to cater to both short-term and long-term investment goals. Choose a plan that aligns with your financial objectives and watch your wealth grow over time.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Most Warp End -->


    <!-- Additional Warp Start -->
    <div class="additional-warp pb-100 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="additional-image">
                        <img src="assets/images/additional/additional2.jpg" class="additional2" alt="additional">
                        <div class="anm" data-cues="slideInLeft">
                            <img src="assets/images/small-images/additional1.png" class="small-additional1" alt="additional">
                        </div>
                        <img src="assets/images/shapes/additional-shape1.png" class="additional-shape1" alt="additional-shape">
                        <img src="assets/images/shapes/additional-shape2.png" class="additional-shape2" alt="additional-shape">
                    </div>
                    <div class="responsive-image">
                        <img src="img/black-girls-city.jpg" class="responsive-image" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="additional-content single-section">
                        <h2 sty>What Sets Us Apart</h2>
                        <p></p>
                        <ul class="additional-list">
                            <li>
                                <div class="icon">
                                    <div class="rounded-icon style1">
                                        <span>01</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Community-Centric Approach</h4>
                                    <p>We are not just a financial platform; we are a community that grows together. <?php print $siteName; ?> is built on the principle that collective prosperity is the key to sustained success.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <div class="rounded-icon style2">
                                        <span>02</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Tangible Incentives</h4>
                                    <p>Beyond monetary returns, we offer practical incentives that make a difference in your daily routine. From indomitable noodles to premium detergent, Knor cubes, and salt—every investment comes with real-world rewards.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <div class="rounded-icon style3">
                                        <span>03</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Transparency and Trust</h4>
                                    <p>Your trust is our priority. Our commitment to transparency ensures that every transaction is clear, secure, and in line with the highest standards of financial integrity.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <div class="rounded-icon style3">
                                        <span>03</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>Secure Savings</h4>
                                    <p>Your financial well-being matters to us. <?php print $siteName; ?> provides a secure avenue for savings, offering a reliable path to building a brighter and more stable future.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Additional Warp End -->

    <!-- Grow Warp Start  -->
    <div class="grow-warp mb-100" style="margin-bottom: 100px;">
        <div class="container">
            <div class="inner-grow-warp pt-100 pb-75">
                <div class="section-title">
                    <h2>We Grow with you</h2>
                    <p>Building Unity, Sharing Prosperity, Your Community Investment Hub</p>
                </div>
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-6 col-sm-3" data-cue="slideInUp">
                        <div class="grow-counter">
                            <h2>16M+</h2>
                            <p>Shared Incentives</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-sm-3" data-cue="slideInUp">
                        <div class="grow-counter">
                            <h2>5k+</h2>
                            <p>Active Users</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-sm-3" data-cue="slideInUp">
                        <div class="grow-counter">
                            <h2>5</h2>
                            <p>New Packages</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-sm-3" data-cue="slideInUp">
                        <div class="grow-counter">
                            <h2>98%</h2>
                            <p>Positive Review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Grow Warp End  -->


    <!-- Skill Warp Start -->
    <div class="skill-warp ptb-100">
        <div class="container">
            <div class="inner-skill-warp">
                <div class="skill-content">
                    <h1>What Our Clients Are Saying</h1>
                    <h4>Discover the <?php print $siteName; ?> Experience through the Eyes of Our Valued Members.</h4>
                    <p>
                        "Being a part of <?php print $siteName; ?> isn't just about financial growth; it's about belonging to a community that genuinely cares. The support and camaraderie here are unmatched, making every investment feel like a step towards shared success."

                    </p>
                    <div class="skill-btn">
                        <a href="accounts/register" class="default-btn style1">Sign Up Now</a>
                        <a href="accounts/register" class="free-btn default-btn">Try For Free</a>
                    </div>
                </div>
                <img src="img/Frame5.png" class="skill1" alt="skill">

                <img src="img/skill3.jpg" class="skill3" alt="skill">

            </div>
        </div>
    </div>
    <!-- Skill Warp End -->

    <?php require_once('footer.php'); ?>