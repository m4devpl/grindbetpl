<?php require_once "../../appBase.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GrindBet.PL | Calendar</title>
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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Calendar</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Calendar</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Toolbar container-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-3">
                                <!--end::Primary button-->
                                <button class="btn btn-sm btn-flex btn-primary h-35 px-4 py-3" data-kt-calendar="add">
                                    <i class="ki-outline ki-plus fs-2"></i>
                                    Add Event
                                </button>
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
                                <!--begin::Calendar-->
                                <div id="kt_calendar_app"></div>
                                <!--end::Calendar-->
                                <!--begin::Modal - New Product-->
                                <div class="modal fade" id="kt_modal_add_event" tabindex-="1" aria-hidden="true" data-bs-focus="false">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Form-->
                                            <form class="form" action="#" id="kt_modal_add_event_form">
                                                <!--begin::Modal header-->
                                                <div class="modal-header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bold" data-kt-calendar="title">Add Event</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
                                                        <i class="ki-outline ki-cross fs-1"></i>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body py-10 px-lg-17">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-9">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold required mb-2">Event Name</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-9">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Event Description</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-9">
                                                        <!--begin::Label-->
                                                        <label class="fs-6 fw-semibold mb-2">Event Location</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-9">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
                                                            <span class="form-check-label fw-semibold" for="kt_calendar_datepicker_allday">All Day</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row row-cols-lg-2 g-10">
                                                        <div class="col">
                                                            <div class="fv-row mb-9">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold mb-2 required">Event Start Date</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <div class="col" data-kt-calendar="datepicker">
                                                            <div class="fv-row mb-9">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold mb-2">Event Start Time</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row row-cols-lg-2 g-10">
                                                        <div class="col">
                                                            <div class="fv-row mb-9">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold mb-2 required">Event End Date</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                        <div class="col" data-kt-calendar="datepicker">
                                                            <div class="fv-row mb-9">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold mb-2">Event End Time</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
                                                                <!--end::Input-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Modal body-->
                                                <!--begin::Modal footer-->
                                                <div class="modal-footer flex-center">
                                                    <!--begin::Button-->
                                                    <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                                <!--end::Modal footer-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal - New Product-->
                                <!--begin::Modal - New Product-->
                                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" data-bs-focus="false" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header border-0 justify-content-end">
                                                <!--begin::Edit-->
                                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
                                                    <i class="ki-outline ki-pencil fs-2"></i>
                                                </div>
                                                <!--end::Edit-->
                                                <!--begin::Edit-->
                                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
                                                    <i class="ki-outline ki-trash fs-2"></i>
                                                </div>
                                                <!--end::Edit-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                                                    <i class="ki-outline ki-cross fs-2x"></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                                <!--begin::Row-->
                                                <div class="d-flex">
                                                    <!--begin::Icon-->
                                                    <i class="ki-outline ki-calendar-8 fs-1 text-muted me-5"></i>
                                                    <!--end::Icon-->
                                                    <div class="mb-9">
                                                        <!--begin::Event name-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="fs-3 fw-bold me-3" data-kt-calendar="event_name"></span>
                                                            <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                                        </div>
                                                        <!--end::Event name-->
                                                        <!--begin::Event description-->
                                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                                        <!--end::Event description-->
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot h-10px w-10px bg-success ms-2 me-7"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Event start date/time-->
                                                    <div class="fs-6">
                                                        <span class="fw-bold">Starts</span>
                                                        <span data-kt-calendar="event_start_date"></span>
                                                    </div>
                                                    <!--end::Event start date/time-->
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="d-flex align-items-center mb-9">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-dot h-10px w-10px bg-danger ms-2 me-7"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Event end date/time-->
                                                    <div class="fs-6">
                                                        <span class="fw-bold">Ends</span>
                                                        <span data-kt-calendar="event_end_date"></span>
                                                    </div>
                                                    <!--end::Event end date/time-->
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <i class="ki-outline ki-geolocation fs-1 text-muted me-5"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Event location-->
                                                    <div class="fs-6" data-kt-calendar="event_location"></div>
                                                    <!--end::Event location-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal - New Product-->
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
    <script src="//grindbet.pl/assets/js/custom/apps/projects/list/list.js"></script>
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="//grindbet.pl/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="//grindbet.pl/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="//grindbet.pl/assets/js/custom/apps/calendar/calendar.js"></script>
    <script src="//grindbet.pl/assets/js/widgets.bundle.js"></script>
    <script src="//grindbet.pl/assets/js/custom/widgets.js"></script>
    <script src="//grindbet.pl/assets/js/custom/apps/chat/chat.js"></script>
    <script src="//grindbet.pl/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>

</html>