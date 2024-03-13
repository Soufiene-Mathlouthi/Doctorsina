@extends('auth.profile.user.layouts.master')
@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title"> Hey there ,
                               @if(auth()->check())
{{$user = auth()->user()->type}}
@endif</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

     

                

                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                </span>
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        <a href="#" class="btn kt-subheader__btn-secondary">Today</a>

                        <a href="#" class="btn kt-subheader__btn-secondary">Month</a>

                        <a href="#" class="btn kt-subheader__btn-secondary">Year</a>

                        <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker"
                           data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                            <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                            <span class="kt-subheader__btn-daterange-date"
                                  id="kt_dashboard_daterangepicker_date">Aug 31</span>
                            <i class="flaticon2-calendar-1"></i>
                        </a>

                        <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions"
                             data-placement="left">
                            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                        <path
                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                            id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path
                                            d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                            id="Combined-Shape" fill="#000000"/>
                                    </g>
                                </svg>                        <!--<i class="flaticon2-plus"></i>-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Add anything or jump to:
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right"
                                           title="Click to learn more..."></i>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">Ticket</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Goal</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support Case</span>
                                            <span class="kt-nav__link-badge">
                                        <span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
                                    </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#"
                                           data-toggle="kt-tooltip" data-placement="right"
                                           title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Content Container-->
        <div class="welcomepage">
        
        <div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
    Suggested for you 
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab" aria-selected="true">
                    Appointments ({{$appointments->count()}})
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab" aria-selected="false">
						Documents ({{$documents->count()}})
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab" aria-selected="false">
						All time
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div aria-expanded="true" class="tab-pane active" id="kt_widget5_tab1_content">
				<div class="kt-widget5">
                @foreach($appointments as $appointment)
					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
                        <div class="kt-widget5__pic">
             
                        <img src="{{asset('uploads/patients_pictures/'.$appointment->patient->picture)}}" class="rounded kt-widget__img">
							</div>
							<div class="kt-widget5__section">
								<a class="kt-widget5__title" href="#">
                            
                                {{$appointment->patient->first_name}} {{$appointment->patient->last_name}}
								</a>
								<p class="kt-widget5__desc">
                                {{$appointment->notes}}
								</p>
								<div class="kt-widget5__info">
									<span>Doctor:</span>
									<span class="kt-font-info">{{$appointment->doctor->first_name}}</span>
									<span>Date:</span>
									<span class="kt-font-info">{{$appointment->date}}</span>
								</div>
							</div>
						</div>
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">{{$appointment->status}}</span>
								<span class="kt-widget5__sales">Status</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number"><a href="/profile/Appointments/details/{{$appointment->id}}/{{$appointment->patient->id}}/{{$appointment->doctor->id}}"><i class="flaticon2-next icon-5x"></i></a></span>
								<span class="kt-widget5__votes"></span>
							</div>
						</div>
					</div>
                @endforeach
		
				</div>
			</div>
			<div class="tab-pane" id="kt_widget5_tab2_content">
				<div class="kt-widget5">
                @foreach($documents as $document)
					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img alt="" class="kt-widget7__img" src="./assets/media//products/product10.jpg">
							</div>
							<div class="kt-widget5__section">
								<a class="kt-widget5__title" href="#">
									{{$document->patient->first_name}} {{$document->patient->last_name}}
								</a>
								<p class="kt-widget5__desc">
								{{$document->description}}
								</p>
								<div class="kt-widget5__info">
									<span>Doctor:</span>
									<span class="kt-font-info">{{$document->doctor->first_name}} </span>
									<span>Released:</span>
									<span class="kt-font-info">{{$document->date}} </span>
								</div>
							</div>
						</div>

						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">{{$document->status}} </span>
								<span class="kt-widget5__sales">Status</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number"><a href="{{asset('uploads/patients_documents/'.$document->doc)}}"><i class="flaticon2-download icon-5x"></i></a></span>
								<span class="kt-widget5__votes"></span>
							</div>
						</div>
					</div>
                    @endforeach
				
				
				</div>
			</div>
			<div class="tab-pane" id="kt_widget5_tab3_content">
				<div class="kt-widget5">
					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img alt="" class="kt-widget7__img" src="./assets/media//products/product11.jpg">
							</div>
							<div class="kt-widget5__section">
								<a class="kt-widget5__title" href="#">
									Awesome Mobile App
								</a>
								<p class="kt-widget5__desc">
									Metronic admin themes.Lorem Ipsum Amet
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Fly themes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>

						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">210,054</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">1103</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>
					</div>

					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img alt="" class="kt-widget7__img" src="./assets/media//products/product6.jpg">
							</div>
							<div class="kt-widget5__section">
								<a class="kt-widget5__title" href="#">
									Great Logo Designn
								</a>
								<p class="kt-widget5__desc">
									Metronic admin themes.
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Keenthemes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>

						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">19,200</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">1046</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>
					</div>

					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img alt="" class="kt-widget7__img" src="./assets/media//products/product10.jpg">
							</div>
							<div class="kt-widget5__section">
								<a class="kt-widget5__title" href="#">
									Branding Mockup
								</a>
								<p class="kt-widget5__desc">
									Metronic bootstrap themes.
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Fly themes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>

						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">24,583</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">3809</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->
    <style>
.welcomepage{
padding:20px;

}
        </style>
@endsection
