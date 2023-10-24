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
                                                <a class="nav-link text-active-primary py-5 me-6 active" href="//grindbet.pl/home/projects/users?project=<?php echo $project->id; ?>">Users</a>
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
                                <div class="d-flex flex-wrap flex-stack pb-7">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-wrap align-items-center my-1">
                                        <h3 class="fw-bold me-5 my-1">Assigned Users (<?php echo $project->getNoOfAssignedUsers(); ?>)</h3>
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <i class="ki-outline ki-magnifier fs-3 position-absolute ms-3"></i>
                                            <input type="text" id="kt_filter_search" class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Controls-->
                                    <div class="d-flex flex-wrap my-1">
                                        <!--begin::Tab nav-->
                                        <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                                            <li class="nav-item m-0">
                                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                                    <i class="ki-outline ki-element-plus fs-2"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item m-0">
                                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                                    <i class="ki-outline ki-row-horizontal fs-2"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Tab nav-->
                                    </div>
                                    <!--end::Controls-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                                        <!--begin::Row-->
                                        <div class="row g-6 g-xl-9">
                                            <?php
                                            $userResult = $dbConnection->query("SELECT * FROM user INNER JOIN project_assigned_user ON user.username = project_assigned_user.Username AND project_assigned_user.`Project ID` = $projectID");

                                            while ($userRow = $userResult->fetch_assoc()) {
                                                $userFullName = $userRow['First Name'] . " " . $userRow['Last Name'];
                                                $userProfileURL = $userPictureURL = "data:image/jpeg;base64," . base64_encode($userRow['Picture']);
                                                $type = $userRow['Type'];
                                                $email = $userRow['Email Address'];

                                                echo <<<END
                                                <!--begin::Col-->
                                                <div class="col-md-6 col-xxl-4">
                                                    <!--begin::Card-->
                                                    <div class="card">
                                                        <!--begin::Card body-->
                                                        <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-65px symbol-circle mb-5">
                                                                <img src="$userProfileURL" alt="image" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Name-->
                                                            <span class="badge badge-light-primary fw-bold">$type</span>
                                                            <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">$userFullName</a>
                                                            <!--end::Name-->
                                                            <!--begin::Position-->
                                                            <div class="fw-semibold text-gray-400 mb-6">$email</div>
                                                            <!--end::Position-->
                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-center flex-wrap">
                                                                <!--begin::Stats-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                                                    <div class="fs-6 fw-bold text-gray-700 text-center">23</div>
                                                                    <div class="fw-semibold text-gray-400">Active Tasks</div>
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->
                                                END;
                                            }
                                            ?>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Pagination-->
                                        <div class="d-flex flex-stack flex-wrap pt-10">
                                            <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
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
                                    <!--end::Tab pane-->
                                    <!--begin::Tab pane-->
                                    <div id="kt_project_users_table_pane" class="tab-pane fade">
                                        <!--begin::Card-->
                                        <div class="card card-flush">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                                            <tr>
                                                                <th class="min-w-250px">Full Name</th>
                                                                <th class="min-w-150px">Type</th>
                                                                <th class="min-w-90px">No. of Open Tasks</th>
                                                                <th class="min-w-50px text-end">Details</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fs-6">
                                                            <?php
                                            $userResult = $dbConnection->query("SELECT * FROM user INNER JOIN project_assigned_user ON user.username = project_assigned_user.Username AND project_assigned_user.`Project ID` = $projectID");

                                            while ($userRow = $userResult->fetch_assoc()) {
                                                $userFullName = $userRow['First Name'] . " " . $userRow['Last Name'];
                                                $userProfileURL = $userPictureURL = "data:image/jpeg;base64," . base64_encode($userRow['Picture']);
                                                $type = $userRow['Type'];
                                                $email = $userRow['Email Address'];

                                                echo <<<END
                                                <tr>
                                                                <td>
                                                                    <!--begin::User-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Wrapper-->
                                                                        <div class="me-5 position-relative">
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="$userProfileURL" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                        <!--begin::Info-->
                                                                        <div class="d-flex flex-column justify-content-center">
                                                                            <a href="" class="mb-1 text-gray-800 text-hover-primary">$userFullName</a>
                                                                            <div class="fw-semibold fs-6 text-gray-400">$email</div>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-light-primary fw-bold px-4 py-3">$type</span>
                                                                </td>
                                                                <td>
                                                                    23
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                                                </td>
                                                            </tr>
                                                END;
                                            }
                                            ?>
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Modals-->
                                <!--begin::Modal - View Users-->
                                <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header pb-0 border-0 justify-content-end">
                                                <!--begin::Close-->
                                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                    <i class="ki-outline ki-cross fs-1"></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--begin::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-13">
                                                    <!--begin::Title-->
                                                    <h1 class="mb-3">Browse Users</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fw-semibold fs-5">If you need more info, please check out our
                                                        <a href="#" class="link-primary fw-bold">Users Directory</a>.
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Users-->
                                                <div class="mb-15">
                                                    <!--begin::List-->
                                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-6.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$23,000</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$50,500</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-1.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">max@kt.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$75,900</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-5.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$10,500</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-25.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$20,000</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">mik@pex.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$9,300</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-9.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$15,000</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$23,000</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$45,800</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-23.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$90,500</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$5,000</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-12.jpg" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$70,000</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-stack py-5">
                                                            <!--begin::Details-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-35px symbol-circle">
                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-6">
                                                                    <!--begin::Name-->
                                                                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Email-->
                                                                    <div class="fw-semibold text-muted">robert@benko.com</div>
                                                                    <!--end::Email-->
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Stats-->
                                                            <div class="d-flex">
                                                                <!--begin::Sales-->
                                                                <div class="text-end">
                                                                    <div class="fs-5 fw-bold text-dark">$45,500</div>
                                                                    <div class="fs-7 text-muted">Sales</div>
                                                                </div>
                                                                <!--end::Sales-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::List-->
                                                </div>
                                                <!--end::Users-->
                                                <!--begin::Notice-->
                                                <div class="d-flex justify-content-between">
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold">
                                                        <label class="fs-6">Adding Users by Team Members</label>
                                                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                                        <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Notice-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - View Users-->
                                <!--begin::Modal - Users Search-->
                                <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header pb-0 border-0 justify-content-end">
                                                <!--begin::Close-->
                                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                    <i class="ki-outline ki-cross fs-1"></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--begin::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                                <!--begin::Content-->
                                                <div class="text-center mb-13">
                                                    <h1 class="mb-3">Search Users</h1>
                                                    <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Search-->
                                                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                                                    <!--begin::Form-->
                                                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                        <input type="hidden" />
                                                        <!--end::Hidden input-->
                                                        <!--begin::Icon-->
                                                        <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
                                                        <!--end::Icon-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                                                        <!--end::Input-->
                                                        <!--begin::Spinner-->
                                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                                        </span>
                                                        <!--end::Spinner-->
                                                        <!--begin::Reset-->
                                                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                                            <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
                                                        </span>
                                                        <!--end::Reset-->
                                                    </form>
                                                    <!--end::Form-->
                                                    <!--begin::Wrapper-->
                                                    <div class="py-5">
                                                        <!--begin::Suggestions-->
                                                        <div data-kt-search-element="suggestions">
                                                            <!--begin::Heading-->
                                                            <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                                            <!--end::Heading-->
                                                            <!--begin::Users-->
                                                            <div class="mh-375px scroll-y me-n7 pe-7">
                                                                <!--begin::User-->
                                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-6.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-semibold">
                                                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                                        <span class="badge badge-light">Art Director</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </a>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-semibold">
                                                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                                        <span class="badge badge-light">Marketing Analytic</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </a>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-1.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-semibold">
                                                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                                        <span class="badge badge-light">Software Enginer</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </a>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-5.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-semibold">
                                                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                                        <span class="badge badge-light">Web Developer</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </a>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-25.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-semibold">
                                                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                                        <span class="badge badge-light">UI/UX Designer</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </a>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Users-->
                                                        </div>
                                                        <!--end::Suggestions-->
                                                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                                        <div data-kt-search-element="results" class="d-none">
                                                            <!--begin::Users-->
                                                            <div class="mh-375px scroll-y me-n7 pe-7">
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-6.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2" selected="selected">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1" selected="selected">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-1.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3" selected="selected">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-5.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2" selected="selected">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-25.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3" selected="selected">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2" selected="selected">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-9.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                                                            <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3" selected="selected">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                                                            <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2" selected="selected">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1" selected="selected">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-23.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                                                            <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3" selected="selected">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                                                            <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2" selected="selected">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-12.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1" selected="selected">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                                                            <div class="fw-semibold text-muted">robert@benko.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3" selected="selected">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-13.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                                                                            <div class="fw-semibold text-muted">miller@mapple.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3" selected="selected">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2" selected="selected">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-21.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                                                            <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1" selected="selected">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Separator-->
                                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                <!--end::Separator-->
                                                                <!--begin::User-->
                                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                                                    <!--begin::Details-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="form-check form-check-custom form-check-solid me-5">
                                                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                            <img alt="Pic" src="//grindbet.pl/assets/media/avatars/300-6.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Details-->
                                                                        <div class="ms-5">
                                                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                    <!--begin::Access menu-->
                                                                    <div class="ms-2 w-100px">
                                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                            <option value="1">Guest</option>
                                                                            <option value="2">Owner</option>
                                                                            <option value="3" selected="selected">Can Edit</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end::Access menu-->
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Users-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex flex-center mt-15">
                                                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                                                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Results-->
                                                        <!--begin::Empty-->
                                                        <div data-kt-search-element="empty" class="text-center d-none">
                                                            <!--begin::Message-->
                                                            <div class="fw-semibold py-10">
                                                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                                            </div>
                                                            <!--end::Message-->
                                                            <!--begin::Illustration-->
                                                            <div class="text-center px-5">
                                                                <img src="//grindbet.pl/assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                                                            </div>
                                                            <!--end::Illustration-->
                                                        </div>
                                                        <!--end::Empty-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - Users Search-->
                                <!--end::Modals-->
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