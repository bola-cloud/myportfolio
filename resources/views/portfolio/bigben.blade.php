@extends('layouts.app')

@section('content')
<main class="main">

  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1>Menamaher BigBen EdTech</h1>
      <p>Cross-Platform Education with Flutter & Laravel</p>
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
                <img src="{{ asset('template/assets/img/portfolio/branding-2.jpg') }}" alt="BigBen">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: EdTech Platform</li>
              <li><strong>Client</strong>: Menamaher BigBen</li>
              <li><strong>Project date</strong>: 01/02/2024 – Current</li>
              <li><strong>Project URL</strong>: <a href="#" target="_blank">bigben-edu.com</a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>Education Platform</h2>
            <p>
              Developed a cross-platform education platform with a Flutter mobile app and Laravel/Livewire web dashboard. Built REST APIs for real-time course and exam updates.
            </p>
            <h3>Key Features</h3>
            <ul>
              <li><strong>Cross-Platform:</strong> Flutter mobile app + Laravel web</li>
              <li><strong>REST APIs:</strong> Real-time course & exam updates</li>
              <li><strong>Payments:</strong> Subscription-based with role-based access</li>
              <li><strong>Dashboards:</strong> Admin & teacher analytics, content control</li>
            </ul>
            <h3>Technologies</h3>
            <ul>
              <li>Laravel & Livewire</li>
              <li>Flutter</li>
              <li>REST APIs</li>
              <li>Payment Gateway Integration</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section>

</main>
@endsection
