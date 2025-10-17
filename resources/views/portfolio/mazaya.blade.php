@extends('layouts.app')

@section('content')
<main class="main">

  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1>Mazaya Almasya - Smart Home</h1>
      <p>IoT Dashboard with Real-Time Device Control</p>
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
                <img src="{{ asset('template/assets/img/portfolio/product-1.jpg') }}" alt="Mazaya">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: IoT / Smart Home</li>
              <li><strong>Client</strong>: Cairo, Egypt</li>
              <li><strong>Project date</strong>: 20/12/2024 – 28/02/2025</li>
              <li><strong>Project URL</strong>: <a href="#" target="_blank">Contact for details</a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>Smart Home IoT Dashboard</h2>
            <p>
              Created a comprehensive smart home dashboard with Laravel and Livewire, enabling real-time monitoring and control of IoT devices with 99.9% uptime.
            </p>
            <h3>Key Features</h3>
            <ul>
              <li><strong>Real-Time Control:</strong> MQTT & WebSockets for bidirectional communication</li>
              <li><strong>Mobile Integration:</strong> REST APIs for mobile app connectivity</li>
              <li><strong>Security:</strong> API rate limiting, input validation</li>
              <li><strong>Embedded Collaboration:</strong> Firmware-to-server streamlining</li>
            </ul>
            <h3>Technologies Used</h3>
            <ul>
              <li>Laravel & Livewire</li>
              <li>MQTT, WebSockets</li>
              <li>RESTful APIs</li>
              <li>MySQL</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section>

</main>
@endsection
