@extends('auth.profile.user.layouts.master')
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="row">
            <div class="col">
            <h1 class="kt-font-success">CASE HISTORY FOR <small class="text-muted kt-font-bold">{{$casehistory->patient->first_name}}</small></h1>
            <div class="alert alert-success" role="alert">
                                    <div class="alert-text">
                                        <h4 class="alert-heading">STATUS  <small>{{$casehistory->status}}</small></h4>
                                        <p>{{$casehistory->title}}</p>
                                        <hr>
                                       <p>Created at <small class="mb-0"> {{$casehistory->created_at}}</small> and updated at <small class="mb-0"> {{$casehistory->updated_at}}</small> </p>
                                    </div>
                                </div>
                <!--Begin::Section-->
                <div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="row row-no-padding row-col-separator-xl">
                            <div class="col-md-12 col-lg-12 col-xl-4">
                                <!--begin:: Widgets/Stats2-1 -->
<div class="kt-widget1">
	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">Food allergies</h3>
		
		</div>
		<span class="kt-widget1__number kt-font-brand">{{$casehistory->food_allergies}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">bleed_tendency</h3>

		</div>
		<span class="kt-widget1__number kt-font-danger">{{$casehistory->bleed_tendency}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">heart_disease</h3>
		</div>
		<span class="kt-widget1__number kt-font-success">{{$casehistory->heart_disease}}</span>
	</div>

</div>
<!--end:: Widgets/Stats2-1 -->                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-4">
                                <!--begin:: Widgets/Stats2-2 -->
<div class="kt-widget1">
	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">blood_pressure</h3>
		</div>
		<span class="kt-widget1__number kt-font-success">{{$casehistory->blood_pressure}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">diabetic</h3>
		</div>
		<span class="kt-widget1__number kt-font-info">{{$casehistory->diabetic}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">surgery</h3>
		</div>
		<span class="kt-widget1__number kt-font-warning">{{$casehistory->surgery}}</span>
	</div>

</div>
<!--end:: Widgets/Stats2-2 -->                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-4">
                                <!--begin:: Widgets/Stats2-3 -->
<div class="kt-widget1">
	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">accident</h3>
		</div>
		<span class="kt-widget1__number kt-font-success">{{$casehistory->accident}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">family_medical_history</h3>
		</div>
		<span class="kt-widget1__number kt-font-danger">{{$casehistory->family_medical_history}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">current_medication</h3>
		
		</div>
		<span class="kt-widget1__number kt-font-primary">{{$casehistory->current_medication}}</span>
	</div>

</div>
<!--end:: Widgets/Stats2-3 -->    
                        </div>
                        </div>
                    </div>
                </div>
                <!--End::Section-->
            </div>
        </div>
<!--******************************************************************************************************************************-->
<div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="row row-no-padding row-col-separator-xl">
                            <div class="col-md-12 col-lg-12 col-xl-4">
                                <!--begin:: Widgets/Stats2-1 -->
                                
<div class="kt-widget1">
	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">female_pregnancy</h3>
		
		</div>
		<span class="kt-widget1__number kt-font-brand">{{$casehistory->female_pregnancy}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">breast_feeding</h3>

		</div>
		<span class="kt-widget1__number kt-font-danger">{{$casehistory->breast_feeding}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">health_insurance</h3>
		</div>
		<span class="kt-widget1__number kt-font-success">{{$casehistory->health_insurance}}</span>
	</div>

</div>
<!--end:: Widgets/Stats2-1 -->                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-4">
                                <!--begin:: Widgets/Stats2-2 -->
<div class="kt-widget1">
	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">low_income</h3>
		</div>
		<span class="kt-widget1__number kt-font-success">{{$casehistory->low_income}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">reference</h3>
		</div>
		<span class="kt-widget1__number kt-font-info">{{$casehistory->reference}}</span>
	</div>

	<div class="kt-widget1__item">
		<div class="kt-widget1__info">
			<h3 class="kt-widget1__title">others</h3>
		</div>
		<span class="kt-widget1__number kt-font-warning">{{$casehistory->others}}</span>
	</div>

</div>
<!--end:: Widgets/Stats2-2 -->                            </div>
         
                        </div>
                    </div>
                    
                </div>
                
 </div>

@endsection
