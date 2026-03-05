@extends('layouts.app')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

        <img src="{{ asset('template/assets/img/dowload2.png') }}" alt="" data-aos="fade-in" class="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h2>Bola Eshak Naguib</h2>
            <p>Full Stack Developer (Laravel, Vue.js, IoT) — <strong>Cairo, Egypt</strong></p>
            <p class="mt-2">I'm a Full Stack Developer focused on Laravel, Vue.js and IoT solutions. Passionate about clean code, performance optimization, and building scalable systems.</p>
            <ul class="list-unstyled mt-3">
                <li><strong>Email:</strong> <a href="mailto:bola.ishak41@gmail.com">bola.ishak41@gmail.com</a></li>
                <li><strong>Phone:</strong> <a href="tel:+201555622169">(+20) 01555622169</a> (Mobile)</li>
                <li><strong>WhatsApp:</strong> +20 155 562 2169</li>
                <li><strong>Address:</strong> 27 Mohamed Salem street, Shubra, Cairo, Egypt</li>
                <li><strong>Date of birth:</strong> 02/09/2000</li>
                <li><strong>Work permit / Nationality:</strong> Egyptian</li>
            </ul>
        </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Full Stack Developer with a strong foundation in backend and frontend technologies. I design and build scalable web applications, real-time dashboards, and IoT integrations while applying best practices for performance, security, and maintainability. I also have working knowledge of Python for model construction and AI experiments, C for embedded systems, and Node.js for backend services.</p>
        </div><!-- End Section Title -->


        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 text-center">
                <img src="{{ asset('template/assets/img/bola.jpeg') }}" class="img-fluid rounded-circle" alt="Bola Eshak">
            </div>
            <div class="col-lg-8 content">
                <h2>About Me</h2>
                <p class="fst-italic py-3">Full Stack Developer with 4+ years of experience delivering scalable, high-performance web applications and real-time IoT dashboards. Proven expertise in Laravel, Vue.js, AJAX, WebSockets, and RESTful APIs.</p>

                <div class="row">
                <div class="col-lg-6">
                    <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Location:</strong> <span>Cairo, Egypt</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a href="mailto:bola.ishak41@gmail.com">bola.ishak41@gmail.com</a></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>(+20) 01555622169</span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Specialties:</strong> <span>Laravel, Vue.js, IoT</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Languages:</strong> <span>Arabic, English</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Date of birth:</strong> <span>02/09/2000</span></li>
                    </ul>
                </div>
                </div>

                <p class="py-3">Skilled in MySQL/MariaDB optimization, WebSockets, AWS, Docker, and building high-concurrency systems. Experienced across finance, healthcare, education, and e-commerce domains.</p>
            </div>
            </div>

        </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Happy Clients</strong> <span>Trusted by repeat clients</span></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Projects</strong> <span>Delivered across web, mobile & IoT</span></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hours Of Support</strong> <span>Reliable technical support</span></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hard Workers</strong> <span>Small team, big results</span></p>
                </div>
            </div><!-- End Stats Item -->

            </div>

        </div>

        </section><!-- /Stats Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Skills</h2>
            <p>Backend and frontend expertise with a focus on maintainable, testable code and fast user experiences.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row skills-content skills-animation">

            <div class="col-lg-6">

                <div class="progress">
                <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
                </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                <span class="skill"><span>CSS</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
                </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                <span class="skill"><span>JavaScript</span> <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
                </div>
                </div><!-- End Skills Item -->

            </div>

            <div class="col-lg-6">

                <div class="progress">
                <span class="skill"><span>PHP</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
                </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                <span class="skill"><span>WordPress/CMS</span> <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"></div>
                </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                <span class="skill"><span>Python</span> <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"></div>
                </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                <span class="skill"><span>Node.js</span> <i class="val">50%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
                </div>
                </div><!-- End Skills Item -->

            </div>

            </div>

        </div>

        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Resume</h2>
            <p>Senior Full Stack Developer & DevOps Engineer — system architecture, high-availability platforms, and real-time integrations.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="resume-title">Bola Naguib</h3>
                        <div class="resume-item pb-0">
                        <h4>Senior Full Stack Developer & DevOps Engineer</h4>
                        <p><em>Cairo, Egypt</em></p>
                        <ul>
                            <li>Phone: <a href="https://wa.me/201555622169" target="_blank" rel="noopener">+201555622169</a></li>
                            <li>Email: <a href="mailto:bola.ishak41@gmail.com">bola.ishak41@gmail.com</a></li>
                            <li>LinkedIn: <a href="https://www.linkedin.com/in/bola-ishak-761000215" target="_blank" rel="noopener">linkedin.com/in/bola-ishak-761000215</a></li>
                            <li>GitHub: <a href="https://github.com/bola-cloud" target="_blank" rel="noopener">github.com/bola-cloud</a></li>
                            <li>Portfolio: <a href="https://bolaeshaq.wasl-x.com/" target="_blank" rel="noopener">bolaeshaq.wasl-x.com</a></li>
                        </ul>
                        </div><!-- End Resume Item -->
                    </div>

                    <div class="col-md-6">
                        <h3 class="resume-title">Professional Summary</h3>
                        <div class="resume-item">
                        <p>Highly accomplished Senior Full Stack Developer & DevOps Engineer with 5+ years of progressive experience in system architecture, Laravel (PHP 8), Vue.js 3, and IoT solutions. This tenure includes high-stakes professional and freelance development conducted concurrently with rigorous engineering studies, specializing in scalable ecosystems for the Finance, Healthcare, and Logistics sectors. Proven track record of building systems supporting 10,000+ users and 1,000+ concurrent transactions, distinguished for optimizing complex infrastructures and delivering real-time, high-availability platforms.</p>
                        </div>

                        <h3 class="resume-title mt-3">Technical Core Competencies</h3>
                        <div class="resume-item">
                        <ul>
                            <li><strong>Backend:</strong> Laravel (PHP 8), Node.js, RESTful APIs, OAuth2, JWT, Livewire, Microservices, Bash scripting</li>
                            <li><strong>Frontend:</strong> Vue.js 3, JavaScript (ES6+), Tailwind CSS, AJAX, jQuery, Accessibility (WCAG 2.1)</li>
                            <li><strong>DevOps & Cloud:</strong> AWS (EC2, S3, RDS), Docker, CI/CD, Ubuntu administration, Git/GitHub</li>
                            <li><strong>Databases & IoT:</strong> MySQL/MariaDB optimization, MQTT, WebSockets, real-time synchronization</li>
                        </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12 mt-5" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex justify-content-center">
                    <h3 class="resume-title">Professional Experience</h3>
                </div>

                <div class="row">

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Masqat App – HiSpeed Grocery | Full Stack Developer</h4>
                        <h5>12/2025 – 01/2026 — Muscat, Oman</h5>
                        <ul>
                            <li>Architected high-performance e-commerce platform processing 5,000+ daily orders with real-time inventory sync, achieving 99.8% uptime and <200ms API response times.</li>
                            <li>Engineered seamless Smart ERP integration reducing stock discrepancies by 95% and eliminating manual price updates across 10,000+ SKUs.</li>
                            <li>Implemented Thawani payment gateway with automated webhook validation, achieving 99.2% transaction success rate and zero payment disputes.</li>
                            <li>Optimized RESTful API architecture with Redis caching and query tuning, reducing database load by 60% and enabling concurrent access for 2,000+ users.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Alsa7a Sports Platform | Full Stack Developer (Freelance)</h4>
                        <h5>11/2025 – Current — Muscat, Oman</h5>
                        <ul>
                            <li>Built multi-sided sports marketplace connecting 500+ athletes with certified service providers, processing $50K+ in bookings within first 3 months.</li>
                            <li>Engineered automated commission distribution system with escrow logic, provider vetting workflows, and secure multi-party payouts reducing manual processing by 90%.</li>
                            <li>Integrated Thawani payment gateway with real-time webhook validation for event bookings, achieving 99.5% payment success rate and instant confirmation.</li>
                            <li>Developed comprehensive admin dashboard managing 200+ provider profiles, club operations, and revenue analytics with role-based access control.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>EU-Partnered Education Project (ICTC) | Full Stack Developer</h4>
                        <h5>08/2025 – 10/2025 — Cairo, Egypt</h5>
                        <ul>
                            <li>Architected enterprise-grade beneficiary management platform processing 15,000+ refugee applications with complex two-step eligibility workflow, reducing processing time by 70%.</li>
                            <li>Engineered multi-tenant RBAC system with polymorphic relations serving 50+ associations and education centers, with entity-scoped data isolation and granular permissions.</li>
                            <li>Built 360° profile aggregator consolidating 10+ form types, history, and attachments with advanced search across 50,000+ records and <500ms query response.</li>
                            <li>Delivered streaming CSV exports with UTF-8 BOM support and bilingual headers (Arabic/English), enabling seamless ATS integration for partner organizations.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Masqat App – Financial & IoT | Full Stack Developer</h4>
                        <h5>03/2025 – Current — Remote</h5>
                        <ul>
                            <li>Engineered financial and accounting applications using Laravel (PHP 8), achieving 30% faster data retrieval through MySQL indexing and query optimization.</li>
                            <li>Developed Vue.js 3 components integrated with WebSockets for real-time financial dashboards.</li>
                            <li>Configured and deployed applications using Docker and CI/CD pipelines for cross-border teams.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>WaslX Platform (Mwaslx) | Full-Stack & DevOps Engineer</h4>
                        <h5>02/2025 – Current — Remote</h5>
                        <ul>
                            <li>Built WhatsApp OTP automation service processing 50,000+ daily verifications with 99.7% delivery rate, reducing authentication friction by 85%.</li>
                            <li>Architected high-volume RESTful APIs handling 200+ req/sec for delivery tracking, order management, and payment workflows with <150ms average latency.</li>
                            <li>Engineered cloud infrastructure with Docker, Kubernetes, and CI/CD pipelines achieving 99.95% uptime and zero-downtime deployments.</li>
                            <li>Implemented Redis caching layer, database indexing, and horizontal scaling reducing infrastructure costs by 40% while handling 3x traffic growth.</li>
                        </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <div class="d-flex justify-content-center"><h3 class="resume-title">Selected Freelance & High-Scale Projects</h3></div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Followers Management Platform | System Architect</h4>
                        <h5>07/2025 – Current</h5>
                        <ul>
                            <li>Architected high-scale social media engagement platform supporting 10,000+ active users and processing 1,000+ orders/day with real-time order fulfillment via MQTT/WebSockets.</li>
                            <li>Engineered Laravel backend with Node.js workers, Redis queues (Horizon), and automated eligibility checks reducing fraud by 80% and processing time by 65%.</li>
                            <li>Built comprehensive admin dashboard with advanced filtering, bulk operations, and audit logging managing $100K+ monthly transaction volume.</li>
                            <li>Optimized MySQL with composite indexes and query tuning achieving <100ms query response under 500 concurrent operations, enabling seamless real-time updates.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Saudi German Hospital (Advertising Automation) | Lead Developer</h4>
                        <h5>08/2024 – 08/2025</h5>
                        <ul>
                            <li>Engineered enterprise digital signage orchestration platform managing 1,000+ screens across multiple hospital sites with real-time content distribution and centralized campaign control.</li>
                            <li>Built automated scheduling system with Laravel queues, cron jobs, and MQTT (QoS 1) achieving 99.8% sync reliability and <2-second content delivery latency.</li>
                            <li>Developed campaign management dashboard with targeting rules, time-window controls, and performance analytics reducing manual effort by 90%.</li>
                            <li>Optimized MySQL with composite indexes and Redis caching supporting concurrent access from 1,000+ devices with <200ms API response times.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Mazaya Almasya (Smart Home IoT) | Full Stack Developer</h4>
                        <h5>12/2024 – 02/2025</h5>
                        <ul>
                            <li>Architected real-time IoT dashboard with Laravel/Livewire managing 500+ connected devices with bidirectional control via MQTT/WebSockets achieving <300ms command latency.</li>
                            <li>Engineered mobile-responsive RESTful APIs for iOS/Android apps reducing average API response time by 45% through query optimization and Redis caching.</li>
                            <li>Implemented JWT authentication, RBAC, and rate limiting securing 2,000+ user accounts with zero security incidents during production operation.</li>
                            <li>Built background job queues for device telemetry ingestion processing 100K+ sensor readings/day with automated alerting for anomaly detection.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Edu-Lens | Full Stack Developer</h4>
                        <h5>12/2023 – 09/2024</h5>
                        <ul>
                            <li>Stabilized production e-learning platform serving 10,000+ concurrent students, reducing critical error rate by 80% and support tickets by 65% through systematic debugging.</li>
                            <li>Optimized Laravel/MySQL performance with strategic indexing, query refactoring, and Redis caching cutting page load times by 55% and database CPU by 70%.</li>
                            <li>Built gamified youth learning portal with points, badges, and progress tracking increasing student engagement by 40% and course completion rates by 30%.</li>
                            <li>Engineered private instructor portal with course management, enrollment workflows, and RBAC supporting secure multi-instructor operations.</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <div class="d-flex justify-content-center"><h3 class="resume-title">Additional Experience</h3></div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Novel, Menamaher BigBen, Ajyalona, ICTC CMS — Various Roles</h4>
                        <ul>
                            <li>Lead ERP development, cross-platform education apps, news & podcast platforms, and CMS projects; responsibilities included architecture, implementation and deployment.</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <div class="d-flex justify-content-center"><h3 class="resume-title">Education & Certifications</h3></div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Communication and Electronics Engineer</h4>
                        <h5>2018 – 2023</h5>
                        <p><em>Faculty of Engineering, Minya University</em></p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Certificate in IoT and AI Applications</h4>
                        <h5>2022 – 2023</h5>
                        <p><em>National Telecommunication Institute (NTI)</em></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <div class="d-flex justify-content-center"><h3 class="resume-title">Languages &amp; Soft Skills</h3></div>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="resume-item">
                        <ul>
                            <li><strong>Languages:</strong> Arabic (Mother Tongue), English (B2/C1 Professional)</li>
                            <li><strong>Soft Skills:</strong> Engineering Leadership, Resilient Problem Solving, Cross-border Collaboration, Technical Documentation, Strategic Decision-making</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

                </div>
            </div>
            </div>

        </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Selected projects spanning web apps, e-commerce, and IoT — focused on performance, security, and measurable business outcomes.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-web">Web Apps</li>
                <li data-filter=".filter-iot">IoT</li>
                <li data-filter=".filter-ecommerce">E-commerce</li>
                <li data-filter=".filter-cms">CMS</li>
                <li data-filter=".filter-erp">ERP/Finance</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <!-- Masqat App -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-erp">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/aci.png') }}" class="img-fluid" alt="ACIFMA">
                    <div class="portfolio-info">
                    <h4>ACIFMA</h4>
                    <p>Financial & accounting applications with Laravel, Vue.js, and MySQL optimization</p>
                    <a href="{{ asset('projects/aci.png') }}" title="Masqat App" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'masqat') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Alsa7a Sports Services -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-sports">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/alsa7a.png') }}" class="img-fluid" alt="Alsa7a Sports Services">
                    <div class="portfolio-info">
                    <h4>Alsa7a - Sports Services Platform</h4>
                    <p>Player photography, physiotherapy and club service bookings — managed schedules and club-to-club service offers.</p>
                    <a href="{{ asset('projects/alsa7a.png') }}" title="Alsa7a" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'alsa7a') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Followers Management Platform -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/followers.png') }}" class="img-fluid" alt="Followers Platform">
                    <div class="portfolio-info">
                    <h4>Followers Management Platform</h4>
                    <p>Social media engagement platform with Laravel, Node.js & MQTT for 10,000+ users</p>
                    <a href="{{ asset('projects/followers.png') }}" title="Followers Platform" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'followers-management') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Mazaya Almasya (Smart Home) -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-iot">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/mazaya.png') }}" class="img-fluid" alt="Mazaya Smart Home">
                    <div class="portfolio-info">
                    <h4>Mazaya Almasya - Smart Home</h4>
                    <p>IoT dashboard with Laravel, Livewire, MQTT & WebSockets for real-time device control</p>
                    <a href="{{ asset('projects/mazaya.png') }}" title="Mazaya" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'mazaya') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- ICTC Portfolio Website -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cms">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/ictc.png') }}" class="img-fluid" alt="ICTC">
                    <div class="portfolio-info">
                    <h4>ICTC Portfolio & CMS</h4>
                    <p>Dynamic portfolio with custom CMS, job listings, and 25% SEO traffic increase</p>
                    <a href="{{ asset('projects/ictc.png') }}" title="ICTC" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'ictc') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Edu-Lens E-Learning -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/edulens.png') }}" class="img-fluid" alt="Edu-Lens">
                    <div class="portfolio-info">
                    <h4>Edu-Lens E-Learning Platform</h4>
                    <p>Scalable online learning platforms with gamified elements and custom features</p>
                    <a href="{{ asset('projects/edulens.png') }}" title="Edu-Lens" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'edu-lens') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Saudi German Hospital Advertising System -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/saudiscai.png') }}" class="img-fluid" alt="SGH Ads">
                    <div class="portfolio-info">
                    <h4>SGH Advertising Automation</h4>
                    <p>Large-scale ad automation system supporting 1,000+ screens with MQTT synchronization</p>
                    <a href="{{ asset('projects/saudiscai.png') }}" title="SGH Ads" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'advertising-automation') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Ajyalona News Platform -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-cms">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/ajyalna.png') }}" class="img-fluid" alt="Ajyalona">
                    <div class="portfolio-info">
                    <h4>Ajyalona News & Podcast</h4>
                    <p>News platform with custom CMS, REST API integration, 20% engagement boost</p>
                    <a href="{{ asset('projects/ajyalna.png') }}" title="Ajyalona" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'ajyalona') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Menamaher BigBen Education -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/menamaher.png') }}" class="img-fluid" alt="BigBen">
                    <div class="portfolio-info">
                    <h4>Menamaher BigBen EdTech</h4>
                    <p>Cross-platform education app with Flutter, Laravel, subscription payments & analytics</p>
                    <a href="{{ asset('projects/menamaher.png') }}" title="BigBen" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'menamaher-bigben') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- POS & Inventory System -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-erp">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/sketo2.png') }}" class="img-fluid" alt="POS System">
                    <div class="portfolio-info">
                    <h4>POS & Inventory System</h4>
                    <p>Complete POS with cashier, returns, dynamic pricing, and real-time analytics</p>
                    <a href="{{ asset('projects/sketo2.png') }}" title="POS" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'pos-inventory') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Skintreat E-commerce -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ecommerce">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('projects/skintreat.png') }}" class="img-fluid" alt="Skintreat E-commerce">
                    <div class="portfolio-info">
                    <h4>Skintreat - Cosmetics E-commerce (Oman)</h4>
                    <p>E-commerce store for cosmetics with Thawani payment gateway integration (Oman)</p>
                    <a href="{{ asset('projects/skintreat.png') }}" title="Skintreat" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="{{ route('portfolio.detail', 'skintreat') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
                </div><!-- End Portfolio Item -->

                <!-- Novel E-commerce -->
                {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-ecommerce">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('template/assets/img/portfolio/product-3.jpg') }}" class="img-fluid" alt="Novel">
                        <div class="portfolio-info">
                        <h4>Novel E-commerce Platform</h4>
                        <p>Responsive e-commerce with category filtering, secure checkout & admin dashboard</p>
                        <a href="{{ asset('template/assets/img/portfolio/product-3.jpg') }}" title="Novel" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="{{ route('portfolio.detail', 'ecommerce-novel') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div> --}}
                <!-- End Portfolio Item -->

                <!-- ERP System -->
                {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-erp">
                    <div class="portfolio-content h-100">
                        <img src="{{ asset('template/assets/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt="ERP">
                        <div class="portfolio-info">
                        <h4>Custom ERP System</h4>
                        <p>Full ERP from requirements to deployment with website modernization & SEO boost</p>
                        <a href="{{ asset('template/assets/img/portfolio/branding-3.jpg') }}" title="ERP" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="{{ route('portfolio.detail', 'erp-system') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div> --}}
                <!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

            </div>

        </div>

        </section><!-- /Portfolio Section -->

        <style>
        /* Make portfolio items equal height and images cover the area */
        .portfolio-item .portfolio-content {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .portfolio-item img {
            width: 100%;
            height: 220px; /* fixed visual height for cards; adjust as needed */
            object-fit: cover;
            display: block;
        }

        .portfolio-item .portfolio-info {
            margin-top: auto; /* push info to bottom so cards align */
            background: rgba(255,255,255,0.95);
            padding: 12px;
        }

        @media (max-width: 767px) {
            .portfolio-item img { height: 180px; }
        }
        </style>

        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>I provide services from architecture and system design to implementation, deployment, and ongoing support. Typical engagements include full-stack development, integrations, and DevOps automation.</p>
                                <!-- New Services Block: replaced commented placeholder with styled services -->
                    <div class="col-12" data-aos="fade-up" data-aos-delay="150">
                        <div class="services-grid py-4">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="service-box p-4 h-100 shadow-sm rounded bg-white">
                                        <div class="icon mb-3 text-primary"><i class="bi bi-server fs-3"></i></div>
                                        <h4>Server-side Support & Maintenance</h4>
                                        <p class="mb-0">System administration, Dockerized deployments, monitoring, backups and performance tuning. I keep production systems secure, patched and highly available.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="service-box p-4 h-100 shadow-sm rounded bg-white">
                                        <div class="icon mb-3 text-success"><i class="bi bi-shield-lock fs-3"></i></div>
                                        <h4>OTP & Authentication Services</h4>
                                        <p class="mb-0">Design and implement secure OTP flows, multi-factor authentication, session hardening and token-based APIs (JWT/OAuth2). SMS/email OTP integrations with retries and rate-limits.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="service-box p-4 h-100 shadow-sm rounded bg-white">
                                        <div class="icon mb-3 text-warning"><i class="bi bi-phone-fill fs-3"></i></div>
                                        <h4>Web & Customer Support Integrations</h4>
                                        <p class="mb-0">Live chat, ticketing and helpdesk integrations, in-app messaging and real-time support dashboards that connect users to support teams with context-rich logs.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="service-box p-4 h-100 shadow-sm rounded bg-white">
                                        <div class="icon mb-3 text-danger"><i class="bi bi-layout-text-sidebar-reverse fs-3"></i></div>
                                        <h4>System Design & Architecture</h4>
                                        <p class="mb-0">High-level architecture, microservices decomposition, data modeling, API contracts and capacity planning. Emphasis on resilience and observability for production systems.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="service-box p-4 h-100 shadow-sm rounded bg-white">
                                        <div class="icon mb-3 text-info"><i class="bi bi-code-square fs-3"></i></div>
                                        <h4>Full Stack Development</h4>
                                        <p class="mb-0">End-to-end web development using Laravel (backend) and Vue/Livewire (frontend). Clean APIs, responsive UIs and efficient database design.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4">
                                    <div class="service-box p-4 h-100 shadow-sm rounded bg-white">
                                        <div class="icon mb-3 text-secondary"><i class="bi bi-wifi fs-3"></i></div>
                                        <h4>IoT Integration & Device Orchestration</h4>
                                        <p class="mb-0">MQTT brokers, WebSocket pipelines, firmware integration patterns and telemetry ingestion with scalable queues and time-series storage patterns.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div><!-- End Section Title -->
        </section><!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Get in touch to discuss your project — whether you need a new product, integration, or hands-on support to stabilize and scale an existing system.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                        <h3>Address</h3>
                        <p id="contact-address">27 Mohamed Salem street, Shubra, Cairo, Egypt</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                        <h3>Call Us</h3>
                        <p id="contact-phone"><a href="https://wa.me/201555622169" target="_blank" rel="noopener">+20 155 562 2169</a></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                        <h3>Email Us</h3>
                        <p id="contact-email"><a href="mailto:bola.ishak41@gmail.com">bola.ishak41@gmail.com</a></p>
                        </div>
                    </div><!-- End Info Item -->

                        <div class="mt-3">
                        <label for="map-search" class="form-label">Enter a location to view on map</label>
                        <div class="input-group mb-2">
                            <input id="map-search" type="text" class="form-control" placeholder="Type an address or place and press Enter" value="27 Mohamed Salem street, Shubra, Cairo, Egypt">
                            <button id="map-search-btn" class="btn btn-outline-primary" type="button">Show</button>
                        </div>
                        <div class="ratio ratio-16x9">
                            <iframe id="contact-map" src="https://www.google.com/maps?q=27+Mohamed+Salem+street+Shubra+Cairo+Egypt&output=embed" frameborder="0" style="border:0; width:100%; height:100%;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                        <label for="name-field" class="pb-2">Your Name</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                        </div>

                        <div class="col-md-6">
                        <label for="email-field" class="pb-2">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email-field" required="">
                        </div>

                        <div class="col-md-12">
                        <label for="subject-field" class="pb-2">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject-field" required="">
                        </div>

                        <div class="col-md-12">
                        <label for="message-field" class="pb-2">Message</label>
                        <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>

                        <button type="submit">Send Message</button>
                        </div>

                    </div>
                    </form>
                </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
        <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">myPortfolio</strong> <span>All Rights Reserved</span></p>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://www.linkedin.com/in/bola-ishak-761000215/">Eng:Bola Eshaq</a>
        </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <script>
    // Map search: update iframe src with encoded query
    (function(){
        var input = document.getElementById('map-search');
        var btn = document.getElementById('map-search-btn');
        var iframe = document.getElementById('contact-map');
        function showLocation(){
            if(!input || !iframe) return;
            var q = input.value.trim();
            if(!q) return;
            var url = 'https://www.google.com/maps?q=' + encodeURIComponent(q) + '&output=embed';
            iframe.src = url;
            var addr = document.getElementById('contact-address');
            if(addr) addr.textContent = q;
        }
        if(btn) btn.addEventListener('click', showLocation);
        if(input) input.addEventListener('keydown', function(e){ if(e.key === 'Enter'){ e.preventDefault(); showLocation(); } });
    })();
    </script>

@endsection
