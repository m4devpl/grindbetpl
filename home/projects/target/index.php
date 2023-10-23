<?php
$rootDir = "../../../";
require_once "$rootDir/appBase.php";
$projectID = htmlentities($_GET['project'], ENT_QUOTES);
$targetID = htmlentities($_GET['target'], ENT_QUOTES);

$project = new Project($projectID);
$projectTarget = new ProjectTarget($projectID, $targetID)
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrindBet.PL | Target - <?php echo $projectTarget->title; ?></title>
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
<!--end::Head-->
<!--begin::Body-->

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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                        <a href="//grindbet.pl/home/projects/project/?project=<?php echo $projectID; ?>" class="text-gray-700 text-hover-dark">
                                            <?php echo $project->name; ?>
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
                                        Target - <?php echo $projectTarget->title; ?>
                                    </li>
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
                                <!--begin::Layout-->
                                <div class="d-flex flex-column flex-xl-row">
                                    <!--begin::Sidebar-->
                                    <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                                        <!--begin::Card-->
                                        <div class="card mb-5 mb-xl-8">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-15">
                                                <!--begin::Summary-->
                                                <div class="d-flex flex-center flex-column mb-5">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-100px symbol-circle mb-7">
                                                        <img src="<?php echo $project->projectPicture; ?>" alt="Project Logo">
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <a href="//grindbet.pl/home/projects/project/?project=<?php echo $project->id; ?>" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1"><?php echo $project->name; ?></a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="fs-5 fw-semibold text-muted mb-2"><?php echo $project->shortDescription; ?></div>
                                                    <!--end::Position-->
                                                    <!--begin::Badge-->
                                                    <div class="badge badge-light-primary d-inline mb-6 shadow"><?php echo $project->status; ?></div>
                                                    <!--begin::Badge-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-wrap flex-center">
                                                        <!--begin::Stats-->
                                                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                                            <div class="fs-5 fw-bold text-gray-700">
                                                                <span class="w-75px"><?php echo $project->releaseDate; ?></span>
                                                            </div>
                                                            <div class="fw-semibold text-muted">Due Date</div>
                                                        </div>
                                                        <!--end::Stats-->
                                                        <!--begin::Stats-->
                                                        <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <i class="ki-duotone ki-abstract-37 fs-3 text-grey me-2">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="<?php echo $projectMgt->getNoOfOpenUserTargets(); ?>"><?php echo $projectMgt->getNoOfOpenUserTargets(); ?></div>
                                                            </div>
                                                            <div class="fw-semibold text-muted">Open Targets</div>
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Summary-->
                                                <!--begin::Details toggle-->
                                                <div class="d-flex flex-stack fs-4 py-3">
                                                    <div class="fw-bold rotate">Target
                                                    </div>
                                                    <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit target details">
                                                        <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
                                                    </span>
                                                </div>
                                                <!--end::Details toggle-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--begin::Details content-->
                                                <div id="kt_customer_view_details">
                                                    <div class="py-5 fs-6">
                                                        <!--begin::Details item-->
                                                        <div class="fw-bold fs-2"><?php echo $projectTarget->title; ?></div>
                                                        <div class="text-gray-600 mb-2"><?php echo $projectTarget->description; ?></div>
                                                        <!--end::Details item-->

                                                        <!--begin::Details item-->
                                                        <div class="fw-bold mt-5">Category</div>
                                                        <div class="ms-3 mt-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-light-info d-inline"><?php echo $projectTarget->category; ?></div>
                                                            <!--end::Badge-->
                                                        </div>
                                                        <!--end::Details item-->
                                                        <!--begin::Details item-->
                                                        <div class="fw-bold mt-5">Due Date</div>
                                                        <div class="ms-3 mt-3">
                                                            <div class="badge badge-light d-inline"><?php echo $projectTarget->dueDate; ?></div>
                                                        </div>
                                                        <!--end::Details item-->
                                                        <!--begin::Details item-->
                                                        <div class="separator separator-dashed my-3"></div>
                                                        <!--begin::Details item-->
                                                        <div class="fw-bold mt-5 text-center">Tags</div>
                                                        <div class="text-gray-600 text-center"><?php echo $projectTarget->tags; ?></div>
                                                        <!--end::Details item-->
                                                    </div>
                                                </div>
                                                <!--end::Details content-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Sidebar-->
                                    <!--begin::Content-->
                                    <div class="flex-lg-row-fluid ms-lg-15">
                                        <!--begin:::Tabs-->
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Activity</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item ms-auto">
                                                <!--begin::Action menu-->
                                                <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
                                                    <i class="ki-outline ki-down fs-2 me-0"></i></a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">

                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-3"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-5">
                                                        <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Target</div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-5">
                                                        <a href="#" class="menu-link text-danger px-5">Delete Target</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                                <!--end::Menu-->
                                            </li>
                                            <!--end:::Tab item-->
                                        </ul>
                                        <!--end:::Tabs-->
                                        <!--begin:::Tab content-->
                                        <div class="tab-content" id="myTabContent">
                                            <!--begin:::Tab pane-->
                                            <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Open Tasks</h2>
                                                        </div>
                                                        <!--end::Card title-->
                                                        <!--begin::Card toolbar-->
                                                        <div class="card-toolbar">
                                                            <!--begin::Filter-->
                                                            <button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
                                                                <i class="ki-outline ki-plus-square fs-3"></i>Add New</button>
                                                            <!--end::Filter-->
                                                        </div>
                                                        <!--end::Card toolbar-->
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0 pb-5">
                                                        <!--begin::Table-->
                                                        <table class="table align-middle table-row-dashed fs-6 gy-4" id="kt_docs_datatable_subtable">
                                                            <!--begin::Table head-->
                                                            <thead>
                                                                <!--begin::Table row-->
                                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-100px">Title</th>
                                                                    <th class="text-center min-w-100px">Status</th>
                                                                    <th class="text-start min-w-150px">Tags</th>
                                                                    <th class="text-start min-w-100px">Assigned</th>
                                                                    <th class="text-end"></th>
                                                                </tr>
                                                                <!--end::Table row-->
                                                            </thead>
                                                            <!--end::Table head-->
                                                            <!--begin::Table body-->
                                                            <tbody class="fw-bold text-gray-600">

                                                            <?php
                                                                $taskResult = $dbConnection->query("SELECT * FROM project_target_task WHERE `Project ID` = '$projectID' AND `Target ID` = '$targetID' AND `Parent Task ID` = ''");

                                                                while ($taskRow = $taskResult->fetch_assoc()) {
                                                                    $title = $taskRow['Title'];
                                                                    $status = $taskRow['Status'];

                                                                    $statusClass = '';
                                                                    switch ($status) {
                                                                        case 'In Progress':
                                                                            $statusClass = 'badge-light-info';
                                                                            break;
                                                                        case 'Done':
                                                                            $statusClass = 'badge-light-success';
                                                                            break;
                                                                        case 'Not Started';
                                                                            $statusClass = 'badge-light';
                                                                            break;
                                                                        case 'On Hold':
                                                                            $statusClass = 'badge-light-warning';
                                                                            break;  
                                                                    }
                                                                    $tags = $taskRow['Tags'];
                                                                    echo<<<END
                                                                        <tr>
                                                                            <!--begin::Title-->
                                                                            <td>
                                                                                <a href="#" class="text-dark text-hover-primary">$title</a>
                                                                            </td>
                                                                            <!--end::Title-->
                                                                            <!--begin::Status-->
                                                                            <td class="text-center">
                                                                                <span class="badge shadow fs-7 $statusClass">$status</span>
                                                                            </td>
                                                                            <!--end::Status-->
                                                                            <!--begin::Tags-->
                                                                            <td class="text-start">
                                                                                <span class="badge shadow fs-7 badge-light-success">$tags</span>
                                                                            </td>
                                                                            <!--end::Tags-->
                                                                            <!--begin::Assigned-->
                                                                            <td class="text-start">
                                                                                <div class="symbol-group symbol-hover">
                                                                                </div>
                                                                            </td>
                                                                            <!--end::Assigned-->

                                                                            <!--begin::Actions-->
                                                                            <td class="text-end">
                                                                    END;
                                                                        if ($status != 'On Hold' AND $status != 'Done') {
                                                                            echo<<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-success h-25px w-25px">
                                                                                    <i class="ki-duotone ki-check fs-2">
                                                                                    </i>
                                                                                </button>
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-warning h-25px w-25px">
                                                                                    <i class="fa-solid fa-pause"></i>
                                                                                </button>
                                                                            END;
                                                                        }
                                                                        if ($status == 'On Hold') {
                                                                            echo<<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-primary h-25px w-25px">
                                                                                    <i class="ki-duotone ki-to-right fs-2"></i>
                                                                                </button>
                                                                            END;
                                                                        }
                                                                    echo<<<END
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-info btn-active-light-primary toggle h-25px w-25px">
                                                                                    <i class="ki-duotone ki-brush">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                    </i>
                                                                                </button>
                                                                                <button type="button" class="btn btn-sm btn-icon btn-light-danger btn-active-light-primary toggle h-25px w-25px">
                                                                                    <i class="ki-duotone ki-trash">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                        <span class="path3"></span>
                                                                                        <span class="path4"></span>
                                                                                        <span class="path5"></span>
                                                                                    </i>
                                                                                </button>
                                                                            </td>
                                                                            <!--end::Actions-->
                                                                        </tr>
                                                                    END;

                                                                    
                                                                }
                                                            ?>
                                                                
                                                                <tr class="ms-5">
                                                                    <!--begin::Title-->
                                                                    <td class="ps-2 border-none">
                                                                        <a href="#" class="text-dark text-hover-primary d-flex"><i class="ki-duotone ki-to-right text-primary me-2 fs-2"></i> Documents</a>
                                                                    </td>
                                                                    <!--end::Title-->
                                                                    <!--begin::Status-->
                                                                    <td class="text-center">
                                                                        <span class="badge shadow fs-7 badge-light">Yet to Start</span>
                                                                    </td>
                                                                    <!--end::Status-->
                                                                    <!--begin::Tags-->
                                                                    <td class="text-start">
                                                                        <span class="badge shadow fs-7 badge-light-success">Low</span>
                                                                        <span class="badge shadow fs-7 badge-light">Learn</span>
                                                                    </td>
                                                                    <!--end::Tags-->
                                                                    <!--begin::Assigned-->
                                                                    <td class="text-start">
                                                                        <div class="symbol-group symbol-hover">
                                                                            <?php

                                                                            $userResult = $dbConnection->query("SELECT * FROM user INNER JOIN project_assigned_user ON user.username = project_assigned_user.Username AND project_assigned_user.`Project ID` = '$projectID'");

                                                                            while ($userRow = $userResult->fetch_assoc()) {
                                                                                $userFullName = $userRow['First Name'] . " " . $userRow['Last Name'];
                                                                                $userProfileURL = $userPictureURL = "data:image/jpeg;base64," . base64_encode($userRow['Picture']);
                                                                                echo <<<END
                                                                                    <!--begin::User-->
                                                                                    <div class="symbol symbol-30px symbol-circle shadow"
                                                                                        data-bs-toggle="tooltip" title="$userFullName">
                                                                                        <img alt="Pic"
                                                                                            src="$userPictureURL" />
                                                                                    </div>
                                                                                    <!--end::User-->
                                                                                END;
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </td>
                                                                    <!--end::Assigned-->
                                                                    <!--begin::Actions-->
                                                                    <td class="text-end">
                                                                        <button type="button" class="btn btn-sm btn-icon btn-light-success h-25px w-25px">
                                                                            <i class="ki-duotone ki-check fs-2">
                                                                            </i>
                                                                        </button>

                                                                        <button type="button" class="btn btn-sm btn-icon btn-light-primary h-25px w-25px">
                                                                            <i class="ki-duotone ki-to-right fs-2"></i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-sm btn-icon btn-light-info btn-active-light-primary toggle h-25px w-25px">
                                                                            <i class="ki-duotone ki-brush">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-sm btn-icon btn-light-danger btn-active-light-primary toggle h-25px w-25px">
                                                                            <i class="ki-duotone ki-trash">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                                <span class="path3"></span>
                                                                                <span class="path4"></span>
                                                                                <span class="path5"></span>
                                                                            </i>
                                                                        </button>
                                                                    </td>
                                                                    <!--end::Actions-->
                                                                </tr>
                                                                <tr class="ms-5">
                                                                    <!--begin::Order ID-->
                                                                    <td class="d-flex ps-2">
                                                                        <i class="ki-duotone ki-to-right text-primary fs-2 me-2"></i>
                                                                        <a href="#" class="text-dark text-hover-primary">Tasks</a>
                                                                    </td>
                                                                    <!--end::Order ID-->
                                                                    <!--begin::Status-->
                                                                    <td class="text-center">
                                                                        <span class="badge shadow fs-7 badge-light-info">In Progress</span>
                                                                    </td>
                                                                    <!--end::Status-->
                                                                    <!--begin::Tags-->
                                                                    <td class="text-start">
                                                                        <span class="badge shadow fs-7 badge-light-info">Important</span>
                                                                    </td>
                                                                    <!--end::Tags-->
                                                                    <!--begin::Assigned-->
                                                                    <td class="text-start">
                                                                        <div class="symbol-group symbol-hover">
                                                                            <?php

                                                                            $userResult = $dbConnection->query("SELECT * FROM user INNER JOIN project_assigned_user ON user.username = project_assigned_user.Username AND project_assigned_user.`Project ID` = '$projectID'");

                                                                            while ($userRow = $userResult->fetch_assoc()) {
                                                                                $userFullName = $userRow['First Name'] . " " . $userRow['Last Name'];
                                                                                $userProfileURL = $userPictureURL = "data:image/jpeg;base64," . base64_encode($userRow['Picture']);
                                                                                echo <<<END
                                                                                    <!--begin::User-->
                                                                                    <div class="symbol symbol-30px symbol-circle shadow"
                                                                                        data-bs-toggle="tooltip" title="$userFullName">
                                                                                        <img alt="Pic"
                                                                                            src="$userPictureURL" />
                                                                                    </div>
                                                                                    <!--end::User-->
                                                                                END;
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </td>
                                                                    <!--end::Assigned-->

                                                                    <!--begin::Actions-->
                                                                    <td class="text-end">
                                                                        <button type="button" class="btn btn-sm btn-icon btn-light-success h-25px w-25px">
                                                                            <i class="ki-duotone ki-check fs-2">
                                                                            </i>
                                                                        </button>

                                                                        <button type="button" class="btn btn-sm btn-icon btn-light-warning h-25px w-25px">
                                                                            <i class="fa-solid fa-pause"></i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-sm btn-icon btn-light-info btn-active-light-primary toggle h-25px w-25px">
                                                                            <i class="ki-duotone ki-brush">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                        </button>
                                                                        <button type="button" class="btn btn-sm btn-icon btn-light-danger btn-active-light-primary toggle h-25px w-25px">
                                                                            <i class="ki-duotone ki-trash">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                                <span class="path3"></span>
                                                                                <span class="path4"></span>
                                                                                <span class="path5"></span>
                                                                            </i>
                                                                        </button>
                                                                    </td>
                                                                    <!--end::Actions-->
                                                                </tr>
                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end:::Tab pane-->
                                            <!--begin:::Tab pane-->
                                            <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
                                                <!--begin::Card-->
                                                <div class="card pt-4 mb-6 mb-xl-9">
                                                    <!--begin::Card header-->
                                                    <div class="card-header border-0">
                                                        <!--begin::Card title-->
                                                        <div class="card-title">
                                                            <h2>Events</h2>
                                                        </div>
                                                        <!--end::Card title-->
                                                    </div>
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body py-0">
                                                        <!--begin::Table-->
                                                        <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="min-w-400px">Invoice
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
                                                                        <span class="badge badge-light-warning me-1">Pending</span>to
                                                                        <span class="badge badge-light-info">In Progress</span>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2023, 2:40 pm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">
                                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Sean Bean</a>has made payment to
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2023, 2:40 pm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">
                                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2023, 11:30 am</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">Invoice
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
                                                                        <span class="badge badge-light-info">In Progress</span>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">15 Apr 2023, 11:30 am</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">Invoice
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
                                                                        <span class="badge badge-light-danger">Declined</span>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2023, 8:43 pm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">
                                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2023, 9:23 pm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">
                                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2023, 11:30 am</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">Invoice
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
                                                                        <span class="badge badge-light-succees me-1">In Transit</span>to
                                                                        <span class="badge badge-light-success">Approved</span>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2023, 6:05 pm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">
                                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Brian Cox</a>has made payment to
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2023, 11:30 am</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="min-w-400px">
                                                                        <a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
                                                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a>
                                                                    </td>
                                                                    <td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2023, 8:43 pm</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                            </div>
                                            <!--end:::Tab pane-->
                                        </div>
                                        <!--end:::Tab content-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Layout-->
                                <!--begin::Modals-->
                                <!--begin::Modal - Add Payment-->
                                <div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Add a Payment Record</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                                    <i class="ki-outline ki-cross fs-1"></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <!--begin::Form-->
                                                <form id="kt_modal_add_payment_form" class="form" action="#">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">Invoice Number</span>
                                                            <span class="ms-2" data-bs-toggle="tooltip" title="The invoice number must be unique.">
                                                                <i class="ki-outline ki-information fs-7"></i>
                                                            </span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" name="invoice" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Status</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid fw-bold" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
                                                            <option></option>
                                                            <option value="0">Approved</option>
                                                            <option value="1">Pending</option>
                                                            <option value="2">Rejected</option>
                                                            <option value="3">In progress</option>
                                                            <option value="4">Completed</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Invoice Amount</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" name="amount" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-15">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">Additional Information</span>
                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Information such as description of invoice or product purchased.">
                                                                <i class="ki-outline ki-information fs-7"></i>
                                                            </span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3">Discard</button>
                                                        <button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - New Card-->
                                <!--begin::Modal - Adjust Balance-->
                                <div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bold">Adjust Balance</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->
                                                <div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                                    <i class="ki-outline ki-cross fs-1"></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <!--begin::Balance preview-->
                                                <div class="d-flex text-center mb-9">
                                                    <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                                        <div class="fs-6 fw-semibold mb-2 text-muted">Current Balance</div>
                                                        <div class="fs-2 fw-bold" kt-modal-adjust-balance="current_balance">US$ 32,487.57</div>
                                                    </div>
                                                    <div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
                                                        <div class="fs-6 fw-semibold mb-2 text-muted">New Balance
                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Enter an amount to preview the new balance.">
                                                                <i class="ki-outline ki-information fs-7"></i>
                                                            </span>
                                                        </div>
                                                        <div class="fs-2 fw-bold" kt-modal-adjust-balance="new_balance">--</div>
                                                    </div>
                                                </div>
                                                <!--end::Balance preview-->
                                                <!--begin::Form-->
                                                <form id="kt_modal_adjust_balance_form" class="form" action="#">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Adjustment type</label>
                                                        <!--end::Label-->
                                                        <!--begin::Dropdown-->
                                                        <select class="form-select form-select-solid fw-bold" name="adjustment" aria-label="Select an option" data-control="select2" data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option" data-hide-search="true">
                                                            <option></option>
                                                            <option value="1">Credit</option>
                                                            <option value="2">Debit</option>
                                                        </select>
                                                        <!--end::Dropdown-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-semibold form-label mb-2">Amount</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input id="kt_modal_inputmask" type="text" class="form-control form-control-solid" name="amount" value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold form-label mb-2">Add adjustment note</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Disclaimer-->
                                                    <div class="fs-7 text-muted mb-15">Please be aware that all manual balance changes will be audited by the financial team every fortnight. Please maintain your invoices and receipts until then. Thank you.</div>
                                                    <!--end::Disclaimer-->
                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <button type="reset" id="kt_modal_adjust_balance_cancel" class="btn btn-light me-3">Discard</button>
                                                        <button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - New Card-->
                                <!--end::Modals-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
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
                <script src="//grindbet.pl/assets/js/custom/apps/customers/update.js"></script>
                <script src="//grindbet.pl/assets/js/widgets.bundle.js"></script>
                <script src="//grindbet.pl/assets/js/custom/widgets.js"></script>
                <script src="//grindbet.pl/assets/js/custom/utilities/modals/new-card.js"></script>

                <!--end::Custom Javascript-->
                <!--end::Javascript-->
</body>
<!--end::Body-->

</html>