<?php
require_once "../../../appBase.php";
$userMgt->checkIfUserIsLoggedIn();
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
	<meta property="og:url" content="https:/grindbet.pl/">
	<meta property="og:site_name" content="GrindBet.PL | Productivity App">
	<link rel="canonical" content="https:/grindbet.pl/">
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
										<a routerLink="/" class="text-white text-hover-primary">
											<i class="ki-outline ki-home text-gray-700 fs-6"></i>
										</a>
									</li>
									<!--end::Item-->
								</ul>
								<!--end::Breadcrumb-->
								<!--begin::Page title-->
								<div class="page-title d-flex align-items-center me-3">
									<!--begin::Title-->
									<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
										Dashboard</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
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
								<!--begin::Row-->
								<div class="row g-5 g-xxl-10">
									<!--begin::Card Widget 22-->
									<div class="card card-reset mb-5 mb-xl-10">
										<!--begin::Body-->
										<div class="card-body p-0">
											<!--begin::Row-->
											<div class="row g-5 g-lg-9">
												<div class="col-12 col-md-6">
													<!--begin::Card-->
													<div class="card card-shadow">
														<!--begin::Body-->
														<div class="card-body p-0 flex-row">
															<!--begin::Items-->
															<a href="//grindbet.pl/home/investments/tradingplan" class="btn btn-active-color-primary px-7 py-6 text-start w-100 d-flex flex-row">
																<!--begin::Icon-->
																<i class="ki-duotone ki-chart-line-star fs-2x fs-lg-3hx ms-n1 me-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
																<!--end::Icon-->
																<!--begin::Desc-->
																<div class="fw-bold fs-5 pt-4 text-truncate overflow-hidden">
																	Trading Plan</div>
																<!--end::Desc-->
															</a>
															<!--end::Items-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Card-->
												</div>
												<div class="col-12 col-md-6">
													<!--begin::Card-->
													<div class="card card-shadow">
														<!--begin::Body-->
														<div class="card-body p-0 flex-row">
															<!--begin::Items-->
															<a href="//grindbet.pl/home/investments/tradingplan" class="btn btn-active-color-primary px-7 py-6 text-start w-100 d-flex flex-row">
																<!--begin::Icon-->
																<i class="ki-duotone ki-more-2 fs-2x fs-lg-3hx ms-n1 me-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
																<!--end::Icon-->
																<!--begin::Desc-->
																<div class="fw-bold fs-5 pt-4 text-truncate overflow-hidden">
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
								<div class="row g-5 g-xxl-10">
									<!--begin::Col-->
									<div class="col-xl-3">
										<!--begin::Card widget 5-->
										<div class="card card-flush mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">$886.76</span>
														<!--end::Amount-->
														<!--begin::Badge-->
														<span class="badge badge-light-danger fs-base">
															<i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>11.4%</span>
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
														<span class="fw-bolder fs-6 text-dark">Starting 1000$</span>
														<span class="fw-bold fs-6 text-danger">-113.24$</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-light-danger rounded">
														<div class="bg-dark rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Progress-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card widget 5-->
										<!--begin::Card widget 5-->
										<div class="card card-flush mb-xl-10">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<div class="card-title d-flex flex-column">
													<!--begin::Info-->
													<div class="d-flex align-items-center">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">40%</span>
														<!--end::Amount-->
														<!--begin::Badge-->
														<span class="badge badge-light-success fs-base">
															<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4%</span>
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
														<span class="fw-bold fs-6 text-gray-400">2</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-light-success rounded">
														<div class="bg-success rounded h-8px" role="progressbar" style="width: 16.6%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="12"></div>
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
														<span class="fw-bold fs-6 text-gray-400">7</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-light-warning rounded">
														<div class="bg-warning rounded h-8px" role="progressbar" style="width: 58.3%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="12"></div>
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
														<span class="fw-bold fs-6 text-gray-400">3</span>
													</div>
													<div class="h-8px mx-3 w-100 bg-light-danger rounded">
														<div class="bg-danger rounded h-8px" role="progressbar" style="width: 25%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="12"></div>
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
									<div class="col-xl-9">
										<!--begin::List widget 23-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-gray-800">Recently played</span>
													<span class="text-gray-400 mt-1 fw-semibold fs-6"></span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar"></div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Items-->
												<div class="">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-5">
															<!--begin::Flag-->
															<img src="//grindbet.pl/assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Number-->
															<span class="text-gray-800 fw-bold fs-4 me-3">579</span>
															<!--end::Number-->
															<!--begin::Info-->
															<div class="m-0">
																<!--begin::Label-->
																<span class="badge badge-light-success fs-base">
																	<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
																<!--end::Label-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-5">
															<!--begin::Flag-->
															<img src="//grindbet.pl/assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Number-->
															<span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
															<!--end::Number-->
															<!--begin::Info-->
															<div class="m-0">
																<!--begin::Label-->
																<span class="badge badge-light-danger fs-base">
																	<i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
																<!--end::Label-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-5">
															<!--begin::Flag-->
															<img src="//grindbet.pl/assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Number-->
															<span class="text-gray-800 fw-bold fs-4 me-3">794</span>
															<!--end::Number-->
															<!--begin::Info-->
															<div class="m-0">
																<!--begin::Label-->
																<span class="badge badge-light-success fs-base">
																	<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
																<!--end::Label-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-5">
															<!--begin::Flag-->
															<img src="//grindbet.pl/assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Number-->
															<span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
															<!--end::Number-->
															<!--begin::Info-->
															<div class="m-0">
																<!--begin::Label-->
																<span class="badge badge-light-success fs-base">
																	<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
																<!--end::Label-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-5">
															<!--begin::Flag-->
															<img src="//grindbet.pl/assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Number-->
															<span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
															<!--end::Number-->
															<!--begin::Info-->
															<div class="m-0">
																<!--begin::Label-->
																<span class="badge badge-light-success fs-base">
																	<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
																<!--end::Label-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-5">
															<!--begin::Flag-->
															<img src="//grindbet.pl/assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Number-->
															<span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
															<!--end::Number-->
															<!--begin::Info-->
															<div class="m-0">
																<!--begin::Label-->
																<span class="badge badge-light-success fs-base">
																	<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>1.9%</span>
																<!--end::Label-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::List widget 23-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
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
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="//grindbet.pl/assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="//grindbet.pl/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="//grindbet.pl/assets/js/widgets.bundle.js"></script>
	<script src="//grindbet.pl/assets/js/custom/widgets.js"></script>
	<script src="//grindbet.pl/assets/js/custom/apps/chat/chat.js"></script>
	<script src="//grindbet.pl/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="//grindbet.pl/assets/js/custom/utilities/modals/users-search.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>

</html>