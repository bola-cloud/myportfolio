@extends('layouts.app')

@section('content')
@php
    // Safe accessors with defaults
    $title = data_get($project, 'title', 'Project Details');
    $category = data_get($project, 'category', '—');
    $client = data_get($project, 'client', '—');
    $date = data_get($project, 'date', '—');
    $url = data_get($project, 'url');
    $description = data_get($project, 'description', 'No description provided.');
    $images = data_get($project, 'images', []);
    $features = data_get($project, 'features', []);
    $tech_stack = data_get($project, 'tech_stack', []);
@endphp

<main class="main">
  <!-- Page Title -->
  <div class="page-title dark-background">
    <div class="container">
      <h1>{{ $title }}</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="current">Portfolio Details</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      @if(empty($project) || !is_array($project))
        <div class="alert alert-warning">No project data available to display.</div>
      @else

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
              @foreach($images as $image)
              <div class="swiper-slide">
                <img src="{{ asset($image) }}" alt="{{ $title }}" style="width:100%; max-height:520px; object-fit:contain; background:#fff">
              </div>
              @endforeach
              @if(empty($images))
                <div class="swiper-slide">
                  <div class="p-5 text-center">No images available</div>
                </div>
              @endif
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project Information</h3>
            <ul>
              <li><strong>Category</strong>: {{ $category }}</li>
              <li><strong>Client</strong>: {{ $client }}</li>
              <li><strong>Project date</strong>: {{ $date }}</li>
              @if(!empty($url))
              <li><strong>Project URL</strong>: <a href="{{ $url }}" target="_blank" rel="noopener">{{ $url }}</a></li>
              @endif
            </ul>
          </div>
          @if(!empty($url))
          <div class="mt-3 text-center" data-aos="fade-up" data-aos-delay="250">
            <a href="{{ $url }}" class="btn btn-primary" target="_blank" rel="noopener">Visit live site</a>
          </div>
          @endif

          @if(in_array('Thawani', (array) $tech_stack))
          <div class="portfolio-description mt-4" data-aos="fade-up" data-aos-delay="300">
            <h4>Payment Integration (Thawani)</h4>
            <p>This project integrates the Thawani payment gateway for Oman — handling secure checkout, merchant-side webhook verification, and payment status callbacks. Typical integration points include:</p>
            <ul>
              <li>Server-side creation of payment sessions and checkout tokens.</li>
              <li>Redirect or hosted checkout handling from the client.</li>
              <li>Webhook endpoint to capture payment success/failure and update order status.</li>
              <li>Verification of payment signatures and idempotency to prevent duplicate fulfillment.</li>
            </ul>
            <p>If you'd like, I can add a sample Laravel controller/webhook snippet and configuration notes for Thawani.</p>
          </div>
          @endif

          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>Project Overview</h2>
            <p>{{ $description }}</p>
          </div>
        </div>

      </div>

      <div class="row gy-4 mt-5">
        <div class="col-lg-12">
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="100">
            <h2>Key Features & Achievements</h2>
            <ul>
              @foreach((array) $features as $feature)
              <li><i class="bi bi-check-circle"></i> {{ $feature }}</li>
              @endforeach
              @if(empty($features))
                <li>No features listed.</li>
              @endif
            </ul>
          </div>
        </div>
      </div>

      <div class="row gy-4 mt-3">
        <div class="col-lg-12">
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="100">
            <h2>Technologies Used</h2>
            <div class="tech-stack">
              @foreach((array) $tech_stack as $tech)
              <span class="badge bg-primary me-2 mb-2">{{ $tech }}</span>
              @endforeach
              @if(empty($tech_stack))
                <div>No technologies listed.</div>
              @endif
            </div>
          </div>
        </div>
      </div>

      @endif

    </div>

  </section><!-- /Portfolio Details Section -->

  <!-- Other Projects / Thumbnails -->
  <section id="other-projects" class="portfolio-other pt-4">
    <div class="container">
      <div class="section-title">
        <h2>Other Projects</h2>
        <p>More projects from the portfolio</p>
      </div>

      <div class="row portfolio-container">
        @if(!empty($projects) && is_array($projects))
          @foreach($projects as $otherSlug => $other)
            @php
              $thumb = data_get($other, 'images.0', null);
            @endphp

            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-wrap">
                @if($thumb)
                  <img src="{{ asset($thumb) }}" class="img-fluid" alt="{{ data_get($other, 'title', $otherSlug) }}">
                @else
                  <div class="img-fluid placeholder" style="height:180px;background:#f5f5f5;display:flex;align-items:center;justify-content:center;">
                    <span>No image</span>
                  </div>
                @endif

                <div class="portfolio-info">
                  <h4>{{ data_get($other, 'title', ucfirst($otherSlug)) }}</h4>
                  <p>{{ data_get($other, 'subtitle', '') }}</p>

                  <div class="portfolio-links">
                    @if(isset($slug) && $otherSlug === $slug)
                      <a class="btn btn-sm btn-secondary" href="#" aria-disabled="true">Current</a>
                    @else
                      <a href="{{ route('portfolio.detail', $otherSlug) }}" title="View Details" class="btn btn-sm btn-primary">Details</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="col-12">No other projects available.</div>
        @endif
      </div>
    </div>
  </section>
</main>
@endsection

@push('styles')
<style>
  .tech-stack .badge {
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
  }
  .portfolio-description ul {
    list-style: none;
    padding: 0;
  }
  .portfolio-description ul li {
    padding: 0.5rem 0;
  }
  .portfolio-description ul li i {
    color: #149ddd;
    margin-right: 0.5rem;
  }
  /* Ensure main content isn't hidden by layout overlays */
  main.main { z-index: 1; position: relative; }
  /* If AOS (or similar) isn't initialized, elements with data-aos can remain hidden; force visibility inside portfolio details */
  .portfolio-details [data-aos],
  .portfolio-details [data-aos-delay],
  .portfolio-details .swiper-slide {
    opacity: 1 !important;
    transform: none !important;
    visibility: visible !important;
  }
  /* Ensure primary action buttons (eg. Visit live site) are on top and clickable */
  .portfolio-details .btn,
  .portfolio-details .btn-primary {
    position: relative;
    z-index: 9999;
    pointer-events: auto;
  }
</style>
@endpush
