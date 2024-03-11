<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i>{{ now()->format('l') }}, {{ now()->format('d/m/Y') }}  
      </div>
      <div class="d-flex align-items-center">
       <a href="{{url('/login')}}"><p style="color: #fff; padding-top:15px">Login</p></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{url('/')}}" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/video')}}">Presentation</a></li>
          <li><a class="nav-link scrollto" href="{{url('/ourteam')}}">Our Team</a></li>
          <li><a class="nav-link scrollto" href="{{url('/oursolution')}}">Our Solution</a></li>
          <li><a class="nav-link scrollto" href="{{url('/contact')}}">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/aboutus') }}">About Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ url('/register') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Try For</span> Free</a>

    </div>
  </header>
  <!-- End Header -->

