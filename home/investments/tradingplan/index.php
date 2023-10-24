<?php
$rootDir = "../../../";
require_once "$rootDir/appBase.php";
$userMgt->checkIfUserIsLoggedIn();


if (!isset($_GET['id'])) {
    $tradingPlanResult = $dbConnection->query("SELECT ID FROM investments_tradingplan WHERE Username = '$username' AND Main = '1'");
    if ($tradingPlanResult->num_rows > 0) {
        $tradingPlan = new TradingPlan($tradingPlanResult->fetch_assoc()['ID']);
    } else {
        Header("Location :{$webBaseURL}/home/investments/tradingplan/list/new-tradingplan/");
        exit();
    }
} else {
    $tradingPlanID = $_GET['id'];
    $tradingPlan = new TradingPlan($tradingPlanID);
}


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
    <meta property="og:url" content="https://grindbet.pl/">
    <meta property="og:site_name" content="GrindBet.PL | Productivity App">
    <link rel="canonical" content="https://grindbet.pl/">
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
                                        <a href="//grindbet.pl/home/investments/dashboard" class="text-gray-700 text-hover-dark">
                                            Investments
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
                                    <!--begin::Content-->
                                    <div class="flex-lg-row-fluid mx-lg-5">
                                        <div class="row p-3">
                                            <div class="col-12 text-center text-md-start">
                                                <h1>
                                                    <?php echo "Trading Plan - " . $tradingPlan->name; ?>
                                                </h1>
                                                <div class="separator my-5 mb-0 w-100"></div>
                                                <!--begin:::Tabs-->
                                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mt-5 px-5">
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
                                                </ul>
                                                <!--end:::Tabs-->

                                                <div class="row mt-5 mx-8 g-5">
                                                    <!-- Balance -->
                                                    <div class="col-6 col-xl-3">
                                                        <!--begin::Card widget 5-->
                                                        <div class="card card-flush mb-xl-10 h-xl-150px">
                                                            <!--begin::Header-->
                                                            <div class="card-header pt-5">
                                                                <!--begin::Title-->
                                                                <div class="card-title d-flex flex-column">
                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <?php
                                                                        $currBalance = $tradingPlan->getCurrBalance();

                                                                        $balanceChangePercent = round((100 - ($currBalance / $tradingPlan->currMonth->startingBalance) * 100) * -1, 1);

                                                                        if ($balanceChangePercent < 0) {
                                                                            $balanceChangePercent = ($balanceChangePercent * -1) . "%";
                                                                            $badgeBalanceChangeColor = "danger";
                                                                            $badgeBalanceChangeIcon = "ki-arrow-down";
                                                                        } else {
                                                                            if ($balanceChangePercent == -0) {
                                                                                $balanceChangePercent = 0;
                                                                            }
                                                                            $balanceChangePercent .= "%";
                                                                            $badgeBalanceChangeColor = "success";
                                                                            $badgeBalanceChangeIcon = "ki-arrow-up";
                                                                        }

                                                                        echo <<<END
                                                                <!--begin::Amount-->
                                                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">$$currBalance</span>
                                                                <!--end::Amount-->
                                                                <!--begin::Badge-->
                                                                <span class="badge badge-light-$badgeBalanceChangeColor fs-base">
                                                                    <i class="ki-outline $badgeBalanceChangeIcon fs-5 text-$badgeBalanceChangeColor ms-n1"></i>$balanceChangePercent</span>
                                                                <!--end::Badge-->
                                                                END;
                                                                        ?>
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
                                                            <div class="card-body d-flex align-items-end pt-0 d-none d-xl-block">
                                                                <!--begin::Progress-->
                                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                                    <?php
                                                                    $currMonthStartingBalance = $tradingPlan->currMonth->startingBalance;
                                                                    $currMonthPnl = $tradingPlan->currMonth->pnl;

                                                                    if ($currMonthPnl < 0) {
                                                                        $currMonthPnl *= -1;
                                                                        $currMonthPnl = "-$" . $currMonthPnl;
                                                                    } else {
                                                                        $currMonthPnl = "+$" . $currMonthPnl;
                                                                    }

                                                                    echo <<<END
                                                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                                <span class="fw-bolder fs-6 text-dark">Starting $$currMonthStartingBalance</span>
                                                                <span class="fw-bold fs-6 text-$badgeBalanceChangeColor ">$currMonthPnl</span>
                                                            </div>
                                                            END;

                                                                    if ($currBalance > $tradingPlan->currMonth->startingBalance) {
                                                                        $balancePercentString = ($tradingPlan->currMonth->startingBalance / $currBalance) * 100 . "%";
                                                                        $progressColor = 'bg-light-success';
                                                                    } else {
                                                                        $balancePercentString = ($currBalance / $tradingPlan->currMonth->startingBalance) * 100 . "%";
                                                                        $progressColor = 'bg-light-danger';
                                                                    }

                                                                    echo <<<END
                                                            <div class="h-8px mx-3 w-100 $progressColor rounded">
                                                                <div class="bg-dark rounded h-8px" role="progressbar" style="width: $balancePercentString"></div>
                                                            </div>
                                                            END;
                                                                    ?>
                                                                </div>
                                                                <!--end::Progress-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end::Card widget 5-->
                                                    </div>
                                                    <!-- Effectiveness -->
                                                    <div class="col-6 col-xl-3">
                                                        <!--begin::Card widget 5-->
                                                        <div class="card card-flush mb-xl-10 h-xl-150px">
                                                            <!--begin::Header-->
                                                            <div class="card-header pt-5">
                                                                <!--begin::Title-->
                                                                <div class="card-title d-flex flex-column">
                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Amount-->
                                                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?php echo $tradingPlan->currMonth->effectiveness; ?>%</span>
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
                                                            <div class="card-body d-flex align-items-end pt-0 d-none d-xl-block">
                                                                <!--begin::Progress-->
                                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                                        <span class="fw-bolder fs-6 text-dark"><?php echo $tradingPlan->currMonth->effectiveness; ?>%</span>
                                                                    </div>
                                                                    <div class="h-8px mx-3 w-100 bg-light-primary rounded">
                                                                        <div class="bg-dark rounded h-8px" role="progressbar" style="width: <?php echo $tradingPlan->currMonth->effectiveness . "%"; ?>"></div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Progress-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end::Card widget 5-->
                                                    </div>
                                                    <!-- Take Profits  -->
                                                    <div class="col-4 col-xl-2">
                                                        <!--begin::Card widget 5-->
                                                        <div class="card card-flush mb-xl-10 h-xl-150px bg-success">
                                                            <!--begin::Header-->
                                                            <div class="card-header pt-5">
                                                                <!--begin::Title-->
                                                                <div class="card-title d-flex flex-column">
                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Amount-->
                                                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?php echo $tradingPlan->currMonth->tpCount; ?></span>
                                                                        <!--end::Amount-->
                                                                        <!--begin::Badge-->
                                                                        <span class="badge badge-light-success fs-base d-none">
                                                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0%</span>
                                                                        <!--end::Badge-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                    <!--begin::Subtitle-->
                                                                    <span class="text-white pt-1 fw-bold fs-7">Take Profits</span>
                                                                    <!--end::Subtitle-->
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Card body-->
                                                            <div class="card-body d-flex align-items-end pt-0 d-none d-xl-block">
                                                                <!--begin::Progress-->
                                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                                        <span class="fw-bolder fs-6 text-white"><?php echo $tradingPlan->currMonth->tpCount; ?> / <?php echo $tradingPlan->currMonth->tradesCount; ?></span>
                                                                    </div>
                                                                    <div class="h-8px mx-3 w-100 bg-light-primary rounded">
                                                                        <?php
                                                                        if ($tradingPlan->currMonth->tradesCount > 0) {
                                                                            $tpTradesPercent = ($tradingPlan->currMonth->tpCount / $tradingPlan->currMonth->tradesCount) * 100 . "%";
                                                                        } else {
                                                                            $tpTradesPercent = "0%";
                                                                        }
                                                                        ?>
                                                                        <div class="bg-dark rounded h-8px" role="progressbar" style="width: <?php echo $tpTradesPercent ?>"></div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Progress-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end::Card widget 5-->
                                                    </div>
                                                    <div class="col-4 col-xl-2">
                                                        <!--begin::Card widget 5-->
                                                        <div class="card card-flush mb-xl-10 h-xl-150px bg-light-warning">
                                                            <!--begin::Header-->
                                                            <div class="card-header pt-5">
                                                                <!--begin::Title-->
                                                                <div class="card-title d-flex flex-column">
                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Amount-->
                                                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?php echo $tradingPlan->currMonth->beCount; ?></span>
                                                                        <!--end::Amount-->
                                                                        <!--begin::Badge-->
                                                                        <span class="badge badge-light-success fs-base d-none">
                                                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0%</span>
                                                                        <!--end::Badge-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                    <!--begin::Subtitle-->
                                                                    <span class="text-dark pt-1 fw-bold fs-7">Breakevens</span>
                                                                    <!--end::Subtitle-->
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Card body-->
                                                            <div class="card-body d-flex align-items-end pt-0 d-none d-xl-block">
                                                                <!--begin::Progress-->
                                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                                        <span class="fw-bolder fs-6 text-dark"><?php echo $tradingPlan->currMonth->beCount . " / " . $tradingPlan->currMonth->tradesCount; ?> </span>
                                                                    </div>
                                                                    <div class="h-8px mx-3 w-100 bg-light-primary rounded">
                                                                        <?php
                                                                        if ($tradingPlan->currMonth->tradesCount > 0) {
                                                                            $beTradesPercent = ($tradingPlan->currMonth->beCount / $tradingPlan->currMonth->tradesCount) * 100 . "%";
                                                                        } else {
                                                                            $beTradesPercent = "0%";
                                                                        }
                                                                        ?>
                                                                        <div class="bg-dark rounded h-8px" role="progressbar" style="width: <?php echo $beTradesPercent ?>"></div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Progress-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end::Card widget 5-->
                                                    </div>
                                                    <div class="col-4 col-xl-2">
                                                        <!--begin::Card widget 5-->
                                                        <div class="card card-flush mb-xl-10 h-xl-150px bg-light-danger">
                                                            <!--begin::Header-->
                                                            <div class="card-header pt-5">
                                                                <!--begin::Title-->
                                                                <div class="card-title d-flex flex-column">
                                                                    <!--begin::Info-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Amount-->
                                                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?php echo $tradingPlan->currMonth->slCount; ?></span>
                                                                        <!--end::Amount-->
                                                                        <!--begin::Badge-->
                                                                        <span class="badge badge-light-success fs-base d-none">
                                                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0%</span>
                                                                        <!--end::Badge-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                    <!--begin::Subtitle-->
                                                                    <span class="text-dark pt-1 fw-semibold fs-7">Stop Losses</span>
                                                                    <!--end::Subtitle-->
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Header-->
                                                            <!--begin::Card body-->
                                                            <div class="card-body d-flex align-items-end pt-0 d-none d-xl-block">
                                                                <!--begin::Progress-->
                                                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                                        <span class="fw-bolder fs-6 text-dark"><?php echo $tradingPlan->currMonth->slCount . " / " . $tradingPlan->currMonth->tradesCount; ?></span>
                                                                    </div>
                                                                    <div class="h-8px mx-3 w-100 bg-light-primary rounded">
                                                                        <?php
                                                                        if ($tradingPlan->currMonth->tradesCount > 0) {
                                                                            $slTradesPercent = ($tradingPlan->currMonth->slCount / $tradingPlan->currMonth->tradesCount) * 100 . "%";
                                                                        } else {
                                                                            $slTradesPercent = "0%";
                                                                        }
                                                                        ?>
                                                                        <div class="bg-dark rounded h-8px" role="progressbar" style="width: <?php echo $slTradesPercent ?>"></div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Progress-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end::Card widget 5-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-5 mt-xl-0">
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
                                                                    <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_trading_position">
                                                                        <i class="ki-outline ki-plus-square fs-3"></i>Add New</button>
                                                                    <!--end::Filter-->
                                                                </div>
                                                                <!--end::Card toolbar-->
                                                            </div>
                                                            <!--end::Card header-->
                                                            <!--begin::Card body-->
                                                            <div class="card-body pt-0 pb-5">
                                                                <div class="table-responsive">
                                                                    <!--begin::Table-->
                                                                    <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
                                                                        <!--begin::Table head-->
                                                                        <thead>
                                                                            <!--begin::Table row-->
                                                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                                <th class="text-start min-w-100px">Date</th>
                                                                                <th class="text-center min-w-100px d-none d-xl-block">Day of Week</th>
                                                                                <th class="text-center min-w-150px">Currency</th>
                                                                                <th class="text-center min-w-100px">State</th>
                                                                                <th class="text-center min-w-100px">RR</th>
                                                                                <th class="text-center min-w-100px">Profit</th>
                                                                                <th class="text-end d-none"></th>
                                                                            </tr>
                                                                            <!--end::Table row-->
                                                                        </thead>
                                                                        <!--end::Table head-->
                                                                        <!--begin::Table body-->
                                                                        <tbody class="fw-bold text-gray-600">

                                                                            <?php
                                                                            $tradeResult = $dbConnection->query("SELECT * FROM investments_tradingplan_position WHERE `Trading Plan ID` = '$tradingPlan->id' AND Date >= '$currMonthDate' ORDER BY Date DESC, ID DESC");

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
                                                                                <td class="text-center  d-none d-xl-block">
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
                                                                                <td class="text-end d-none">
                                                                        END;

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
                                                                    <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_trading_position">
                                                                        <i class="ki-outline ki-plus-square fs-3"></i>Add New</button>
                                                                    <!--end::Filter-->
                                                                </div>
                                                                <!--end::Card toolbar-->
                                                            </div>
                                                            <!--end::Card header-->
                                                            <!--begin::Card body-->
                                                            <div class="card-body pt-0 pb-5">
                                                                <div class="table-responsive">
                                                                    <!--begin::Table-->
                                                                    <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
                                                                        <!--begin::Table head-->
                                                                        <thead>
                                                                            <!--begin::Table row-->
                                                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                                <th class="text-start min-w-100px">Date</th>
                                                                                <th class="text-center min-w-100px d-none d-xl-block">Day of Week</th>
                                                                                <th class="text-center min-w-150px">Currency</th>
                                                                                <th class="text-center min-w-100px">State</th>
                                                                                <th class="text-center min-w-100px">RR</th>
                                                                                <th class="text-center min-w-100px">Profit</th>
                                                                                <th class="text-end d-none"></th>
                                                                            </tr>
                                                                            <!--end::Table row-->
                                                                        </thead>
                                                                        <!--end::Table head-->
                                                                        <!--begin::Table body-->
                                                                        <tbody class="fw-bold text-gray-600">

                                                                            <?php
                                                                            $lastMonthDate = date('Y-m-01', strtotime("-1 months"));
                                                                            $tradeResult = $dbConnection->query("SELECT * FROM investments_tradingplan_position WHERE `Trading Plan ID` = '$tradingPlan->id' AND Date >= '$lastMonthDate' AND Date < '$currMonthDate' ORDER BY Date DESC, ID DESC");

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
                                                                                <td class="text-center d-none d-xl-block">
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
                                                                                    <span class="fs-7 $stateClass">$state</span>
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
                                                                                <td class="text-end d-none">
                                                                        END;

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
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end::Card-->
                                                    </div>
                                                    <!--end:::Tab pane-->
                                                </div>
                                                <!--end:::Tab content-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Layout-->
                                <!--begin::Modals-->
                                <?php
                                require_once "../../../main/components/wizards/new-trading-position/new-trading-position.php";
                                ?>
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
                <script src="//grindbet.pl/assets/js/custom/apps/investments/view/add-position.js"></script>
                <!--end::Javascript-->
</body>
<!--end::Body-->

</html>