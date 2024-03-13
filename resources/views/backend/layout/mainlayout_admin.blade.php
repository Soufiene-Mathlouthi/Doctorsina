<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.layout.partials.head_admin')
  </head>

  <body>
  @if(!Route::is(['login','register','forgot-password','lock-screen','error-404','error-500']))
  @include('backend.layout.partials.header_admin')
 @include('backend.layout.partials.nav_admin')
 @endif
 @yield('content')
 @include('backend.layout.partials.footer_admin-scripts')


  </body>
</html>