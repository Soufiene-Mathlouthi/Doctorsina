<?php $page="search1";?>
@extends('backend.layout.mainlayout')
@section('content')
	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-8 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Search</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">2245 matches found for : Dentist In Bangalore</h2>
						</div>
						<div class="col-md-4 col-12 d-md-block d-none">
							<div class="sort-by">
								<span class="sort-title">Sort by</span>
								<span class="sortby-fliter">
									<select class="select">
										<option>Select</option>
										<option class="sorting">Rating</option>
										<option class="sorting">Popular</option>
										<option class="sorting">Latest</option>
										<option class="sorting">Free</option>
									</select>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Search Filter -->
							<div class="card search-filter">
								<div class="card-header">
									<h4 class="card-title mb-0">Search Filter</h4>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<form action="{{url('/search')}}" type="get" >
									<div class="cal-icon">
										<input type="text" class="form-control" name="str" placeholder="Search a Doctor">
									</div>			
								</div>
								<div class="filter-widget">
									<h4>Gender</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type" checked>
											<span class="checkmark"></span> Male Doctor
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="gender_type">
											<span class="checkmark"></span> Female Doctor
										</label>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Select Specialist</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Urology
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist" checked>
											<span class="checkmark"></span> Neurology
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Dentist
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Orthopedic
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Cardiologist
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_specialist">
											<span class="checkmark"></span> Cardiologist
										</label>
									</div>
								</div>
									<div class="btn-search">
										<button type="button" class="btn btn-block">Search</button>
									</div>	
								</div>
							</div>
						</form>
							<!-- /Search Filter -->
							
						</div>
						
						<div class="col-md-12 col-lg-8 col-xl-9">

							<!-- Doctor Widget -->
							@foreach ($doctors as $doctor)
								
							
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="doctor-profile">
													<img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="doctor-profile">Dr. {{$doctor->first_name}} {{$doctor->last_name}}</a></h4>
												<p class="doc-speciality">{{$doctor->speciality}}</p>
												<h5 class="doc-department"><img src="assets/img/specialities/specialities-04.png" class="img-fluid" alt="Speciality">Cardiologist</h5>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(17)</span>
												</div>
												<div class="clinic-details">
													<p class="doc-location"><i class="fas fa-map-marker-alt"></i> Florida, USA</p>
													<ul class="clinic-gallery">
														<li>
															<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-01.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
																<img  src="assets/img/features/feature-02.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-03.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-04.jpg" alt="Feature">
															</a>
														</li>
													</ul>
												</div>
												<div class="clinic-services">
													<span>Dental Fillings</span>
													<span> Whitneing</span>
												</div>
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-thumbs-up"></i> 98%</li>
													<li><i class="far fa-comment"></i> 17 Feedback</li>
													<li><i class="fas fa-map-marker-alt"></i> Florida, USA</li>
													<li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i> </li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="doctor-profile">View Profile</a>
												<!--
												<a class="apt-btn"  href="{{ route('appointments_booked', [$doctor->id] ) }}">Book Appointment</a> -->
												<a class="apt-btn" href="#" data-toggle="modal" data-target="#appt_details" >Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<!-- /Doctor Widget -->

					

						

							<div class="load-more text-center">
								<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>	
							</div>	
						</div>
					</div>

				</div>

			</div>		
            <!-- /Page Content -->
</div>
<!-- Appointment Details Modal -->
		<div class="modal fade custom-modal" id="appt_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">More Informations</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<ul class="info-details">
							<li>
								<div class="details-header">
									<div class="row">
										<div class="col-md-12">
											<h4>Disease Name</h4>
											<p>Melanoma</p>
											<h4>Other Names</h4>
											<p>Malignant melanoma</p>
											<h4>Specialty</h4>
											<p>Oncology and dermatology</p>
											<h4>Symptoms</h4>
											<p>Mole that is increasing in size, has irregular edges, change in color, itchiness, or skin breakdown.</p>
											<h4>Causes</h4>
											<p>Ultraviolet light (Sun, tanning devices)</p>
											<h4>Deaths</h4>
											<p>59,800 (2015)</p>
											<h4>Description</h4>
											<p style="box-sizing: unset">Melanoma, also redundantly known as malignant melanoma, is a type of skin cancer that develops from the pigment-producing cells known as melanocytes. Melanomas typically occur in the skin, but may rarely occur in the mouth, intestines, or eye (uveal melanoma). In women, they most commonly occur on the legs, while in men, they most commonly occur on the back. About 25% of melanomas develop from moles. Changes in a mole that can indicate melanoma include an increase in size, irregular edges, change in color, itchiness, or skin breakdown.</p>
											<h4>Duration</h4>
											<p>Unknown</p>
											<h4>Prevention</h4>
											<p>Sunscreen, avoiding UV light</p>
											<h4>Risk Factors</h4>
											<p>Family history, many moles, poor immune function</p>
											<h4>Frequency</h4>
											<p>3.1 million (2015)</p>	
											<h4>Treatment</h4>
											<p>Surgery</p>	
											<h4>Medication</h4>
											<p>Unknown</p>	
											<h4>Pronunciation</h4>
											<p>/ˌmɛləˈnoʊmə/</p>	

											
											
										</div>
										<div class="col-md-6">
											
										</div>
									</div>
								</div>
								
								
									
					</div>
				</div>
			</div>
		</div>
		<!-- /Appointment Details Modal -->
@endsection