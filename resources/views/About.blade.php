@extends('HeaderLayout')
@section('content')
<main class="main">
<div class="page-title dark-background">
  <div class="container position-relative">
    <h1>About</h1>
    <p>Committed to empowering individuals through quality education and innovative learning.</p>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="current">About</li>
      </ol>
    </nav>
  </div>
</div>

<section id="about" class="about section light-background">

    <div class="container">
  
      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
          <h3> Guru Kashi University, NAAC  A<sup>++</sup></h3>
          <p class="fst-italic" style="text-align: justify">
            Guru Kashi University was established by the Balaji Education Trust, Talwandi Sabo, which was founded in 1997 as a cornerstone for education in the region. The first institution, Guru Gobind Singh Polytechnic, was launched in 1998, followed by various colleges including Guru Gobind Singh College of Engineering & Technology (2001), Guru Gobind Singh College of Education (2005), GGS Institute of IT and Research, and GGS College of Nursing (2006). Officially recognized by the Punjab Act No. 37 of 2011, Guru Kashi University has since been dedicated to meeting the educational needs of local, national, and global communities, all within a picturesque natural setting.<br>
  
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span>Global Exposure and International Collaborations</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Diverse Academic Programs for Every Aspirant</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Experienced Faculty Committed to Student Success</span></li>
                <li><i class="bi bi-check2-all"></i> <span>State-of-the-Art Infrastructure and Facilities</span></li>
                <li><i class="bi bi-check2-all"></i> <span>Fostering Research and Innovation</span></li>
               
                    <li><i class="bi bi-check2-all"></i> <span>Strong Industry Partnerships for Career Growth</span></li>
              
  <li><i class="bi bi-check2-all"></i> <span>Vibrant Campus Life and Extracurricular Activities</span></li>
  
   
        
          </ul>
        
        </div>
      </div>
  
    </div>
  
  </section>
  <section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
            <p>Workers</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section>
  <section id="clients" class="clients section">

    <div class="container">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
      </div>

    </div>

  </section>
</main>
@endsection





