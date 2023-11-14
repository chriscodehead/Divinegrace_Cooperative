<?php
require_once('include.php');
$title = 'Withdrawal History | '.$siteName;
$desc = '';
require_once('check-verification.php');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$no_of_records_per_page = 10;
$offset = ($page-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $withdraw_tb WHERE `email` = '".$sqli->getEmail($_SESSION['user_code'])."' ";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);


if(isset($_GET['id'])&&!empty($_GET['id'])){
    $d_id=$_GET['id'];
}else{
    header('location:withdraw?id=BTC');
}

$msg = '';
if (isset($_POST['sub'])) {
    $amount_to_withdraw = $cal->selectFrmDB($deposit_tb,'amount','id',$d_id);
    //$_POST['amount'];
    $payment_wallet = $cal->selectFrmDB($user_tb,'wallet_address','email',$sqli->getEmail($_SESSION['user_code']));
    $plan_type = 'CAPITAL';
    $coin_type = $cal->selectFrmDB($deposit_tb,'coin_type','id',$d_id);;
    $name = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'first_name');
    $available_balance = $cal->selectFrmDB($deposit_tb,'amount','id',$d_id);


            if ($payment_wallet == "") {
                $msg = 'Please supply your payment wallet address. <a href="add-wallet">Click here to!</a>';
            } else {
                
                    if (!empty($amount_to_withdraw)) {
                     
                            
                                if ($available_balance >= $amount_to_withdraw) {
                                    $new_account_balance = $available_balance - $amount_to_withdraw;
                                    $fields = array('amount');
                                    $values = array($new_account_balance);
                                    if ($msg = $cal->update($deposit_tb, $fields, $values, 'id', $d_id)) {

                                        $trn_id = $bassic->randGenerator();
                                        $fieldsW = array('id', 'transaction_id', 'email', 'amount', 'status', 'date_time', 'type', 'remove', 'plan_type', 'coin_type');
                                        $valuesW = array(null, $trn_id, $sqli->getEmail($_SESSION['user_code']), $amount_to_withdraw, 'processing', $bassic->getDate(), 'Capital Withdrawal', 'no', $plan_type, $coin_type);
                                        $info = $cal->CreatWithdrawBTC($withdraw_tb, $fieldsW, $valuesW);
                                        $email_call->withdrwalNotification($amount_to_withdraw, $plan_type, 'USDT', $trn_id, $name, $sqli->getEmail($_SESSION['user_code']), $payment_wallet);
                                        if ($info == 88) {
                                            $msg = 'Your withdrawal was successful expect payment soon!';
                                        } else {
                                            $msg = 'Unexpected error occurred. Try again later!';
                                        }
                                    } else {
                                        $msg = 'Unexpected error occurred. Try again later!';
                                    }
                                } else {
                                    $msg = 'Insufficient fund to carry out this transaction!';
                                }
                           
                        
                    } else {
                        $msg = 'Please fill out all required fields correctly! eg(Amount to withdraw)';
                    }
                
            }
}

require_once('head.php');?>
<body class="nk-body bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <?php require_once('side-bar.php');?>
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <?php require_once('header.php');?>
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between g-3">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Principal</h3>
                                        <div class="nk-block-des text-soft">
                                            
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li><a href="withdraw" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-send"></em><span>Withdraw</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a target="_blank" href="<?php print $siteLink;?>?ref=<?php print $sqli->getRow($sqli->getEmail($_SESSION['user_code']),'client_username');?>" class="dropdown-toggle btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                    <h5 class="title">Pricipal Withdrawal</h5>
                                                    <?php if (!empty($msg)) { ?>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            <?php print @$msg; ?>
                                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner p-0" style="overflow: scroll;">
                                            <div class="nk-tb-list nk-tb-tnx">
                                                
                                            <form action="" method="post" enctype="multipart/form-data" class="">
                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" id="basic-datatable">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                <?php //$select->createWithdrawalALL22($sqli->getEmail($_SESSION['user_code']),@$_GET['id'],@$_GET['ip']);?>
                                                <tr>
                                                    <td colspan="5"><input readyonly type="text" id="amt" name="amount" placeholder="" value="<?php print @$cal->selectFrmDB($deposit_tb,'amount','id',$d_id);?>" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5"><button name="sub" type="submit" id="sub" class="btn btn-raised btn-primary btn-round waves-effect" style=" margin-top:25px !important; font-size:16px !important;"> Withdraw Capital </button></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </form>

                                            </div>
                                        </div>

                                       

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
<?php require_once('footer.php');?>