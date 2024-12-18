@extends('HeaderLayout')

@section('content')
<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

    <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="container position-relative">

        <div class="carousel-item active">
          <div class="carousel-container">
            <h2>A Legacy of Quality Education - NAAC A<Sup>++</sup> Accredited</h2>
            <p>Empowering minds to excel in a competitive world. Our courses combine industry insights with practical skills, helping professionals turn their knowledge into impactful careers.</p>
            <a href="#abou" class="btn-get-started">Join Now</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <div class="carousel-container">
            <h2>Where Knowledge Meets Opportunity</h2>
            <p>Unlock your potential with lifelong learning. Discover programs tailored for working professionals, designed to fit into your schedule while delivering real-world expertise.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <div class="carousel-container">
            <h2>Empowering Education Through World-Class Infrastructure</h2>
            <p>Stay ahead in your field with advanced, flexible learning. Elevate your career, sharpen your skills, and embrace the power of education tailored for today's fast-paced environment.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </div>

  </section>
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
<section id="features" class="features section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Features</h2>
    <p>Diverse academic programs across various disciplines</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
        <img src="assets/img/features-1.svg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <ul>
          <li><i class="bi bi-check"></i><span> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
          <li><i class="bi bi-check"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
          <li><i class="bi bi-check"></i> <span>Ullam est qui quos consequatur eos accusamus.</span></li>
        </ul>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
        <h3>Why Choose Guru Kashi University?</h3>
        <p class="fst-italic">
         <ul> <li><i class="bi bi-check"></i><span> Join a diverse community committed to academic excellence.</span></li>
         <li><i class="bi bi-check"></i><span>NAAC A++ Accreditation: A mark of quality and recognition in higher education.</span></li>
          <li><i class="bi bi-check"></i><span> Explore a wide range of undergraduate and postgraduate courses across various disciplines.</span></li>
            <li><i class="bi bi-check"></i><span>Our graduates find success in top companies and organizations.</span></li>
              <li><i class="bi bi-check"></i><span>Engage in innovative research with national and international collaborations.</span></li>
                <li><i class="bi bi-check"></i><span> Participate in vibrant campus life through various clubs and extracurricular activities.</span></li>
         </ul>



         
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
        <img src="assets/img/features-3.svg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7" data-aos="fade-up">
        <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
        <ul>
          <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
          <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
          <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
        </ul>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
        <img src="assets/img/features-4.svg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
    </div><!-- Features Item -->

  </div>

</section>
</main>
@endsection





