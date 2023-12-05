<?php
require_once('include.php');
$title = 'Deposit | ' . $siteName;
$desc = '';

$msg = '';
if (isset($_POST['submit'])) {
    $payment_id = $bassic->randGenerator();
    $email = $sqli->getEmail($_SESSION['user_code']);
    $amount = $_POST['amount'];
    $payment_proof = '';
    $bank_id = '';
    $status = 'pending';
    $date_pay = $bassic->getDate();

    if (!empty($amount)) {
        header("location: deposit-show?id=" . $amount);
        // $fieldup = array('id', 'payment_id', 'email', 'amount', 'payment_proof', 'bank_id', 'status', 'date_pay');
        // $valueup = array(null, $payment_id, $email, $amount, $payment_proof, $bank_id, $status, $date_pay);
        // if ($cal->insertDataB($top_up, $fieldup, $valueup)) {
        //     header("location: deposit-show?id=" . $payment_id);
        // } else {
        //     $msg = 'Unexpected error occured!';
        // }
    } else {
        $msg = 'Fill all necessary fields!';
    }
}

require_once('head.php'); ?>

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
                                <!-- <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">

                                        <li class="nav-item">
                                            <a class="nav-link" href="make-investment">Invest</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="withdraw">Withdraw</a>
                                        </li>

                                    </ul>
                                </div> -->
                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                    <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal">Top Up Account</h2>
                                        <div class="nk-block-des">
                                            <div class="coin-info">
                                                <span style="font-size: 30px; color: orange;" class="coin-name">Balance: <?php print $base_currency; ?><?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance'), 2); ?> </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php if (isset($msg) && !empty($msg)) { ?>
                                    <div class="alert alert-warning">
                                        <div class="alert-cta flex-wrap flex-md-nowrap">
                                            <div class="alert-text">
                                                <p><?php print @$msg; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                                <form enctype="multipart/form-data" method="post" action="">
                                    <div class="nk-block">
                                        <div class="card card-bordered">
                                            <div class="nk-kycfm">

                                                <div class="nk-kycfm-content">
                                                    <div class="">
                                                        <h5 class="title">Amount</h5>
                                                        <input type="text" class="form-control form-control-lg form-control-number" id="amount" name="amount" placeholder="1000">
                                                    </div>
                                                </div>

                                                <div class="nk-kycfm-footer">
                                                    <div class="nk-kycfm-action pt-2">


                                                        <button name="submit" type="submit" class="btn btn-lg btn-primary theme-button btn btn-raised btn-success waves-effect">Make Payment</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="kyc-app wide-sm m-auto">

                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                    <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal text-warning"></h2>
                                        <div class="nk-block-des">

                                            <p>
                                            <div class="nk-kycfm-footer">
                                                <div class="nk-kycfm-action pt-2">
                                                    <a href="./" class="btn btn-lg btn-primary">Back to home</a>
                                                </div>
                                            </div>
                                            </p>
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