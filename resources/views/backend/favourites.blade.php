<?php $page="favourites";?>
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
									<li class="breadcrumb-item active" aria-current="page">Favourites</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Favourites</h2>
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
							@include('backend.layout.patient-partials.patientsidebar')
						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">
								@foreach($favourites as $favourite)
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="{{ route('doctor-profile', [$favourite->doctor->id] ) }}">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctors-3.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="{{ route('doctor-profile', [$favourite->doctor->id] ) }}">Dr.{{$favourite->doctor->first_name}} {{$favourite->doctor->last_name}}</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">{{$favourite->department->name}}</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating">(2)</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> {{$favourite->doctor->address}}
												</li>
												
												
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="doctor-profile" class="btn view-btn">View Profile</a>
												</div>
												<div class="col-6">
													<a href="booking" class="btn book-btn">Book Now</a>
												</div>
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
</div>
@endsection