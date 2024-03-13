<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside" style="background-color: green;">
    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div >
            <img src="{{asset('DoctorSinaLogoTextWhite.png')}}" width="180px">

        </div>

        <!-- <div class="kt-aside__brand-tools">
            <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
        </div> -->
    </div>
    <!-- end:: Aside -->    <!-- begin:: Aside Menu -->
    <div>
        <div id="kt_aside_menu"
             class="kt-aside-menu "
             data-ktmenu-vertical="1"
             data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">

            <ul class="kt-menu__nav ">
                <li class="kt-menu__section kt-menu__section--first">
                    <h4 class="kt-menu__section-text">Menu</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>

                @if(auth()->user()->type == 'doctor')
                <li class="kt-menu__item ">
                    <a href="{{url('')}}/profile/mypatients/all" class="kt-menu__link ">
                    <i class="kt-menu__link-icon flaticon-suitcase"></i>
                            <span class="kt-menu__link-text">My pateints</span>
                            <i class="kt-menu__ver-arrow flaticon2-plus"></i>
                        </a>

                        </li>
@endif

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <i class="kt-menu__link-icon flaticon-calendar-with-a-clock-time-tools"></i>
                        <span class="kt-menu__link-text">Appointments</span>
                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>

                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Appointments</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{url('')}}/profile/d/Appointments/Create/{{auth()->user()->id}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Add Appointment</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{url('')}}/profile/Appointments/{{auth()->user()->id}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Appointments List</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item ">
                    <a href="{{url('')}}/profile/CaseHistory/add/Case" class="kt-menu__link ">
                    <i class="kt-menu__link-icon flaticon-suitcase"></i>
                            <span class="kt-menu__link-text">Add Case History</span>
                            <i class="kt-menu__ver-arrow flaticon2-plus"></i>
                        </a>

                        </li>


                <li class="kt-menu__item "><a href="{{url('')}}/profile/Documents/create/d" class="kt-menu__link "><i
                            class="kt-menu__link-icon flaticon2-document"></i><span
                            class="kt-menu__link-text">Add Documents</span>
                            <i class="kt-menu__ver-arrow flaticon2-plus"></i>
                        </a></li>

                <li class="kt-menu__item "><a href="{{url('')}}/profile/Documents/create/d" class="kt-menu__link "><i
                            class="kt-menu__link-icon flaticon2-medical-records"></i><span
                            class="kt-menu__link-text">Add Prescriptions</span>
                            <i class="kt-menu__ver-arrow flaticon2-plus"></i>
                        </a></li>

                <li class="kt-menu__item "><a href="{{isset($doctor) ? route('create-time-schedule-for-doctor-profile',$doctor->id) : route('timeschedules.create')}}" class="kt-menu__link "><i
                            class="kt-menu__link-icon flaticon2-schedule"></i><span
                            class="kt-menu__link-text">Add Time Schedules</span>
                            <i class="kt-menu__ver-arrow flaticon2-plus"></i>
                        </a></li>



                <li class="kt-menu__item " aria-haspopup="true"><a href="{{ url('') }}/profile/edit/{{auth()->user()->id}}" class="kt-menu__link "><i
                            class="kt-menu__link-icon flaticon-settings-1"></i><span
                            class="kt-menu__link-text">Settings</span></a></li>
            </ul>
        </div>
    </div>
    <!-- end:: Aside Menu --></div>
<!-- end:: Aside -->
