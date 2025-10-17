@extends('layouts.app')

@section('content')
<main class="main">

  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1>ICTC Portfolio & CMS</h1>
      <p>Dynamic Portfolio with Custom CMS and 25% SEO Boost</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Portfolio Details</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper init-swiper">

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
                }
              }
            </script>

            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('template/assets/img/portfolio/branding-1.jpg') }}" alt="ICTC">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: Web Development & CMS</li>
              <li><strong>Client</strong>: ICTC, Cairo, Egypt</li>
              <li><strong>Project date</strong>: 01/12/2024 – 11/06/2025</li>
              <li><strong>Project URL</strong>: <a href="#" target="_blank">ictc-website.com</a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>Portfolio Website with Custom CMS</h2>
            <p>
              Developed a dynamic portfolio website with a custom-built CMS for ICTC, allowing full content management without technical assistance.
            </p>
            <h3>Key Features</h3>
            <ul>
              <li><strong>Custom CMS:</strong> Full content management system</li>
              <li><strong>Job Listings:</strong> Career sections with CV upload</li>
              <li><strong>SEO Optimized:</strong> 25% increase in organic traffic in 2 months</li>
              <li><strong>Responsive Design:</strong> WCAG 2.1 accessibility standards</li>
              <li><strong>Performance:</strong> Lazy loading, image compression</li>
            </ul>
            <h3>Technologies</h3>
            <ul>
              <li>Laravel</li>
              <li>MySQL</li>
              <li>SEO Best Practices</li>
              <li>Responsive UI/UX</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section>

</main>
@endsection
