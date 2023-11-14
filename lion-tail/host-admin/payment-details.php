<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova6w = '';
$actova10 = '';
$actova44aw = 'active'; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php require_once('../../emails_lib.php'); ?>
<?php require_once('../../lib/sqli-functions.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>
<?php
$msg = '';

if (isset($_POST['walletset'])) {
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $name4 = $_POST['name4'];
    $name5 = $_POST['name5'];

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $number3 = $_POST['number3'];
    $number4 = $_POST['number4'];
    $number5 = $_POST['number5'];

    $bank1 = $_POST['bank1'];
    $bank2 = $_POST['bank2'];
    $bank3 = $_POST['bank3'];
    $bank4 = $_POST['bank4'];
    $bank5 = $_POST['bank5'];

    $show1 = $_POST['show1'];
    $show2 = $_POST['show2'];
    $show3 = $_POST['show3'];
    $show4 = $_POST['show4'];
    $show5 = $_POST['show5'];

    if (!empty($name1)) {
        $feilds = array('name1', 'name2', 'name3', 'name4', 'name5', 'number1', 'number2', 'number3', 'number4', 'number5', 'bank1', 'bank2', 'bank3', 'bank4', 'bank5', 'show1', 'show2', 'show3', 'show4', 'show5');
        $value = array($name1, $name2, $name3, $name4, $name5, $number1, $number2, $number3, $number4, $number5, $bank1, $bank2, $bank3, $bank4, $bank5, $show1, $show2, $show3, $show4, $show5);
        $msg = $cal->update($payment_account, $feilds, $value, 'id', 1);
    } else {
        $msg = "Field is empty!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Products | ';
require_once('head.php') ?>

<body>
    <!-- container section start -->
    <section id="container" class="" style="margin-bottom:100px;">
        <?php require_once('header.php') ?>
        <?php require_once('sidebar.php') ?>
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--overview start-->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-laptop"></i> Payment</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
                            <li><i class="fa fa-laptop"></i> Add Payment Details</li>
                        </ol>
                    </div>
                </div>

                <?php if (!empty($msg)) { ?>
                    <div class="row">
                        <div id="go" class=" col-lg-12">
                            <div id="go" class="alert alert-warning" style="text-align: center; color:#FFF;"><?php print @$msg; ?> <i id="remove" class="fa fa-remove pull-right"></i></div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div id="go" class=" col-lg-12">
                            <div id="go" class="alert alert-warning" style="text-align: center; color:#000;">Add Manual Payment Details <i id="remove" class="fa fa-remove pull-right"></i></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <th>S/N</th>
                                    <th>ACCOUNT NAME</th>
                                    <th>ACCOUNT NUMBER</th>
                                    <th>BANK NAME</th>
                                    <th>SHOW/HIDE</th>
                                </thead>
                                <tbody>
                                    <?php for ($a = 1; $a <= 5; $a++) { ?>
                                        <tr>
                                            <td>ACCOUNT <?php print $a; ?></td>
                                            <td><input name="name<?php print $a; ?>" value="<?php print $sqli->getPaymentAccount('name' . $a); ?>" type="text" class="form-control" placeholder="Account Name" /></td>

                                            <td>
                                                <input name="number<?php print $a; ?>" value="<?php print $sqli->getPaymentAccount('number' . $a); ?>" type="text" class="form-control" placeholder="Account Number" />
                                            </td>

                                            <td><input name="bank<?php print $a; ?>" value="<?php print $sqli->getPaymentAccount('bank' . $a); ?>" type="text" class="form-control" placeholder="Bank Name" /></td>

                                            <td>
                                                <?php $show = $sqli->getPaymentAccount('show' . $a); ?>
                                                <select name="show<?php print $a; ?>" class="form-control">
                                                    <option <?php if ($show == 'yes') print "selected='selected'"; ?> value="yes">Active</option>
                                                    <option <?php if ($show == 'no') print "selected='selected'"; ?> value="no">Disabled</option>
                                                </select>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                    <tr>
                                        <td></td>
                                        <td><input class="btn btn-primary" type="submit" name="walletset" value="Update" /></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div><!--/.row-->




            </section>

            <!--main content end-->
        </section>
        <!-- container section start -->
    </section>



    <!-- javascripts -->
    <?php require_once('jsfiles.php') ?>
    <!-- charts scripts -->
</body>

</html>