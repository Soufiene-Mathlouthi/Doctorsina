<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>DoctorSina Management System</title>
    <meta name="description" content="Page with empty content">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!--begin::Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{url('/adminpanel')}}/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css"
          rel="stylesheet" type="text/css"/>
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{url('/adminpanel')}}/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"
          rel="stylesheet"
          type="text/css"/>
    <link
        href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css"
        rel="stylesheet"
        type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"
          rel="stylesheet"
          type="text/css"/>
    <link
        href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css"
        rel="stylesheet"
        type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/animate.css/animate.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/adminpanel')}}/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css"
          rel="stylesheet"
          type="text/css"/>
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{url('/adminpanel')}}/assets/css/demo12/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

    <!--begin::Custom Styles -->
    @yield('styles')
    <!--end::Custom Styles -->

    <link rel="shortcut icon" href="{{url('/adminpanel')}}/assets/media/logos/favicon.ico"/>


        <!-- chatbot script file -->
<link href="{{url('/chatbot')}}/chatbot.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="{{url('/chatbot')}}/chatbot.js"></script>


</head>
<!-- end::Head -->

<!-- begin::Body -->
<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">


<script>var x = document.getElementById('check1').value;</script>
<div id="chat-container"></div>
<script>
createChatBot(host = 'http://localhost:5005/webhooks/rest/webhook',
botLogo = "https://t3.ftcdn.net/jpg/03/22/38/32/360_F_322383277_xcXz1I9vOFtdk7plhsRQyjODj08iNSwB.jpg",
title = "DoctorSina ", welcomeMessage = "Hey, i am DoctorSina Bot ",
inactiveMsg = "Server is down, Please contact the developer to activate it ",
theme="blue ",sndr = x)
</script>
<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div>
    <!-- <div class="kt-header-mobile__logo">
        <a href="{{url('/adminpanel')}}">
            <img alt="Logo" src="{{url('/adminpanel')}}/assets/media/logos/logo-12.png"/>
        </a>
    </div> -->
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->
    @include('auth.profile.user.layouts.sidebar')
    <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                <!-- begin: Header Menu -->
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                        class="la la-close"></i></button>
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item " aria-haspopup="true"> <a href="{{url('/main')}}" class="kt-menu__link "><span class="kt-menu__link-text">Home</span></a></li>


                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
<a href="{{url('')}}/profile/Appointments/{{auth()->user()->id}}" class="kt-menu__link "><span class="kt-menu__link-text">Appointments</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            </li>


                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
<a href="{{url('')}}/profile/CaseHistory/{{auth()->user()->id}}" class="kt-menu__link "><span class="kt-menu__link-text">Case Histories</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            </li>


                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
<a href="{{url('')}}/profile/Documents/{{auth()->user()->id}}" class="kt-menu__link "><span class="kt-menu__link-text">Documents</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            </li>


                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
