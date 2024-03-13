@extends('backend.layout.blank_master')

@section('content')
<div class="container-xxl">
           

    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card p-5">
            <div class="app-brand justify-content-center">
                <a href="/" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                  <img src="{{ asset('frontend_assets/img/logo@2x.png') }}" alt="LOGO" width="200px">
                  </span>
                </a>
              </div>
   
                    <div class="alert alert-success">
                        Subscription purchase successfully!
                    </div>
                    @if (session()->has('message'))
    <script>
       setTimeout(function() {
           window.location.href = "www.google.com"
       }, 2000); // 2 second
    </script>
@endif
   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection