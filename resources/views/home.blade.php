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
            <p>Experienced full-stack developer with hands-on experience building production-ready web applications, e-commerce platforms, and real-time dashboards. I focus on clear architecture, secure integrations, and measurable performance improvements.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="resume-title">Summary</h3>

                        <div class="resume-item pb-0">
                        <h4>Bola Eshak Naguib</h4>
                        <p><em>Full Stack Developer (Laravel, Vue.js, IoT) with 4+ years of experience delivering scalable, high-performance web applications and real-time IoT dashboards. Proven expertise in Laravel backend, Vue.js front-end, WebSockets, and MySQL optimization.</em></p>
                        <ul>
                            <li>Cairo, Egypt</li>
                            <li>Phone: (+20) 01555622169</li>
                            <li>Email: <a href="mailto:bola.ishak41@gmail.com">bola.ishak41@gmail.com</a></li>
                        </ul>
                        </div><!-- End Resume Item -->
                    </div>

                    <div class="col-md-6">
                        <h3 class="resume-title">Education &amp; Certifications</h3>
                        <div class="resume-item">
                        <h4>Communication and Electronics Engineering</h4>
                        <h5>15/09/2018 – 12/07/2023</h5>
                        <p><em>Faculty of Engineering, Minya University</em></p>
                        </div><!-- End Resume Item -->

                        <div class="resume-item">
                        <h4>Certificate in IoT and AI Applications</h4>
                        <h5>01/09/2022 – 01/03/2023</h5>
                        <p><em>NTI</em></p>
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
                        <h4>ICTC (in partnership with Masr El-Kheir Foundation; EU-supported) – Full-Stack Developer (Contract, Beneficiary Management Platform)</h4>
                        <h5>01/08/2025 – 11/10/2025 — Cairo, Egypt</h5>
                        <ul>
                            <li>Designed a two-step workflow: Inventory then Services Eligibility with conditional fields and inline validation.</li>
                            <li>Implemented multi-auth, multi-tenant RBAC for associations and education centers using Laravel policies/gates and entity-scoped queries/exports.</li>
                            <li>Built a 360-degree Refugee Profile aggregating forms, eligibility decisions, history, and attachments via polymorphic relations, pivot tables, and Eloquent casts.</li>
                            <li>Delivered advanced search and filtering with selectable columns; optimized MySQL (indexes, eager loading, query tuning).</li>
                            <li>Shipped streaming CSV exports (UTF-8 BOM) with Arabic/English labels and human-readable headers for ATS/HR ingestion.</li>
                            <li>Produced an accessible, responsive UI (Blade, Bootstrap, jQuery, Select2) with WCAG-oriented interactions and full Arabic/English localization.</li>
                            <li>Preserved legacy data paths; strengthened input validation and error handling.</li>
                            <li>Scaled reliably to thousands of beneficiaries and tens of thousands of forms with low latency.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Masqat App – Full-Stack Developer (Part-Time, Contract)</h4>
                        <h5>10/03/2025 – Current — Remote (Oman)</h5>
                        <ul>
                            <li>Built and maintained a FinTech + education platform for paid financial courses with annual subscriptions.</li>
                            <li>Integrated Thawani payment gateway with webhook verification for subscription lifecycle (create, renew, cancel, refund) and invoice/receipt generation.</li>
                            <li>Implemented subscription access controls (RBAC) and entitlement checks to gate premium course content.</li>
                            <li>Developed responsive UIs with Laravel Blade and AJAX; added dashboards for users, courses, payments, and reports.</li>
                            <li>Delivered real-time support chat for customers and admins (WebSockets/long-polling), with message persistence and notifications.</li>
                            <li>Optimized MySQL performance (indexes, query refactors, caching) and hardened security (JWT/OAuth2, validation, rate limiting).</li>
                            <li>Deployed on Linux with Docker and monitoring/backups; provided ongoing part-time support for bug fixes, hotfix releases, and performance tuning under defined SLAs.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Self-Employed — Followers Management Platform – Full-Stack Developer (Contract)</h4>
                        <h5>01/07/2025 – Current — Cairo, Egypt</h5>
                        <ul>
                            <li>Built a social-media engagement platform with Laravel (PHP) backend and Node.js workers; real-time order processing via MQTT and WebSockets.</li>
                            <li>Designed for 10,000+ active users and 1,000+ orders/day using Redis caching, queues (Horizon), and rate limiting to keep latency low.</li>
                            <li>Delivered an admin dashboard with advanced filtering/search, bulk actions, and audit logs for orders, users, and promotions.</li>
                            <li>Implemented automated eligibility checks, points/credits, and cooldown logic to prevent abuse.</li>
                            <li>Secured auth with JWT and enforced RBAC for multi-role permissions.</li>
                            <li>Optimized MySQL with composite indexes and query tuning; streamlined background jobs for high-concurrency workloads.</li>
                            <li>Added logging, metrics, and alerts to monitor throughput, failures, and latency.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Mazaya Almasya – Full-Stack Developer (IoT, Full-Time)</h4>
                        <h5>20/12/2024 – 28/02/2025 — Cairo, Egypt</h5>
                        <ul>
                            <li>Built a smart-home dashboard with Laravel and Livewire for real-time device monitoring and control.</li>
                            <li>Integrated MQTT and WebSockets for bidirectional comms between mobile/web clients and embedded devices (topics, QoS, retained messages).</li>
                            <li>Designed and optimized RESTful APIs for the mobile app; reduced average API latency and improved reliability.</li>
                            <li>Enhanced security and scalability with JWT auth, RBAC, rate limiting, input validation, and structured logging.</li>
                            <li>Added background jobs/queues and Redis caching to handle spikes and smooth device telemetry ingestion.</li>
                            <li>Collaborated with embedded engineers to streamline firmware-to-server communication and error handling.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>ICTC – Full-Stack Web Developer (Contract, CMS Development)</h4>
                        <h5>01/12/2024 – 11/06/2025 — Cairo, Egypt</h5>
                        <ul>
                            <li>Built a dynamic portfolio and corporate site with a custom Laravel CMS, enabling non-technical staff to manage pages, media, and menus.</li>
                            <li>Delivered an accessible, responsive UI aligned with WCAG 2.1; tested across desktop and mobile.</li>
                            <li>Implemented Careers: job listings, search/filter, application forms, and secure CV upload with validation and admin review queue.</li>
                            <li>Added interest-capture and lead forms; routed submissions to the appropriate team with email notifications.</li>
                            <li>Improved SEO (structured data, sitemaps, meta/OG tags, clean slugs) and performance; increased organic traffic ~25% in 2 months.</li>
                            <li>Optimized performance with lazy loading, image compression, and MySQL query tuning; reduced page load times.</li>
                            <li>Hardened security with input validation, file-type checks, rate limiting, and role-based admin access.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Edu-Lens – Full-Stack Developer (Fulltime, EdTech)</h4>
                        <h5>30/12/2023 – 01/09/2024 — Giza, Egypt</h5>
                        <ul>
                            <li>Stabilized the e-learning platform by triaging and fixing critical defects in the dashboard, course, and exams modules; reduced production error rate and support tickets.</li>
                            <li>Optimized Laravel/MySQL performance (indexes, query refactors, caching, queues) and streamlined backend workflows.</li>
                            <li>Scaled the system to support 10,000+ students concurrently with reliable exam sessions and progress tracking.</li>
                            <li>Designed a private learning portal for a single instructor (course/lesson management, enrollments, RBAC).</li>
                            <li>Built a youth-focused course site with gamified elements (points, badges, progress).</li>
                            <li>Hardened server security and reliability (HTTPS, OS/PHP/Nginx updates, automated backups, logging/monitoring).</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Saudi German Hospital Cairo – Full-Stack Laravel Developer (Contract)</h4>
                        <h5>01/08/2024 – 01/08/2025 — Cairo, Egypt</h5>
                        <ul>
                            <li>Designed an automated advertising/orchestration platform for a Flutter digital-signage app; scheduled targeted content across multiple sites and device groups.</li>
                            <li>Built an admin dashboard for campaign management, playlists, targeting, time windows, and performance tracking (Laravel, Blade/Livewire, MySQL).</li>
                            <li>Implemented Laravel Scheduler with queued jobs and cron to control ad rotation and timing; added retries and audit logs.</li>
                            <li>Integrated MQTT to push real-time updates to devices (retained messages, QoS 1) with fallback polling to ensure reliable sync.</li>
                            <li>Optimized MySQL using composite indexes and query tuning; introduced Redis caching to reduce latency under high load.</li>
                            <li>Engineered the platform to operate at 1,000+ screens concurrently with stable throughput and low downtime.</li>
                            <li>Added RBAC, input validation, and structured logging/monitoring for operational visibility and security.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Ajyalona – Full-Stack Developer (Contract)</h4>
                        <h5>14/06/2024 – 01/09/2024 — Remote, Egypt</h5>
                        <ul>
                            <li>Built Ajyalona, a news and podcast platform with a custom Laravel CMS and AJAX admin panel.</li>
                            <li>Developed RESTful APIs and feed ingesters (RSS/JSON) for automated news updates; scheduled with cron/queues.</li>
                            <li>Improved SEO (clean slugs, sitemap, meta/OG tags, schema.org) and accessibility (WCAG); increased engagement 20%.</li>
                            <li>Optimized MySQL queries and added Redis caching; stabilized high-traffic performance.</li>
                            <li>Implemented podcast publishing (RSS feed), media management, and analytics dashboards.</li>
                            <li>Handled deployments via FTP, maintaining environment parity, structured upload directories, and versioned backups for rollback safety.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Menamaher BigBen – Full-Stack Developer (Contract, EdTech)</h4>
                        <h5>01/02/2024 – Current</h5>
                        <ul>
                            <li>Built a cross-platform education platform with a Flutter mobile app and Laravel/Livewire web dashboard.</li>
                            <li>Designed RESTful APIs to connect mobile and web; delivered real-time course/exam updates via queues/WebSockets/FCM.</li>
                            <li>Implemented subscription billing with role-based access (RBAC) and secure auth (JWT/OAuth2).</li>
                            <li>Shipped admin/teacher dashboards with analytics, content control, and subscription management.</li>
                            <li>Optimized MySQL with indexing and query tuning; added Redis caching and background jobs (Horizon) to improve latency.</li>
                            <li>Automated CI/CD and Dockerized deployments; added error monitoring and backups.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Self-Employed — Full-Stack Developer (E-commerce Retailer) – Full-Stack Developer (Contract)</h4>
                        <h5>05/12/2023 – 01/02/2024</h5>
                        <ul>
                            <li>Built a responsive e-commerce site with faceted category/brand filters, search, and secure checkout (Laravel, Livewire, MySQL).</li>
                            <li>Delivered an admin dashboard for product, order, inventory, promotions, and coupon workflows.</li>
                            <li>Integrated payment gateways with webhook verification; automated invoices and email/SMS notifications.</li>
                            <li>Optimized performance for high traffic using composite indexes, query tuning, Redis caching, and background queues (Horizon).</li>
                            <li>Implemented order lifecycle (pending/paid/shipped/returned) and refund flows; improved ops visibility with analytics and reports.</li>
                            <li>Containerized deployments with Docker and set up CI/CD, backups, and centralized error logging.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Novel – Full Stack Developer (ERP Systems, Web Optimization)</h4>
                        <h5>01/09/2023 – 29/12/2023 — Minya, Egypt</h5>
                        <ul>
                            <li>Led development of a custom ERP system from requirements gathering to deployment.</li>
                            <li>Modernized company websites, boosting load speed and SEO rankings.</li>
                            <li>Conducted regular code reviews to maintain quality and performance standards.</li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up">
                        <div class="resume-item">
                        <h4>Self-Employed — Product Owner – POS & Inventory (Founder & Full-Stack Developer)</h4>
                        <h5>01/12/2021 – 08/06/2025 — Cairo, Egypt</h5>
                        <ul>
                            <li>Built and productized a POS and inventory system (Laravel, MySQL, jQuery/AJAX) and deployed it to multiple paying clients.</li>
                            <li>Implemented role-based permissions, multi-level user management, audit logging, and treasury tracking.</li>
                            <li>Added dynamic pricing, returns management, and cashier workflows; integrated barcode/receipt printing.</li>
                            <li>Automated low-stock alerts and purchase order generation; reduced stockouts by ~20% across clients.</li>
                            <li>Delivered a real-time sales analytics dashboard (daily/weekly/monthly KPIs) with drill-down reports.</li>
                            <li>Optimized MySQL with composite indexes and query tuning; cut report times from minutes to seconds.</li>
                            <li>Packaged installs with Docker, set up CI/CD and nightly backups; provided SLA-based maintenance and support.</li>
                            <li>Led client onboarding, customization, and data migration; managed licensing, invoicing, and renewals.</li>
                        </ul>
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
