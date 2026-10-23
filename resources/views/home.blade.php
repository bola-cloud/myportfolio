@extends('layouts.app')

@section('content')
@php
    $showcaseProjects = $projects ?? \App\Http\Controllers\PortfolioController::allProjects();
@endphp

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background position-relative d-flex align-items-center" style="min-height: 100vh;">

        <img src="{{ asset('template/assets/img/dowload2.png') }}" alt="Bola Naguib Hero" data-aos="fade-in" class="hero-bg-img">

        <div class="container position-relative py-5" data-aos="fade-up" data-aos-delay="100">
            <!-- Availability Badge -->
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3 hero-availability-badge">
                <span class="pulse-dot"></span>
                <span class="text-success fw-bold small" style="letter-spacing: 0.3px;">🟢 Available for Senior Remote Contracts &amp; Technical Consultancy (Worldwide &amp; GCC)</span>
            </div>

            <h1 class="display-3 fw-bold text-white mb-2 tracking-tight">Bola Naguib <span class="text-white-50 fs-2 fw-normal">(Bola Ishak)</span></h1>
            
            <p class="hero-headline fs-3 text-info fw-semibold mb-3">
                Senior Full-Stack &amp; DevOps Engineer | Enterprise SaaS, FinTech &amp; Cloud Architect
            </p>

            <p class="hero-lead text-light mb-4" style="max-width: 860px; font-size: 1.15rem; line-height: 1.7; opacity: 0.92;">
                Engineering high-concurrency SaaS ecosystems, multi-tenant B2B platforms, and real-time distributed microservices with <strong>over 5+ years of commercial production experience</strong> for enterprise clients and startups across Egypt, the GCC, and European partners.
            </p>

            <!-- Core Stack Badges -->
            <div class="mb-4">
                <div class="text-white-50 small fw-bold text-uppercase mb-2" style="letter-spacing: 1px; font-size: 0.75rem;">Core Technical Arsenal</div>
                <div class="d-flex flex-wrap gap-2">
                    <span class="hero-tech-badge"><i class="bi bi-code-slash text-info me-1"></i> Laravel (PHP 8.2+)</span>
                    <span class="hero-tech-badge"><i class="bi bi-filetype-vue text-success me-1"></i> Vue.js 3</span>
                    <span class="hero-tech-badge"><i class="bi bi-box text-primary me-1"></i> Docker</span>
                    <span class="hero-tech-badge"><i class="bi bi-cloud-check text-warning me-1"></i> AWS (EC2/S3/RDS)</span>
                    <span class="hero-tech-badge"><i class="bi bi-database text-info me-1"></i> MySQL Optimization</span>
                    <span class="hero-tech-badge"><i class="bi bi-lightning-charge text-danger me-1"></i> Redis</span>
                    <span class="hero-tech-badge"><i class="bi bi-diagram-3 text-success me-1"></i> Microservices</span>
                    <span class="hero-tech-badge"><i class="bi bi-arrow-repeat text-info me-1"></i> CI/CD Pipelines</span>
                </div>
            </div>

            <!-- Quick Action Buttons -->
            <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
                @if(file_exists(public_path('Bola_Naguib_CV.pdf')))
                    <a href="{{ asset('Bola_Naguib_CV.pdf') }}" download="Bola_Naguib_Senior_FullStack_DevOps_CV.pdf" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-lg d-inline-flex align-items-center" title="Download Official CV (PDF)">
                        <i class="bi bi-file-earmark-arrow-down-fill me-2 fs-5"></i> Download CV (PDF)
                    </a>
                @else
                    <a href="#resume" onclick="window.print(); return false;" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-lg d-inline-flex align-items-center" title="Print or Save CV as PDF">
                        <i class="bi bi-file-earmark-arrow-down-fill me-2 fs-5"></i> Download CV
                    </a>
                @endif
                <a href="https://github.com/bola-cloud" target="_blank" rel="noopener" class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center">
                    <i class="bi bi-github me-2 fs-5"></i> GitHub Profile
                </a>
                <a href="https://www.linkedin.com/in/bola-ishak-761000215/" target="_blank" rel="noopener" class="btn btn-outline-info rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center">
                    <i class="bi bi-linkedin me-2 fs-5"></i> LinkedIn Profile
                </a>
                <a href="#portfolio" class="btn btn-dark bg-opacity-75 border-secondary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center">
                    <i class="bi bi-grid-fill me-2 fs-5 text-warning"></i> Explore Showcase
                </a>
            </div>

            <div class="row pt-4 mt-3 border-top border-secondary border-opacity-50 text-white-50 small g-3" style="max-width: 950px;">
                <div class="col-sm-6 col-md-3 d-flex align-items-center">
                    <i class="bi bi-whatsapp text-success me-2 fs-4"></i>
                    <div>
                        <a href="https://wa.me/971555873368" target="_blank" rel="noopener" class="text-white text-decoration-none d-block fw-semibold">+971 55 587 3368 <span class="badge bg-success bg-opacity-75 py-0 px-1" style="font-size: 0.65rem;">UAE</span></a>
                        <a href="https://wa.me/201555622169" target="_blank" rel="noopener" class="text-white-50 text-decoration-none d-block">+20 155 562 2169 <span class="badge bg-secondary py-0 px-1" style="font-size: 0.65rem;">EG</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center">
                    <i class="bi bi-envelope-at text-info me-2 fs-4"></i>
                    <a href="mailto:bola.ishak41@gmail.com" class="text-white-50 text-decoration-none">bola.ishak41@gmail.com</a>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center">
                    <i class="bi bi-geo-alt text-danger me-2 fs-4"></i>
                    <span>Cairo &amp; UAE (Worldwide Remote)</span>
                </div>
                <div class="col-sm-6 col-md-3 d-flex align-items-center">
                    <i class="bi bi-globe text-primary me-2 fs-4"></i>
                    <span>GCC &amp; Global Contracts</span>
                </div>
            </div>
        </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About &amp; Executive Profile</h2>
            <p>Senior Full-Stack Engineer, DevOps Practitioner &amp; Cloud Technical Consultant with 5+ years of verifiable commercial production experience delivering high-availability SaaS platforms and distributed architectures.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-4 text-center">
                <div class="position-relative d-inline-block">
                    <img src="{{ asset('template/assets/img/bola-profile.png') }}?v=2" class="img-fluid rounded-4 shadow-lg border border-3 border-light" alt="Bola Naguib" style="max-width: 320px; object-fit: cover;">
                    <div class="position-absolute bottom-0 end-0 bg-primary text-white px-3 py-2 rounded-pill shadow small fw-bold" style="transform: translate(10px, 10px);">
                        5+ Years Commercial
                    </div>
                </div>
            </div>
            <div class="col-lg-8 content">
                <h3 class="fw-bold text-dark mb-2">Senior Full-Stack &amp; DevOps Engineer / Technical Consultant</h3>
                <p class="fst-italic py-2 text-primary fw-medium fs-5">
                    Bridging elite software engineering, resilient cloud infrastructure, and business scalability.
                </p>

                <p class="text-secondary leading-relaxed mb-4">
                    Experienced in leading backend and frontend technical architecture for enterprise products. I specialize in scaling <strong>Laravel (PHP 8.2+)</strong> and <strong>Vue.js 3</strong> applications with <strong>Docker</strong>, <strong>Redis</strong>, and <strong>AWS Linux</strong> environments. My career covers high-concurrency multi-vendor marketplaces (MEN TOO), on-demand delivery logistics (Wasl-X), healthcare EHR systems (Clinova), and mission-critical financial ERP syncs (Masqat / HiSpeed).
                </p>

                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-light border">
                            <span class="text-muted small d-block">Core Focus</span>
                            <strong class="text-dark">Enterprise SaaS, FinTech &amp; Cloud</strong>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-light border">
                            <span class="text-muted small d-block">Availability</span>
                            <strong class="text-success">Worldwide &amp; GCC Remote / Contracts</strong>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-light border">
                            <span class="text-muted small d-block">Education</span>
                            <strong class="text-dark">B.Sc. Communication &amp; Electronics (2023)</strong>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 rounded-3 bg-light border">
                            <span class="text-muted small d-block">Languages</span>
                            <strong class="text-dark">Arabic (Native), English (Professional C1)</strong>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-2">
                    <a href="#portfolio" class="btn btn-primary rounded-pill px-4 fw-semibold">View Enterprise Showcase</a>
                    <a href="#contact" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">Book Technical Consultation</a>
                </div>
            </div>
            </div>

        </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center p-4 bg-white rounded-4 shadow-sm border h-100">
                <i class="bi bi-briefcase text-primary fs-1 mb-2 d-block"></i>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter display-6 fw-bold text-dark">5</span><span class="display-6 fw-bold text-primary">+</span>
                <p class="mb-0 mt-2"><strong>Years of Production</strong> <span class="d-block text-muted small">Commercial Architecture Experience</span></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center p-4 bg-white rounded-4 shadow-sm border h-100">
                <i class="bi bi-people text-success fs-1 mb-2 d-block"></i>
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter display-6 fw-bold text-dark">10</span><span class="display-6 fw-bold text-success">k+</span>
                <p class="mb-0 mt-2"><strong>Active Users Supported</strong> <span class="d-block text-muted small">High-Throughput SaaS Platforms</span></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center p-4 bg-white rounded-4 shadow-sm border h-100">
                <i class="bi bi-shield-check text-info fs-1 mb-2 d-block"></i>
                <span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1" class="purecounter display-6 fw-bold text-dark">99</span><span class="display-6 fw-bold text-info">.9%</span>
                <p class="mb-0 mt-2"><strong>Production Uptime SLA</strong> <span class="d-block text-muted small">Containerized Resilient Cloud</span></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center p-4 bg-white rounded-4 shadow-sm border h-100">
                <i class="bi bi-kanban text-warning fs-1 mb-2 d-block"></i>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter display-6 fw-bold text-dark">15</span><span class="display-6 fw-bold text-warning">+</span>
                <p class="mb-0 mt-2"><strong>Enterprise Deployments</strong> <span class="d-block text-muted small">FinTech, SaaS, Healthcare &amp; IoT</span></p>
                </div>
            </div><!-- End Stats Item -->

            </div>

        </div>

        </section><!-- /Stats Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Engineering Capabilities &amp; Proficiency</h2>
            <p>Comprehensive engineering across system architecture, low-latency APIs, database schema tuning, and DevOps cloud infrastructure.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 shadow-sm border h-100">
                        <h4 class="fw-bold text-dark mb-3"><i class="bi bi-hdd-network text-primary me-2"></i>Backend &amp; Distributed Architecture</h4>
                        
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold small">Laravel (PHP 8.2+), Eloquent &amp; Artisan</span>
                                <span class="text-primary fw-bold small">98%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 98%;"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold small">RESTful APIs, Microservices &amp; WebSockets</span>
                                <span class="text-primary fw-bold small">95%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold small">Redis Caching, Horizon &amp; Distributed Queue Workers</span>
                                <span class="text-primary fw-bold small">92%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 92%;"></div>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold small">Node.js, MQTT Telemetry &amp; PM2 Workers</span>
                                <span class="text-primary fw-bold small">88%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 88%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 shadow-sm border h-100">
                        <h4 class="fw-bold text-dark mb-3"><i class="bi bi-cloud-arrow-up text-info me-2"></i>DevOps, Cloud &amp; Database Optimization</h4>
                        
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold small">MySQL / MariaDB Indexing &amp; Query Optimization</span>
                                <span class="text-info fw-bold small">95%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 95%;"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold small">Docker Containerization &amp; Ubuntu Server Hardening</span>
                                <span class="text-info fw-bold small">92%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 92%;"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold small">AWS Cloud (EC2, S3, RDS, CloudWatch)</span>
                                <span class="text-info fw-bold small">90%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 90%;"></div>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold small">Vue.js 3, Livewire &amp; Custom Luxury CSS3 UI Systems</span>
                                <span class="text-info fw-bold small">94%</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 94%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Resume &amp; Track Record</h2>
            <p>Senior Full-Stack &amp; DevOps Engineer / Technical Consultant — 5+ years commercial production experience in enterprise software architecture, multi-tenancy, and high-volume operations.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="resume-title">Bola Naguib (Bola Ishak)</h3>
                        <div class="resume-item pb-0">
                        <h4>Senior Full-Stack &amp; DevOps Engineer / Technical Consultant</h4>
                        <p><em>Cairo, Egypt (Operating Worldwide &amp; GCC)</em></p>
                        <ul>
                            <li><strong>UAE Phone / WhatsApp:</strong> <a href="https://wa.me/971555873368" target="_blank" rel="noopener">+971 55 587 3368</a></li>
                            <li><strong>EG Phone / WhatsApp:</strong> <a href="https://wa.me/201555622169" target="_blank" rel="noopener">+20 155 562 2169</a></li>
                            <li><strong>Email:</strong> <a href="mailto:bola.ishak41@gmail.com">bola.ishak41@gmail.com</a></li>
                            <li><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/bola-ishak-761000215" target="_blank" rel="noopener">linkedin.com/in/bola-ishak-761000215</a></li>
                            <li><strong>GitHub:</strong> <a href="https://github.com/bola-cloud" target="_blank" rel="noopener">github.com/bola-cloud</a></li>
                            <li><strong>Portfolio:</strong> <a href="https://bolaeshaq.wasl-x.com/" target="_blank" rel="noopener">bolaeshaq.wasl-x.com</a></li>
                        </ul>
                        </div><!-- End Resume Item -->
                    </div>

                    <div class="col-md-6">
                        <h3 class="resume-title">Executive Summary</h3>
                        <div class="resume-item">
                        <p>Senior Full-Stack &amp; DevOps Engineer with over 5+ years of commercial production experience in enterprise software architecture, Laravel (PHP 8.2+), Vue.js 3, and high-concurrency cloud environments. Proven track record architecting multi-tenant B2B engines supporting 10,000+ active users and 1,000+ concurrent transactions with 99.9% uptime across FinTech, E-Commerce, Healthcare, and On-Demand Delivery logistics in Egypt, Oman, and Europe.</p>
                        </div>

                        <h3 class="resume-title mt-3">Core Technical Competencies</h3>
                        <div class="resume-item">
                        <ul>
                            <li><strong>Backend &amp; SaaS:</strong> Laravel (PHP 8.2+), Node.js, RESTful APIs, OAuth2, JWT, Livewire, Multi-Tenancy, Microservices</li>
                            <li><strong>Frontend Architecture:</strong> Vue.js 3, JavaScript (ES6+), Tailwind CSS, Vanilla CSS3 Luxury Design Systems, Blade, WCAG 2.1</li>
                            <li><strong>DevOps &amp; Cloud:</strong> AWS (EC2, S3, RDS), Docker, CI/CD Pipelines, Ubuntu Administration, Git/GitHub, PM2 &amp; Supervisor</li>
                            <li><strong>Databases &amp; Real-time:</strong> MySQL/MariaDB Index Optimization, PostgreSQL, Redis Atomic Locks, MQTT, WebSockets</li>
                        </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12 mt-5" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex justify-content-center">
                    <h3 class="resume-title">Flagship Enterprise Roles &amp; Production Track Record</h3>
                </div>

                <div class="row g-4">

                    <!-- MEN TOO -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-warning ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">MEN TOO | Lead Full-Stack Developer &amp; UI/UX Architect</h4>
                            <span class="badge bg-warning text-dark small fw-bold">Flagship Marketplace</span>
                        </div>
                        <h5 class="text-secondary small">2025 – Current — Egypt &amp; MENA</h5>
                        <ul>
                            <li>Architected ultra-fast luxury monochrome design system (ounass-luxury.css) with dynamic RTL/LTR support and responsive mobile drawer navigation.</li>
                            <li>Integrated Egypt's National Instant Payment Network (InstaPay) with reference validation workflows alongside Cards and COD.</li>
                            <li>Built isolated 4-tier operational engine: Storefront, Vendor Dashboard, Super Admin Suite, and Delivery Dispatch.</li>
                            <li>Eliminated DOM bottlenecks and optimized Laravel Blade/Query caching to significantly slash Time to First Byte (TTFB) to &lt;150ms.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- Wasl-X -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-primary ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">Wasl-X | Lead Backend Architect &amp; DevOps Engineer</h4>
                            <span class="badge bg-primary small fw-bold">Delivery Ecosystem</span>
                        </div>
                        <h5 class="text-secondary small">02/2025 – Current — Regional Delivery Platform</h5>
                        <ul>
                            <li>Engineered automated dispatch and routing engine tracking live order state transitions from cart to doorstep delivery via WebSockets.</li>
                            <li>Maintained 99.9% uptime by containerizing platform microservices via Docker on AWS Linux cloud infrastructure with automated CI/CD.</li>
                            <li>Designed standalone server-side WhatsApp OTP automation microservice, cutting authentication latency and SMS costs by 85%.</li>
                            <li>Implemented Redis atomic locking to prevent stock drift across concurrent multi-tenant merchant flash sales.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- HiSpeed -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-success ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">HiSpeed | Lead Full-Stack Architect &amp; Systems Integration</h4>
                            <span class="badge bg-success small fw-bold">Omnichannel Quick-Commerce</span>
                        </div>
                        <h5 class="text-secondary small">2024 – Current — Muscat, Oman</h5>
                        <ul>
                            <li>Architected continuous bi-directional inventory, pricing, and invoice sync pipelines between Laravel and Smart ERP without race conditions.</li>
                            <li>Automated real-time WhatsApp Business catalog mirroring dynamically reflecting stock levels and product updates.</li>
                            <li>Engineered low-latency WebSocket connections powering both in-store thermal receipt printers and delivery driver dispatch apps.</li>
                            <li>Integrated secure checkout workflows via Oman's Thawani Payment Gateway alongside Cash on Delivery.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- Alkatar -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-secondary ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">Alkatar | Lead Full-Stack Developer &amp; E-Commerce Architect</h4>
                            <span class="badge bg-secondary small fw-bold">Specialty Retail &amp; Gifting</span>
                        </div>
                        <h5 class="text-secondary small">2024 – Current — Muscat, Oman</h5>
                        <ul>
                            <li>Designed dynamic checkout customizer for bespoke luxury packaging, custom gift cards, and automated promotional items.</li>
                            <li>Connected storefront orders directly to packing stations via WebSockets for instant receipt/label generation and rider notification.</li>
                            <li>Integrated Thawani gateway with automated verification of digital receipts and instant transaction status callbacks.</li>
                            <li>Implemented image asset compression and query caching to maintain lightning-fast category navigation across extensive catalogs.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- Khairat Al-Anaam -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-danger ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">Khairat Al-Anaam | Senior Backend &amp; Payment Integration Specialist</h4>
                            <span class="badge bg-danger small fw-bold">Variable-Weight Commerce</span>
                        </div>
                        <h5 class="text-secondary small">2024 – Current — Muscat, Oman</h5>
                        <ul>
                            <li>Engineered custom product attributes for butchery operations (packaging styles, preparation cuts, dynamic weight-tier pricing).</li>
                            <li>Integrated Oman's OM Pay digital payment infrastructure with secure webhooks and reconciliation logs.</li>
                            <li>Broadcasting WebSocket events to stream incoming butchery orders directly to prep-station printers and delivery queues.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- Clinova -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-info ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">Clinova | Lead Full-Stack Engineer &amp; Database Architect</h4>
                            <span class="badge bg-info text-white small fw-bold">HealthTech EHR SaaS</span>
                        </div>
                        <h5 class="text-secondary small">2024 – Current — Healthcare SaaS</h5>
                        <ul>
                            <li>Architected compliant Multi-Tenant schema separating clinical EHR patient data, appointment schedules, and branch billing.</li>
                            <li>Built dynamic doctor appointment scheduling with automated SMS/WhatsApp reminders reducing patient no-shows by 45%.</li>
                            <li>Engineered rapid prescription generator with drug interaction lookups, reducing doctor documentation time per consultation by 60%.</li>
                            <li>Optimized complex medical history queries and relational lookups via Redis caching and targeted composite indexing.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- Modular Enterprise ERP & Real Estate Suite -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-warning ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">Modular ERP &amp; Real Estate | Lead Backend Architect &amp; System Designer</h4>
                            <span class="badge bg-warning text-dark small fw-bold">Active Architecture</span>
                        </div>
                        <h5 class="text-secondary small">2025 – Active Architecture &amp; Optimization — GCC &amp; Egypt</h5>
                        <ul>
                            <li>Immutable "Draft-to-Posted" voucher constraints enforcing strict GAAP financial integrity.</li>
                            <li>Line-level sales order fulfillment with automated multi-warehouse inventory deduction.</li>
                            <li>Dynamic broker commission calculators and property asset lifecycle management.</li>
                            <li>High-throughput POS synchronization and multi-tenant organizational data isolation.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- Masqat App -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-success ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">Masqat App (HiSpeed) | Senior Full-Stack &amp; DevOps Engineer</h4>
                            <span class="badge bg-success small fw-bold">FinTech &amp; ERP</span>
                        </div>
                        <h5 class="text-secondary small">10/2024 – Current — Muscat, Oman</h5>
                        <ul>
                            <li>Eliminated critical N+1 query bottlenecks and tuned schema indices, reducing financial data retrieval latency by 30%.</li>
                            <li>Built real-time Vue 3 dashboard interfaces connected to WebSockets for live ledger reconciliations and transactional telemetry.</li>
                            <li>Integrated Smart ERP reducing stock discrepancies by 95% and eliminating manual price updates across 10,000+ SKUs.</li>
                            <li>Implemented Thawani payment gateway with automated webhook validation, achieving 99.2% transaction success rate.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- ICTC -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-secondary ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">ICTC | Senior Backend Consultant (EU-Partnered NGO Project)</h4>
                            <span class="badge bg-secondary small fw-bold">Beneficiary System</span>
                        </div>
                        <h5 class="text-secondary small">08/2025 – 10/2025 — Cairo, Egypt</h5>
                        <ul>
                            <li>Architected enterprise beneficiary management platform processing 15,000+ refugee applications with two-step eligibility workflow.</li>
                            <li>Engineered multi-tenant RBAC with polymorphic relations serving 50+ associations with entity-scoped data isolation.</li>
                            <li>Delivered memory-efficient streaming CSV exports with UTF-8 BOM encoding for seamless partner ATS integration.</li>
                        </ul>
                        </div>
                    </div>

                    <!-- Followers Management -->
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item border-start border-3 border-dark ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h4 class="mb-0 text-dark">Followers Platform | Full-Stack Architect &amp; DevOps Engineer</h4>
                            <span class="badge bg-dark small fw-bold">High-Volume SaaS</span>
                        </div>
                        <h5 class="text-secondary small">01/2025 – Current</h5>
                        <ul>
                            <li>Architected social media engagement platform supporting 10,000+ active users and processing 1,000+ orders/day with real-time fulfillment via MQTT.</li>
                            <li>Implemented Node.js MQTT permanent subscribers managed via PM2 and Supervisor with Redis queues for guaranteed message delivery.</li>
                            <li>Optimized MySQL with composite indexes achieving &lt;100ms query response under 500 concurrent operations.</li>
                        </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <div class="d-flex justify-content-center"><h3 class="resume-title">Education &amp; Credentials</h3></div>
                <div class="row g-4">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item bg-white p-4 rounded-4 shadow-sm border">
                        <h4 class="text-dark">B.Sc. in Communication and Electronics Engineering</h4>
                        <h5 class="text-muted small">2018 – 2023</h5>
                        <p class="mb-0"><em>Faculty of Engineering, Minya University</em></p>
                        <p class="small text-secondary mt-2 mb-0">Graduated with distinction in embedded communications, network protocols, and distributed computing foundations.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item bg-white p-4 rounded-4 shadow-sm border">
                        <h4 class="text-dark">Post-Graduate Certificate in IoT &amp; AI Applications</h4>
                        <h5 class="text-muted small">2022 – 2023</h5>
                        <p class="mb-0"><em>National Telecommunication Institute (NTI)</em></p>
                        <p class="small text-secondary mt-2 mb-0">Specialized program covering IoT telemetry pipelines, MQTT broker architectures, cloud edge computing, and real-time machine intelligence.</p>
                        </div>
                    </div>
                </div>
            </div>

            </div>

        </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-primary bg-opacity-10 text-primary small fw-bold mb-2">
                <i class="bi bi-award-fill"></i> Enterprise Engineering Showcase
            </div>
            <h2>Featured Enterprise Projects &amp; Architecture Showcase</h2>
            <p>Production SaaS platforms, high-concurrency multi-vendor ecosystems, FinTech payment engines, and real-time IoT architectures engineered for scale, zero data drift, and commercial impact.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">

            <!-- Interactive Category Filters -->
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All Projects</li>
                <li data-filter=".filter-saas">SaaS &amp; Multi-Vendor</li>
                <li data-filter=".filter-fintech">FinTech &amp; ERP</li>
                <li data-filter=".filter-devops">DevOps &amp; HealthTech</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($showcaseProjects as $slugKey => $proj)
                    @php
                        $thumb = data_get($proj, 'images.0');
                        $filterClass = data_get($proj, 'filter_class', 'filter-saas');
                        $badge = data_get($proj, 'badge');
                        $isFlagship = in_array($slugKey, ['men-too', 'wasl-x', 'hispeed', 'alkatar', 'khairat-alanaam', 'clinova', 'modular-erp']);
                    @endphp

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $filterClass }}">
                        <div class="portfolio-card shadow-sm rounded-4 overflow-hidden border bg-white h-100 d-flex flex-column {{ $isFlagship ? 'border-primary border-2 shadow' : '' }}">
                            
                            <!-- Card Media / Screenshot -->
                            <div class="portfolio-thumb position-relative overflow-hidden" style="height: 215px; background: #0c1017;">
                                @if($thumb)
                                    <img src="{{ asset($thumb) }}" class="w-100 h-100 object-fit-cover" alt="{{ data_get($proj, 'title') }}" loading="lazy">
                                @else
                                    <div class="d-flex align-items-center justify-content-center h-100 text-white-50">Enterprise Platform</div>
                                @endif

                                <!-- Category & Status Badges (Horizontal, non-intrusive) -->
                                <div class="position-absolute top-0 start-0 m-3 d-flex flex-wrap gap-1" style="max-width: 85%;">
                                    <span class="badge bg-dark bg-opacity-75 text-white backdrop-blur px-2.5 py-1 rounded-pill small fw-semibold" style="font-size: 0.72rem;">
                                        {{ data_get($proj, 'category') }}
                                    </span>
                                    @if($badge)
                                        @php
                                            $badgeClass = match($slugKey) {
                                                'men-too' => 'bg-warning text-dark fw-bold',
                                                'wasl-x' => 'bg-primary text-white fw-bold',
                                                'hispeed' => 'bg-success text-white fw-bold',
                                                'alkatar' => 'bg-secondary text-white fw-bold',
                                                'khairat-alanaam' => 'bg-danger text-white fw-bold',
                                                'clinova' => 'bg-info text-white fw-bold',
                                                'modular-erp' => 'bg-warning text-dark border border-dark border-opacity-25 fw-bold',
                                                default => 'bg-info text-white fw-bold'
                                            };
                                        @endphp
                                        <span class="badge {{ $badgeClass }} px-2 py-1 rounded-pill small" style="font-size: 0.72rem;">
                                            {{ $badge }}
                                        </span>
                                    @endif
                                </div>

                                <!-- Hover Quick Overlay -->
                                <div class="portfolio-hover-overlay d-flex align-items-center justify-content-center gap-2">
                                    @if($thumb)
                                        <a href="{{ asset($thumb) }}" title="{{ data_get($proj, 'title') }}" data-gallery="portfolio-gallery" class="glightbox btn btn-light btn-sm rounded-circle shadow" title="Zoom Preview">
                                            <i class="bi bi-zoom-in"></i>
                                        </a>
                                    @endif
                                    @if($url = data_get($proj, 'url'))
                                        <a href="{{ $url }}" target="_blank" rel="noopener" class="btn btn-light btn-sm rounded-circle shadow" title="Visit Live Platform">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </a>
                                    @endif
                                    <a href="{{ route('portfolio.detail', $slugKey) }}" class="btn btn-primary btn-sm rounded-circle shadow" title="Full Architecture Case Study">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Card Content (Uniform Heights & Precision Clamping) -->
                            <div class="portfolio-body p-4 d-flex flex-column flex-grow-1">
                                <div class="portfolio-card-role text-primary small fw-bold text-uppercase mb-1" style="font-size: 0.72rem; letter-spacing: 0.6px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    {{ data_get($proj, 'role') }}
                                </div>
                                <h4 class="card-title portfolio-card-title fw-bold text-dark mb-2 fs-5" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; min-height: 2.7em; line-height: 1.35;">
                                    <a href="{{ route('portfolio.detail', $slugKey) }}" class="text-dark text-decoration-none">
                                        {{ data_get($proj, 'title') }}
                                    </a>
                                </h4>
                                <p class="portfolio-card-desc text-secondary small mb-3 flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; min-height: 4.65em; line-height: 1.55;">
                                    {{ data_get($proj, 'short_summary', data_get($proj, 'description')) }}
                                </p>

                                <!-- Core Tech Micro-badges (Fixed Height) -->
                                <div class="portfolio-card-tech d-flex flex-wrap gap-1 mb-3 align-items-center" style="min-height: 52px; align-content: flex-start;">
                                    @foreach(array_slice((array) data_get($proj, 'tech_stack', []), 0, 4) as $tech)
                                        <span class="badge bg-light text-dark border small fw-normal px-2 py-1" style="font-size: 0.72rem;">{{ $tech }}</span>
                                    @endforeach
                                    @if(count((array) data_get($proj, 'tech_stack', [])) > 4)
                                        <span class="badge bg-light text-muted border small px-2 py-1" style="font-size: 0.72rem;">+{{ count((array) data_get($proj, 'tech_stack')) - 4 }}</span>
                                    @endif
                                </div>

                                <!-- Card Actions (Pinned to Bottom) -->
                                <div class="pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                    <a href="{{ route('portfolio.detail', $slugKey) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-semibold">
                                        Case Study <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                    @if($url = data_get($proj, 'url'))
                                        <a href="{{ $url }}" target="_blank" rel="noopener" class="text-primary small fw-semibold text-decoration-none d-flex align-items-center">
                                            Live Site <i class="bi bi-box-arrow-up-right ms-1 small"></i>
                                        </a>
                                    @elseif($slugKey === 'modular-erp')
                                        <span class="badge bg-warning bg-opacity-25 text-dark border border-warning small fw-semibold">Active Architecture</span>
                                    @else
                                        <span class="text-muted small">Enterprise / Internal</span>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div><!-- End Portfolio Container -->

            </div>

        </div>

        </section><!-- /Portfolio Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Technical Services &amp; Consultancy</h2>
                <p>Strategic engineering services tailored for high-growth startups, enterprise businesses, and regional digital transformation programs.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-box p-4 h-100 shadow-sm rounded-4 bg-white border">
                            <div class="icon mb-3 text-primary"><i class="bi bi-layers-half fs-2"></i></div>
                            <h4 class="fw-bold text-dark">Enterprise SaaS &amp; Multi-Tenancy</h4>
                            <p class="text-secondary small mb-0">End-to-end SaaS development with tenant database isolation, polymorphic role architectures, automated onboarding, and recurring billing models.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-box p-4 h-100 shadow-sm rounded-4 bg-white border">
                            <div class="icon mb-3 text-success"><i class="bi bi-credit-card-2-front fs-2"></i></div>
                            <h4 class="fw-bold text-dark">FinTech &amp; Regional Payments</h4>
                            <p class="text-secondary small mb-0">Integration of regional payment gateways (Egypt's InstaPay, Oman's Thawani, Stripe) with strict transactional idempotency, automated webhook validation, and escrow flows.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-box p-4 h-100 shadow-sm rounded-4 bg-white border">
                            <div class="icon mb-3 text-warning"><i class="bi bi-cloud-check fs-2"></i></div>
                            <h4 class="fw-bold text-dark">Cloud DevOps &amp; Containerization</h4>
                            <p class="text-secondary small mb-0">Dockerized production environments on AWS Linux (EC2, S3, RDS), automated CI/CD deployment pipelines, server hardening, Redis clusters, and zero-downtime releases.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-box p-4 h-100 shadow-sm rounded-4 bg-white border">
                            <div class="icon mb-3 text-danger"><i class="bi bi-speedometer2 fs-2"></i></div>
                            <h4 class="fw-bold text-dark">Database Tuning &amp; High Concurrency</h4>
                            <p class="text-secondary small mb-0">MySQL / MariaDB query optimization, schema indexing, dead-lock prevention, Redis caching layers, and asynchronous worker queues for 10k+ daily users.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-box p-4 h-100 shadow-sm rounded-4 bg-white border">
                            <div class="icon mb-3 text-info"><i class="bi bi-broadcast fs-2"></i></div>
                            <h4 class="fw-bold text-dark">Real-Time IoT &amp; Telemetry Pipelines</h4>
                            <p class="text-secondary small mb-0">MQTT brokers, WebSocket bidirectional channels, firmware-to-cloud interfaces, live rider tracking, and digital signage orchestration across 1,000+ screens.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="service-box p-4 h-100 shadow-sm rounded-4 bg-white border">
                            <div class="icon mb-3 text-secondary"><i class="bi bi-shield-lock fs-2"></i></div>
                            <h4 class="fw-bold text-dark">Authentication &amp; Security Audits</h4>
                            <p class="text-secondary small mb-0">Server-side WhatsApp OTP automation, OAuth2/JWT session hardening, HIPAA-aligned EHR controls, and WCAG 2.1 accessibility compliance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Services Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact &amp; Engagement</h2>
                <p>Available for Senior Remote Contracts, Technical Consulting, and Flagship Architecture Engagements across GCC &amp; Global clients.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap p-4 bg-white rounded-4 shadow-sm border">
                    <div class="info-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0 fs-3 text-primary me-3"></i>
                        <div>
                        <h4 class="fw-bold text-dark mb-1">Base Location</h4>
                        <p id="contact-address" class="text-muted mb-0">Cairo, Egypt (Available for On-site GCC &amp; Global Remote)</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0 fs-3 text-success me-3"></i>
                        <div>
                        <h4 class="fw-bold text-dark mb-1">Direct Phone &amp; WhatsApp</h4>
                        <p class="mb-1">
                            <a href="https://wa.me/971555873368" target="_blank" rel="noopener" class="text-success fw-semibold text-decoration-none">
                                <span class="badge bg-success me-1">UAE</span> +971 55 587 3368
                            </a>
                        </p>
                        <p class="mb-0">
                            <a href="https://wa.me/201555622169" target="_blank" rel="noopener" class="text-secondary fw-semibold text-decoration-none">
                                <span class="badge bg-secondary me-1">EG</span> +20 155 562 2169
                            </a>
                        </p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0 fs-3 text-info me-3"></i>
                        <div>
                        <h4 class="fw-bold text-dark mb-1">Email Inquiry</h4>
                        <p id="contact-email" class="mb-0"><a href="mailto:bola.ishak41@gmail.com" class="text-info fw-semibold text-decoration-none">bola.ishak41@gmail.com</a></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="mt-4 pt-3 border-top">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="pulse-dot"></span>
                            <span class="text-success small fw-bold">Active Status: Accepting Selected Q2/Q3 Contracts</span>
                        </div>
                        <p class="small text-muted mb-3">Whether you need an architect to scale an existing system or launch an enterprise flagship, feel free to reach out directly.</p>
                        
                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://wa.me/971555873368" target="_blank" rel="noopener" class="btn btn-success btn-sm rounded-pill px-3">
                                <i class="bi bi-whatsapp me-1"></i> WhatsApp (UAE)
                            </a>
                            <a href="https://wa.me/201555622169" target="_blank" rel="noopener" class="btn btn-outline-success btn-sm rounded-pill px-3">
                                <i class="bi bi-whatsapp me-1"></i> WhatsApp (EG)
                            </a>
                            <a href="https://www.linkedin.com/in/bola-ishak-761000215/" target="_blank" rel="noopener" class="btn btn-primary btn-sm rounded-pill px-3">
                                <i class="bi bi-linkedin me-1"></i> Connect on LinkedIn
                            </a>
                        </div>
                    </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="p-4 p-md-5 bg-white rounded-4 shadow-sm border" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="fw-bold text-dark mb-2">Send Direct Message</h3>
                        <p class="text-muted small mb-4">Leave your project scope, timeline, and requirements. I will reply within 24 hours.</p>

                        @if(session('success'))
                            <div class="alert alert-success rounded-3">{{ session('success') }}</div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger rounded-3">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
                        @csrf
                        <div class="row gy-3">

                            <div class="col-md-6">
                            <label for="name-field" class="form-label small fw-semibold text-dark">Your Name</label>
                            <input type="text" name="name" id="name-field" class="form-control rounded-3 py-2" placeholder="e.g. John Doe / Company" required="">
                            </div>

                            <div class="col-md-6">
                            <label for="email-field" class="form-label small fw-semibold text-dark">Your Work Email</label>
                            <input type="email" class="form-control rounded-3 py-2" name="email" id="email-field" placeholder="name@company.com" required="">
                            </div>

                            <div class="col-md-12">
                            <label for="subject-field" class="form-label small fw-semibold text-dark">Project Subject / Scope</label>
                            <input type="text" class="form-control rounded-3 py-2" name="subject" id="subject-field" placeholder="e.g. SaaS Architecture, Cloud Migration, FinTech Integration" required="">
                            </div>

                            <div class="col-md-12">
                            <label for="message-field" class="form-label small fw-semibold text-dark">Message / Technical Requirements</label>
                            <textarea class="form-control rounded-3" name="message" rows="5" id="message-field" placeholder="Describe your product architecture, technical challenges, or timeline..." required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center pt-2">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent successfully. Thank you!</div>

                            <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-semibold shadow-sm">
                                Send Inquiry <i class="bi bi-send ms-1"></i>
                            </button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background border-top">

        <div class="container py-4">
        <div class="copyright text-center">
            <p class="mb-1">© <span>Copyright</span> <strong class="px-1 sitename">Bola Naguib</strong> <span>All Rights Reserved</span></p>
            <p class="small text-muted mb-0">Senior Full-Stack &amp; DevOps Engineer | Enterprise SaaS, FinTech &amp; Cloud Architect</p>
        </div>
        </div>

    <!-- Preloader -->
    <div id="preloader"></div>

@endsection

@push('styles')
<style>
/* Hero Custom Styling */
.hero-availability-badge {
    background: rgba(16, 185, 129, 0.14);
    border: 1px solid rgba(16, 185, 129, 0.35);
    backdrop-filter: blur(10px);
}
.pulse-dot {
    width: 10px;
    height: 10px;
    background-color: #10b981;
    border-radius: 50%;
    display: inline-block;
    box-shadow: 0 0 0 rgba(16, 185, 129, 0.7);
    animation: pulse-green 2s infinite;
}
@keyframes pulse-green {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
}

.hero-tech-badge {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.16);
    color: #f1f5f9;
    font-size: 0.84rem;
    font-weight: 500;
    padding: 0.42rem 0.85rem;
    border-radius: 50rem;
    transition: all 0.25s ease;
    display: inline-flex;
    align-items: center;
}
.hero-tech-badge:hover {
    background: rgba(20, 157, 221, 0.25);
    border-color: #149ddd;
    color: #fff;
    transform: translateY(-2px);
}

/* Portfolio Card Enhancements & Uniform Grid */
.portfolio-card {
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
}
.portfolio-thumb {
    height: 215px !important;
    background: #0c1017;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
}
.portfolio-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    transition: transform 0.4s ease;
}
.portfolio-card:hover .portfolio-thumb img {
    transform: scale(1.05);
}
.portfolio-hover-overlay {
    position: absolute;
    inset: 0;
    background: rgba(10, 15, 25, 0.72);
    backdrop-filter: blur(4px);
    opacity: 0;
    transition: opacity 0.3s ease;
}
.portfolio-card:hover .portfolio-hover-overlay {
    opacity: 1;
}
.backdrop-blur {
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
}
.portfolio-card-role {
    font-size: 0.72rem;
    letter-spacing: 0.6px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.portfolio-card-title {
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 2.7em;
    margin-bottom: 0.5rem;
}
.portfolio-card-desc {
    font-size: 0.85rem;
    line-height: 1.55;
    color: #64748b;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 4.65em;
    margin-bottom: 0.85rem;
}
.portfolio-card-tech {
    display: flex;
    flex-wrap: wrap;
    gap: 0.35rem;
    min-height: 52px;
    align-content: flex-start;
    margin-bottom: 1rem;
}
.portfolio-card-tech .badge {
    font-size: 0.72rem;
    font-weight: 500;
}

/* Print Friendly Styles for Download CV */
@media print {
    body {
        background: #fff !important;
        color: #000 !important;
    }
    #header, #hero, #stats, #portfolio, #services, #contact, #footer, #scroll-top, .hero-availability-badge, .portfolio-filters {
        display: none !important;
    }
    #about, #skills, #resume {
        display: block !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    .section-title h2 {
        color: #000 !important;
    }
    a {
        text-decoration: none !important;
        color: #000 !important;
    }
}
</style>
@endpush
