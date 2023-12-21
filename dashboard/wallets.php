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
    header("location:wallets?done=" . $msg);
}
if (isset($_GET['done']) && !empty($_GET['done'])) {
    $msg = $_GET['done'];
}

$title = 'My Investment Wallets | ' . $siteName;
$desc = '';
require_once('check-verification.php');
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
                            <div class="nk-block-head">
                                <div class="nk-block-between-md">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><a class="back-to" href="wallets"><em class="icon ni ni-arrow-left"></em><span>My Investment</span></a></div>
                                        <div class="nk-wgwh">
                                            <em class="icon-circle icon-circle-lg icon"><?php print $base_currency; ?></em>
                                            <div class="nk-wgwh-title h5"> Accounts <small>/</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="nk-block">
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-content">
                                        <div class="nk-wg1">
                                            <div class="nk-wg1-group g-2">
                                                <div class="nk-wg1-item mr-xl-4">
                                                    <div class="nk-wg1-title text-soft">Available Balance</div>
                                                    <div class="nk-wg1-amount">
                                                        <div class="amount"><?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance'), 2); ?> <small class="currency currency-usd">USD</small></div>
                                                    </div>
                                                </div>
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
                                                    <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-md-block">Status</span></div>
                                                    <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-md-block">Accumulated Profit</span></div>
                                                    <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-md-block">Duration</span></div>
                                                    <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-md-block">Date</span></div>
                                                    <div class="nk-tb-col tb-col-lg"><span>Package</span></div>
                                                </div>




                                                <?php $sql = query_sql("SELECT * FROM $deposit_tb WHERE `email` = '" . $sqli->getEmail($_SESSION['user_code']) . "' AND `deposit_status`='confirmed' ORDER BY id DESC ");
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
                                                            <div class="nk-tb-col text-left">
                                                                <span class="badge badge-sm badge-dim badge-outline-success d-md-inline-flex"><?php print $row['date_created']; ?></span>

                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span class="tb-lead-sub"><?php print $row['packagetype']; ?></span>
                                                                <span class="badge badge-dot badge-warning"></span>
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

                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <?php require_once('footer.php'); ?>