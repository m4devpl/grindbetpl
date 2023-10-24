<?php
$rootDir = "../../../";
require_once "$rootDir/appBase.php";
$projectID = htmlentities($_GET['project'], ENT_QUOTES);
$project = new Project($projectID);
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
                                        <a href="//grindbet.pl/home/projects" class="text-gray-700 text-hover-dark">
                                            My Projects
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1"><?php echo $project->name; ?></li>
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
                                <!--begin::Navbar-->
                                <div class="card mb-6 mb-xl-9">
                                    <div class="card-body pt-9 pb-0">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                                            <!--begin::Image-->
                                            <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                                <img class="mw-50px mw-lg-75px" src="//grindbet.pl/assets/media/logos/grindbet_web_logo.png" alt="image" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Wrapper-->
                                            <div class="flex-grow-1">
                                                <!--begin::Head-->
                                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                    <!--begin::Details-->
                                                    <div class="d-flex flex-column">
                                                        <!--begin::Status-->
                                                        <div class="d-flex align-items-center mb-1">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">GrindBet.PL</a>
                                                            <span class="badge badge-light-info me-auto">In Progress</span>
                                                        </div>
                                                        <!--end::Status-->
                                                        <!--begin::Description-->
                                                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400">Comprehensive productivity application</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex mb-4">
                                                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                                                        <!--begin::Menu-->
                                                        <div class="me-0">
                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                            </button>
                                                            <!--begin::Menu 3-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3 my-1">
                                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu 3-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Head-->
                                                <!--begin::Info-->
                                                <div class="d-flex flex-wrap justify-content-start">
                                                    <!--begin::Stats-->
                                                    <div class="d-flex flex-wrap">
                                                        <!--begin::Stat-->
                                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                            <!--begin::Number-->
                                                            <div class="d-flex align-items-center">
                                                                <div class="fs-4 fw-bold">Dec 30, 2023</div>
                                                            </div>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold fs-6 text-gray-400">Due Date</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                        <!--begin::Stat-->
                                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                            <!--begin::Number-->
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-abstract-37 fs-3 text-grey me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="<?php echo $projectMgt->getNoOfOpenUserTargets(); ?>"><?php echo $projectMgt->getNoOfOpenUserTargets(); ?></div>
                                                            </div>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold fs-6 text-gray-400">Open Targets</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                    </div>
                                                    <!--end::Stats-->
                                                    <!--begin::Users-->
                                                    <div class="symbol-group symbol-hover mb-3">
                                                        <?php

                                                        $userResult = $dbConnection->query("SELECT * FROM user INNER JOIN project_assigned_user ON user.username = project_assigned_user.Username AND project_assigned_user.`Project ID` = $projectID");

                                                        while ($userRow = $userResult->fetch_assoc()) {
                                                            $userFullName = $userRow['First Name'] . " " . $userRow['Last Name'];
                                                            $userProfileURL = $userPictureURL = "data:image/jpeg;base64," . base64_encode($userRow['Picture']);
                                                            echo <<<END
                                                                <!--begin::User-->
                                                                <div class="symbol symbol-35px symbol-circle"
                                                                    data-bs-toggle="tooltip" title="$userFullName">
                                                                    <img alt="Pic"
                                                                        src="$userPictureURL" />
                                                                </div>
                                                                <!--end::User-->
                                                            END;
                                                        }
                                                        ?>
                                                    </div>
                                                    <!--end::Users-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Details-->
                                        <div class="separator"></div>
                                        <!--begin::Nav-->
                                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                            <!--begin::Nav item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary py-5 me-6" href="//grindbet.pl/home/projects/project?project=<?php echo $project->id; ?>">Overview</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary py-5 me-6" href="//grindbet.pl/home/projects/targets?project=<?php echo $project->id; ?>">Targets</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary py-5 me-6" href="//grindbet.pl/home/projects/users?project=<?php echo $project->id; ?>">Users</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary py-5 me-6 active" href="//grindbet.pl/home/projects/files?project=<?php echo $project->id; ?>">Files</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary py-5 me-6" href="//grindbet.pl/home/projects/activity?project=<?php echo $project->id; ?>">Activity</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary py-5 me-6" href="//grindbet.pl/home/projects/settings?project=<?php echo $project->id; ?>">Settings</a>
                                            </li>
                                            <!--end::Nav item-->
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                                <!--end::Navbar-->
                                <!--begin::Toolbar-->
                                <div class="d-flex flex-wrap flex-stack my-5">
                                    <!--begin::Heading-->
                                    <h3 class="fw-bold my-2">Project Files
                                        <span class="fs-6 text-gray-400 fw-semibold ms-1">+590</span>
                                    </h3>
                                    <!--end::Heading-->
                                    <!--begin::Controls-->
                                    <div class="d-flex my-2">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative me-4">
                                            <i class="ki-outline ki-magnifier fs-3 position-absolute translate-middle-y top-50 ms-4"></i>
                                            <input type="text" id="kt_filter_search" class="form-control form-control-sm form-control-solid bg-body fw-semibold fs-7 w-150px ps-11" placeholder="Search" />
                                        </div>
                                        <!--end::Search-->
                                        <a href="../../demo43/dist/apps/file-manager/folders.html" class='btn btn-primary btn-sm fw-bolder'>File Manager</a>
                                    </div>
                                    <!--end::Controls-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Row-->
                                <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="../../demo43/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <img src="//grindbet.pl/assets/media/svg/files/pdf.svg" class="theme-light-show" alt="" />
                                                        <img src="//grindbet.pl/assets/media/svg/files/pdf-dark.svg" class="theme-dark-show" alt="" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">Project Reqs..</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-400">3 days ago</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="../../demo43/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <img src="//grindbet.pl/assets/media/svg/files/doc.svg" class="theme-light-show" alt="" />
                                                        <img src="//grindbet.pl/assets/media/svg/files/doc-dark.svg" class="theme-dark-show" alt="" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">CRM App Docs..</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-400">3 days ago</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="../../demo43/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <img src="//grindbet.pl/assets/media/svg/files/css.svg" class="theme-light-show" alt="" />
                                                        <img src="//grindbet.pl/assets/media/svg/files/css-dark.svg" class="theme-dark-show" alt="" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">User CRUD Styles</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-400">4 days ago</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="../../demo43/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <img src="//grindbet.pl/assets/media/svg/files/ai.svg" class="theme-light-show" alt="" />
                                                        <img src="//grindbet.pl/assets/media/svg/files/ai-dark.svg" class="theme-dark-show" alt="" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">Product Logo</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-400">5 days ago</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="../../demo43/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <img src="//grindbet.pl/assets/media/svg/files/sql.svg" class="theme-light-show" alt="" />
                                                        <img src="//grindbet.pl/assets/media/svg/files/sql-dark.svg" class="theme-dark-show" alt="" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">Orders backup</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-400">1 week ago</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="../../demo43/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <img src="//grindbet.pl/assets/media/svg/files/xml.svg" class="theme-light-show" alt="" />
                                                        <img src="//grindbet.pl/assets/media/svg/files/xml-dark.svg" class="theme-dark-show" alt="" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">UTAIR CRM API Co..</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-400">2 weeks ago</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="../../demo43/dist/apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <img src="//grindbet.pl/assets/media/svg/files/tif.svg" class="theme-light-show" alt="" />
                                                        <img src="//grindbet.pl/assets/media/svg/files/tif-dark.svg" class="theme-dark-show" alt="" />
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">Tower Hill App..</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-400">3 weeks ago</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8">
                                            <!--begin::Image-->
                                            <img src="//grindbet.pl/assets/media/svg/files/upload.svg" class="mb-5" alt="" />
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <a href="#" class="text-hover-primary fs-5 fw-bold mb-2">File Upload</a>
                                            <!--end::Link-->
                                            <!--begin::Description-->
                                            <div class="fs-7 fw-semibold text-gray-400">Drag and drop files here</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                        <!--begin::Footer-->
                        <div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row flex-center flex-md-stack pb-3">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item">
                                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->
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
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="//grindbet.pl/assets/js/custom/apps/projects/project/project.js"></script>
    <script src="//grindbet.pl/assets/js/widgets.bundle.js"></script>
    <script src="//grindbet.pl/assets/js/custom/widgets.js"></script>
    <script src="//grindbet.pl/assets/js/custom/apps/chat/chat.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/new-target.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>

</html>