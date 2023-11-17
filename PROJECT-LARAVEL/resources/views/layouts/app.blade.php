<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

@include('layouts.header')

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">
<!-- Menu sidebar -->

@include('layouts.sidebar')
<!-- / Menu -->
    <!-- Layout container -->
    <div class="layout-page">

<!-- Navbar -->

@include('layouts.navbar')

<!-- / Navbar -->

    
      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
          
<div class="row">
  @yield('container')
</div>

</div>
<!-- / Content -->

<!-- Footer -->
@include('layouts.footer')
<!-- / Footer -->

<!-- Scripts -->
@include('layouts.scripts')
<!-- Scripts -->
  
</body>

</html>

<!-- beautify ignore:end -->

