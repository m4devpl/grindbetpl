<?php require_once "../../appBase.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrindBet.PL | My Projects</title>
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
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
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

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <?php require_once "../../main/components/header/header.php"; ?>
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
                                        <a href="//grindbet.pl" class="text-white text-hover-primary">
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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Apps</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Projects</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        My Projects</h1>
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
                                <!--begin::Stats-->
                                <div class="row gx-6 gx-xl-9">
                                    <div class="col-lg-6 col-xxl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body p-9">
                                                <!--begin::Heading-->
                                                <div class="fs-2hx fw-bold">2</div>
                                                <div class="fs-4 fw-semibold text-gray-400 mb-7">Current Projects</div>
                                                <!--end::Heading-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-wrap">
                                                    <!--begin::Chart-->
                                                    <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                                                        <canvas id="kt_project_list_chart"></canvas>
                                                    </div>
                                                    <!--end::Chart-->
                                                    <!--begin::Labels-->
                                                    <div
                                                        class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                            <div class="bullet bg-primary me-3"></div>
                                                            <div class="text-gray-400">Active</div>
                                                            <div class="ms-auto fw-bold text-gray-700">50%</div>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                            <div class="bullet bg-success me-3"></div>
                                                            <div class="text-gray-400">Completed</div>
                                                            <div class="ms-auto fw-bold text-gray-700">0%</div>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center">
                                                            <div class="bullet bg-gray-300 me-3"></div>
                                                            <div class="text-gray-400">Yet to start</div>
                                                            <div class="ms-auto fw-bold text-gray-700">50%</div>
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Labels-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Toolbar-->
                                <div class="d-flex flex-wrap flex-stack my-5">
                                    <!--begin::Heading-->
                                    <h2 class="fs-2 fw-semibold my-2">Projects
                                        <span class="fs-6 text-gray-400 ms-1">by Status</span>
                                    </h2>
                                    <!--end::Heading-->
                                    <!--begin::Controls-->
                                    <div class="d-flex flex-wrap my-1">
                                        <!--begin::Select wrapper-->
                                        <div class="m-0">
                                            <!--begin::Select-->
                                            <select name="status" data-control="select2" data-hide-search="true"
                                                class="form-select form-select-sm bg-body border-body fw-bold w-125px">
                                                <option value="Active" selected="selected">Active</option>
                                                <option value="Approved">In Progress</option>
                                                <option value="Declined">To Do</option>
                                                <option value="In Progress">Completed</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Select wrapper-->
                                    </div>
                                    <!--end::Controls-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9">
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-xl-4" *ngFor="let project of projectList">
                                        <!--begin::Card-->
                                        <a [routerLink]="['project',project.id]" class="card border-hover-primary">
                                            <!--begin::Card header-->
                                            <div class="card-header border-0 pt-9">
                                                <!--begin::Card Title-->
                                                <div class="card-title m-0">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px w-50px bg-light">
                                                        <img src="//grindbet.pl/assets/media/svg/brand-logos/kanba.svg" alt="image"
                                                            class="p-3" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                </div>
                                                <!--end::Car Title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <span class="badge fw-bold me-auto px-4 py-3"
                                                        [class.badge-light-primary]="project.status==='In Progress'"
                                                        [class.badge-light-dark]="project.status==='Not Started'">{{
                                                        project.status }}</span>
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end:: Card header-->
                                            <!--begin:: Card body-->
                                            <div class="card-body p-9">
                                                <!--begin::Name-->
                                                <div class="fs-3 fw-bold text-dark">{{ project.name}} </div>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">{{
                                                    project.shortDescription }}</p>
                                                <!--end::Description-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-wrap mb-5">
                                                    <!--begin::Due-->
                                                    <div
                                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                                        <div class="fs-6 text-gray-800 fw-bold">{{ project.releaseDate |
                                                            date: "MMM dd, yyyy"}}</div>
                                                        <div class="fw-semibold text-gray-400">Due Date</div>
                                                    </div>
                                                    <!--end::Due-->
                                                    <!--begin::Budget-->
                                                    <div
                                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                                        <div class="fs-6 text-gray-800 fw-bold">unlimited</div>
                                                        <div class="fw-semibold text-gray-400">Budget</div>
                                                    </div>
                                                    <!--end::Budget-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Progress-->
                                                <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                                                    title="This project is not started :(">
                                                    <div class="bg-light-dark rounded h-4px" role="progressbar"
                                                        style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <!--end::Progress-->
                                                <!--begin::Users-->
                                                <div class="symbol-group symbol-hover">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Nick Macy">
                                                        <img alt="Pic" src="assets/media/avatars/blank.png" />
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Nick Macy">
                                                        <img alt="Pic" src="assets/media/avatars/blank.png" />
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="Nick Macy">
                                                        <img alt="Pic" src="assets/media/avatars/blank.png" />
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                            </div>
                                            <!--end:: Card body-->
                                        </a>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Pagination-->
                                <div class="d-flex flex-stack flex-wrap pt-10">
                                    <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 2 entries</div>
                                    <!--begin::Pages-->
                                    <ul class="pagination">
                                        <li class="page-item previous">
                                            <a href="#" class="page-link disabled">
                                                <i class="previous"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item next">
                                            <a href="#" class="page-link disabled">
                                                <i class="next"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Pages-->
                                </div>
                                <!--end::Pagination-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Footer-->
            <?php require_once "../../main/components/footer/footer.php"; ?>
            <!--end::Footer-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Javascript-->
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "dark";

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
    <script src="//grindbet.pl/assets/js/custom/apps/projects/list/list.js"></script>
    <!--end::Javascript-->
</body>

</html>