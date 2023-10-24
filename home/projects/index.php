<?php
$rootDir = "../../";
require_once "$rootDir/appBase.php";
$userMgt->checkIfUserIsLoggedIn();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrindBet.PL | My Projects</title>
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
            <?php require_once "../../main/components/header/header.php"; ?>
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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">My Projects</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        My Projects</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Toolbar container-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-3">
                                <!--begin::Primary button-->
                                <a href="#" class="btn btn-sm btn-flex btn-primary h-35 p-3 text-white shadow" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">
                                    <i class="ki-duotone ki-plus-square">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                        <i class="path3"></i>
                                    </i>
                                    New Project
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
                                <div class="row gx-6 gx-xl-9 mb-5">
                                    <div class="col-lg-6 col-xxl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body p-9">
                                                <!--begin::Heading-->
                                                <div class="fs-2hx fw-bold"><?php echo $projectMgt->getNoOfMyProjects(); ?></div>
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
                                                    <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                            <div class="bullet bg-primary me-3"></div>
                                                            <div class="text-gray-400">Active</div>
                                                            <div class="ms-auto fw-bold text-gray-700"><?php echo $projectMgt->getNoOfActiveProjects(); ?></div>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                            <div class="bullet bg-success me-3"></div>
                                                            <div class="text-gray-400">Completed</div>
                                                            <div class="ms-auto fw-bold text-gray-700"><?php echo $projectMgt->getNoOfCompletedProjects(); ?></div>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center">
                                                            <div class="bullet bg-gray-300 me-3"></div>
                                                            <div class="text-gray-400">Yet to start</div>
                                                            <div class="ms-auto fw-bold text-gray-700"><?php echo $projectMgt->getNoOfNotStartedProjects(); ?></div>
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
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9 my-5">
                                    <?php $projectMgt->getMyProjects(); ?>
                                </div>
                                <!--end::Row-->
                                <!--begin::Pagination-->
                                <div class="d-flex flex-stack flex-wrap pt-10">
                                    <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of <?php echo $projectMgt->getNoOfMyProjects(); ?> entries</div>
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
    <?php
    require_once "../../main/components/wizards/create-project/create-project.php";
    ?>
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
    <script src="//grindbet.pl/assets/js/custom/apps/projects/list/list.js"></script>
    <script src="//grindbet.pl/assets/js/widgets.bundle.js"></script>
    <script src="//grindbet.pl/assets/js/custom/widgets.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/create-project/type.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/create-project/settings.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/create-project/targets.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/create-project/main.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>

</html>