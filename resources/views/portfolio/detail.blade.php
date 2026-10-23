@extends('layouts.app')

@section('content')
@php
    // Safe accessors with defaults
    $title = data_get($project, 'title', 'Project Details');
    $category = data_get($project, 'category', '—');
    $role = data_get($project, 'role', 'Senior Full-Stack & DevOps Engineer');
    $badge = data_get($project, 'badge');
    $client = data_get($project, 'client', '—');
    $date = data_get($project, 'date', '—');
    $url = data_get($project, 'url');
    $short_summary = data_get($project, 'short_summary');
    $description = data_get($project, 'description', 'No description provided.');
    $images = data_get($project, 'images', []);
    $features = data_get($project, 'features', []);
    $tech_stack = data_get($project, 'tech_stack', []);
@endphp

<main class="main">
  <!-- Page Title -->
  <div class="page-title dark-background">
    <div class="container position-relative">
      <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
        <span class="badge bg-primary px-3 py-2 text-uppercase fw-semibold" style="letter-spacing: 0.8px; font-size: 0.78rem;">{{ $category }}</span>
        @if($badge)
          <span class="badge bg-warning text-dark px-3 py-2 fw-bold" style="font-size: 0.78rem;">
            <i class="bi bi-star-fill me-1"></i> {{ $badge }}
          </span>
        @endif
      </div>
      <h1 class="display-6 fw-bold text-white mb-2">{{ $title }}</h1>
      <p class="text-white-50 fs-5 mb-3">{{ $role }}</p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/#portfolio') }}">Portfolio</a></li>
          <li class="current">{{ $title }}</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <div class="container">

      @if(empty($project) || !is_array($project))
        <div class="alert alert-warning">No project data available to display.</div>
      @else

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper init-swiper shadow-sm rounded-4 overflow-hidden border">

            <script type="application/json" class="swiper-config">
              {
                "loop": {{ count($images) > 1 ? 'true' : 'false' }},
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

            <div class="swiper-wrapper align-items-center bg-dark">
              @foreach($images as $image)
              <div class="swiper-slide text-center p-2">
                <img src="{{ asset($image) }}" alt="{{ $title }}" class="img-fluid rounded-3" style="max-height: 540px; width: 100%; object-fit: contain;">
              </div>
              @endforeach
              @if(empty($images))
                <div class="swiper-slide">
                  <div class="p-5 text-center text-muted">No images available for this showcase.</div>
                </div>
              @endif
            </div>
            <div class="swiper-pagination"></div>
          </div>

          @if($short_summary)
          <div class="alert alert-dark border-start border-4 border-primary mt-4 p-4 rounded-3 shadow-sm bg-white">
            <h5 class="fw-bold text-dark mb-2"><i class="bi bi-info-circle-fill text-primary me-2"></i>Executive Summary</h5>
            <p class="mb-0 text-secondary fs-6 leading-relaxed">{{ $short_summary }}</p>
          </div>
          @endif
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info shadow-sm p-4 rounded-4 bg-white border">
            <h3 class="border-bottom pb-3 mb-3 fw-bold text-dark">Technical Specifications</h3>
            <ul class="list-unstyled mb-4">
              <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                <strong class="text-secondary">Role:</strong>
                <span class="text-end fw-semibold text-primary">{{ $role }}</span>
              </li>
              <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                <strong class="text-secondary">Category:</strong>
                <span class="text-end fw-semibold">{{ $category }}</span>
              </li>
              <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                <strong class="text-secondary">Client / Partner:</strong>
                <span class="text-end fw-semibold">{{ $client }}</span>
              </li>
              <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                <strong class="text-secondary">Timeline:</strong>
                <span class="text-end">{{ $date }}</span>
              </li>
              @if(!empty($url))
              <li class="py-2 border-bottom">
                <strong class="text-secondary d-block mb-1">Live URL:</strong>
                <a href="{{ $url }}" target="_blank" rel="noopener" class="text-break fw-semibold text-primary">
                  {{ $url }} <i class="bi bi-box-arrow-up-right small"></i>
                </a>
              </li>
              @endif
            </ul>

            <div class="d-grid gap-2">
              @if(!empty($url))
                <a href="{{ $url }}" class="btn btn-primary btn-lg rounded-pill shadow-sm fw-semibold" target="_blank" rel="noopener">
                  <i class="bi bi-globe me-2"></i> Launch Production App
                </a>
              @else
                <div class="p-3 rounded-3 bg-light text-center border mb-1">
                  <span class="badge bg-warning text-dark fw-bold mb-1">Architecture &amp; Optimization</span>
                  <div class="small text-muted">Currently undergoing enterprise architectural optimization.</div>
                </div>
              @endif
              <a href="{{ url('/#contact') }}" class="btn btn-outline-secondary rounded-pill fw-semibold">
                <i class="bi bi-chat-dots me-2"></i> Discuss Similar Architecture
              </a>
            </div>
          </div>

          {{-- Payment Gateway Special Integrations --}}
          @if(in_array('InstaPay Gateway', (array) $tech_stack) || in_array('InstaPay Payment Gateway', (array) $tech_stack))
          <div class="portfolio-info mt-4 shadow-sm p-4 rounded-4 border bg-light" data-aos="fade-up" data-aos-delay="250">
            <h4 class="fw-bold text-dark d-flex align-items-center mb-2">
              <i class="bi bi-shield-check text-success me-2 fs-4"></i> InstaPay Integration
            </h4>
            <p class="small text-muted mb-0">
              Integrated Egypt's National Instant Payment Network (InstaPay) with reference validation workflows, reducing payment confirmation overhead and providing a frictionless checkout alternative to cards and COD.
            </p>
          </div>
          @endif

          @if(in_array('Thawani', (array) $tech_stack) || in_array('Thawani Gateway', (array) $tech_stack))
          <div class="portfolio-info mt-4 shadow-sm p-4 rounded-4 border bg-light" data-aos="fade-up" data-aos-delay="250">
            <h4 class="fw-bold text-dark d-flex align-items-center mb-2">
              <i class="bi bi-credit-card-2-front text-info me-2 fs-4"></i> Thawani Gateway (Oman)
            </h4>
            <p class="small text-muted mb-0">
              Complete server-side checkout tokenization, webhook callback verification, idempotent order fulfillment, and multi-currency reconciliations for Oman payment rails.
            </p>
          </div>
          @endif

          @if(in_array('OM Pay Gateway', (array) $tech_stack))
          <div class="portfolio-info mt-4 shadow-sm p-4 rounded-4 border bg-light" data-aos="fade-up" data-aos-delay="260">
            <h4 class="fw-bold text-dark d-flex align-items-center mb-2">
              <i class="bi bi-wallet2 text-success me-2 fs-4"></i> OM Pay Gateway (Oman)
            </h4>
            <p class="small text-muted mb-0">
              Integration of Oman's national digital payment infrastructure with end-to-end webhook validation, automated transactional reconciliation logs, and secure checkout sessions.
            </p>
          </div>
          @endif

          @if(in_array('Smart ERP REST API', (array) $tech_stack) || in_array('Smart ERP REST APIs', (array) $tech_stack))
          <div class="portfolio-info mt-4 shadow-sm p-4 rounded-4 border bg-light" data-aos="fade-up" data-aos-delay="270">
            <h4 class="fw-bold text-dark d-flex align-items-center mb-2">
              <i class="bi bi-arrow-repeat text-primary me-2 fs-4"></i> Smart ERP Bi-Directional Sync
            </h4>
            <p class="small text-muted mb-0">
              High-volume automated synchronization pipelines between Laravel and Smart ERP for live inventory balancing, price matrix updates, and automated sales invoice generation without race conditions.
            </p>
          </div>
          @endif

          @if(in_array('WhatsApp Business API', (array) $tech_stack) || in_array('WhatsApp Server-Side API', (array) $tech_stack))
          <div class="portfolio-info mt-4 shadow-sm p-4 rounded-4 border bg-light" data-aos="fade-up" data-aos-delay="280">
            <h4 class="fw-bold text-dark d-flex align-items-center mb-2">
              <i class="bi bi-whatsapp text-success me-2 fs-4"></i> WhatsApp Ecosystem Integration
            </h4>
            <p class="small text-muted mb-0">
              Automated product catalog mirroring reflecting dynamic stock levels directly in WhatsApp Commerce, alongside OTP verification microservices and dispatch notification streams.
            </p>
          </div>
          @endif

        </div>

      </div>

      {{-- Architectural Deep Dive --}}
      <div class="row gy-4 mt-4">
        <div class="col-lg-12">
          <div class="portfolio-description p-4 p-md-5 rounded-4 bg-white border shadow-sm">
            <h3 class="fw-bold text-dark mb-3"><i class="bi bi-layers-half text-primary me-2"></i>Architectural Overview & Engineering Scope</h3>
            <p class="fs-6 leading-relaxed text-secondary mb-4">{{ $description }}</p>

            <h4 class="fw-bold text-dark mb-3 mt-4"><i class="bi bi-cpu-fill text-primary me-2"></i>Key Metrics & Production Highlights</h4>
            <div class="row g-3">
              @foreach((array) $features as $feature)
              <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light border-start border-3 border-primary h-100">
                  <div class="d-flex align-items-start">
                    <i class="bi bi-check2-circle text-primary fs-5 me-2 flex-shrink-0 mt-1"></i>
                    <span class="text-dark small fw-medium">{{ $feature }}</span>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

            <h4 class="fw-bold text-dark mb-3 mt-5"><i class="bi bi-tools text-primary me-2"></i>Core Production Tech Stack</h4>
            <div class="d-flex flex-wrap gap-2">
              @foreach((array) $tech_stack as $tech)
              <span class="badge bg-secondary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold">
                {{ $tech }}
              </span>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      @endif

    </div>

  </section><!-- /Portfolio Details Section -->

  <!-- Other Projects / Thumbnails -->
  <section id="other-projects" class="portfolio-other py-5 bg-light">
    <div class="container">
      <div class="section-title mb-4">
        <h2>Enterprise Showcase & Flagship Portfolio</h2>
        <p>Explore more high-concurrency systems, multi-tenant platforms, and enterprise solutions</p>
      </div>

      <div class="row g-4">
        @if(!empty($projects) && is_array($projects))
          @foreach($projects as $otherSlug => $other)
            @php
              $thumb = data_get($other, 'images.0', null);
              $isCurrent = (isset($slug) && $otherSlug === $slug);
            @endphp

            <div class="col-lg-4 col-md-6">
              <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden {{ $isCurrent ? 'ring-2 border-primary border-2' : '' }}">
                <div class="position-relative overflow-hidden" style="height: 200px; background: #111;">
                  @if($thumb)
                    <img src="{{ asset($thumb) }}" class="w-100 h-100 object-fit-cover" alt="{{ data_get($other, 'title', $otherSlug) }}">
                  @else
                    <div class="d-flex align-items-center justify-content-center h-100 text-muted">No Preview</div>
                  @endif
                  <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-3 px-3 py-1 rounded-pill small">
                    {{ data_get($other, 'category', 'Enterprise') }}
                  </span>
                </div>

                <div class="card-body d-flex flex-column p-4">
                  <h5 class="card-title fw-bold text-dark mb-2 fs-6">
                    {{ data_get($other, 'title', ucfirst($otherSlug)) }}
                  </h5>
                  <p class="card-text text-muted small flex-grow-1">
                    {{ \Illuminate\Support\Str::limit(data_get($other, 'short_summary', data_get($other, 'description', '')), 95) }}
                  </p>

                  <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-2">
                    @if($isCurrent)
                      <span class="badge bg-primary px-3 py-2 rounded-pill">Currently Viewing</span>
                    @else
                      <a href="{{ route('portfolio.detail', $otherSlug) }}" class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-semibold">
                        View Architecture <i class="bi bi-arrow-right ms-1"></i>
                      </a>
                    @endif

                    @if(!empty(data_get($other, 'url')))
                    <a href="{{ data_get($other, 'url') }}" target="_blank" rel="noopener" class="text-secondary small text-decoration-none" title="Visit Live URL">
                      <i class="bi bi-box-arrow-up-right fs-6"></i>
                    </a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </section>
</main>
@endsection

@push('styles')
<style>
  /* Ensure case study content is unconditionally visible */
  #portfolio-details,
  #portfolio-details .container,
  #portfolio-details .row,
  #portfolio-details .portfolio-info,
  #portfolio-details .portfolio-description,
  #portfolio-details [data-aos],
  #other-projects,
  #other-projects [data-aos] {
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
  }
</style>
@endpush

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Immediate Swiper fallback activation
    if (typeof Swiper !== 'undefined') {
      document.querySelectorAll('.portfolio-details-slider').forEach(function(slider) {
        if (!slider.swiper) {
          try {
            new Swiper(slider, {
              speed: 600,
              loop: {{ count($images) > 1 ? 'true' : 'false' }},
              autoHeight: true,
              pagination: {
                el: slider.querySelector('.swiper-pagination'),
                clickable: true
              }
            });
          } catch(e) {
            console.warn('Inline Swiper init fallback:', e);
          }
        }
      });
    }
  });
</script>
@endpush
