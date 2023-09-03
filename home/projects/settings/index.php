<?php
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "$rootDir\appBase.php";
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
                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Project Settings</h1>
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
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b780971705a">
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
                                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b780971705a" data-allow-clear="true">
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
                                                <a class="nav-link text-active-primary py-5 me-6 active" href="//grindbet.pl/home/projects/settings?project=<?php echo $project->id; ?>">Settings</a>
                                            </li>
                                            <!--end::Nav item-->
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                                <!--end::Navbar-->
                                <!--begin::Card-->
                                <div class="card">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title fs-3 fw-bold">Project Settings</div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Form-->
                                    <form id="kt_project_settings_form" class="form">
                                        <!--begin::Card body-->
                                        <div class="card-body p-9">
                                            <!--begin::Row-->
                                            <div class="row mb-5">
                                                <!--begin::Col-->
                                                <div class="col-xl-3">
                                                    <div class="fs-6 fw-semibold mt-2 mb-3">Project Logo</div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url('<?php echo $project->projectPicture; ?>')"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="ki-outline ki-pencil fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                            <i class="ki-outline ki-cross fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                            <i class="ki-outline ki-cross fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row mb-8">
                                                <!--begin::Col-->
                                                <div class="col-xl-3">
                                                    <div class="fs-6 fw-semibold mt-2 mb-3">Project Name</div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-9 fv-row">
                                                    <input type="text" class="form-control form-control-solid" name="name" value="<?php echo $project->name; ?>" />
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row mb-8 d-none">
                                                <!--begin::Col-->
                                                <div class="col-xl-3">
                                                    <div class="fs-6 fw-semibold mt-2 mb-3">Project Type</div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-9 fv-row">
                                                    <input type="text" class="form-control form-control-solid" name="type" value="Client Relationship" />
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row mb-8">
                                                <!--begin::Col-->
                                                <div class="col-xl-3">
                                                    <div class="fs-6 fw-semibold mt-2 mb-3">Project Description</div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-9 fv-row">
                                                    <textarea name="description" class="form-control form-control-solid h-100px"><?php echo $project->description; ?></textarea>
                                                </div>
                                                <!--begin::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row mb-8">
                                                <!--begin::Col-->
                                                <div class="col-xl-3">
                                                    <div class="fs-6 fw-semibold mt-2 mb-3">Due Date</div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-9 fv-row">
                                                    <div class="position-relative d-flex align-items-center">
                                                        <i class="ki-outline ki-calendar-8 position-absolute ms-4 mb-1 fs-2"></i>
                                                        <input class="form-control form-control-solid ps-12" name="date" placeholder="Pick a date" id="kt_datepicker_1" />
                                                    </div>
                                                </div>
                                                <!--begin::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-xl-3">
                                                    <div class="fs-6 fw-semibold mt-2 mb-3">Status</div>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-9">
                                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" id="status" name="status" checked="checked" />
                                                        <label class="form-check-label fw-semibold text-gray-400 ms-3" for="status">Active</label>
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Card footer-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes</button>
                                        </div>
                                        <!--end::Card footer-->
                                    </form>
                                    <!--end:Form-->
                                </div>
                                <!--end::Card-->
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
    <script src="//grindbet.pl/assets/js/custom/apps/projects/settings/settings.js"></script>
    <script src="//grindbet.pl/assets/js/widgets.bundle.js"></script>
    <script src="//grindbet.pl/assets/js/custom/widgets.js"></script>
    <script src="//grindbet.pl/assets/js/custom/apps/chat/chat.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/new-target.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>

</html>