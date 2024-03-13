<?php $page="review";?>
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
									<li class="breadcrumb-item active" aria-current="page">Reviews</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Reviews</h2>
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
							<div class="doc-review review-listing">
							
								<!-- Review Listing -->
								<ul class="comments-list">
								
									<!-- Comment List -->
									@foreach($reviews as $review)
									<li>
										<div class="comment">
											<img class="avatar rounded-circle" alt="User Image" src="assets/img/patients/patient.jpg">
											<div class="comment-body">
												<div class="meta-data" style="padding-right: 1000px">
													<span class="comment-author">{{$review->patient->first_name}} {{$review->patient->last_name}}</span>
													<span class="comment-date">Reviewed 2 Days ago</span>
													<div class="review-count rating">
														@for($i=1;$i<=$review->star_rating;$i++)
																<i class="fas fa-star filled" ></i>
																@endfor
													</div>
												</div>
												<p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the doctor</p>
												<p class="comment-content">
													{{$review->comment}}
												</p>
											</div>
										</div>
									</li>
									@endforeach
									<!-- /Comment List -->
									
								</ul>
								<!-- /Comment List -->
								
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
</div>
@endsection