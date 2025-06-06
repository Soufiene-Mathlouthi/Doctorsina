<?php $page="my-patients";?>
@extends('backend.layout.mainlayout')
@section('content')
	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">My Patients</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">My Patients</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						                    
								@include('backend.layout.doctor-partials.doctorsidebar')
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
						
							<div class="row row-grid">
								@foreach($patients as $patient)
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="patient-profile" class="booking-doc-img">
														<img src="assets/img/patients/patient.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3><a href="patient-profile">{{$patient->first_name}} {{$patient->last_name}}</a></h3>
														
														<div class="patient-details">
															<h5><b>Patient ID :</b> P00{{$patient->id}}</h5>
															<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> {{$patient->address}}</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>{{$patient->mobile}}</span></li>
													<li>Age <span>38 Years, Male</span></li>
													<li>Blood Group <span>AB+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
@endsection