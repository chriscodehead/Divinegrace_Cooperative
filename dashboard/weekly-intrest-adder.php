<?php require_once('../library.php'); ?>
<?php
//Sat, Sun 
$day_on = date('D');

$cal->add_interest_weeklyLA();
$cal->weekly_ConunterLA();

$cal->add_interest_weeklyLB();
$cal->weekly_ConunterLB();

$cal->add_interest_weeklyLC();
$cal->weekly_ConunterLC();

$cal->add_interest_weeklyLD();
$cal->weekly_ConunterLD();

$cal->add_interest_weeklyLE();
$cal->weekly_ConunterLE();

$cal->add_interest_weeklyLF();
$cal->weekly_ConunterLF();

$cal->add_interest_weeklyLG();
$cal->weekly_ConunterLG();

/*if($day_on=='Sat' || $day_on=='Sun'){
 
}else{*/



//}
?>