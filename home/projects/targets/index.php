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
                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Project Targets</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Toolbar container-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-3">
                                <!--begin::Secondary button-->
                                <div class="m-0">
                                    <!--begin::Menu-->
                                    <a href="#" class="btn btn-flex btn-sm btn-body btn-color-gray-600 h-35px bg-body fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">History</a>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b780965a921">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-semibold">Status:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b780965a921" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-semibold">Member Type:</label>
                                                <!--end::Label-->
                                                <!--begin::Options-->
                                                <div class="d-flex">
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <!--end::Options-->
                                                    <!--begin::Options-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                    <!--end::Options-->
                                                </div>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-semibold">Notifications:</label>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Secondary button-->
                                <!--begin::Primary button-->
                                <a href="#" class="btn btn-sm btn-flex btn-dark h-35 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                    <i class="ki-outline ki-plus-square fs-2"></i>Invite</a>
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
                                <!--begin::Navbar-->
                                <div class="card mb-6 mb-xl-9">
                                    <div class="card-body pt-9 pb-0">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                                            <!--begin::Image-->
                                            <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                                <img class="mw-50px mw-lg-75px" src="<?php echo $project->projectPicture; ?>" alt="image" />
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
                                                            <span class="text-gray-800 fs-2 fw-bold me-3"><?php echo $project->name; ?></span>
                                                            <span class="badge badge-light-info me-auto"><?php echo $project->status; ?></span>
                                                        </div>
                                                        <!--end::Status-->
                                                        <!--begin::Description-->
                                                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-400"><?php echo $project->shortDescription; ?></div>
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
                                                                <div class="fs-4 fw-bold"><?php echo $project->releaseDate; ?></div>
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
                                                                <i class="ki-outline ki-arrow-down fs-3 text-danger me-2"></i>
                                                                <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                                            </div>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold fs-6 text-gray-400">Open Tasks</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                    </div>
                                                    <!--end::Stats-->
                                                    <!--begin::Users-->
                                                    <div class="symbol-group symbol-hover mb-3">
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/blank.png" />
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/blank.png" />
                                                        </div>
                                                        <!--end::User-->
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
                                                <a class="nav-link text-active-primary py-5 me-6 active" href="//grindbet.pl/home/projects/targets?project=<?php echo $project->id; ?>">Targets</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary py-5 me-6" href="//grindbet.pl/home/projects/users?project=<?php echo $project->id; ?>">Users</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary py-5 me-6" href="//grindbet.pl/home/projects/files?project=<?php echo $project->id; ?>">Files</a>
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
                                <div class="d-flex flex-wrap flex-stack pt-10 pb-8">
                                    <!--begin::Heading-->
                                    <h3 class="fw-bold my-2">Project Targets
                                        <span class="fs-6 text-gray-400 fw-semibold ms-1">by Recent Updates ↓</span>
                                    </h3>
                                    <!--end::Heading-->
                                    <!--begin::Controls-->
                                    <div class="d-flex flex-wrap my-1">
                                        <!--begin::Tab nav-->
                                        <ul class="nav nav-pills me-5">
                                            <li class="nav-item m-0">
                                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active me-3" data-bs-toggle="tab" href="#kt_project_targets_card_pane">
                                                    <i class="ki-outline ki-element-plus fs-1"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item m-0">
                                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_targets_table_pane">
                                                    <i class="ki-outline ki-row-horizontal fs-2"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Tab nav-->
                                        <!--begin::Wrapper-->
                                        <div class="my-0">
                                            <!--begin::Select-->
                                            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm border-body bg-body w-150px">
                                                <option value="1" selected="selected">Recently Updated</option>
                                                <option value="2">Last Month</option>
                                                <option value="3">Last Quarter</option>
                                                <option value="4">Last Year</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Controls-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div id="kt_project_targets_card_pane" class="tab-pane fade show active">
                                        <!--begin::Row-->
                                        <div class="row g-9">
                                            <!--begin::Col-->
                                            <div class="col-md-4 col-lg-12 col-xl-4">
                                                <!--begin::Col header-->
                                                <div class="mb-9">
                                                    <div class="d-flex flex-stack">
                                                        <div class="fw-bold fs-4">Yet to start
                                                            <span class="fs-6 text-gray-400 ms-2">2</span>
                                                        </div>
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-outline ki-element-plus fs-2"></i>
                                                            </button>
                                                            <!--begin::Menu 1-->
                                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b780965ac56">
                                                                <!--begin::Header-->
                                                                <div class="px-7 py-5">
                                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator border-gray-200"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Form-->
                                                                <div class="px-7 py-5">
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Status:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <div>
                                                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b780965ac56" data-allow-clear="true">
                                                                                <option></option>
                                                                                <option value="1">Approved</option>
                                                                                <option value="2">Pending</option>
                                                                                <option value="2">In Process</option>
                                                                                <option value="2">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Options-->
                                                                        <div class="d-flex">
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                                <span class="form-check-label">Author</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                                <span class="form-check-label">Customer</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                        </div>
                                                                        <!--end::Options-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Switch-->
                                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                            <label class="form-check-label">Enabled</label>
                                                                        </div>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </div>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Menu 1-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <div class="h-3px w-100 bg-warning"></div>
                                                </div>
                                                <!--end::Col header-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">UI Design</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Meeting with customer</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-2.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-19.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">10</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">5</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">Phase 2.6 QA</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                                    <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">8</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">6</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <a href="#" class="btn btn-primary er w-100 fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create New Target</a>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4 col-lg-12 col-xl-4">
                                                <!--begin::Col header-->
                                                <div class="mb-9">
                                                    <div class="d-flex flex-stack">
                                                        <div class="fw-bold fs-4">In Progress
                                                            <span class="fs-6 text-gray-400 ms-2">4</span>
                                                        </div>
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-outline ki-element-plus fs-2"></i>
                                                            </button>
                                                            <!--begin::Menu 1-->
                                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b780965ad26">
                                                                <!--begin::Header-->
                                                                <div class="px-7 py-5">
                                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator border-gray-200"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Form-->
                                                                <div class="px-7 py-5">
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Status:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <div>
                                                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b780965ad26" data-allow-clear="true">
                                                                                <option></option>
                                                                                <option value="1">Approved</option>
                                                                                <option value="2">Pending</option>
                                                                                <option value="2">In Process</option>
                                                                                <option value="2">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Options-->
                                                                        <div class="d-flex">
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                                <span class="form-check-label">Author</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                                <span class="form-check-label">Customer</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                        </div>
                                                                        <!--end::Options-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Switch-->
                                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                            <label class="form-check-label">Enabled</label>
                                                                        </div>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </div>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Menu 1-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <div class="h-3px w-100 bg-primary"></div>
                                                </div>
                                                <!--end::Col header-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">Development</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Sales report page</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                                    <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-7.jpg" />
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">8</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">8</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">Testing</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Meeting with customer</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-20.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Harry Mcpherson">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-19.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">7</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">8</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">UI Design</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Design main Dashboard</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-20.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-7.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">1</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">7</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">Phase 2.6 QA</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-2.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-12.jpg" />
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">10</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">5</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4 col-lg-12 col-xl-4">
                                                <!--begin::Col header-->
                                                <div class="mb-9">
                                                    <div class="d-flex flex-stack">
                                                        <div class="fw-bold fs-4">Completed
                                                            <span class="fs-6 text-gray-400 ms-2">3</span>
                                                        </div>
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-outline ki-element-plus fs-2"></i>
                                                            </button>
                                                            <!--begin::Menu 1-->
                                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b780965adbb">
                                                                <!--begin::Header-->
                                                                <div class="px-7 py-5">
                                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator border-gray-200"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Form-->
                                                                <div class="px-7 py-5">
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Status:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <div>
                                                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b780965adbb" data-allow-clear="true">
                                                                                <option></option>
                                                                                <option value="1">Approved</option>
                                                                                <option value="2">Pending</option>
                                                                                <option value="2">In Process</option>
                                                                                <option value="2">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Options-->
                                                                        <div class="d-flex">
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                                <span class="form-check-label">Author</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                                <span class="form-check-label">Customer</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                        </div>
                                                                        <!--end::Options-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Switch-->
                                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                            <label class="form-check-label">Enabled</label>
                                                                        </div>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </div>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Menu 1-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <div class="h-3px w-100 bg-success"></div>
                                                </div>
                                                <!--end::Col header-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">UI Design</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">Branding Logo</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                                    <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-12.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">1</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">QA</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">To check User Management</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-2.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                                    <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">4</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">2</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--begin::Card-->
                                                <div class="card mb-6 mb-xl-9">
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light">Phase 2.6 QA</div>
                                                            <!--end::Badge-->
                                                            <!--begin::Menu-->
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                                <i class="ki-outline ki-information fs-6"></i>
                                                                            </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
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
                                                        <!--end::Header-->
                                                        <!--begin::Title-->
                                                        <div class="mb-2">
                                                            <a href="#" class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>
                                                        <!--end::Content-->
                                                        <!--begin::Footer-->
                                                        <div class="d-flex flex-stack flex-wrapr">
                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover my-1">
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                                    <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-2.jpg" />
                                                                </div>
                                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex my-1">
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3">
                                                                    <i class="ki-outline ki-paper-clip fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">3</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                                                    <i class="ki-outline ki-message-text-2 fs-3"></i>
                                                                    <span class="ms-1 fs-7 fw-bold text-gray-600">1</span>
                                                                </div>
                                                                <!--end::Stat-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Footer-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Tab pane-->
                                    <!--begin::Tab pane-->
                                    <div id="kt_project_targets_table_pane" class="tab-pane fade">
                                        <div class="card card-flush">
                                            <div class="card-body pt-3">
                                                <!--begin::Table-->
                                                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                                    <thead class="fs-7 text-gray-400 text-uppercase">
                                                        <tr>
                                                            <th class="min-w-250px">Target</th>
                                                            <th class="min-w-90px">Section</th>
                                                            <th class="min-w-150px">Due Date</th>
                                                            <th class="min-w-90px">Members</th>
                                                            <th class="min-w-90px">Status</th>
                                                            <th class="min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-6">
                                                        <tr>
                                                            <td class="fw-bold">
                                                                <a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-semibold me-auto">UI Design</span>
                                                            </td>
                                                            <td>Jul 3, 2020</td>
                                                            <td>
                                                                <div class="symbol-group symbol-hover fs-8">
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-2.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="John Mixin">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-14.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light-primary fw-bold me-auto">In Progress</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">
                                                                <a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-semibold me-auto">Phase 2.6 QA</span>
                                                            </td>
                                                            <td>May 21, 2020</td>
                                                            <td>
                                                                <div class="symbol-group symbol-hover fs-8">
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
                                                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">
                                                                <a href="#" class="text-gray-900 text-hover-primary">Sales report page</a>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-semibold me-auto">QA</span>
                                                            </td>
                                                            <td>Aug 16, 2020</td>
                                                            <td>
                                                                <div class="symbol-group symbol-hover fs-8">
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-2.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Kristen Goodwin">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-9.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Mikaela Collins">
                                                                        <span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">
                                                                <a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-semibold me-auto">Prototype</span>
                                                            </td>
                                                            <td>May 4, 2020</td>
                                                            <td>
                                                                <div class="symbol-group symbol-hover fs-8">
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
                                                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-5.jpg" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">
                                                                <a href="#" class="text-gray-900 text-hover-primary">Design main Dashboard</a>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-semibold me-auto">UI Design</span>
                                                            </td>
                                                            <td>Jul 16, 2020</td>
                                                            <td>
                                                                <div class="symbol-group symbol-hover fs-8">
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-2.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-6.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Lucy Matthews">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-21.jpg" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light-success fw-bold me-auto">Completed</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">
                                                                <a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-semibold me-auto">Development</span>
                                                            </td>
                                                            <td>Sep 7, 2020</td>
                                                            <td>
                                                                <div class="symbol-group symbol-hover fs-8">
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-20.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Deanna Taylor">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-23.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Mikaela Collins">
                                                                        <span class="symbol-label bg-info text-inverse-info fw-bold">M</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light-primary fw-bold me-auto">In Progress</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">
                                                                <a href="#" class="text-gray-900 text-hover-primary">To check User Management</a>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-semibold me-auto">Pahse 3.2</span>
                                                            </td>
                                                            <td>Jul 24, 2020</td>
                                                            <td>
                                                                <div class="symbol-group symbol-hover fs-8">
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Lucy Matthews">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-21.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Kristen Goodwin">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-9.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-7.jpg" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="fw-bold">
                                                                <a href="#" class="text-gray-900 text-hover-primary">Create Roles Module</a>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-semibold me-auto">Branding</span>
                                                            </td>
                                                            <td>Jul 21, 2020</td>
                                                            <td>
                                                                <div class="symbol-group symbol-hover fs-8">
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-7.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Robin Watterman">
                                                                        <span class="symbol-label bg-success text-inverse-success fw-bold">R</span>
                                                                    </div>
                                                                    <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-light fw-bold me-auto">Yet to start</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab Content-->
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