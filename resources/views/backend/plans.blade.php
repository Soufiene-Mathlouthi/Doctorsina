@extends('backend.layout.blank_master')

@section('content')
  <!-- Content -->

  <link href="{{ asset('frontend_assets/css/style.css') }}" rel="stylesheet">
  <div style="padding-top:4%" class="container-xxl">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="/" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                  <img src="{{ asset('frontend_assets/img/logo@2x.png') }}" alt="LOGO" width="200px">
                  </span>
                </a>
              </div>
            <div>
              @if(session('success'))<div class="alert alert alert-success" role="alert">{{session('success')}} </div>@endif
              <section id="pricing" class="pricing">
                <div class="container" data-aos="fade-up">
          
                  <div class="section-title">
                    <h2>Pricing</h2>
                    <p>"DoctorSina's pricing is competitive and affordable, offering a convenient and cost-effective alternative to traditional healthcare. With monthly and annual plans available, patients can choose the solution that best suits their healthcare needs. With DoctorSina, quality medical care is now available to everyone."</p>
                  </div>
          
                  <div class="row">
          
                    <div class="col-lg-3 col-md-6">
                      <div class="box" data-aos="fade-up" data-aos-delay="100">
                        <h3>Free</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                          <li>intelligent medical record</li>
                          <li>Patient monitoring</li>
                          <li>Clinical Decision Support</li>
                          <li class="na">Chronic disease prevention</li>
                          <li class="na">Computer-aided diagnosis</li>
                        </ul>
                        <div class="btn-wrap">
                          <a href="/dashboard" class="btn-buy">Try Now</a>
                        </div>
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                      <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                        <h3>Silver</h3>
                        <h4><sup>$</sup>99<span> / 3 months</span></h4>
                        <ul>
                          <li>intelligent medical record</li>
                          <li>Patient monitoring</li>
                          <li>Clinical Decision Support</li>
                          <li>2 Computer-aided diagnosis </li>
                          <li class="na">Chronic disease prevention</li>
                        </ul>
                        <div class="btn-wrap">
                          <a href="" class="btn-buy">Buy Now</a>
                        </div>
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                      <div class="box" data-aos="fade-up" data-aos-delay="300">
                        <h3>Gold</h3>
                        <h4><sup>$</sup>149<span> / 3 months</span></h4>
                        <ul>
                          <li>intelligent medical record</li>
                          <li>Patient monitoring</li>
                          <li>Clinical Decision Support</li>
                          <li>7 Computer-aided diagnosis</li>
                          <li>Chronic disease prevention</li>
                        </ul>
                        <div class="btn-wrap">
                          <a href="plans/business-plan" class="btn-buy">Buy Now</a>
                        </div>
                      </div>
                    </div>
          
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                      <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <span class="advanced">Advanced</span>
                        <h3>Premium</h3>
                        <h4><sup>$</sup>299<span> / month</span></h4>
                        <ul>
                          <li>intelligent medical record</li>
                          <li>Patient monitoring</li>
                          <li>Clinical Decision Support</li>
                          <li>illimited Computer-aided diagnosis</li>
                          <li>Chronic disease prevention</li>
                        </ul>
                        <div class="btn-wrap">
                          <a href="plans/premium" class="btn-buy">Buy Now</a>
                        </div>
                      </div>
                    </div>
          
                  </div>
          
                </div>
              </section><!-- End Pricing Section -->
          


              @endsection