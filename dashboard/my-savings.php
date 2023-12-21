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

$title = 'My Savings | ' . $siteName;
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
          <div class="nk-block-head-sub"><a class="back-to" href="withdrawal-history"><em class="icon ni ni-arrow-left"></em><span>History</span></a></div>
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
             <div class="nk-wg1-title text-soft">Savings Balance</div>
             <div class="nk-wg1-amount">
              <div class="amount"> <?php print $base_currency; ?> <?php print  number_format($sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'savings_account'), 2); ?> </div>
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
             <h5 class="title">My Savings</h5>
            </div>
           </div>
          </div>

          <div class="card-inner p-0" style="overflow: scroll;">
           <div class="nk-tb-list nk-tb-tnx p-2">

            <table id="example" class="table table-striped" style="width:100%">
             <thead>
              <tr>
               <th>S/N</th>
               <th>Balance</th>
               <th>Total Saved</th>
               <th>Status</th>
               <!-- <th>Charges</th> -->
               <th>Duration</th>
               <!-- <th>Package</th> -->
               <th>Action</th>
               <th>Withdraw</th>
               <th>Start Date</th>
               <th>Due Date</th>
              </tr>
             </thead>
             <tbody>

              <?php $sql = query_sql("SELECT * FROM $my_savings WHERE `email` = '" . $sqli->getEmail($_SESSION['user_code']) . "' ORDER BY id DESC ");
              if (mysqli_num_rows($sql) > 0) {
               $a = 0;
               while ($row = mysqli_fetch_assoc($sql)) { ?>

                <tr>
                 <td><?php print $a + 1; ?></td>

                 <td><?php print $base_currency; ?><?php print $row['actual_balance']; ?></td>

                 <td><?php print $base_currency; ?><?php print $row['amount']; ?></td>

                 <td><span class="badge badge-sm badge-dim badge-outline-warning d-md-inline-flex"><?php print $row['status']; ?></span></td>

                 <!-- <td><?php print $base_currency; ?><?php print $row['charges']; ?></td> -->

                 <td><span class="badge badge-sm badge-dim badge-outline-primary d-md-inline-flex"><?php print $row['duration']; ?> Months</span></td>



                 <!-- <td><span class="tb-lead-sub"><?php print $row['plan']; ?></span>
                  <span class="badge badge-dot badge-warning"></span>
                 </td> -->

                 <td>
                  <?php if ($row['status'] == 'Done') { ?>
                   --
                  <?php } else { ?>
                   <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button onclick="window.location.href='savings-topup?id=<?php print $row['saving_id']; ?>' ;" type=" button" class="btn btn-warning btn-sm">TopUp</button>
                    <button onclick="window.location.href = 'saving-termination?id=<?php print $row['saving_id']; ?>';" type="button" class="btn btn-danger btn-sm">Terminate</button>
                   </div>
                  <?php } ?>
                 </td>

                 <td>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                   <?php if ($row['status'] == 'Done') { ?>
                    --
                   <?php } else { ?>
                    <?php
                    $remainingTime = $row['expire'] - time();
                    if ($remainingTime > 0) { ?>
                     Running...
                    <?php } else { ?>
                     <a href="withdraw-savings?id=<?php print $row['saving_id']; ?>"><button type="button" class="btn btn-warning btn-sm">Withdraw</button></a>
                    <?php } ?>

                   <?php } ?>
                  </div>
                 </td>

                 <td><span class="badge badge-sm badge-dim badge-outline-primary d-md-inline-flex"><?php print $row['date_created']; ?></span></td>

                 <td><span class="badge badge-sm badge-dim badge-outline-primary d-md-inline-flex"><?php print date('Y-m-d H:i:s', $row['expire']); ?> </span></td>

                </tr>

               <?php $a++;
               }
              } else { ?>

              <?php } ?>

             </tbody>
            </table>

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
    <script>
     $(document).ready(function() {
      new DataTable('#example');
     });
    </script>