<a href="{{url('')}}/profile/Prescriptions/{{auth()->user()->id}}" class="kt-menu__link "><span class="kt-menu__link-text">Prescriptions</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            @if(auth()->user()->type == 'doctor')
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"  data-ktmenu-submenu-toggle="click" aria-haspopup="true">
<a href="{{url('')}}/profile/timeSchedulesForDoctor/{{auth()->user()->id}}" class="kt-menu__link "><span class="kt-menu__link-text">Schedules</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
                <!-- end: Header Menu -->        <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">
                    <!--begin: Search -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown"
                         id="kt_quick_search_toggle">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
                        </div>
                        <div
                            class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-top-unround dropdown-menu-anim dropdown-menu-lg">
                            <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                                 id="kt_quick_search_dropdown">
                                <form method="get" class="kt-quick-search__form">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="flaticon2-search-1"></i></span></div>
                                        <input type="text" class="form-control kt-quick-search__input"
                                               placeholder="Search...">
                                        <div class="input-group-append"><span class="input-group-text"><i
                                                    class="la la-close kt-quick-search__close"></i></span></div>
                                    </div>
                                </form>
                                <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325"
                                     data-mobile-height="200">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search -->

                    <!--begin: Notifications -->
                    <div class="kt-header__topbar-item dropdown">
                        <div aria-expanded="true" class="kt-header__topbar-wrapper" data-offset="10px,0px" data-toggle="dropdown">
                            <span class="kt-header__topbar-icon"><i class="flaticon2-bell-alarm-symbol"></i></span>
                            <span class="kt-hidden kt-badge kt-badge--dot kt-badge--notify kt-badge--sm"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg">
                            <form>
                                <!--begin: Head -->
                                <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                                    <h3 class="kt-head__title">
                                        User Notificationsssss
                                        &nbsp;
                                        <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 new</span>
                                    </h3>
                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                                        <li class="nav-item">
                                            <a aria-selected="true" class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a aria-selected="false" class="nav-link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a aria-selected="false" class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end: Head -->

                                <div class="tab-content">
                                    <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-height="300" data-mobile-height="200" data-scroll="true">
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Application has been approved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New file has been uploaded
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        5 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-drop kt-font-info"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New user feedback received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        8 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        System reboot has been successfully completed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        12 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-favourite kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been placed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        15 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item kt-notification__item--read" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-safe kt-font-primary"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Company meeting canceled
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        19 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-security kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer comment recieved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 days ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 days ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-height="300" data-mobile-height="200" data-scroll="true">
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-line-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-box-1 kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-chart2 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Application has been approved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-image-file kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New file has been uploaded
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        5 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-drop kt-font-info"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New user feedback received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        8 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        System reboot has been successfully completed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        12 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-favourite kt-font-brand"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New order has been placed
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        15 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item kt-notification__item--read" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-safe kt-font-primary"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Company meeting canceled
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        19 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-psd kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New report has been received
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        23 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-download-1 kt-font-danger"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        Finance report has been generated
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        25 hrs ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon-security kt-font-warning"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer comment recieved
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        2 days ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="kt-notification__item" href="#">
                                                <div class="kt-notification__item-icon">
                                                    <i class="flaticon2-pie-chart kt-font-success"></i>
                                                </div>
                                                <div class="kt-notification__item-details">
                                                    <div class="kt-notification__item-title">
                                                        New customer is registered
                                                    </div>
                                                    <div class="kt-notification__item-time">
                                                        3 days ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                        <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                                            <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                                <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                                    All caught up!
                                                    <br>No new notifications.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end: Notifications -->



                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">
                                @if(auth()->user()->type == 'doctor')
<img src="{{asset('uploads/doctors_pictures/'.$user = auth()->user()->picture)}}" width="50px"  height="50px" class="rounded">
@endif
@if(auth()->user()->type == 'patient')
<img src="{{asset('uploads/patients_pictures/'.$user = auth()->user()->picture)}}" width="50px"  height="50px" class="rounded">
@endif
                                </span>
                            </div>
                        </div>
                        <div
                            class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-success kt-notification-item-padding-x"
                                 style="background-image: url({{url('/adminpanel')}}/assets/media/misc/bg-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic"
                                         src="{{url('/adminpanel')}}/assets/media/users/300_25.jpg"/>
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                </div>
                                <div class="kt-user-card__name">
                                @if(auth()->check())
{{$user = auth()->user()->first_name}} {{$user = auth()->user()->last_name}}
@endif
                                </div>
                                <div class="kt-user-card__badge">
                                    <span class="btn btn-success btn-sm btn-bold btn-font-md">        @if(auth()->check())
{{$user = auth()->user()->email}}
<input  id='check1' type=hidden value='{{auth()->user()->email}}' >
@endif</span>
                                </div>
                            </div>
                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="{{url('')}}/profile/{{auth()->user()->id}}/type"

                                   class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Profiles
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Account settings and more
                                        </div>
                                    </div>
                                </a>




                                <div class="kt-notification__custom kt-space-between">
                                    <a href="{{url('')}}/logout"
                                       class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                                    <a href="{{url('/adminpanel')}}/demo3/custom/user/login-v2.html" target="_blank"
                                       class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
                                </div>
                            </div>
                            <!--end: Navigation -->
                        </div>
                    </div>
                    <!--end: User Bar -->
                </div>
                <!-- end:: Header Topbar -->
            </div>
            <!-- end:: Header -->
