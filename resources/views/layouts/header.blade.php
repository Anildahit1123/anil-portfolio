<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Anil Dahit- Portfolio </title>
  <meta content="Namaste I am Anil Dahit passionate in Laravel Development" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/anil.png')}}" rel="icon">
  <link href="{{asset('assets/img/anil.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!--social share start-->
  <link rel="stylesheet" href="{{asset('assets/share/dist/css/ensemble-social-share.css')}}"/>
<script src="{{asset('assets/share/dist/js/ensemble-social-share.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/share/dist/css/iconset.tmp.css')}}"/>
<!--social share end-->
<style>

  @media (max-width: 768px) {
  .counts h1 {
    text-align: center;
  }
  .counts h1 {
    font-size: 36px;
  }
  .counts h2 {
    font-size: 32spx;
  }
}
@media (max-width: 768px) {
  .about h1 {
    font-size: 36px;
  }
  .about h2 {
    font-size: 32spx;
  }
}

</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/logoanil.png')}}" alt="Donate_me">
        <span></span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('story',[\App::getLocale()])}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('resume',[\App::getLocale()])}}">Resume</a></li>
          
          <li><a class="nav-link scrollto" href="{{route('portfolio',[\App::getLocale()])}}">Portfolio</a></li>
          <li><a href="{{route('contact',[\App::getLocale()])}}">Contact</a></li>

          
          <li><a href="{{ asset('assets/img/AnilResume.pdf') }}" download class="getstarted scrollto" href="#">Resume</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  @yield('content')
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src="{{asset('assets/img/logoanil.png')}}" alt="">
              <span></span>
            </a>
            <p>Nameste I am Anil Dahit passionate in Laravel Development and Wordprees Development. </p>
             <div class="social-links mt-3 mb-4" data-aos="fade-up" data-aos-delay="500">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/dahit.anil.3" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="linkedin.com/in/anil-dahit-8a1754212" target="blank" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-12 footer-links">
          <h4>Our Links</h4>
            <ul>
             
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('story',[\App::getLocale()])}}">About</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('resume',[\App::getLocale()])}}">Resume</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('portfolio',[\App::getLocale()])}}">Portfolio</a></li>
              
            </ul>
          </div>

      

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4 style="text-align:left;">Contact</h4>
            <p>
              
              <strong>Phone:</strong> 9811691521 <br> 
              <strong>Email:</strong><span> anildahit418920@gmail.com</span><br>
              <strong>Linkedin:</strong><span> linkedin.com/in/anil-dahit-8a1754212</span><br>
              </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Anil Dahit</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
      <span> Designed By </span><a href="#" style="font-family:Open Sans; font-size:14px; font-weight: 600;">Anil Dahit</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script src="{{asset('assets/share/dist/js/ensemble-social-share.min.js')}}"></script>
<script>
const options = {
  locale: {
    copied: 'localized: Copied link!'
  }
};


const element = document.querySelector('.social-share');

if (element) {
  //TODO arguments
  new ensemble.SocialShare(element, options);
}
</script>
  

</body>

</html>