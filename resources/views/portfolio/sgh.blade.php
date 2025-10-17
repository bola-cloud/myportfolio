@extends('layouts.app')

@section('content')
<main class="main">

  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1>SGH Advertising Automation</h1>
      <p>Large-Scale Ad System for 1,000+ Screens</p>
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
                <img src="{{ asset('template/assets/img/portfolio/app-3.jpg') }}" alt="SGH Ads">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: Advertising Automation</li>
              <li><strong>Client</strong>: Saudi German Hospital, Cairo</li>
              <li><strong>Project date</strong>: 01/08/2024 – 01/08/2025</li>
              <li><strong>Project URL</strong>: <a href="#" target="_blank">Contact for details</a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>Automated Advertising System</h2>
            <p>
              Designed and developed a large-scale automated advertising system for a Flutter-based application, enabling scheduled and targeted ad displays across multiple locations.
            </p>
            <h3>Key Features</h3>
            <ul>
              <li><strong>Scale:</strong> Supports 1,000+ advertising screens simultaneously</li>
              <li><strong>Laravel Scheduling:</strong> Dynamic ad timing and rotation control</li>
              <li><strong>MQTT Integration:</strong> Real-time updates to connected devices</li>
              <li><strong>Admin Dashboard:</strong> Ad management, scheduling, performance tracking</li>
              <li><strong>Performance:</strong> High throughput, low latency, high availability</li>
            </ul>
            <h3>Technologies</h3>
            <ul>
              <li>Laravel</li>
              <li>MQTT</li>
              <li>Flutter (Mobile App)</li>
              <li>Distributed Systems</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section>

</main>
@endsection
