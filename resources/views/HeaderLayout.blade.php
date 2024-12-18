<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Guru Kashi University Working Professional Program</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  {{-- <link href="{{url('https://fonts.googleapis.com')}}" rel="preconnect">
  <link href="{{url('https://fonts.gstatic.com')}}" rel="preconnect" crossorigin>
  <link href="{{url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')}}" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{url('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between" >

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/join-logo.jpg" alt="" > 
        {{-- <h1 class="sitename">Moderna</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
         
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="About">About GKU</a></li>
              <li><a href="#">Vission & Mission</a></li>
              <li><a href="#">University Anthem</a></li>
             
            </ul>
          </li>
             
          <li class="dropdown"><a href="#"><span>Administration</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="About">Chancellor</a></li>
              <li><a href="#">Vice Chancellor</a></li>
              <li><a href="#">Registrar</a></li>
             
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Academcis</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="Programs">All Programs</a></li>
              <li><a href="#">Curriculum</a></li>
              <li><a href="#">Calendar</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Admissions</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
             
              <li class="dropdown"><a href="#"><span>Masters Degree </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li> 
              <li class="dropdown"><a href="#"><span>Bechlors Degree </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Diploma Programs</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Admission Procedure</a></li>
              {{-- <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li> --}}
            </ul>
          </li>



        




          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
         
          
          <li><a href="/Contact">Contact</a></li>
          <li>@auth           

            <a href="{{ route('login') }}" class="btn btn-success btn-xs" style="padding-top:0px;padding-bottom:0px">Dashboard&nbsp;&nbsp;&nbsp;&nbsp;</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-danger btn-xs" style="padding-top:0px;padding-bottom:0px" important>Login&nbsp;&nbsp;&nbsp;&nbsp;</a>
        @endauth
            
            {{-- <a href="login" class="btn btn-danger btn-xs">Login&nbsp;&nbsp;&nbsp;&nbsp;</a></li> --}}
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      
    </div>
    <hr style="min-height: 5px">
  </header>

@yield('content')


  <footer id="footer" class="footer dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Stay Updated: Latest Achievements and Events at Guru Kashi University!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Guru Kashi University</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Sardulgarh Road,Talwandi Sabo </p>
            <p>Bathinda, Punjab, India(151302)</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+91 99142 83400
            </span></p>
            <p><strong>Email:</strong> <span>info@gku.ac.in
            </span></p>
          </div>
        </div>
    
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>
    
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div>
    
        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Engage with us! Follow Guru Kashi University on social media for exclusive content and updates!</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
    
      </div>
    </div>
    
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Guru Kashi University</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://creativecodes.co.in/">Creative Codes</a>
      </div>
    </div>
    
    </footer>
    
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}
    
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>
      <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
      <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{url('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
      <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{url('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
      <script src="{{url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    
      <!-- Main JS File -->
      <script src="{{url('assets/js/main.js')}}"></script>
    
    </body>
    
    </html>