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
                                                <a class="nav-link text-active-primary py-5 me-6 active" href="//grindbet.pl/home/projects/project?project=<?php echo $project->id; ?>">Overview</a>
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
                                                <a class="nav-link text-active-primary py-5 me-6" href="//grindbet.pl/home/projects/settings?project=<?php echo $project->id; ?>">Settings</a>
                                            </li>
                                            <!--end::Nav item-->
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                                <!--end::Navbar-->
                                <!--begin::Row-->
                                <div class="row gx-6 gx-xl-9">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 mb-6">
                                        <!--begin::Summary-->
                                        <div class="card card-flush h-lg-100">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h3 class="fw-bold mb-1">Tasks Summary</h3>
                                                    <div class="fs-6 fw-semibold text-gray-400">24 Overdue Tasks</div>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body p-9 pt-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-wrap">
                                                    <!--begin::Chart-->
                                                    <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                                                        <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                                            <span class="fs-2qx fw-bold">237</span>
                                                            <span class="fs-6 fw-semibold text-gray-400">Total Tasks</span>
                                                        </div>
                                                        <canvas id="project_overview_chart"></canvas>
                                                    </div>
                                                    <!--end::Chart-->
                                                    <!--begin::Labels-->
                                                    <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                            <div class="bullet bg-primary me-3"></div>
                                                            <div class="text-gray-400">Active</div>
                                                            <div class="ms-auto fw-bold text-gray-700">30</div>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                            <div class="bullet bg-success me-3"></div>
                                                            <div class="text-gray-400">Completed</div>
                                                            <div class="ms-auto fw-bold text-gray-700">45</div>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                            <div class="bullet bg-danger me-3"></div>
                                                            <div class="text-gray-400">Overdue</div>
                                                            <div class="ms-auto fw-bold text-gray-700">0</div>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center">
                                                            <div class="bullet bg-gray-300 me-3"></div>
                                                            <div class="text-gray-400">Yet to start</div>
                                                            <div class="ms-auto fw-bold text-gray-700">25</div>
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Labels-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Notice-->
                                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-stack flex-grow-1">
                                                        <!--begin::Content-->
                                                        <div class="fw-semibold">
                                                            <div class="fs-6 text-gray-700">
                                                                <a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a>to create great outstanding business to business .jsp modutr class scripts
                                                            </div>
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Notice-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Summary-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 mb-6">
                                        <!--begin::Tasks-->
                                        <div class="card card-flush h-lg-100">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h3 class="fw-bold mb-1">My Tasks</h3>
                                                    <div class="fs-6 text-gray-400">Total 25 tasks in backlog</div>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column mb-9 p-9 pt-3">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center position-relative mb-7">
                                                    <!--begin::Label-->
                                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                                    <!--end::Label-->
                                                    <!--begin::Checkbox-->
                                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Details-->
                                                    <div class="fw-semibold">
                                                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Create FureStibe branding logo</a>
                                                        <!--begin::Info-->
                                                        <div class="text-gray-400">Due in 1 day
                                                            <a href="#">Karina Clark</a>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-outline ki-element-plus fs-3"></i>
                                                    </button>
                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b7809634a52">
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
                                                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b7809634a52" data-allow-clear="true">
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
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center position-relative mb-7">
                                                    <!--begin::Label-->
                                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                                    <!--end::Label-->
                                                    <!--begin::Checkbox-->
                                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Details-->
                                                    <div class="fw-semibold">
                                                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
                                                        <!--begin::Info-->
                                                        <div class="text-gray-400">Due in 3 days
                                                            <a href="#">Rober Doe</a>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-outline ki-element-plus fs-3"></i>
                                                    </button>
                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b7809634a5d">
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
                                                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b7809634a5d" data-allow-clear="true">
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
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center position-relative mb-7">
                                                    <!--begin::Label-->
                                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                                    <!--end::Label-->
                                                    <!--begin::Checkbox-->
                                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Details-->
                                                    <div class="fw-semibold">
                                                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>
                                                        <!--begin::Info-->
                                                        <div class="text-gray-400">Due in 1 week
                                                            <a href="#">Neil Owen</a>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-outline ki-element-plus fs-3"></i>
                                                    </button>
                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b7809634a67">
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
                                                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b7809634a67" data-allow-clear="true">
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
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center position-relative mb-7">
                                                    <!--begin::Label-->
                                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                                    <!--end::Label-->
                                                    <!--begin::Checkbox-->
                                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Details-->
                                                    <div class="fw-semibold">
                                                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Dashgboard UI & UX for Leafr CRM</a>
                                                        <!--begin::Info-->
                                                        <div class="text-gray-400">Due in 1 week
                                                            <a href="#">Olivia Wild</a>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-outline ki-element-plus fs-3"></i>
                                                    </button>
                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b7809634a71">
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
                                                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b7809634a71" data-allow-clear="true">
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
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center position-relative">
                                                    <!--begin::Label-->
                                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                                                    <!--end::Label-->
                                                    <!--begin::Checkbox-->
                                                    <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                                        <input class="form-check-input" type="checkbox" value="" />
                                                    </div>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Details-->
                                                    <div class="fw-semibold">
                                                        <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Mivy App R&D, Meeting with clients</a>
                                                        <!--begin::Info-->
                                                        <div class="text-gray-400">Due in 2 weeks
                                                            <a href="#">Sean Bean</a>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Menu-->
                                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-outline ki-element-plus fs-3"></i>
                                                    </button>
                                                    <!--begin::Menu 1-->
                                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b7809634a7b">
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
                                                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b7809634a7b" data-allow-clear="true">
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
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-12 mb-6">
                                        <!--begin::Card-->
                                        <div class="card card-flush h-lg-100">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h3 class="fw-bold mb-1">What's on the road?</h3>
                                                    <div class="fs-6 text-gray-400">Total 482 participants</div>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Select-->
                                                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                                        <option value="1" selected="selected">Options</option>
                                                        <option value="2">Option 1</option>
                                                        <option value="3">Option 2</option>
                                                        <option value="4">Option 3</option>
                                                    </select>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body p-9 pt-4">
                                                <!--begin::Dates-->
                                                <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                                            <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                            <span class="fs-6 fw-bold">22</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                                            <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                            <span class="fs-6 fw-bold">23</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                                            <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                            <span class="fs-6 fw-bold">24</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                                            <span class="opacity-50 fs-7 fw-semibold">We</span>
                                                            <span class="fs-6 fw-bold">25</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                                            <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                                            <span class="fs-6 fw-bold">26</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                                            <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                                            <span class="fs-6 fw-bold">27</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                                            <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                                            <span class="fs-6 fw-bold">28</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                                            <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                            <span class="fs-6 fw-bold">29</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                                            <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                            <span class="fs-6 fw-bold">30</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                    <!--begin::Date-->
                                                    <li class="nav-item me-1">
                                                        <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                                            <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                            <span class="fs-6 fw-bold">31</span>
                                                        </a>
                                                    </li>
                                                    <!--end::Date-->
                                                </ul>
                                                <!--end::Dates-->
                                                <!--begin::Tab Content-->
                                                <div class="tab-content">
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_0" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">14:30 - 15:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Bob Harris</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">16:30 - 17:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Naomi Hayabusa</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">14:30 - 15:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Bob Harris</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">12:00 - 13:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Naomi Hayabusa</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">11:00 - 11:45
                                                                    <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Bob Harris</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">12:00 - 13:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Terry Robins</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_2" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">16:30 - 17:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Yannis Gloverson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">12:00 - 13:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Sean Bean</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">10:00 - 11:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Walter White</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_3" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">16:30 - 17:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">David Stevenson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">13:00 - 14:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Naomi Hayabusa</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">9:00 - 10:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Yannis Gloverson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_4" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">16:30 - 17:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Michael Walters</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">14:30 - 15:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Walter White</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">9:00 - 10:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">David Stevenson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_5" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">10:00 - 11:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Walter White</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">12:00 - 13:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Yannis Gloverson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">9:00 - 10:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Michael Walters</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_6" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">11:00 - 11:45
                                                                    <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Caleb Donaldson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">12:00 - 13:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Karina Clarke</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">16:30 - 17:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Naomi Hayabusa</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_7" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">16:30 - 17:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Naomi Hayabusa</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">13:00 - 14:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Naomi Hayabusa</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">14:30 - 15:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Sean Bean</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_8" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">14:30 - 15:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Yannis Gloverson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">14:30 - 15:30
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Naomi Hayabusa</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">10:00 - 11:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">am</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Bob Harris</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                    <!--begin::Day-->
                                                    <div id="kt_schedule_day_9" class="tab-pane fade show">
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">12:00 - 13:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Karina Clarke</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">12:00 - 13:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">David Stevenson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                        <!--begin::Time-->
                                                        <div class="d-flex flex-stack position-relative mt-8">
                                                            <!--begin::Bar-->
                                                            <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                            <!--end::Bar-->
                                                            <!--begin::Info-->
                                                            <div class="fw-semibold ms-5 text-gray-600">
                                                                <!--begin::Time-->
                                                                <div class="fs-5">12:00 - 13:00
                                                                    <span class="fs-7 text-gray-400 text-uppercase">pm</span>
                                                                </div>
                                                                <!--end::Time-->
                                                                <!--begin::Title-->
                                                                <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                                                <!--end::Title-->
                                                                <!--begin::User-->
                                                                <div class="text-gray-400">Lead by
                                                                    <a href="#">Yannis Gloverson</a>
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Time-->
                                                    </div>
                                                    <!--end::Day-->
                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-12 mb-6">
                                        <!--begin::Card-->
                                        <div class="card card-flush h-lg-100">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h3 class="fw-bold mb-1">Latest Files</h3>
                                                    <div class="fs-6 text-gray-400">Total 382 fiels, 2,6GB space usage</div>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body p-9 pt-3">
                                                <!--begin::Files-->
                                                <div class="d-flex flex-column mb-9">
                                                    <!--begin::File-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Icon-->
                                                        <div class="symbol symbol-30px me-5">
                                                            <img alt="Icon" src="//grindbet.pl/assets/media/svg/files/pdf.svg" />
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Details-->
                                                        <div class="fw-semibold">
                                                            <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Project tech requirements</a>
                                                            <div class="text-gray-400">2 days ago
                                                                <a href="#">Karina Clark</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Menu-->
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-outline ki-element-plus fs-3"></i>
                                                        </button>
                                                        <!--begin::Menu 1-->
                                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b78096348c6">
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
                                                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b78096348c6" data-allow-clear="true">
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
                                                    <!--end::File-->
                                                    <!--begin::File-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Icon-->
                                                        <div class="symbol symbol-30px me-5">
                                                            <img alt="Icon" src="//grindbet.pl/assets/media/svg/files/doc.svg" />
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Details-->
                                                        <div class="fw-semibold">
                                                            <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Create FureStibe branding proposal</a>
                                                            <div class="text-gray-400">Due in 1 day
                                                                <a href="#">Marcus Blake</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Menu-->
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-outline ki-element-plus fs-3"></i>
                                                        </button>
                                                        <!--begin::Menu 1-->
                                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b78096348d2">
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
                                                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b78096348d2" data-allow-clear="true">
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
                                                    <!--end::File-->
                                                    <!--begin::File-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Icon-->
                                                        <div class="symbol symbol-30px me-5">
                                                            <img alt="Icon" src="//grindbet.pl/assets/media/svg/files/css.svg" />
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Details-->
                                                        <div class="fw-semibold">
                                                            <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Completed Project Stylings</a>
                                                            <div class="text-gray-400">Due in 1 day
                                                                <a href="#">Terry Barry</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Menu-->
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-outline ki-element-plus fs-3"></i>
                                                        </button>
                                                        <!--begin::Menu 1-->
                                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b78096348de">
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
                                                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b78096348de" data-allow-clear="true">
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
                                                    <!--end::File-->
                                                    <!--begin::File-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Icon-->
                                                        <div class="symbol symbol-30px me-5">
                                                            <img alt="Icon" src="//grindbet.pl/assets/media/svg/files/ai.svg" />
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Details-->
                                                        <div class="fw-semibold">
                                                            <a class="fs-6 fw-bold text-dark text-hover-primary" href="#">Create Project Wireframes</a>
                                                            <div class="text-gray-400">Due in 3 days
                                                                <a href="#">Roth Bloom</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Menu-->
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-outline ki-element-plus fs-3"></i>
                                                        </button>
                                                        <!--begin::Menu 1-->
                                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b78096348e9">
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
                                                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b78096348e9" data-allow-clear="true">
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
                                                    <!--end::File-->
                                                </div>
                                                <!--end::Files-->
                                                <!--begin::Notice-->
                                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                                    <!--begin::Icon-->
                                                    <i class="ki-outline ki-svg/files/upload.svg fs-2tx text-primary me-4"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-stack flex-grow-1">
                                                        <!--begin::Content-->
                                                        <div class="fw-semibold">
                                                            <h4 class="text-gray-900 fw-bold">Quick file uploader</h4>
                                                            <div class="fs-6 text-gray-700">Drag & Drop or choose files from computer</div>
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Notice-->
                                            </div>
                                            <!--end::Card body -->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-12 mb-6">
                                        <!--begin::Card-->
                                        <div class="card card-flush h-lg-100">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h3 class="fw-bold mb-1">New Contibutors</h3>
                                                    <div class="fs-6 text-gray-400">From total 482 Participants</div>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card toolbar-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Avatar-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Image-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/blank.png" />
                                                        </div>
                                                        <!--end::Image-->
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="fw-semibold">
                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Cyprian Majda</a>
                                                        <div class="text-gray-400">8 Pending & 97 Completed Tasks</div>
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Badge-->
                                                    <div class="badge badge-light ms-auto">5</div>
                                                    <!--end::Badge-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Avatar-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Image-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/blank.png" />
                                                        </div>
                                                        <!--end::Image-->
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Details-->
                                                    <div class="fw-semibold">
                                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Jan Gałuszka</a>
                                                        <div class="text-gray-400">9 Pending & 103 Completed</div>
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Badge-->
                                                    <div class="badge badge-light ms-auto">9</div>
                                                    <!--end::Badge-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
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