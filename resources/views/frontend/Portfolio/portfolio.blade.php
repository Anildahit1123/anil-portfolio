@extends('layouts.header')
@section('content')
<br><br><br><br>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    
  </header>

  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <li data-filter="*" class="filter-active">All Websites</li>
        <li data-filter=".filter-app">Laravel</li>
        <li data-filter=".filter-web">Wordpress</li>
      </ul>
    </div>
  </div>

  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/sunsol.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Sunsol power</h4>
          <p>Sunsol power</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/sunsol.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sunsol power"><i class="bi bi-plus"></i></a>
            <a href="https://sunsolpower.com.np/"  target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/dcta.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Defence Career Training Academy</h4>
          <p>Defence Career Training Academy</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/dcta.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Defence Career Training Academy"><i class="bi bi-plus"></i></a>
            <a href="https://dcta.com.np/" target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/tech2.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Technoteharu</h4>
          <p>Technoteharu</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/tech2.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Technoteharu"><i class="bi bi-plus"></i></a>
            <a href="#" target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/Ecommerce.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Ecommerce</h4>
          <p>Ecommerce</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/Ecommerce.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Ecommerce"><i class="bi bi-plus"></i></a>
            <a href="https://kasturidigital.com/whizzical/" target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/nagarjun.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Nagarjun Education & Training Center</h4>
          <p>Nagarjun Education & Training Center</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/nagarjun.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Nagarjun Education & Training Center"><i class="bi bi-plus"></i></a>
            <a href="https://nagarjunkailali.edu.np/" target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/bu.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Build Unique engineering services</h4>
          <p>Build Unique engineering services</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/bu.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Build Unique engineering services"><i class="bi bi-plus"></i></a>
            <a href="http://buengineering.com.np/" target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/jk.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>J.K. Secodary School Kailali</h4>
          <p>J.K. Secodary School Kailali</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/jk.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="J.K. Secodary School Kailali"><i class="bi bi-plus"></i></a>
            <a href="https://jkschool.edu.np/" target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/fdc.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Fisheries Development Office</h4>
          <p>Fisheries Development Office</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/fdc.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Fisheries Development Office"><i class="bi bi-plus"></i></a>
            <a href="https://fdckailali.gov.np/" target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
      <div class="portfolio-wrap">
        <img src="{{asset('assets/img/portfolio/ninja.png')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Ninja Infosys</h4>
          <p>Ninja Infosys</p>
          <div class="portfolio-links">
            <a href="{{asset('assets/img/portfolio/ninja.png')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Ninja Infosys"><i class="bi bi-plus"></i></a>
            <a href="https://ninjainfosys.com/" target="blank" title="More Details"><i class="bi bi-link"></i></a>
          </div>
        </div>
      </div>
    </div>
    

  </div>

</div>

</section><!-- End Portfolio Section -->
 
@endsection


