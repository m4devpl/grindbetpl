<?php require_once "appBase.php"; ?>
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
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="icon" type="image/x-icon" href="//gadgetforyou.pl/favicon.ico">
	<link rel="shortcut icon" href="//gadgetforyou.pl/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="//gadgetforyou.pl/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet">
	<link href="//gadgetforyou.pl/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet">
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="//gadgetforyou.pl/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="//gadgetforyou.pl/assets/css/style.bundle.css" rel="stylesheet">
	<!--end::Global Stylesheets Bundle-->
	<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
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
							<!--begin::Actions-->
							<div class="d-flex align-items-center gap-3">
								<!--begin::Primary button-->
								<a href="#" class="btn btn-sm btn-flex btn-light h-35 p-3 text-dark"
									data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
									<i class="ki-duotone ki-send">
										<i class="path1"></i>
										<i class="path2"></i>
									</i>
									Invite
								</a>
								<!--end::Primary button-->
							</div>
							<!--end::Actions-->
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
									<div class="col-12 col-md-6 col-lg-8 mb-xxl-10">
										<!--begin::Card Widget 22-->
										<div class="card card-reset mb-5 mb-xl-10">
											<!--begin::Body-->
											<div class="card-body p-0">
												<!--begin::Row-->
												<div class="row g-5 g-lg-9">
													<!--begin::Col-->
													<div class="col-6">
														<!--begin::Card-->
														<div class="card card-shadow">
															<!--begin::Body-->
															<div class="card-body p-0">
																<!--begin::Items-->
																<a href="//gadgetforyou.pl/home/projects"
																	class="btn btn-active-color-primary px-7 py-6 text-start w-100">
																	<!--begin::Icon-->
																	<i
																		class="ki-duotone ki-rocket fs-2x fs-lg-2hx text-gray-500 ms-n1">
																		<i class="path1"></i>
																		<i class="path2"></i>
																	</i>
																	<!--end::Icon-->
																	<!--begin::Desc-->
																	<div class="fw-bold fs-5 pt-4">Projects</div>
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
													<div class="col-6">
														<!--begin::Card-->
														<div class="card card-shadow">
															<!--begin::Body-->
															<div class="card-body p-0">
																<!--begin::Items-->
																<a routerLink="/calendar"
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
																	<div class="fw-bold fs-5 pt-4">Calendar</div>
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
									<div class="col-12 col-md-6 col-lg-4">
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
	<script src="//gadgetforyou.pl/assets/plugins/global/plugins.bundle.js"></script>
	<script src="//gadgetforyou.pl/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--end::Javascript-->
</body>
</html>