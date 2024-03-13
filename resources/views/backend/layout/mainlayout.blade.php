<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.layout.partials.head')
  </head>
  @if(Route::is(['map-grid']))
  <body class="map-page">
  @endif
@include('backend.layout.partials.header')
@yield('content')
@if(!Route::is(['chat-doctor','map-grid','map-list','chat','voice-call','video-call']))
@include('backend.layout.partials.footer')
@endif
@include('backend.layout.partials.footer-scripts')
  </body>
</html>
<script>
$(document).ready(function(){
  // alert(1);
 /*$('.submenu li a').click(function(){
   $(.submenu li a).removeClass("active");
   $(this).addClass("active");
   $('.has-submenu a').removeClass("active");
   $('.has-submenu a').addClass("active");
   
   //$(this).toggleClass("active");
 });*/
});
</script>