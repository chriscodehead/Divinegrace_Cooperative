<?php
require_once('include.php');

if (isset($_GET['idd']) && !empty($_GET['idd'])) {
    $id =  $_GET['idd'];
    $ps = $_GET['ps'];

    $fieldsR = array('pause_status');
    $valuesR = array($ps);
    $msg = $cal->update($deposit_tb, $fieldsR, $valuesR, 'id', $id);

    $email_id = $cal->selectFrmDB($deposit_tb, 'email', 'id', $id);
    $name_id = $cal->selectFrmDB($user_tb, 'first_name', 'email', $email_id);
    $coin = $cal->selectFrmDB($deposit_tb, 'coin_type', 'id', $id);
    $plan = $cal->selectFrmDB($deposit_tb, 'plan_type', 'id', $id);
    $amount = $cal->selectFrmDB($deposit_tb, 'amount', 'id', $id);

    if ($_GET['ps'] == 0) {
        @$email_call->playTransaction($amount, $plan, $coin, $id, $name_id, $email_id);
    } else {
        @$email_call->pauseTransaction($amount, $plan, $coin, $id, $name_id, $email_id);
    }
    header("location:./?done=" . $msg);
}
if (isset($_GET['done']) && !empty($_GET['done'])) {
    $msg = $_GET['done'];
}

$title = 'Dashboard | ' . $siteName;
$desc = '';
require_once('check-verification.php');
require_once('head.php'); ?>

