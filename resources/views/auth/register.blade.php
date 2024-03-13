@extends('frontend.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/register.css">
<div class="sidenav video-wrapper">
    <video playsinline autoplay muted loop poster="cake.jpg">
    <source src="assets/img/bgGreen.mp4" type="video/mp4" />
</video>
         <div class="login-main-text">
         <a href="/"><img alt="" src="assets/img/Logo_vert.png" width="300px"></a>
         <hr><br>
        <h2>Join our community for more content.</h2><br>
            <!-- Add font awesome icons -->
  <a href="#" class="fa fa-facebook fa-4x"></a>
  <a href="#" class="fa fa-twitter fa-4x"></a>
    <a href="#" class="fa fa-instagram fa-4x"></a>
        <a href="#" class="fa fa-linkedin fa-4x"></a>

         </div>
      </div>
      <div class="main">
         <div class="col-md-12 col-sm-12">
            <div class="login-form">
<!--**********************************************************************************************************************************-->
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                        <h1 class="col-md-4 text-md-right"></h1>
                        <div class="col-md-6">
                        <h1 class="">Signup</h1>Already have an account? <a href="login">Login here!</a>
                            <hr>
</div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control form-control-lg @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus placeholder="Firstname">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control form-control-lg @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"  placeholder="Lastname">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="national_id" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                  <input id="national_id" type="text" class="form-control form-control-lg @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id"  placeholder="Passport Number">

                                @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="national_id" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                            <select class="form-control form-control-lg" aria-invalid="false" id="type" name="type" value="{{ old('type') }}" required autocomplete="type" class="form-control @error('type') is-invalid @enderror">
                                                            <option>You are </option>
                                                            <option name="type" value="patient">Patient</option>
                                                            <option name="type" value="doctor">Doctor</option>
                                                        </select>
                                @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

<!--**********************************************************************************************************************************-->
                    </form>
<!--**********************************************************************************************************************************-->
            </div>
         </div>
      </div>

@endsection