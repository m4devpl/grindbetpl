<?php
$rootDir = "../../../";
require_once "$rootDir/appBase.php";
$userMgt->checkIfUserIsLoggedIn();

$position_currency_pair = htmlentities($_POST['position_currency_pair'], ENT_QUOTES);
$position_state = htmlentities($_POST['position_state'], ENT_QUOTES);
$position_exec_date = htmlentities($_POST['position_exec_date'], ENT_QUOTES);
$position_rr = htmlentities($_POST['position_rr'], ENT_QUOTES);
$position_profit = htmlentities($_POST['position_profit'], ENT_QUOTES);

$tradingMgt->addNewTradingPosition($position_exec_date, $position_currency_pair, $position_state, $position_rr, $position_profit, '', '', '', '');

    header("Location: {$webBaseURL}/home/investments/tradingplan/");
    exit();
?>
