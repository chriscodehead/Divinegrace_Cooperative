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
$actova44aD = 'active'; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php require_once('../../emails_lib.php'); ?>
<?php require_once('../../lib/sqli-functions.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>
<?php
$msg = '';

if (isset($_POST['settings'])) {

    $site_name = $_POST['site_name'];
    $site_whatsapp_num = $_POST['site_whatsapp_num'];
    $site_phone = $_POST['site_phone'];
    $site_address = $_POST['site_address'];
    $coin_initial = $_POST['coin_initial'];
    $coin_value_in_usd = $_POST['coin_value_in_usd'];
    $withdrawal_charge = $_POST['withdrawal_charge'];
    $min_withdraw = $_POST['min_withdraw'];

    $level1 = $_POST['level1'];
    $level2 = $_POST['level2'];
    $level3 = $_POST['level3'];
    $level4 = $_POST['level4'];
    $level5 = $_POST['level5'];
    $level6 = $_POST['level6'];
    $level7 = $_POST['level7'];

    $min1 = $_POST['min1'];
    $min2 = $_POST['min2'];
    $min3 = $_POST['min3'];
    $min4 = $_POST['min4'];
    $min5 = $_POST['min5'];
    $min6 = $_POST['min6'];
    $min7 = $_POST['min7'];

    $max1 = $_POST['max1'];
    $max2 = $_POST['max2'];
    $max3 = $_POST['max3'];
    $max4 = $_POST['max4'];
    $max5 = $_POST['max5'];
    $max6 = $_POST['max6'];
    $max7 = $_POST['max7'];

    $profit1 = $_POST['profit1'];
    $profit2 = $_POST['profit2'];
    $profit3 = $_POST['profit3'];
    $profit4 = $_POST['profit4'];
    $profit5 = $_POST['profit5'];
    $profit6 = $_POST['profit6'];
    $profit7 = $_POST['profit7'];

    $ref1 = $_POST['ref1'];
    $ref2 = $_POST['ref2'];
    $ref3 = $_POST['ref3'];
    $ref4 = $_POST['ref4'];
    $ref5 = $_POST['ref5'];
    $ref6 = $_POST['ref6'];
    $ref7 = $_POST['ref7'];

    $slot1 = $_POST['slot1'];
    $slot2 = $_POST['slot2'];
    $slot3 = $_POST['slot3'];
    $slot4 = $_POST['slot4'];
    $slot5 = $_POST['slot5'];
    $slot6 = $_POST['slot6'];
    $slot7 = $_POST['slot7'];

    $duration1 = $_POST['duration1'];
    $duration2 = $_POST['duration2'];
    $duration3 = $_POST['duration3'];
    $duration4 = $_POST['duration4'];
    $duration5 = $_POST['duration5'];
    $duration6 = $_POST['duration6'];
    $duration7 = $_POST['duration7'];

    $description1 = $_POST['description1'];
    $description2 = $_POST['description2'];
    $description3 = $_POST['description3'];
    $description4 = $_POST['description4'];
    $description5 = $_POST['description5'];
    $description6 = $_POST['description6'];
    $description7 = $_POST['description7'];

    $show1 = $_POST['show1'];
    $show2 = $_POST['show2'];
    $show3 = $_POST['show3'];
    $show4 = $_POST['show4'];
    $show5 = $_POST['show5'];
    $show6 = $_POST['show6'];
    $show7 = $_POST['show7'];

    if (!empty($level1) && !empty($level2) && !empty($level3) && !empty($level4) && !empty($level5) && !empty($level6) && !empty($level7)) {
        $feilds = array('site_name', 'site_whatsapp_num', 'site_phone', 'site_address', 'coin_initial', 'coin_value_in_usd', 'withdrawal_charge', 'min_withdraw', 'level1', 'level2', 'level3', 'level4', 'level5', 'level6', 'level7', 'min1', 'min2', 'min3', 'min4', 'min5', 'min6', 'min7', 'max1', 'max2', 'max3', 'max4', 'max5', 'max6', 'max7', 'profit1', 'profit2', 'profit3', 'profit4', 'profit5', 'profit6', 'profit7', 'ref1', 'ref2', 'ref3', 'ref4', 'ref5', 'ref6', 'ref7', 'slot1', 'slot2', 'slot3', 'slot4', 'slot5', 'slot6', 'slot7', 'duration1', 'duration2', 'duration3', 'duration4', 'duration5', 'duration6', 'duration7', 'description1', 'description2', 'description3', 'description4', 'description5', 'description6', 'description7', 'show1', 'show2', 'show3', 'show4', 'show5', 'show6', 'show7');

        $value = array($site_name, $site_whatsapp_num, $site_phone, $site_address, $coin_initial, $coin_value_in_usd, $withdrawal_charge, $min_withdraw, $level1, $level2, $level3, $level4, $level5, $level6, $level7, $min1, $min2, $min3, $min4, $min5, $min6, $min7, $max1, $max2, $max3, $max4, $max5, $max6, $max7, $profit1, $profit2, $profit3, $profit4, $profit5, $profit6, $profit7, $ref1, $ref2, $ref3, $ref4, $ref5, $ref6, $ref7, $slot1, $slot2, $slot3, $slot4, $slot5, $slot6, $slot7, $duration1, $duration2, $duration3, $duration4, $duration5, $duration6, $duration7, $description1, $description2, $description3, $description4, $description5, $description6, $description7, $show1, $show2, $show3, $show4, $show5, $show6, $show7);

        $msg = $cal->update($settings, $feilds, $value, 'id', 1);
    } else {
        $msg = "Fill all empty fields!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Settings | ';
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
                        <h3 class="page-header"><i class="fa fa-laptop"></i> Update Settings</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
                            <li><i class="fa fa-laptop"></i> Settings</li>
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
                            <div id="go" class="alert alert-warning" style="text-align: center; color:#000;">Update Account Settings <i id="remove" class="fa fa-remove pull-right"></i></div>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>
                                    <tr>
                                        <td>Site Name:</td>
                                        <td><input name="site_name" value="<?php print $sqli->getSettings('site_name'); ?>" type="text" class="form-control" placeholder="Site Name" /></td>
                                    </tr>
                                    <tr>
                                        <td>Site WhatsApp Number:</td>
                                        <td><input name="site_whatsapp_num" value="<?php print $sqli->getSettings('site_whatsapp_num'); ?>" type="text" class="form-control" placeholder="Site WhatsApp Number" /></td>
                                    </tr>
                                    <tr>
                                        <td>Site Phone Number:</td>
                                        <td><input name="site_phone" value="<?php print $sqli->getSettings('site_phone'); ?>" type="text" class="form-control" placeholder="Site Phone Number" /></td>
                                    </tr>
                                    <tr>
                                        <td>Site Address:</td>
                                        <td><input name="site_address" value="<?php print $sqli->getSettings('site_address'); ?>" type="text" class="form-control" placeholder="Site Address" /></td>
                                    </tr>
                                    <tr style="display: none;">
                                        <td>Coin Symble:</td>
                                        <td><input name="coin_initial" value="<?php print $sqli->getSettings('coin_initial'); ?>" type="text" class="form-control" placeholder="Coin Symble" /></td>
                                    </tr>
                                    <tr style="display: none;">
                                        <td>Coin value in usd:</td>
                                        <td><input name="coin_value_in_usd" value="<?php print $sqli->getSettings('coin_value_in_usd'); ?>" type="text" class="form-control" placeholder="Coin value in usd" /></td>
                                    </tr>
                                    <tr>
                                        <td>Withdrawal Charges(₦):</td>
                                        <td><input name="withdrawal_charge" value="<?php print $sqli->getSettings('withdrawal_charge'); ?>" type="text" class="form-control" placeholder="Withdrawal Charges" /></td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Withdrawal(₦):</td>
                                        <td><input name="min_withdraw" value="<?php print $sqli->getSettings('min_withdraw'); ?>" type="text" class="form-control" placeholder="Minimum Withdrawal" /></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>
                                    <tr>
                                        <th>S/N</th>
                                        <th>PLAN</th>
                                        <th>Min Deposit(₦)</th>
                                        <th>Max Deposit(₦)</th>
                                        <th>Monthly incentives(₦)</th>
                                        <th>Slot Limit</th>
                                        <th>Duration</th>
                                        <th>Referral Bonus(₦)</th>
                                        <th>Description</th>
                                        <th>SHOW/HIDE</th>
                                    </tr>
                                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                                        <tr>
                                            <td><?php print $i; ?></td>
                                            <td><input name="level<?php print $i; ?>" value="<?php print $sqli->getSettings('level' . $i); ?>" type="text" class="form-control" placeholder="Level <?php print $i; ?>" /></td>
                                            <td><input name="min<?php print $i; ?>" value="<?php print $sqli->getSettings('min' . $i); ?>" type="number" class="form-control" placeholder="" /></td>
                                            <td><input name="max<?php print $i; ?>" value="<?php print $sqli->getSettings('max' . $i); ?>" type="number" class="form-control" placeholder="" /></td>
                                            <td><input name="profit<?php print $i; ?>" value="<?php print $sqli->getSettings('profit' . $i); ?>" type="text" class="form-control" placeholder="" /></td>
                                            <td><input name="slot<?php print $i; ?>" value="<?php print $sqli->getSettings('slot' . $i); ?>" type="number" class="form-control" placeholder="" /></td>
                                            <td><?php $duration = $sqli->getSettings('duration' . $i); ?>
                                                <select class="form-control" name="duration<?php print $i; ?>">
                                                    <?php for ($a = 1; $a <= 12; $a++) { ?>
                                                        <option <?php if ($duration == $a) print "selected='selected'"; ?> value="<?php print $a; ?>"><?php print $a; ?> Month(s)</option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td><input name="ref<?php print $i; ?>" value="<?php print $sqli->getSettings('ref' . $i); ?>" type="text" class="form-control" placeholder="" /></td>
                                            <td><textarea name="description<?php print $i; ?>" class="form-control" placeholder=""><?php print $sqli->getSettings('description' . $i); ?></textarea></td>

                                            <td>
                                                <?php $show = $sqli->getSettings('show' . $i); ?>
                                                <select name="show<?php print $i; ?>" class="form-control">
                                                    <option <?php if ($show == 'yes') print "selected='selected'"; ?> value="yes">Active</option>
                                                    <option <?php if ($show == 'no') print "selected='selected'"; ?> value="no">Disabled</option>
                                                </select>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td colspan="6"><input class="btn btn-primary btn-block" type="submit" name="settings" value="Update" /></td>
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