@extends('layouts.app')

@section('content')
<main class="main">

  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1>Ajyalona News & Podcast</h1>
      <p>News Platform with 20% Engagement Boost</p>
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
                <img src="{{ asset('template/assets/img/portfolio/product-2.jpg') }}" alt="Ajyalona">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: News & Media Platform</li>
              <li><strong>Client</strong>: Remote, Egypt</li>
              <li><strong>Project date</strong>: 14/06/2024 – 01/09/2024</li>
              <li><strong>Project URL</strong>: <a href="#" target="_blank">ajyalona.com</a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>News & Podcast Platform</h2>
            <p>
              Developed Ajyalona, a news and podcast platform, with a custom Laravel + AJAX CMS. Integrated REST APIs for automated news updates from third-party sources.
            </p>
            <h3>Key Features</h3>
            <ul>
              <li><strong>Custom CMS:</strong> Laravel + AJAX for content management</li>
              <li><strong>API Integration:</strong> Automated news updates from third-party sources</li>
              <li><strong>SEO & Accessibility:</strong> 20% boost in engagement</li>
              <li><strong>Scalable Architecture:</strong> Designed to handle high traffic</li>
            </ul>
            <h3>Technologies</h3>
            <ul>
              <li>Laravel</li>
              <li>AJAX</li>
              <li>REST APIs</li>
              <li>SEO Optimization</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section>

</main>
@endsection
