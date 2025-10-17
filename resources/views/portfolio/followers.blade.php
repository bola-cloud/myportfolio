@extends('layouts.app')

@section('content')
<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1>Followers Management Platform</h1>
      <p>Social Media Engagement System for 10,000+ Active Users</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="current">Portfolio Details</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Portfolio Details Section -->
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
                <img src="{{ asset('template/assets/img/portfolio/app-2.jpg') }}" alt="Followers Platform">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('template/assets/img/portfolio/product-2.jpg') }}" alt="Admin Dashboard">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: Social Media Management Platform</li>
              <li><strong>Client</strong>: Cairo, Egypt (Freelance)</li>
              <li><strong>Project date</strong>: 01/07/2025 – Current</li>
              <li><strong>Project URL</strong>: <a href="#" target="_blank">Contact for details</a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>Scalable Social Media Engagement Platform</h2>
            <p>
              Built a comprehensive social media engagement management platform using Laravel, Node.js, and MQTT for real-time order processing. The system is designed to handle over 10,000 active users and process more than 1,000 orders per day without performance degradation.
            </p>
            <h3>Key Features & Technologies</h3>
            <ul>
              <li><strong>Backend:</strong> Laravel, Node.js, MQTT for real-time communication</li>
              <li><strong>Database:</strong> MySQL with optimization for high concurrency</li>
              <li><strong>Admin Dashboard:</strong> Advanced filtering, search, bulk actions</li>
              <li><strong>Security:</strong> JWT authentication, multi-role RBAC</li>
              <li><strong>Features:</strong> Eligibility checks, points system, cooldown logic</li>
            </ul>
            <h3>Results & Impact</h3>
            <ul>
              <li>Successfully handles 10,000+ concurrent active users</li>
              <li>Processes 1,000+ orders daily with zero downtime</li>
              <li>Real-time order updates via MQTT</li>
              <li>Automated fraud prevention and misuse detection</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Portfolio Details Section -->

</main>
@endsection
