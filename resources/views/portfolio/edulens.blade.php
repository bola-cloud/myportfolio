@extends('layouts.app')

@section('content')
<main class="main">

  <div class="page-title dark-background">
    <div class="container position-relative">
      <h1>Edu-Lens E-Learning Platform</h1>
      <p>Scalable Online Learning with Gamification</p>
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
                <img src="{{ asset('template/assets/img/portfolio/books-1.jpg') }}" alt="Edu-Lens">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: E-Learning Platform</li>
              <li><strong>Client</strong>: Giza, Egypt</li>
              <li><strong>Project date</strong>: 30/12/2023 – 01/09/2024</li>
              <li><strong>Project URL</strong>: <a href="#" target="_blank">edu-lens.com</a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>Online Learning Platform</h2>
            <p>
              Improved existing online learning platform, optimizing database queries and backend workflows for scalability. Designed custom platforms for instructors and youth-focused course portals with gamified elements.
            </p>
            <h3>Key Features</h3>
            <ul>
              <li><strong>Performance:</strong> Database query optimization</li>
              <li><strong>Custom Platform:</strong> Tailored for instructor needs</li>
              <li><strong>Gamification:</strong> Interactive elements for students under 20</li>
              <li><strong>Security:</strong> Server security & regular updates</li>
            </ul>
            <h3>Technologies</h3>
            <ul>
              <li>Laravel</li>
              <li>MySQL</li>
              <li>Server Management</li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </section>

</main>
@endsection