<body class="nk-body npc-crypto bg-white has-sidebar ">
    <div class="nk-app-root">

        <div class="nk-main ">
            <?php require_once('side-bar.php'); ?>

            <div class="nk-wrap ">
                <?php require_once('header.php'); ?>

                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Welcome! </span>
                                </div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal"><?php print $firstname = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'first_name') . ' ' . $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'last_name'); ?></h2>
                                        <div class="nk-block-des">
                                            <p><?php print @$timewhen; ?>. Have you started earning?</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">

                                            <li><a href="deposit" class="btn btn-primary"><span>Top Up</span> </a></li>
                                            <!-- <em class="icon ni ni-arrow-long-right"></em> -->
                                            <li><a href="invest" class="btn btn-warning"><span>Invest</span> </a></li>

                                            <li><a href="save" class="btn btn-secondary"><span>Save</span> <em class="icon ni ni-arrow-long-right"></em></a></li>

                                            <li style="display: none;" class="opt-menu-md dropdown">
                                                <a href="#" class="btn btn-white btn-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="profile"><em class="icon ni ni-user-circle"></em><span>Settings</span></a></li>
                                                        <li><a href="add-wallet"><em class="icon ni ni-coin-alt"></em><span>Add Wallet </span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="row gy-gs">

                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div class="nk-wg1 mb-3">
                                                <div class="nk-wg1-group g-2">
                                                    <div class="nk-wg1-item me-xl-4">
                                                        <div class="nk-wg1-title">Available Balance / <div class="dropdown"><a class="dropdown-indicator-caret" data-offset="0,10" href="#" data-bs-toggle="dropdown"><?php print $base_currency; ?></a>
                                                                <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-center">
                                                                    <ul class="link-list-plain sm text-center">
                                                                        <li><a href="#"><?php print $base_currency; ?></a></li>
                                                                        <li><a href="#"><?php print $base_currency; ?></a></li>
                                                                        <li><a href="#"><?php print $base_currency; ?></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-wg1-amount">
                                                            <div class="amount"><?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance'), 3); ?> <small class="currency currency-btc"><?php print $base_currency; ?></small></div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg1-item ms-lg-auto">
                                                        <!-- <div class="nk-wg1-title">In this year</div> -->
                                                        <div class="nk-wg1-group g-2">
                                                            <div class="nk-wg1-sub">
                                                                <div class="sub-text"><span>Investment</span>
                                                                    <div class="dot" data-bg="#9cabff" style="background: rgb(156, 171, 255);"></div>
                                                                </div>
                                                                <div class="lead-text"><?php print number_format(@$sqli->countTotaldeposit($sqli->getEmail($_SESSION['user_code'])), 3); ?> <?php print $base_currency; ?></div>
                                                            </div>
                                                            <div class="nk-wg1-sub">
                                                                <div class="sub-text"><span>Withdraw</span>
                                                                    <div class="dot" data-bg="#baaeff" style="background: rgb(186, 174, 255);"></div>
                                                                </div>
                                                                <div class="lead-text"><?php print number_format(@$sqli->countTotalwithdrawal($sqli->getEmail($_SESSION['user_code'])), 3); ?> <?php print $base_currency; ?></div>
                                                            </div>
                                                            <div class="nk-wg1-sub">
                                                                <div class="sub-text"><span>Bonus</span>
                                                                    <div class="dot" data-bg="#a7ccff" style="background: rgb(167, 204, 255);"></div>
                                                                </div>
                                                                <div class="lead-text"><?php print number_format(@$sqli->countAvailableBonus($sqli->getEmail($_SESSION['user_code'])), 3); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-ck1">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas class="chart-account-balance chartjs-render-monitor" id="mainBalance" style="display: block; height: 120px; width: 811px;" width="1216" height="180"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-xl-4">
                                        <div class="nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title title mt-4">Overview</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="nk-block">
                                <div class="row g-gs">

                                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <div class="card card-bordered is-dark">
                                            <div class="nk-wgw">
                                                <div class="nk-wgw-inner">
                                                    <a class="nk-wgw-name" href="wallets">
                                                        <div class="nk-wgw-icon is-default">
                                                            <em class="icon ni ni-sign-naira"><?php print $base_currency; ?></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Total Investments</h5>
                                                    </a>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount"><?php print $base_currency; ?><?php print number_format(@$sqli->countTotaldeposit($sqli->getEmail($_SESSION['user_code']))); ?><span class="currency currency-nio"></span></div>
                                                    </div>
                                                </div>
                                                <div class="nk-wgw-actions">
                                                    <ul>
                                                        <li><a href="deposit"><em class="icon ni ni-arrow-up-right"></em> <span>Top Up</span></a></li>

                                                        <li><a href="invest"><em class="icon ni ni-arrow-down-left"></em><span>Invest</span></a></li>

                                                        <li><a href="save"><em class="icon ni ni-arrow-down-left"></em><span>Save</span></a></li>

                                                        <li><a href="withdraw"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a></li>



                                                        <!-- <?php print $siteLink; ?>?ref=<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'client_username'); ?> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <div class="card card-bordered">
                                            <div class="nk-wgw">
                                                <div class="nk-wgw-inner">
                                                    <a class="nk-wgw-name" href="withdraw">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-naira"><?php print $base_currency; ?></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Total Earnings</h5>
                                                    </a>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount"><?php print $base_currency; ?><?php print number_format(@$sqli->countAvailableInterest($sqli->getEmail($_SESSION['user_code']))); ?><span class="currency currency-eth"></span></div>
                                                    </div>
                                                </div>
                                                <div class="nk-wgw-actions">
                                                    <ul>

                                                        <li><a href="deposit"><em class="icon ni ni-arrow-up-right"></em> <span>Top Up</span></a></li>

                                                        <li><a href="invest"><em class="icon ni ni-arrow-down-left"></em><span>Invest</span></a></li>

                                                        <li><a href="save"><em class="icon ni ni-arrow-down-left"></em><span>Save</span></a></li>

                                                        <li><a href="withdraw"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <div class="card card-bordered">
                                            <div class="nk-wgw">
                                                <div class="nk-wgw-inner">
                                                    <a class="nk-wgw-name" href="withdraw">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-naira"><?php print $base_currency; ?></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Total Withdrawals</h5>
                                                    </a>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount"><?php print $base_currency; ?><?php print number_format(@$sqli->countTotalwithdrawal($sqli->getEmail($_SESSION['user_code']))); ?><span class="currency currency-eth"></span></div>
                                                    </div>
                                                </div>
                                                <div class="nk-wgw-actions">
                                                    <ul>
                                                        <li><a href="deposit"><em class="icon ni ni-arrow-up-right"></em> <span>Top Up</span></a></li>

                                                        <li><a href="invest"><em class="icon ni ni-arrow-down-left"></em><span>Invest</span></a></li>

                                                        <li><a href="save"><em class="icon ni ni-arrow-down-left"></em><span>Save</span></a></li>

                                                        <li><a href="withdraw"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <div class="card card-bordered is-dark">
                                            <div class="nk-wgw">
                                                <div class="nk-wgw-inner">
                                                    <a class="nk-wgw-name" href="wallets">
                                                        <div class="nk-wgw-icon is-default">
                                                            <em class="icon ni ni-sign-naira"><?php print $base_currency; ?></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Bonus Earnings</h5>
                                                    </a>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount"><?php print $base_currency; ?><?php print number_format(@$sqli->countAvailableBonus($sqli->getEmail($_SESSION['user_code']))); ?><span class="currency currency-nio"></span></div>
                                                    </div>
                                                </div>
                                                <div class="nk-wgw-actions">
                                                    <ul>
                                                        <li><a href="deposit"><em class="icon ni ni-arrow-up-right"></em> <span>Top Up</span></a></li>

                                                        <li><a href="invest"><em class="icon ni ni-arrow-down-left"></em><span>Invest</span></a></li>

                                                        <li><a href="save"><em class="icon ni ni-arrow-down-left"></em><span>Save</span></a></li>

                                                        <li><a href="withdraw"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="nk-refwg">
                                        <div class="nk-refwg-invite card-inner">
                                            <div class="nk-refwg-head g-3">
                                                <div class="nk-refwg-title">
                                                    <h5 class="title">Refer Us & Earn</h5>
                                                    <div class="title-sub">Use the bellow link to invite your friends.</div>
                                                </div>
                                                <div class="nk-refwg-action">
                                                    <a target="_blank" href="<?php print $siteLink; ?>?ref=<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'client_username'); ?>" class="btn btn-primary">Invite</a>
                                                </div>
                                            </div>
                                            <div class="nk-refwg-url">
                                                <div class="form-control-wrap">
                                                    <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                                    <div class="form-icon">
                                                        <em class="icon ni ni-link-alt"></em>
                                                    </div>
                                                    <input style="font-size: 12px;" type="text" class="form-control copy-text" id="refUrl" value="<?php print $siteLink; ?>?ref=<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'client_username'); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-refwg-stats card-inner bg-lighter">
                                            <div class="nk-refwg-group g-3">
                                                <div class="nk-refwg-name">
                                                    <h6 class="title">My Referral <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></h6>
                                                </div>
                                                <div class="nk-refwg-info g-3">
                                                    <div class="nk-refwg-sub">
                                                        <div class="title"><?php print @$sqli->countReferals($cal->selectFrmDB($user_tb, 'client_username', 'email', $sqli->getEmail($_SESSION['user_code']))); ?></div>
                                                        <div class="sub-text">Total Referred</div>
                                                    </div>
                                                    <div class="nk-refwg-sub">
                                                        <div class="title"><?php print number_format($sqli->getallRefcom($sqli->getEmail($_SESSION['user_code'])), 2); ?></div>
                                                        <div class="sub-text">Total Referral Earn</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-refwg-ck">
                                                <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="nk-block">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="card-title-group">

                                                <div class="card-title">
                                                    <h5 class="title">My Active Investments</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner p-0" style="overflow: scroll;">
                                            <div class="nk-tb-list nk-tb-tnx">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col"><span>S/N</span></div>
                                                    <div class="nk-tb-col text-right"><span>Amount</span></div>
                                                    <!-- <div class="nk-tb-col text-right"><span>Status</span></div> -->
                                                    <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-md-block">Status</span></div>
                                                    <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-md-block">Incentives</span></div>
                                                    <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-md-block">Duration</span></div>

                                                    <!-- <div class="nk-tb-col tb-col-lg"><span>Package</span></div> -->
                                                    <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-md-block">Date</span></div>
                                                </div>




                                                <?php $sql = query_sql("SELECT * FROM $deposit_tb WHERE `email` = '" . $sqli->getEmail($_SESSION['user_code']) . "' AND `deposit_status`='confirmed' ORDER BY id DESC LIMIT 4");
                                                if (mysqli_num_rows($sql) > 0) {
                                                    $a = 0;
                                                    while ($row = mysqli_fetch_assoc($sql)) { ?>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="nk-tnx-type">

                                                                    <div class="nk-tnx-type-text">
                                                                        <span class="tb-lead"><?php print $a + 1; ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="nk-tb-col text-right">
                                                                <span class="tb-amount"><?php print $base_currency; ?><?php print $row['amount']; ?> <span></span></span>
                                                                <span class="tb-amount-sm"></span>
                                                            </div>

                                                            <div class="nk-tb-col nk-tb-col-status">
                                                                <span class="badge badge-sm badge-dim badge-outline-warning d-md-inline-flex"><?php print $row['deposit_status']; ?></span>
                                                            </div>

                                                            <div class="nk-tb-col nk-tb-col-status">
                                                                <?php print $base_currency; ?><?php print $row['intrest_growth']; ?>
                                                            </div>

                                                            <div class="nk-tb-col nk-tb-col-status">
                                                                <span class="badge badge-sm badge-dim badge-outline-success d-md-inline-flex"><?php print $row['duration']; ?> Months</span>
                                                            </div>

                                                            <!-- <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-lead-sub"><?php print $row['packagetype']; ?></span>
                                                                <span class="badge badge-dot badge-warning"></span>
                                                            </div> -->

                                                            <div class="nk-tb-col text-left">
                                                                <span class="badge badge-sm badge-dim badge-outline-success d-md-inline-flex"><?php print $row['date_created']; ?></span>

                                                            </div>

                                                        </div>



                                                    <?php $a++;
                                                    }
                                                } else { ?>

                                                <?php } ?>



                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <?php require_once('info.php'); ?>

                        </div>
                    </div>
                </div>


                <?php require_once('footer.php'); ?>