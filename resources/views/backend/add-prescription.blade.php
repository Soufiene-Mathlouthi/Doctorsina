<?php $page="patient-profile";?>
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
									<li class="breadcrumb-item active" aria-current="page">Add Prescription</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Add Prescription</h2>
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
						
							<!-- Profile Widget -->
							<div class="card widget-profile pat-widget-profile">
								<div class="card-body">
									<div class="pro-widget-content">
										<div class="profile-info-widget">
											<a href="#" class="booking-doc-img">
												<img src="assets/img/patients/patient.jpg" alt="User Image">
											</a>
											<div class="profile-det-info">
												<h3><a href="patient-profile">Richard Wilson</a></h3>
												<div class="patient-details">
													<h5><b>Patient ID :</b> PT0016</h5>
													<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
												</div>
											</div>
										</div>
									</div>
									<div class="patient-info">
										<ul>
											<li>Phone <span>+1 952 001 8563</span></li>
											<li>Age <span>38 Years, Male</span></li>
											<li>Blood Group <span>AB+</span></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Profile Widget -->
							
						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Add Prescription</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="biller-info">
												<h4 class="d-block">Dr. Darren Elder</h4>
												<span class="d-block text-sm text-muted">Dentist</span>
												<span class="d-block text-sm text-muted">Newyork, United States</span>
											</div>
										</div>
										<div class="col-sm-6 text-sm-right">
											<div class="billing-info">
												<h4 class="d-block">1 November 2019</h4>
												<span class="d-block text-muted">#INV0001</span>
											</div>
										</div>
									</div>
									
									<!-- Add Item -->
									<div class="add-more-item text-right">
										<a href="javascript:void(0);"><i class="fas fa-plus-circle"></i> Add Item</a>
									</div>
									<!-- /Add Item -->
									
									<!-- Prescription Item -->
									<div class="card card-table">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-hover table-center">
													<thead>
														<tr>
															<th style="min-width: 200px">Name</th>
															<th style="min-width: 80px;">Quantity</th>
															<th style="min-width: 80px">Days</th>
															<th style="min-width: 100px;">Time</th>
															<th style="min-width: 80px;"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<input class="form-control" type="text">
															</td>
															<td>
																<input class="form-control" type="text">
															</td>
															<td>
																<input class="form-control" type="text">
															</td>
															<td>
																<div class="form-check form-check-inline">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox"> Morning
																	</label>
																</div>
																<div class="form-check form-check-inline">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox"> Afternoon
																	</label>
																</div>
																<div class="form-check form-check-inline">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox"> Evening
																	</label>
																</div>
																<div class="form-check form-check-inline">
																	<label class="form-check-label">
																		<input class="form-check-input" type="checkbox"> Night
																	</label>
																</div>
															</td>
															<td>
																<a href="#" class="btn bg-danger-light trash"><i class="far fa-trash-alt"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- /Prescription Item -->
									
									<!-- Signature -->
									<div class="row">
										<div class="col-md-12 text-right">
											<div class="signature-wrap">
												<div class="signature">
													Click here to sign
												</div>
												<div class="sign-name">
													<p class="mb-0">( Dr. Darren Elder )</p>
													<span class="text-muted">Signature</span>
												</div>
											</div>
										</div>
									</div>
									<!-- /Signature -->
									
									<!-- Submit Section -->
									<div class="row">
										<div class="col-md-12">
											<div class="submit-section">
												<button type="submit" class="btn btn-primary submit-btn">Save</button>
												<button type="reset" class="btn btn-secondary submit-btn">Clear</button>
											</div>
										</div>
									</div>
									<!-- /Submit Section -->
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
            </div>
@endsection