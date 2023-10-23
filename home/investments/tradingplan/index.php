<?php
$rootDir = "../../../";
require_once "$rootDir/appBase.php";
$projectID = htmlentities($_GET['project'], ENT_QUOTES);
$targetID = htmlentities($_GET['target'], ENT_QUOTES);

$currMonthDate = date('Y-m-01');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrindBet.PL | Trading Plan</title>
    <meta name="description" content="GRINDBET is a comprehensive productivity application that aims to help users in different areas of their lives. With its various features and tools, this app can assist you in managing your tasks and projects, maintaining your health, organizing your wallet and keeping track of your calendar.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="GrindBet.PL">
    <meta property="og:url" content="https:/grindbet.pl/">
    <meta property="og:site_name" content="GrindBet.PL | Productivity App">
    <link rel="canonical" content="https:/grindbet.pl/">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="icon" type="image/x-icon" href="//grindbet.pl/favicon.ico">
    <link rel="shortcut icon" href="//grindbet.pl/assets/media/logos/grindbet_web_logo.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="//grindbet.pl/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="//grindbet.pl/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="//grindbet.pl/assets/css/style.bundle.css" rel="stylesheet">
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::loader-->
    <div class="app-page-loader">
        <span class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </span>
    </div>
    <!--end::Loader-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <?php require_once "../../../main/components/header/header.php"; ?>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar pt-4 pt-lg-7 mb-n2 mb-lg-n3">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-row-fluid">
                        <!--begin::Toolbar container-->
                        <div class="d-flex flex-stack flex-row-fluid">
                            <!--begin::Toolbar container-->
                            <div class="d-flex flex-column flex-row-fluid">
                                <!--begin::Toolbar wrapper-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-1 mb-lg-3 me-2 fs-7">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                        <a href="//grindbet.pl/" class="text-white text-hover-primary">
                                            <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                        <a href="//grindbet.pl/home/investments" class="text-gray-700 text-hover-dark">
                                            Investmens
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                        <a href="//grindbet.pl/investments/tradingplan" class="text-gray-700 text-hover-dark">
                                            Trading Plan
                                        </a>
                                    </li>
                                    <!--end::Item-->

                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Wrapper container-->
                <div class="app-container container-fluid d-flex">
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content">
                                <!--begin::Layout-->
                                <div class="d-flex flex-column flex-xl-row">
                                    <!--begin::Sidebar-->
                                    <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                                        <!--begin::Card widget 5-->
                                        <div class="card card-flush mb-xl-10">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <?php
                                                            $balance = 0;
                                                            $balancePercent = "100%";
                                                            $currDate = date('Y-m-d');
                                                            
                                                            // Get Starting Balance
                                                            $balanceResult = $dbConnection->query("SELECT * FROM investments_account_size WHERE Username='$username' AND Date <= '$currDate' ORDER BY Date DESC LIMIT 1");
                                                            if ($balanceResult->num_rows == 1) {
                                                                $startingBalance = $balanceResult->fetch_assoc()['Size'];
                                                                
                                                                $profitLossForStartingBalanceResult = $dbConnection->query("SELECT SUM(Profit) FROM investments_tradingplan WHERE Username='$username' AND Date < '$currMonthDate'");
                                                                if ($profitLossForStartingBalanceResult->num_rows>0) {
                                                                    $startingBalance += $profitLossForStartingBalanceResult->fetch_assoc()['SUM(Profit)'];
                                                                }
                                                                
                                                                // Get ProfitLoss State for This Month
                                                                $profitLossThisMonthResult = $dbConnection->query("SELECT SUM(Profit) FROM investments_tradingplan WHERE Username='$username'");
                                                                if ($profitLossThisMonthResult->num_rows > 0) {
                                                                    $profitLoss = round($profitLossThisMonthResult->fetch_assoc()['SUM(Profit)'],2);

                                                                    // Calc current balance
                                                                    $balance = $startingBalance + $profitLoss;

                                                                    // Check if ProfitLoss is Profit or Loss
                                                                    if ($profitLoss>=0) {
                                                                        $balancePercent = round((($startingBalance/$balance)*100),2);
                                                                        $balancePercentString = $balancePercent.'%';
                                                                        $progressColor = 'bg-success';
                                                                        $profitColor = 'text-success';
                                                                        $badgeProfitColor = 'badge-light-success';
                                                                        $badgeProfitIcon = 'ki-arrow-up';
                                                                        $profitLossString = '+$'.$profitLoss;
                                                                    } else {
                                                                        $balancePercent = round((($balance/$startingBalance)*100),2);
                                                                        $balancePercentString = $balancePercent.'%';
                                                                        $progressColor = 'bg-light-danger';
                                                                        $profitColor = 'text-danger';
                                                                        $badgeProfitIcon = 'ki-arrow-down';
                                                                        $badgeProfitColor = 'badge-light-danger';
                                                                        $profitLossString = '-$'.($profitLoss*-1);
                                                                    } 
                                                                }                 
                                                            }
                                                        ?>
                                                        <!--begin::Amount-->
                                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">$<?php echo $balance; ?></span>
                                                        <!--end::Amount-->
                                                        <!--begin::Badge-->
                                                        <span class="badge <?php echo $badgeProfitColor; ?> fs-base">
                                                            <i class="ki-outline <?php echo $badgeProfitIcon; ?> fs-5 <?php echo $profitColor; ?> ms-n1"></i><?php echo 100-$balancePercent; ?>%</span>
                                                        <!--end::Badge-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Account Size</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                        <span class="fw-bolder fs-6 text-dark">Starting $<?php echo $startingBalance; ?></span>
                                                        <span class="fw-bold fs-6 <?php echo $profitColor; ?>"><?php echo $profitLossString; ?></span>
                                                    </div>
                                                    <div class="h-8px mx-3 w-100 <?php echo $progressColor; ?> rounded">
                                                        <div class="bg-dark rounded h-8px" role="progressbar" style="width: <?php echo $balancePercentString; ?>;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 5-->
                                        <!--begin::Card widget 5-->
                                        <div class="card card-flush mb-xl-10">
                                            <?php
                                            $tradeEffectivenessResult = $dbConnection->query("SELECT * FROM investments_tradingplan WHERE Username = '$username' AND Date >= '$currMonthDate'");

                                            $tradesCount = $tradeEffectivenessResult->num_rows;

                                            $tpTradeResult = $dbConnection->query("SELECT * FROM investments_tradingplan WHERE Username = '$username' AND State='TP' AND Date >= '$currMonthDate'");
                                            $tpTradesCount = $tpTradeResult->num_rows;

                                            $beTradeResult = $dbConnection->query("SELECT * FROM investments_tradingplan WHERE Username = '$username' AND State='BE' AND Date >= '$currMonthDate'");
                                            $beTradesCount = $beTradeResult->num_rows;

                                            $slTradeResult = $dbConnection->query("SELECT * FROM investments_tradingplan WHERE Username = '$username' AND State='SL' AND Date >= '$currMonthDate'");
                                            $slTradesCount = $slTradeResult->num_rows;

                                            $tradesToCount = $tpTradesCount + $beTradesCount + $slTradesCount;

                                            $tpTradesPercent = (($tpTradesCount / $tradesToCount) * 100) . '%';
                                            $beTradesPercent = (($beTradesCount / $tradesToCount) * 100) . '%';
                                            $slTradesPercent = (($slTradesCount / $tradesToCount) * 100) . '%';

                                            $effectiveness = round(($tpTradesCount / ($slTradesCount + $tpTradesCount)*100),0);

                                            ?>
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Amount-->
                                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?php echo $effectiveness; ?>%</span>
                                                        <!--end::Amount-->
                                                        <!--begin::Badge-->
                                                        <span class="badge badge-light-success fs-base d-none">
                                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0%</span>
                                                        <!--end::Badge-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Your effectiveness</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                        <span class="fw-bolder fs-6 text-dark">Take Profits</span>
                                                        <span class="fw-bold fs-6 text-gray-400"><?php echo $tpTradesCount; ?></span>
                                                    </div>
                                                    <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: <?php echo $tpTradesPercent; ?>;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="12"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center flex-column w-100">
                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                        <span class="fw-bolder fs-6 text-dark">Breakevens</span>
                                                        <span class="fw-bold fs-6 text-gray-400"><?php echo $beTradesCount; ?></span>
                                                    </div>
                                                    <div class="h-8px mx-3 w-100 bg-light-warning rounded">
                                                        <div class="bg-warning rounded h-8px" role="progressbar" style="width: <?php echo $beTradesPercent; ?>;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="12"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Card body-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Progress-->
                                                <div class="d-flex align-items-center flex-column w-100">
                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                        <span class="fw-bolder fs-6 text-dark">Stop Losses</span>
                                                        <span class="fw-bold fs-6 text-gray-400"><?php echo $slTradesCount; ?></span>
                                                    </div>
                                                    <div class="h-8px mx-3 w-100 bg-light-danger rounded">
                                                        <div class="bg-danger rounded h-8px" role="progressbar" style="width: <?php echo $slTradesPercent; ?>;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="12"></div>
                                                    </div>
                                                </div>
                                                <!--end::Progress-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 5-->
                                    </div>
                                    <!--end::Sidebar-->
                                    <!--begin::Content-->
                                    <div class="flex-lg-row-fluid ms-lg-15">
                                        <!--begin:::Tabs-->
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">This month</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Last Month</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item ms-auto">
                                                <!--begin::Action menu-->
                                                <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
                                                    <i class="ki-outline ki-down fs-2 me-0"></i></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">

                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-3"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-5">
                                                        <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Target</div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-5">
                                                        <a href="#" class="menu-link text-danger px-5">Delete Target</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                <!--end::Menu-->
                                            </li>
                                            <!--end:::Tab item-->
                                        </ul>
                                        <!--end:::Tabs-->
                                        <!--begin:::Tab content-->
                                        <div class="tab-content" id="myTabContent">
                                            <!--begin:::Tab pane-->
                                            <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>This Month</h2>
                                                        </div>
                                                        <!--end::Card title-->
                                                        <!--begin::Card toolbar-->
                                                        <div class="card-toolbar">
                                                            <!--begin::Filter-->
                                                            <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                                                                <i class="ki-outline ki-plus-square fs-3"></i>Add New</button>
                                                            <!--end::Filter-->
                                                        </div>
                                                        <!--end::Card toolbar-->
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0 pb-5">
                                                        <!--begin::Table-->
                                                        <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
                                                            <!--begin::Table head-->
                                                            <thead>
                                                                <!--begin::Table row-->
                                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                    <th class="text-start min-w-100px">Date</th>
                                                                    <th class="text-center min-w-100px">Day of Week</th>
                                                                    <th class="text-center min-w-150px">Currency</th>
                                                                    <th class="text-center min-w-100px">State</th>
                                                                    <th class="text-center min-w-100px">RR</th>
                                                                    <th class="text-center min-w-100px">Profit</th>
                                                                    <th class="text-end"></th>
                                                                </tr>
                                                                <!--end::Table row-->
                                                            </thead>
                                                            <!--end::Table head-->
                                                            <!--begin::Table body-->
                                                            <tbody class="fw-bold text-gray-600">

                                                                <?php
                                                                $tradeResult = $dbConnection->query("SELECT * FROM investments_tradingplan WHERE Username = '$username' AND Date >= '$currMonthDate' ORDER BY Date DESC, ID DESC");

                                                                while ($tradeRow = $tradeResult->fetch_assoc()) {
                                                                    $date = $tradeRow['Date'];
                                                                    $dayOfWeek = date("l", strtotime($date));
                                                                    $currency = $tradeRow['Currency'];
                                                                    $state = $tradeRow['State'];
                                                                    $rr = $tradeRow['RiskRewardRatio'];
                                                                    $profit = $tradeRow['Profit'];

                                                                    $stateClass = '';
                                                                    $stateTDClass = '';
                                                                    $stateTextColor = '';
                                                                    switch ($state) {
                                                                        case 'TP':
                                                                            $state = 'Take Profit';
                                                                            $stateClass = 'badge-light-success';
                                                                            $stateTDClass = 'bg-light-success';
                                                                            $stateTextColor = 'text-success';
                                                                            break;
                                                                        case 'BE':
                                                                            $state = 'Breakeven';
                                                                            $stateClass = 'badge-light-warning';
                                                                            $stateTDClass = 'bg-light-warning';
                                                                            $stateTextColor = 'text-warning';
                                                                            break;
                                                                        case 'SL';
                                                                            $state = 'Stop Loss';
                                                                            $stateClass = 'badge-light-danger';
                                                                            $stateTDClass = 'bg-light-danger';
                                                                            $stateTextColor = 'text-danger';
                                                                            break;
                                                                        default:
                                                                            $stateClass = 'badge-light-dark';
                                                                            $stateTDClass = 'bg-light-dark';
                                                                            $stateTextColor = 'text-light-dark';
                                                                            break;
                                                                    }

                                                                    $profitLossIcon = '';
                                                                    if ((float)$profit < 0) {
                                                                        $profitLossIcon = 'ki-arrow-down';
                                                                        $profit = (float)$profit * (-1);
                                                                    } else if ((float)$profit > 0) {
                                                                        $profitLossIcon = 'ki-arrow-up';
                                                                    }

                                                                    echo <<<END
                                                                        <tr>
                                                                            <!--begin::Date-->
                                                                            <td class="ps-2 border-none">
                                                                                $date
                                                                            </td>
                                                                            <!--end::Date-->
                                                                            <!--begin::Day of Week-->
                                                                            <td class="text-center">
                                                                                <span class="badge shadow fs-7 badge-light-dark">$dayOfWeek</span>
                                                                            </td>
                                                                            <!--end::Day of Week-->
                                                                            <!--begin::Currency-->
                                                                            <td class="text-center">
                                                                                <span class="badge shadow fs-7 badge-light-dark">$currency</span>
                                                                            </td>
                                                                            <!--end::Currency-->
                                                                            <!--begin::State-->
                                                                            <td class="text-center $stateTDClass">
                                                                                <span class="badge shadow fs-7 $stateClass">$state</span>
                                                                            </td>
                                                                            <!--end::State-->
                                                                            <!--begin::RR-->
                                                                            <td class="text-center">
                                                                                <span class="text-white">$rr</span>
                                                                            </td>
                                                                            <!--end::RR-->
                                                                            <!--begin::Profit/Lose-->
                                                                            <td class="text-center">
                                                                                <span class="badge $stateClass fs-base">
                                                                                    <i class="ki-outline $profitLossIcon fs-5 $stateTextColor ms-n1"></i>$$profit
                                                                                </span>
                                                                            </td>
                                                                            <!--end::Profit/Lose-->

                                                                            <!--begin::Actions-->
                                                                            <td class="text-end">
                                                                    END;
                                                                    if ($status != 'On Hold' and $status != 'Done') {
                                                                        echo <<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-success h-25px w-25px">
                                                                                    <i class="ki-duotone ki-check fs-2">
                                                                                    </i>
                                                                                </button>
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-warning h-25px w-25px">
                                                                                    <i class="fa-solid fa-pause"></i>
                                                                                </button>
                                                                            END;
                                                                    }
                                                                    if ($status == 'On Hold') {
                                                                        echo <<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-primary h-25px w-25px">
                                                                                    <i class="ki-duotone ki-to-right fs-2"></i>
                                                                                </button>
                                                                            END;
                                                                    }
                                                                    echo <<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-info btn-active-light-primary toggle h-25px w-25px">
                                                                                    <i class="ki-duotone ki-brush">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                    </i>
                                                                                </button>
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-danger btn-active-light-primary toggle h-25px w-25px">
                                                                                    <i class="ki-duotone ki-trash">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                        <span class="path3"></span>
                                                                                        <span class="path4"></span>
                                                                                        <span class="path5"></span>
                                                                                    </i>
                                                                                </button>
                                                                            </td>
                                                                            <!--end::Actions-->
                                                                        </tr>
                                                                    END;
                                                                }
                                                                ?>
                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end:::Tab pane-->
                                            <!--begin:::Tab pane-->
                                            <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Last Month</h2>
                                                        </div>
                                                        <!--end::Card title-->
                                                        <!--begin::Card toolbar-->
                                                        <div class="card-toolbar">
                                                            <!--begin::Filter-->
                                                            <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                                                                <i class="ki-outline ki-plus-square fs-3"></i>Add New</button>
                                                            <!--end::Filter-->
                                                        </div>
                                                        <!--end::Card toolbar-->
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0 pb-5">
                                                        <!--begin::Table-->
                                                        <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
                                                            <!--begin::Table head-->
                                                            <thead>
                                                                <!--begin::Table row-->
                                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                    <th class="text-start min-w-100px">Date</th>
                                                                    <th class="text-center min-w-100px">Day of Week</th>
                                                                    <th class="text-center min-w-150px">Currency</th>
                                                                    <th class="text-center min-w-100px">State</th>
                                                                    <th class="text-center min-w-100px">RR</th>
                                                                    <th class="text-center min-w-100px">Profit</th>
                                                                    <th class="text-end"></th>
                                                                </tr>
                                                                <!--end::Table row-->
                                                            </thead>
                                                            <!--end::Table head-->
                                                            <!--begin::Table body-->
                                                            <tbody class="fw-bold text-gray-600">

                                                                <?php
                                                                $lastMonthDate = date('Y-m-01', strtotime("-1 months"));
                                                                $tradeResult = $dbConnection->query("SELECT * FROM investments_tradingplan WHERE Username = '$username' AND Date >= '$lastMonthDate' AND Date < '$currMonthDate' ORDER BY Date DESC, ID DESC");

                                                                while ($tradeRow = $tradeResult->fetch_assoc()) {
                                                                    $date = $tradeRow['Date'];
                                                                    $dayOfWeek = date("l", strtotime($date));
                                                                    $currency = $tradeRow['Currency'];
                                                                    $state = $tradeRow['State'];
                                                                    $rr = $tradeRow['RiskRewardRatio'];
                                                                    $profit = $tradeRow['Profit'];

                                                                    $stateClass = '';
                                                                    $stateTDClass = '';
                                                                    $stateTextColor = '';
                                                                    switch ($state) {
                                                                        case 'TP':
                                                                            $state = 'Take Profit';
                                                                            $stateClass = 'badge-light-success';
                                                                            $stateTDClass = 'bg-light-success';
                                                                            $stateTextColor = 'text-success';
                                                                            break;
                                                                        case 'BE':
                                                                            $state = 'Breakeven';
                                                                            $stateClass = 'badge-light-warning';
                                                                            $stateTDClass = 'bg-light-warning';
                                                                            $stateTextColor = 'text-warning';
                                                                            break;
                                                                        case 'SL';
                                                                            $state = 'Stop Loss';
                                                                            $stateClass = 'badge-light-danger';
                                                                            $stateTDClass = 'bg-light-danger';
                                                                            $stateTextColor = 'text-danger';
                                                                            break;
                                                                        default:
                                                                            $stateClass = 'badge-light-dark';
                                                                            $stateTDClass = 'bg-light-dark';
                                                                            $stateTextColor = 'text-light-dark';
                                                                            break;
                                                                    }

                                                                    $profitLossIcon = '';
                                                                    if ((float)$profit < 0) {
                                                                        $profitLossIcon = 'ki-arrow-down';
                                                                        $profit = (float)$profit * (-1);
                                                                    } else if ((float)$profit > 0) {
                                                                        $profitLossIcon = 'ki-arrow-up';
                                                                    }

                                                                    echo <<<END
                                                                        <tr>
                                                                            <!--begin::Date-->
                                                                            <td class="ps-2 border-none">
                                                                                $date
                                                                            </td>
                                                                            <!--end::Date-->
                                                                            <!--begin::Day of Week-->
                                                                            <td class="text-center">
                                                                                <span class="badge shadow fs-7 badge-light-dark">$dayOfWeek</span>
                                                                            </td>
                                                                            <!--end::Day of Week-->
                                                                            <!--begin::Currency-->
                                                                            <td class="text-center">
                                                                                <span class="badge shadow fs-7 badge-light-dark">$currency</span>
                                                                            </td>
                                                                            <!--end::Currency-->
                                                                            <!--begin::State-->
                                                                            <td class="text-center $stateTDClass">
                                                                                <span class="badge shadow fs-7 $stateClass">$state</span>
                                                                            </td>
                                                                            <!--end::State-->
                                                                            <!--begin::RR-->
                                                                            <td class="text-center">
                                                                                <span class="text-white">$rr</span>
                                                                            </td>
                                                                            <!--end::RR-->
                                                                            <!--begin::Profit/Lose-->
                                                                            <td class="text-center">
                                                                                <span class="badge $stateClass fs-base">
                                                                                    <i class="ki-outline $profitLossIcon fs-5 $stateTextColor ms-n1"></i>$$profit
                                                                                </span>
                                                                            </td>
                                                                            <!--end::Profit/Lose-->

                                                                            <!--begin::Actions-->
                                                                            <td class="text-end">
                                                                    END;
                                                                    if ($status != 'On Hold' and $status != 'Done') {
                                                                        echo <<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-success h-25px w-25px">
                                                                                    <i class="ki-duotone ki-check fs-2">
                                                                                    </i>
                                                                                </button>
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-warning h-25px w-25px">
                                                                                    <i class="fa-solid fa-pause"></i>
                                                                                </button>
                                                                            END;
                                                                    }
                                                                    if ($status == 'On Hold') {
                                                                        echo <<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-primary h-25px w-25px">
                                                                                    <i class="ki-duotone ki-to-right fs-2"></i>
                                                                                </button>
                                                                            END;
                                                                    }
                                                                    echo <<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-info btn-active-light-primary toggle h-25px w-25px">
                                                                                    <i class="ki-duotone ki-brush">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                    </i>
                                                                                </button>
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-danger btn-active-light-primary toggle h-25px w-25px">
                                                                                    <i class="ki-duotone ki-trash">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                        <span class="path3"></span>
                                                                                        <span class="path4"></span>
                                                                                        <span class="path5"></span>
                                                                                    </i>
                                                                                </button>
                                                                            </td>
                                                                            <!--end::Actions-->
                                                                        </tr>
                                                                    END;
                                                                }
                                                                ?>
                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end:::Tab pane-->
                                        </div>
                                        <!--end:::Tab content-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Layout-->
                                <!--begin::Modals-->
                                <!--begin::Modal - Add Position-->
                                <div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Add a Position</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                                    <i class="ki-outline ki-cross fs-1"></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <!--begin::Form-->
                                                <form id="kt_modal_add_payment_form" class="form" action="#">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-8">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold mb-2">Release Date</label>
                                                        <!--end::Label-->
                                                        <!--begin::Wrapper-->
                                                        <div class="position-relative d-flex align-items-center">
                                                            <!--begin::Icon-->
                                                            <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                                            <!--end::Icon-->
                                                            <!--begin::Input-->
                                                            <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="settings_release_date" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Currency</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid fw-bold" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
                                                            <option></option>
                                                            <?php
                                                            $currencyPairResult = $dbConnection->query("SELECT * FROM investments_supported_pairs ORDER BY currencyPair ASC");
                                                            while ($currencyPairRow = $currencyPairResult->fetch_assoc()) {
                                                                $currencyPair = $currencyPairRow['currencyPair'];
                                                                echo <<<END
                                                                        <option value="$currencyPair">$currencyPair</option>
                                                                    END;
                                                            }

                                                            ?>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Status</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid fw-bold" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
                                                            <option></option>
                                                            <option value="0">LIMIT</option>
                                                            <option value="1">OPEN</option>
                                                            <option value="2">Stop Loss</option>
                                                            <option value="3">Breakeven</option>
                                                            <option value="4">Take Profit</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Risk to Reward Ratio (1:X)</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" name="amount" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Profit / Loss</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="number" class="form-control form-control-solid" name="amount" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-15">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">Note 1</span>
                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Information such as description of invoice or product purchased.">
                                                                <i class="ki-outline ki-information fs-7"></i>
                                                            </span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                                        <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>

                                <!--end::Modals-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                        <!--begin::Footer-->
                        <?php require_once "../../../main/components/footer/footer.php"; ?>
                        <!--end::Footer-->
                    </div>
                    <!--end::Page-->
                </div>
                <!--end::App-->
                <!--begin::Javascript-->
                <!--begin::Theme mode setup on page load-->
                <script>
                    var defaultThemeMode = "light";

                    var themeMode;
                    if (document.documentElement) {
                        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                        } else {
                            if (localStorage.getItem("data-bs-theme") !== null) {
                                themeMode = localStorage.getItem("data-bs-theme");
                            } else {
                                themeMode = defaultThemeMode;
                            }
                        }
                        if (themeMode === "system") {
                            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                        }
                        document.documentElement.setAttribute("data-bs-theme", themeMode);
                    }
                </script>
                <!--end::Theme mode setup on page load-->
                <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                <script src="//grindbet.pl/assets/plugins/global/plugins.bundle.js"></script>
                <script src="//grindbet.pl/assets/js/scripts.bundle.js"></script>
                <!--end::Global Javascript Bundle-->
                <!--begin::Vendors Javascript(used for this page only)-->
                <script src="//grindbet.pl/assets/plugins/custom/datatables/datatables.bundle.js"></script>
                <!--end::Vendors Javascript-->
                <!--end::Javascript-->
</body>
<!--end::Body-->

</html>