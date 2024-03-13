<?php $page="change-password";?>
@extends('backend.layout.mainlayout')
@section('content')

<!-- Breadcrumb -->



<script>
	$('#change_password').validate({
		ignore:'.ignore',
		errorClass:'invalid',
		validClass:'success',
		rules:{
			old_password:{
				required:true,
				minlength:6,
				maxlength:100
			},
			new_password:{
				required:true,
				minlength:6,
				maxlength:100
			},
			confirm_password:{
				required:true,
				equalTo:'#new_password'
			},
		},
		messages:{
			old_password:{
				required:"Enter your old password"
			},
			new_password:{
				required:"Enter your new password"
			},
			confirm_password:{
				required:"Need to confirm your new password"
			},
		},
		submitHandler:function(form){
			$.LoadingOverlay("show");
			form.submit();
		}
	});
	</script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Change Password</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Change Password</h2>
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
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-6">
										
											<!-- Change Password Form -->
											<form action='{{route('update_password')}}' id="change_password" method="POST">
												@csrf
		
												<div class="form-group">
													<label>Old Password</label>
													<input type="password" name="old_password" class="form-control">
													@if($errors->any('old_password'))
													<span class="text-danger">{{$errors->first('old_password')}}
													@endif
												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="password" name="new_password" class="form-control">
													@if($errors->any('old_password'))
													<span class="text-danger">{{$errors->first('new_password')}}
													@endif
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" name="confirm_password" class="form-control">
													@if($errors->any('old_password'))
													<span class="text-danger">{{$errors->first('confirm_password')}}
													@endif
												</div>
												<div class="submit-section">
													<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
												</div>
											</form>
											<!-- /Change Password Form -->
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>		
            <!-- /Page Content -->
</div>

@endsection
