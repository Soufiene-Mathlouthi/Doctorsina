  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>MedicusClinic</h3>
              <p>
                BP82, Chez Chok Mrezka<br>
                8058 Hammamet, Tunisia.<br><br>
                <strong>Phone:</strong> +216 58 87 46 41<br>
                <strong>Email:</strong> contact@doctorsina.net<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/doctorsinapp" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/doctorsina.official" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/doctorsinapp" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCnwV7bKoFaF95Sm2syKZ7aQ?view_as=subscriber" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.linkedin.com/in/laroussi-ben-younes-4560b1149/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/aboutus') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/oursolution') }}">Our Solution</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/terms') }}">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/privacy') }}">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/contact') }}">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('platform/register') }}">Register</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('platform/login') }}">Login</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MedicusClinic</span></strong> 2023. All Rights Reserved <span><a href="{{ url('/privacy') }}">Privacy policy</a> | <a href="{{ url('/terms') }}">Terms of use</a></span>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  
<!-- Load JS siles -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- Input placeholder plugin -->
<script type="text/javascript" src="js/jquery.placeholder.js"></script>

<!-- Tweeter API plugin 
<script type="text/javascript" src="js/twitterfeed.js"></script>-->

<!-- Flickr API plugin -->
<script type="text/javascript" src="js/jflickrfeed.min.js"></script>

<!-- MailChimp plugin -->
<script type="text/javascript" src="js/mailChimp.js"></script>

<!-- general script file -->
<script type="text/javascript" src="js/script.js"></script>


<script type="text/javascript">

$(".btn-refresh").click(function(){

  $.ajax({

     type:'GET',

     url:'/refresh_captcha',

     success:function(data){

        $(".captcha span").html(data.captcha);

     }

  });

});
