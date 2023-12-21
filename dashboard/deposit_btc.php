<?php require_once('../con-cot/conn_sqli.php'); ?>
<?php require_once('../library.php'); ?>
<?php require_once('../lib/sqli-functions.php'); ?>
<?php require_once('../lib/basic-functions.php'); ?>
<?php require_once('../emails_lib.php');
$cal->checkLogedIN('../login'); ?>
<?php
$msg = '';
$fname = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'first_name');
$lname = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'last_name');
$sex = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'sex');
$phone = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'phone');
$country = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'country');
$address = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'address');
$btc_address = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'wallet_address');

if (isset($_POST['amount'])) {
	//if(!empty($fname)&&!empty($btc_address)){
	$amount = mysqli_real_escape_string($link, htmlentities($_POST['amount']));
	$plan_type = mysqli_real_escape_string($link, htmlentities($_POST['plan']));
	$plan = 'LEVEL' . $plan_type;
	$min = $_POST['min' . $plan_type];
	$max = $_POST['max' . $plan_type];
	$duration = $_POST['duration' . $plan_type];
	$amount_to_pay = $amount;
	if (!is_numeric($amount)) {
		header("location:invest?message=Please enter a valid amount!");
	} else {
		if (!empty($amount) && !empty($plan)) {

			if ($amount < $min || $amount > $max) {
				header('location:invest?message=You investment amount must fall within the investment range of $' . $min . ' - $' . $max . '. Thank you');
			} else {

				$account_balance = $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'main_account_balance');
				$new_account_balance = $account_balance - $amount;
				if ($account_balance > $amount) {

					$fields = array('id', 'transaction_id', 'email', 'amount', 'intrest_growth', 'deposit_status', 'deposit_category', 'description', 'place_order', 'received_status', 'payout_consent', 'day_counter', 'date_created', 'total_not_paid', 'total_paid', 'btc_address', 'ethereum_address', 'plan_type', 'coin_type', 'coin_value', 'expire_time', 'packagetype', 'status_url', 'invest_week_day', 'transaction_hash', 'perfectmoney', 'ltc', 'duration', 'investment_date');

					$tID = $bassic->randGenerator() . $cal->getLastID($deposit_tb);
					$intrest_growth = 0;
					$deposit_status = 'confirmed';
					$category = $plan . '-INVESTMENT';
					$category_REF = '';
					$description = '';
					$place_order = 'no';
					$received_status = 'no';
					$payout_consent = 'no';
					$day_counter = 0;
					$total_not_paid = 0;
					$total_paid = 0;
					$btc_address = '';
					$ethereum_address = '';
					$plan_type = $plan;
					$coin_type = '';
					$coin_value = '';
					$expire_time = time() + ($duration * 60 * 60);
					$status_url = '';
					$invest_week_day = date('D');
					$transaction_hash = '';
					$perfectmoney = '';
					$ltc = '';
					$package = $plan;
					$bonus_level = 1;
					$coin_type_ref = '';
					$duration = $duration;
					$investment_date = date('j');
					if ($investment_date == 29 || $investment_date == 30 || $investment_date == 31) {
						$investment_date = 28;
					}

					$values = array(null, $tID, $sqli->getEmail($_SESSION['user_code']), $amount, $intrest_growth, $deposit_status, $category, $description, $place_order, $received_status, $payout_consent, $day_counter, $bassic->getDate(), $total_not_paid, $total_paid, $btc_address, $ethereum_address, $plan_type, $coin_type, $coin_value, $expire_time, $package, $status_url, $invest_week_day, $transaction_hash, $perfectmoney, $ltc, $duration, $investment_date);
					$pasER = $cal->depositBTC($deposit_tb, $fields, $values);

					if ($pasER == 100) {
						///referral
						$ref = $cal->selectFrmDB($user_tb, 'referral_username', 'email', $sqli->getEmail($_SESSION['user_code']));
						if ($ref == "") {
						} else {
							if ($plan == 'LEVEL7') {
								$referral_cut = $amount * ($siteRefG / 100);
							} else if ($plan == 'LEVEL6') {
								$referral_cut = $amount * ($siteRefF / 100);
							} else if ($plan == 'LEVEL5') {
								$referral_cut = $amount * ($siteRefE / 100);
							} else if ($plan == 'LEVEL4') {
								$referral_cut = $amount * ($siteRefD / 100);
							} else if ($plan == 'LEVEL3') {
								$referral_cut = $amount * ($siteRefC / 100);
							} else if ($plan == 'LEVEL2') {
								$referral_cut = $amount * ($siteRefB / 100);
							} else if ($plan == 'LEVEL1') {
								$referral_cut = $amount * ($siteRefA / 100);
							} else {
								$referral_cut = $amount * ($siteRefA / 100);
							}

							$Ref_tID = $bassic->randGenerator() . $cal->getLastID($deposit_tb);
							$re_M = $cal->selectFrmDB($user_tb, 'referral_username', 'email', $sqli->getEmail($_SESSION['user_code']));
							$ref_emm = $cal->selectFrmDB($user_tb, 'email', 'client_username', $re_M);

							$sql = "SELECT * FROM $life_one_bonus WHERE `boss_email`='" . $ref_emm . "' and `ref_email`='" . $sqli->getEmail($_SESSION['user_code']) . "' ";
							$result = query_sql($sql);
							if (mysqli_num_rows($result) > 0) {
							} else {

								$fieldsR = array('id', 'transaction_id', 'referral_email', 'referred_email', 'amount', 'balance', 'deposit_category', 'status', 'date_created', 'plan_type', 'coin_type', 'referral_level');

								$valuesR = array(null, $tID, $ref_emm, $sqli->getEmail($_SESSION['user_code']), $referral_cut, $referral_cut, $category_REF, 'confirmed', $bassic->getDate(), $plan_type, $coin_type_ref, $bonus_level);

								$cal->insertDataB($referral_tb, $fieldsR, $valuesR);

								$feildY = array('boss_email', 'ref_email');
								$valueY = array($ref_emm, $sqli->getEmail($_SESSION['user_code']));
								$cal->insertDataB($life_one_bonus, $feildY, $valueY);
							}
						}

						$payername = $cal->selectFrmDB($user_tb, 'first_name', 'email', $sqli->getEmail($_SESSION['user_code']));
						$payerLname = $cal->selectFrmDB($user_tb, 'last_name', 'email', $sqli->getEmail($_SESSION['user_code']));
						$payerusername = $cal->selectFrmDB($user_tb, 'client_username', 'email', $sqli->getEmail($_SESSION['user_code']));

						$_SESSION['plan'] = $plan;
						$_SESSION['amt'] = $amount;
						$_SESSION['currency'] = $coin;
						$_SESSION['TID'] = 'Transaction ID= ' . $tID . ' --//-- Customer Email= ' . $sqli->getEmail($_SESSION['user_code']) . ' --//-- Deposit Category= ' . $category . ' --//-- Customer Name= ' . $payername . ' ' . $payerLname . ' --//-- Customer Username= ' . $payerusername;
						$_SESSION['TIDer'] = $tID;
						$_SESSION['user_email'] = $sqli->getEmail($_SESSION['user_code']);
						$_SESSION['user_name'] = $payername . ' ' . $payerLname;

						$fields = array('main_account_balance');
						$values = array($new_account_balance);
						$account_update = $cal->update($user_tb, $fields, $values, 'email', $sqli->getEmail($_SESSION['user_code']));

						$subjt = 'You placed and investment!';
						$message = 'Hi ' . $fname . ', your investment of ' . $base_currency . $amount . ' was successfully. Plan:' . $plan;
						$siteName = $siteName;
						$siteDomain = $domain;
						$email_call->generalMessage($subjt, $message, $email, $siteName, $siteDomain);

						$email_call->adminDepositNoticeNotsuccessf($amount, $plan, $coin_type, $tID, $sqli->getRow($sqli->getEmail($_SESSION['user_code']), 'first_name'), $sqli->getEmail($_SESSION['user_code']));

						header("location:invest?message=Your investment was successful!");
					} else {
						$msg = $pasER;
						header("location:invest?message=" . $pasER);
					}
				} else {
					header("location:invest?message=Insufficient fund to carry out this transaction!");
				}
			}
		} else {
			header("location:invest?message=Please enter a valid amount to invest!");
		}
	} ///numeric

}
?>