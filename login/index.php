<?php
require_once "../appBase.php";
$userMgt->redirectHomeIfLoggedIn();
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>GrindBet.PL | Login</title>
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
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="//grindbet.pl/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="//grindbet.pl/assets/css/style.bundle.css" rel="stylesheet">
	<!--end::Global Stylesheets Bundle-->
	<!--begin::Fonts(for this page only)-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	<!--end::Fonts(for this page only)-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--begin::Body-->

<body id="kt_body" class="app-blank" style="font-family: 'Open Sans', sans-serif;">
	<!--begin::loader-->
	<div class="app-page-loader">
		<span class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</span>
	</div>
	<!--end::Loader-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Page bg image-->
		<!--end::Page bg image-->
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-column-fluid flex-lg-row">
			<!--begin::Aside-->
			<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
				<!--begin::Aside-->
				<div class="d-flex flex-center flex-lg-center flex-column">
					<!--begin::Logo-->
					<a href="//grindbet.pl" class="mb-lg-7">
						<img src="//grindbet.pl/assets/media/logos/grindbet_web_logo.png" class="d-block w-50px w-lg-150px">
					</a>
					<!--end::Logo-->
				</div>
				<!--begin::Aside-->
			</div>
			<!--begin::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
				<!--begin::Card-->
				<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
					<!--begin::Wrapper-->
					<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
						<!--begin::Form-->
						<form class="form w-100" method="post" novalidate="novalidate" id="kt_sign_in_form" action="login.php">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->
							<!--begin::Login options-->
							<div class="row g-3 mb-9">
								<!--begin::Col-->
								<div class="col-md-6">
									<!--begin::Google link=-->
									<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="//grindbet.pl/assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
									<!--end::Google link=-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6">
									<!--begin::Google link=-->
									<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="//grindbet.pl/assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
										<img alt="Logo" src="//grindbet.pl/assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
									<!--end::Google link=-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Login options-->
							<!--begin::Separator-->
							<div class="separator separator-content my-14">
								<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
							</div>
							<!--end::Separator-->
							<!--begin::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Email-->
								<input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
								<!--end::Email-->
							</div>
							<!--end::Input group=-->
							<div class="fv-row mb-3">
								<!--begin::Password-->
								<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
								<!--end::Password-->
							</div>
							<!--end::Input group=-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
								<div></div>
								<!--begin::Link-->
								<a href="//grindbet.pl/login/reset-password/" class="link-primary">Forgot Password ?</a>
								<!--end::Link-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="submit" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Sign In</span>
									<!--end::Indicator label-->
									<!--begin::Indicator progress-->
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator progress-->
								</button>
							</div>
							<!--end::Submit button-->
							<!--begin::Sign up-->
							<div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
								<a href="//grindbet.pl/register/" class="link-primary">Sign up</a>
							</div>
							<!--end::Sign up-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Footer-->
					<div class="d-flex flex-stack px-lg-10">
						<!--begin::Languages-->
						<div class="me-0">
							<!--begin::Toggle-->
							<button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
								<img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="//grindbet.pl/assets/media/flags/united-states.svg" alt="" />
								<span data-kt-element="current-lang-name" class="me-1">English</span>
								<i class="ki-outline ki-down fs-5 text-muted rotate-180 m-0"></i>
							</button>
							<!--end::Toggle-->
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="//grindbet.pl/assets/media/flags/united-states.svg" alt="" />
										</span>
										<span data-kt-element="lang-name">English</span>
									</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Languages-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->
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
	<script src="//grindbet.pl/assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>