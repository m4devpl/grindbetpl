<?php
$rootDir = "../../../";
require_once "$rootDir/appBase.php";
$userMgt->checkIfUserIsLoggedIn();

$tradingPlanResult = $dbConnection->query("SELECT ID FROM investments_tradingplan WHERE Username = '$username' AND Main = '1'");
if ($tradingPlanResult->num_rows > 0) {
	$tradingPlan = new TradingPlan($tradingPlanResult->fetch_assoc()['ID']);
} else {
	Header("Location: {$webBaseURL}/home/investments/tradingplan/list/new-tradingplan/");
	exit();
}


$currMonthDate = date('Y-m-01');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>GrindBet.PL | Investments Dashboard</title>
	<meta name="description" content="GRINDBET is a comprehensive productivity application that aims to help users in different areas of their lives. With its various features and tools, this app can assist you in managing your tasks and projects, maintaining your health, organizing your wallet and keeping track of your calendar.">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:title" content="GrindBet.PL">
	<meta property="og:url" content="https://grindbet.pl/">
	<meta property="og:site_name" content="GrindBet.PL | Productivity App">
	<link rel="canonical" content="https://grindbet.pl/">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="theme-color" content="#1b1b29">

	<link rel="icon" type="image/x-icon" href="//grindbet.pl/favicon.ico">
	<link rel="shortcut icon" href="//grindbet.pl/assets/media/logos/grindbet_web_logo.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="//grindbet.pl/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet">
	<link href="//grindbet.pl/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet">
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="//grindbet.pl/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="//grindbet.pl/assets/css/style.bundle.css" rel="stylesheet">
	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>

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
				<!--begin::Wrapper container-->
				<div class="app-container container-fluid d-flex">
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content">
								<div class="d-flex flex-column flex-xl-row">

									<!--begin::Content-->
									<div class="flex-lg-row-fluid mx-lg-5">
										<!--begin::Row-->
										<div class="row g-5 g-xxl-10">
											<!--begin::Card Widget 22-->
											<div class="card card-reset mb-5 mb-xl-10">
												<!--begin::Body-->
												<div class="card-body p-0">
													<!--begin::Row-->
													<div class="row g-5 g-lg-9">
														<div class="col-4">
															<!--begin::Card-->
															<div class="card card-shadow">
																<!--begin::Body-->
																<div class="card-body p-0 flex-row">
																	<!--begin::Items-->
																	<a href="//grindbet.pl/home/investments/tradingplan/" class="btn btn-active-color-primary px-7 py-6 text-center w-100 d-flex">
																		<!--begin::Icon-->
																		<i class="ki-duotone ki-chart-line-star fs-5x fs-md-3hx ms-n1 me-3">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																		<!--end::Icon-->
																		<!--begin::Desc-->
																		<div class="fw-bold fs-5 pt-4 text-truncate overflow-hidden ">
																			Main Trading Plan</div>
																		<!--end::Desc-->
																	</a>
																	<!--end::Items-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Card-->
														</div>
														<div class="col-4">
															<!--begin::Card-->
															<div class="card card-shadow">
																<!--begin::Body-->
																<div class="card-body p-0 flex-row">
																	<!--begin::Items-->
																	<a href="//grindbet.pl/home/investments/tradingplan/?id=<?php echo $tradingPlanID; ?>" class="btn btn-active-color-primary px-7 py-6 text-start w-100 d-flex flex-row">
																		<!--begin::Icon-->
																		<i class="ki-duotone ki-menu fs-5x fs-md-3hx ms-n1 me-3">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																		<!--end::Icon-->
																		<!--begin::Desc-->
																		<div class="fw-bold fs-5 pt-4 text-truncate overflow-hidden d-md-block">
																			Trading Plans</div>
																		<!--end::Desc-->
																	</a>
																	<!--end::Items-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Card-->
														</div>
														<div class="col-4">
															<!--begin::Card-->
															<div class="card card-shadow">
																<!--begin::Body-->
																<div class="card-body p-0 flex-row">
																	<!--begin::Items-->
																	<a href="//grindbet.pl/home/investments/tradingplan" class="btn btn-active-color-primary px-7 py-6 text-start w-100 d-flex flex-row">
																		<!--begin::Icon-->
																		<i class="ki-duotone ki-more-2 fs-5x fs-md-3hx ms-n1 me-3">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																		<!--end::Icon-->
																		<!--begin::Desc-->
																		<div class="fw-bold fs-5 pt-4 text-truncate overflow-hidden d-md-block">
																			Settings</div>
																		<!--end::Desc-->
																	</a>
																	<!--end::Items-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Card-->
														</div>
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card Widget 22-->
										</div>
										<!--begin::Row-->
										<div class="row g-5 g-xxl-10 p-3">
											<div class="col-12 text-center text-md-start">
												<h1>
													Main Trading Plan Stats
												</h1>
												<div class="badge badge-sm bg-light-dark mx-2 mt-1">
													<?php echo $tradingPlan->name; ?>
												</div>
												<div class="badge badge-sm bg-light-dark me-2 mt-1">
													This Month
												</div>
												<div class="separator my-5 mb-0"></div>
											</div>
											<!--begin::Col-->
											<div class="col-12 col-xl-3">
												<!--begin::Card widget 5-->
												<div class="card card-flush mb-5 mb-xxl-10">
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
													<div class="card-body d-flex align-items-end pt-0">
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
												<!--begin::Card widget 5-->
												<div class="card card-flush">
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
													<div class="card-body d-flex align-items-end pt-0">
														<!--begin::Progress-->
														<div class="d-flex align-items-center flex-column mt-3 w-100">
															<div class="d-flex justify-content-between w-100 mt-auto mb-2">
																<span class="fw-bolder fs-6 text-dark">Take Profits</span>
																<span class="fw-bold fs-6 text-gray-400"><?php echo $tradingPlan->currMonth->tpCount; ?></span>
															</div>
															<div class="h-8px mx-3 w-100 bg-light-success rounded">
																<?php
																if ($tradingPlan->currMonth->tradesCount > 0) {
																	$tpTradesPercent = ($tradingPlan->currMonth->tpCount / $tradingPlan->currMonth->tradesCount) * 100 . "%";
																} else {
																	$tpTradesPercent = "0%";
																}
																?>
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
																<span class="fw-bold fs-6 text-gray-400"><?php echo $tradingPlan->currMonth->beCount; ?></span>
															</div>
															<div class="h-8px mx-3 w-100 bg-light-warning rounded">
																<?php
																if ($tradingPlan->currMonth->tradesCount > 0) {
																	$beTradesPercent = ($tradingPlan->currMonth->beCount / $tradingPlan->currMonth->tradesCount) * 100 . "%";
																} else {
																	$beTradesPercent = "0%";
																}
																?>
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
																<span class="fw-bold fs-6 text-gray-400"><?php echo $tradingPlan->currMonth->slCount; ?></span>
															</div>
															<div class="h-8px mx-3 w-100 bg-light-danger rounded">
																<?php
																if ($tradingPlan->currMonth->tradesCount > 0) {
																	$slTradesPercent = ($tradingPlan->currMonth->slCount / $tradingPlan->currMonth->tradesCount) * 100 . "%";
																} else {
																	$slTradesPercent = "0%";
																}
																?>
																<div class="bg-danger rounded h-8px" role="progressbar" style="width: <?php echo $slTradesPercent; ?>;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="12"></div>
															</div>
														</div>
														<!--end::Progress-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card widget 5-->
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-12 col-xl-9">
												<!--begin::Card-->
												<div class="card">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Recently Played</h2>
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
																		<th class="text-center min-w-150px">Currency</th>
																		<th class="text-center min-w-100px">State</th>
																		<th class="text-center min-w-100px">Profit</th>
																	</tr>
																	<!--end::Table row-->
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody class="fw-bold text-gray-600">

																	<?php
																	$lastMonthDate = date('Y-m-01', strtotime("-1 months"));
																	$tradeResult = $dbConnection->query("SELECT * FROM investments_tradingplan_position WHERE `Trading Plan ID` = '$tradingPlan->id' ORDER BY Date DESC, ID DESC LIMIT 6");

																	while ($tradeRow = $tradeResult->fetch_assoc()) {
																		$date = $tradeRow['Date'];
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
                                                                            <!--begin::Currency-->
                                                                            <td class="text-center">
                                                                                <span class="badge shadow fs-7 badge-light-dark">$currency</span>
                                                                            </td>
                                                                            <!--end::Currency-->
                                                                            <!--begin::State-->
                                                                            <td class="text-center">
                                                                                <span class="badge shadow fs-7 $stateClass">$state</span>
                                                                            </td>
                                                                            <!--end::State-->
                                                                            <!--begin::Profit/Lose-->
                                                                            <td class="text-center">
                                                                                <span class="badge $stateClass fs-base">
                                                                                    <i class="ki-outline $profitLossIcon fs-5 $stateTextColor ms-n1"></i>$$profit
                                                                                </span>
                                                                            </td>
                                                                            <!--end::Profit/Lose-->
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
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
								</div>
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Main-->
				</div>
				<!--end::Wrapper container-->
			</div>
			<!--end::Wrapper-->
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
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="//grindbet.pl/assets/js/widgets.bundle.js"></script>
	<script src="//grindbet.pl/assets/js/custom/widgets.js"></script>
	<script src="//grindbet.pl/assets/js/custom/apps/investments/view/add-position.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>

</html>