<?php 
	require_once "appBase.php";
	$userMgt->checkIfUserIsLoggedIn();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>GrindBet.PL | Home</title>
	<meta name="description"
		content="GRINDBET is a comprehensive productivity application that aims to help users in different areas of their lives. With its various features and tools, this app can assist you in managing your tasks and projects, maintaining your health, organizing your wallet and keeping track of your calendar.">
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
	<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>

<body id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on"
	data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
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
			<?php require_once "main/components/header/header.php"; ?>
			<!--end::Header-->
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Toolbar-->
				<div id="kt_app_toolbar" class="app-toolbar pt-4 pt-lg-7 mb-n2 mb-lg-n3">
					<!--begin::Toolbar container-->
					<div id="kt_app_toolbar_container"
						class="app-container container-fluid d-flex flex-stack flex-row-fluid">
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
									<h1
										class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
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
									<!--begin::Col-->
									<div class="col-12 col-md-6 col-xl-4 mb-xxl-10">
										<!--begin::Card Widget 22-->
										<div class="card card-reset mb-5 mb-xl-10">
											<!--begin::Body-->
											<div class="card-body p-0">
												<!--begin::Row-->
												<div class="row g-5 g-lg-9">
													<!--begin::Col-->
													<div class="col-4 col-md-6">
														<!--begin::Card-->
														<div class="card card-shadow">
															<!--begin::Body-->
															<div class="card-body p-0">
																<!--begin::Items-->
																<a href="//grindbet.pl/home/projects"
																	class="btn btn-active-color-primary px-7 py-6 text-start w-100">
																	<!--begin::Icon-->
																	<i
																		class="ki-duotone ki-rocket fs-2x fs-lg-2hx text-gray-500 ms-n1">
																		<i class="path1"></i>
																		<i class="path2"></i>
																	</i>
																	<!--end::Icon-->
																	<!--begin::Desc-->
																	<div
																		class="fw-bold fs-5 pt-4 text-truncate overflow-hidden">
																		Projects</div>
																	<!--end::Desc-->
																</a>
																<!--end::Items-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Card-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-4 col-md-6">
														<!--begin::Card-->
														<div class="card card-shadow">
															<!--begin::Body-->
															<div class="card-body p-0">
																<!--begin::Items-->
																<a href="home/calendar"
																	class="btn btn-active-color-primary px-7 py-6 text-start w-100">
																	<!--begin::Icon-->
																	<i
																		class="ki-duotone ki-calendar-8 fs-2x fs-lg-2hx text-gray-500 ms-n1">
																		<i class="path1"></i>
																		<i class="path2"></i>
																		<i class="path3"></i>
																		<i class="path4"></i>
																		<i class="path5"></i>
																		<i class="path6"></i>
																	</i>
																	<!--end::Icon-->
																	<!--begin::Desc-->
																	<div
																		class="fw-bold fs-5 pt-4 text-truncate overflow-hidden">
																		Calendar</div>
																	<!--end::Desc-->
																</a>
																<!--end::Items-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Card-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-4 col-md-6">
														<!--begin::Card-->
														<div class="card card-shadow">
															<!--begin::Body-->
															<div class="card-body p-0">
																<!--begin::Items-->
																<a href='../../demo43/dist/apps/file-manager/folders.html'
																	class="btn btn-active-color-primary px-7 py-6 text-start w-100">
																	<!--begin::Icon-->
																	<i
																		class="ki-duotone ki-file-added fs-2x fs-lg-2hx text-gray-500 ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<!--end::Icon-->
																	<!--begin::Desc-->
																	<div
																		class="fw-bold fs-5 pt-4 text-truncate overflow-hidden">
																		File Manager</div>
																	<!--end::Desc-->
																</a>
																<!--end::Items-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Card-->
													</div>
													<!--end::Col-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card Widget 22-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-12 col-md-6 col-xl-8 mb-xxl-10">
										<!--begin::Timeline widget 3-->
										<div class="card card-flush mb-5 ">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark">
														Week's Events
													</span>
													<span class="text-muted mt-1 fw-semibold fs-7 ms-3">Total 21
														events</span>
												</h3>
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<a href="#" class="btn btn-sm btn-light">Today</a>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-7 px-0">
												<!--begin::Nav-->
												<ul
													class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5 w-100 overflow-hidden">

													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center px-2 btn-active-primary"
															data-bs-toggle="tab"
															href="#kt_timeline_widget_3_tab_content_3">
															<span class="fs-6 fw-bold">28</span>
															<span
																class="fs-7 fw-semibold d-none d-md-block ">Monday</span>
															<span class="fs-7 fw-semibold d-block d-md-none">Mo</span>

														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center px-2 btn-active-primary active"
															data-bs-toggle="tab"
															href="#kt_timeline_widget_3_tab_content_4">
															<span class="fs-6 fw-bold">29</span>
															<span
																class="fs-7 fw-semibold d-none d-md-block">Tuesday</span>
															<span class="fs-7 fw-semibold d-block d-md-none">Tu</span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center px-2 btn-active-primary"
															data-bs-toggle="tab"
															href="#kt_timeline_widget_3_tab_content_5">
															<span class="fs-6 fw-bold">30</span>
															<span
																class="fs-7 fw-semibold d-none d-md-block">Wednesday</span>
															<span class="fs-7 fw-semibold d-block d-md-none">Wed</span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center px-2 btn-active-primary"
															data-bs-toggle="tab"
															href="#kt_timeline_widget_3_tab_content_6">
															<span class="fs-6 fw-bold">31</span>
															<span
																class="fs-7 fw-semibold d-none d-md-block">Thurdsay</span>
															<span class="fs-7 fw-semibold d-block d-md-none">Thu</span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center px-2 btn-active-primary"
															data-bs-toggle="tab"
															href="#kt_timeline_widget_3_tab_content_7">
															<span class="fs-6 fw-bold">1</span>
															<span
																class="fs-7 fw-semibold d-none d-md-block">Friday</span>
															<span class="fs-7 fw-semibold d-block d-md-none">Fri</span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center px-2 btn-active-primary"
															data-bs-toggle="tab"
															href="#kt_timeline_widget_3_tab_content_8">
															<span class="fs-6 fw-bold">2</span>
															<span
																class="fs-7 fw-semibold d-none d-md-block">Saturday</span>
															<span class="fs-7 fw-semibold d-block d-md-none">Sat</span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													<!--begin::Nav item-->
													<li class="nav-item p-0 ms-0">
														<!--begin::Date-->
														<a class="nav-link btn d-flex flex-column flex-center px-2 btn-active-primary"
															data-bs-toggle="tab"
															href="#kt_timeline_widget_3_tab_content_9">
															<span class="fs-6 fw-bold">3</span>
															<span
																class="fs-7 fw-semibold d-none d-md-block">Sunday</span>
															<span class="fs-7 fw-semibold d-block d-md-none">Su</span>
														</a>
														<!--end::Date-->
													</li>
													<!--end::Nav item-->
													</li>
													<!--end::Nav item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Tab Content (ishlamayabdi)-->
												<div class="tab-content mb-2 px-9">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">10:20 -
																	11:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Degree
																	Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Peter
																		Marcus</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">12:00 -
																	13:40
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Marketing
																	Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Bob</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">16:30 -
																	17:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">PM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Marketing
																	Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Mark Morris</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active"
														id="kt_timeline_widget_3_tab_content_4">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">10:20 -
																	11:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Degree
																	Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Peter
																		Marcus</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">16:30 -
																	17:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">PM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Dashboard
																	UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Bob</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">12:00 -
																	13:40
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Marketing
																	Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Mark Morris</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">12:00 -
																	13:40
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Dashboard
																	UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Bob</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">10:20 -
																	11:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Degree
																	Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Mark Morris</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">16:30 -
																	17:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">PM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Marketing
																	Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Peter
																		Marcus</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">10:20 -
																	11:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Marketing
																	Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Mark Morris</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">16:30 -
																	17:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">PM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Degree
																	Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Peter
																		Marcus</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">12:00 -
																	13:40
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Dashboard
																	UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Bob</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">12:00 -
																	13:40
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Degree
																	Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Bob</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">10:20 -
																	11:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Dashboard
																	UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Peter
																		Marcus</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">16:30 -
																	17:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">PM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Marketing
																	Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Mark Morris</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">16:30 -
																	17:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">PM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Marketing
																	Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Peter
																		Marcus</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">10:20 -
																	11:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Degree
																	Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Mark Morris</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">12:00 -
																	13:40
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Dashboard
																	UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Bob</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">12:00 -
																	13:40
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Degree
																	Project Estimation Meeting</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Bob</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">16:30 -
																	17:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">PM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">Marketing
																	Campaign Discussion</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Lead
																		by Mark Morris</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Bullet-->
															<span data-kt-element="bullet"
																class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
															<!--end::Bullet-->
															<!--begin::Info-->
															<div class="flex-grow-1 me-5">
																<!--begin::Time-->
																<div class="text-gray-800 fw-semibold fs-2">10:20 -
																	11:00
																	<span
																		class="text-gray-400 fw-semibold fs-7">AM</span>
																</div>
																<!--end::Time-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-semibold fs-6">9 Dashboard
																	UI/UX Design Review</div>
																<!--end::Description-->
																<!--begin::Link-->
																<div class="text-gray-400 fw-semibold fs-7">Lead by
																	<!--begin::Name-->
																	<a href="#"
																		class="text-primary opacity-75-hover fw-semibold">Peter
																		Marcus</a>
																	<!--end::Name-->
																</div>
																<!--end::Link-->
															</div>
															<!--end::Info-->
															<!--begin::Action-->
															<a href="#" class="btn btn-sm btn-light"
																data-bs-toggle="modal"
																data-bs-target="#kt_modal_create_project">View</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
												<!--begin::Action-->
												<div class="float-end d-none">
													<a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal"
														data-bs-target="#kt_modal_create_project">Add Lesson</a>
													<a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
														data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
												</div>
												<!--end::Action-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Timeline widget 3-->
										<!--begin::List widget 2-->
										<div class="card card-flush mb-5 mb-xl-10 col-12">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark">External Links</span>
													<span class="text-gray-400 mt-1 fw-semibold fs-6">Most used
														resources</span>
												</h3>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Title-->
													<a href="#"
														class="text-primary opacity-75-hover fs-6 fw-semibold">Google
														Analytics</a>
													<!--end::Title-->
													<!--begin::Action-->
													<button type="button"
														class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
														<i class="ki-outline ki-exit-right-corner fs-2"></i>
													</button>
													<!--end::Action-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-3"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Title-->
													<a href="#"
														class="text-primary opacity-75-hover fs-6 fw-semibold">Facebook
														Ads</a>
													<!--end::Title-->
													<!--begin::Action-->
													<button type="button"
														class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
														<i class="ki-outline ki-exit-right-corner fs-2"></i>
													</button>
													<!--end::Action-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-3"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Title-->
													<a href="#"
														class="text-primary opacity-75-hover fs-6 fw-semibold">Seranking</a>
													<!--end::Title-->
													<!--begin::Action-->
													<button type="button"
														class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
														<i class="ki-outline ki-exit-right-corner fs-2"></i>
													</button>
													<!--end::Action-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 2-->
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
			<?php require_once "main/components/footer/footer.php"; ?>
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
				} else { themeMode = defaultThemeMode; }
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			} document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="//grindbet.pl/assets/plugins/global/plugins.bundle.js"></script>
	<script src="//grindbet.pl/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--end::Javascript-->
</body>

</html>