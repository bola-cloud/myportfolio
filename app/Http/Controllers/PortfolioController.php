<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private static $projects = [
        'men-too' => [
            'title' => 'MEN TOO — Luxury Men\'s Multi-Vendor Marketplace',
            'category' => 'SaaS & Multi-Vendor',
            'filter_class' => 'filter-saas',
            'badge' => 'Featured Flagship',
            'role' => 'Lead Full-Stack Developer & UI/UX Architect',
            'client' => 'MEN TOO (Egypt & MENA)',
            'date' => '2025 – Current',
            'url' => 'https://men.wasl-x.com/',
            'short_summary' => 'A high-end luxury e-commerce platform dedicated exclusively to curated men\'s fashion across Egypt and the MENA region, built to rival Farfetch and Ounass Men.',
            'description' => 'Architected and engineered MEN TOO, an enterprise-grade luxury multi-vendor marketplace tailored specifically for discerning menswear fashion in Egypt and the MENA territory. Designed from the ground up to rival global luxury destinations like Farfetch and Ounass Men, emphasizing sub-second loading speeds, pixel-perfect monochrome aesthetics, and robust multi-tier operational logistics.',
            'features' => [
                'Architected an ultra-fast luxury monochrome design system (ounass-luxury.css) with dynamic RTL/LTR support and responsive mobile drawer navigation.',
                'Integrated Egypt\'s National Instant Payment Network (InstaPay) with reference validation workflows alongside Cards and Cash on Delivery (COD).',
                'Built an isolated 4-tier operational engine: Customer Storefront, Multi-Vendor Merchant Portal, Super Admin Governance Suite, and Delivery Dispatch Hub.',
                'Eliminated DOM bottlenecks and optimized Laravel Blade/Query caching to significantly slash Time to First Byte (TTFB) to under 150ms.',
                'Engineered automated commission splitting, multi-seller checkout cart segregation, and escrow payout reconciliations.'
            ],
            'tech_stack' => ['PHP 8.2', 'Laravel 12', 'MySQL', 'InstaPay Gateway', 'Vanilla CSS3', 'Luxury Design System', 'Blade', 'REST APIs', 'Redis'],
            'images' => [
                'projects/mentoo.jpg'
            ]
        ],
        'wasl-x' => [
            'title' => 'Wasl-X — Hyperlocal On-Demand Delivery & Multi-Vendor Ecosystem',
            'category' => 'SaaS & Multi-Vendor',
            'filter_class' => 'filter-saas',
            'badge' => 'High Concurrency & Cloud',
            'role' => 'Lead Backend Architect & DevOps Engineer',
            'client' => 'Wasl-X (Remote / Regional)',
            'date' => '02/2025 – Current',
            'url' => 'https://wasl-x.com/',
            'short_summary' => 'An enterprise-grade, high-concurrency food, grocery, and retail on-demand delivery platform (Talabat/HungerStation model) handling live merchant menus, rider dispatch, and order fulfillment.',
            'description' => 'Spearheaded backend architecture and cloud infrastructure for Wasl-X, a hyperlocal multi-tenant delivery ecosystem spanning food, grocery, pharmacy, and parcel transport. Designed for extreme horizontal scalability under peak order spikes with live geolocation dispatch and WebSocket rider telemetry.',
            'features' => [
                'Engineered an automated dispatch and routing engine tracking live order state transitions from cart to doorstep delivery with sub-second WebSocket updates.',
                'Maintained 99.9% uptime by containerizing platform microservices via Docker on AWS Linux cloud infrastructure with automated auto-scaling and zero-downtime deployment pipelines.',
                'Designed a standalone server-side WhatsApp OTP automation microservice, cutting customer authentication latency by 85% and significantly reducing third-party SMS costs.',
                'Implemented Redis atomic locking and distributed queue workers to prevent stock drift across concurrent multi-tenant merchant flash sales.',
                'Architected high-volume RESTful APIs handling 200+ req/sec for rider tracking, order dispatch, and multi-gateway digital payments.'
            ],
            'tech_stack' => ['Laravel', 'Node.js', 'MySQL', 'Redis', 'Docker', 'AWS (Linux EC2/S3)', 'WebSockets', 'MQTT', 'WhatsApp Server-Side API'],
            'images' => [
                'projects/waslx.jpg'
            ]
        ],
        'clinova' => [
            'title' => 'Clinova — Smart Clinical Management & Electronic Health Records (EHR) SaaS',
            'category' => 'DevOps & HealthTech',
            'filter_class' => 'filter-devops',
            'badge' => 'HealthTech SaaS',
            'role' => 'Lead Full-Stack Engineer & Database Architect',
            'client' => 'Clinova HealthTech SaaS',
            'date' => '2024 – Current',
            'url' => 'https://wasl-x.com/',
            'short_summary' => 'A secure, multi-tenant clinic and practice management SaaS built for medical centers, polyclinics, and independent practitioners to streamline patient visits, digital prescriptions, and billing.',
            'description' => 'Architected Clinova, a HIPAA-aligned multi-tenant healthcare SaaS and Electronic Health Records (EHR) platform. Delivers streamlined clinic workflows, from dynamic doctor appointment scheduling to diagnostic record management, digital drug prescriptions, and consolidated clinic branch billing.',
            'features' => [
                'Architected a compliant Multi-Tenant database schema separating clinical EHR patient data, appointment schedules, and branch billing with zero cross-tenant contamination.',
                'Built dynamic doctor appointment scheduling with automated SMS/WhatsApp reminders that reduced patient no-shows by 45%.',
                'Engineered a rapid prescription generator with drug interaction lookups, reducing doctor documentation time per consultation by over 60%.',
                'Optimized complex medical history queries and relational lookups via Redis caching and targeted composite indexing, ensuring instantaneous chart loads.',
                'Implemented role-based access control (RBAC) separating doctors, nurses, receptionists, lab technicians, and financial auditors with strict audit logging.'
            ],
            'tech_stack' => ['Laravel', 'Vue.js 3', 'PostgreSQL/MySQL', 'Redis Caching', 'Docker', 'RESTful APIs', 'Multi-Tenancy', 'RBAC'],
            'images' => [
                'projects/clinova.jpg'
            ]
        ],
        'modular-erp' => [
            'title' => 'Modular Enterprise ERP & Real Estate Suite',
            'category' => 'FinTech & ERP',
            'filter_class' => 'filter-fintech',
            'badge' => '🚧 In Active Architecture / Under Optimization',
            'status' => 'Under Active Architecture & Optimization',
            'role' => 'Lead Backend Architect & System Designer',
            'client' => 'Enterprise Client (GCC & Egypt)',
            'date' => '2025 – Architecture Phase',
            'url' => null,
            'short_summary' => 'A specialized modular ERP architected for high financial governance, multi-warehouse stock reconciliation, POS operations, and automated real estate broker commission pipelines.',
            'description' => 'Architecting an enterprise-grade modular ERP and real estate asset management platform. Built to deliver rigorous GAAP financial compliance, multi-tiered audit logging, automated broker commission distributions, and distributed multi-warehouse inventory reconciliations with strict ACID transactional guarantees.',
            'features' => [
                'Immutable "Draft-to-Posted" voucher constraints enforcing strict GAAP financial integrity.',
                'Line-level sales order fulfillment with automated multi-warehouse inventory deduction.',
                'Dynamic broker commission calculators and property asset lifecycle management.',
                'High-throughput POS synchronization and multi-tenant organizational data isolation.'
            ],
            'tech_stack' => ['Laravel 12', 'PHP 8.2', 'MySQL (ACID)', 'Redis', 'Docker', 'Multi-Tenancy', 'Financial RBAC'],
            'images' => [
                'projects/modular-erp.jpg'
            ]
        ],
        'masqat' => [
            'title' => 'Masqat App — Real-Time Financial Ledgers & Smart ERP Sync',
            'category' => 'FinTech & ERP',
            'filter_class' => 'filter-fintech',
            'badge' => 'FinTech & ERP',
            'role' => 'Senior Full-Stack & DevOps Engineer',
            'client' => 'Masqat App / HiSpeed (Remote, Oman)',
            'date' => '10/2024 – Current',
            'url' => 'http://hispeed.om/',
            'related_urls' => ['https://acifma-oman.org.om/'],
            'short_summary' => 'Core financial ledgers and accounting engine ensuring strict transactional idempotency and real-time inventory synchronization across high-volume e-commerce channels (HiSpeed & Acioman).',
            'description' => 'Architected and maintained high-reliability financial ledgers, accounting applications, and enterprise ERP integrations for client operations in Oman. Processed thousands of daily orders with synchronized stock, automated invoicing, and real-time reconciliations.',
            'features' => [
                'Eliminated critical N+1 query bottlenecks and tuned schema indices, reducing financial data retrieval latency by 30%.',
                'Built real-time Vue 3 dashboard interfaces connected to WebSockets for live ledger reconciliations and transactional telemetry.',
                'Architected high-performance e-commerce backend processing 5,000+ daily orders with real-time inventory sync, achieving 99.8% uptime.',
                'Engineered seamless Smart ERP integration reducing stock discrepancies by 95% and eliminating manual price updates across 10,000+ SKUs.',
                'Implemented Thawani payment gateway with automated webhook validation, achieving 99.2% transaction success rate and zero payment disputes.',
                'Configured Linux servers with Docker and automated CI/CD deployment pipelines for cross-border engineering teams.'
            ],
            'tech_stack' => ['Laravel', 'PHP 8.2', 'Vue.js 3', 'WebSockets', 'MySQL', 'Smart ERP REST APIs', 'Redis', 'Docker', 'Thawani'],
            'images' => [
                'projects/aci.png'
            ]
        ],
        'pos-inventory' => [
            'title' => 'Cloud POS — Multi-Tenant Retail & Inventory Engine',
            'category' => 'SaaS & Multi-Vendor',
            'filter_class' => 'filter-saas',
            'badge' => 'Enterprise B2B SaaS',
            'role' => 'Lead Software Architect',
            'client' => 'Freelance / B2B Commercial (Cairo, Egypt)',
            'date' => 'Commercial Production',
            'url' => 'https://www.cashier.infinitsmart.com/',
            'short_summary' => 'High-throughput multi-tenant POS & inventory system with cashier terminals, returns processing, dynamic tiered pricing, and real-time financial tracking.',
            'description' => 'Designed and deployed an enterprise cloud POS and warehouse inventory management platform. Built to support busy retail chains, supermarkets, and wholesale distributors requiring immediate barcode lookups, split payments, returns management, and granular stock audits.',
            'features' => [
                'Scaled multi-tenant database infrastructure powering 10,000+ active users and 1,000+ daily transactions with 99.9% uptime.',
                'Granular Role-Based Access Control (RBAC) and automated low-stock reorder pipelines for retail SMEs.',
                'Built offline-resilient cashier terminals with barcode scanning, custom receipt printing, and multiple tender types.',
                'Engineered real-time sales analytics dashboard with treasury tracking, shift handovers, and automated reconciliation reporting.',
                'Optimized high-traffic transactional queries using composite indices and Redis caching layer.'
            ],
            'tech_stack' => ['Laravel', 'JWT Authentication', 'Livewire/Alpine.js', 'MySQL', 'Redis', 'AJAX', 'RBAC'],
            'images' => [
                'projects/sketo2.png'
            ]
        ],
        'ictc' => [
            'title' => 'ICTC — Secure Refugee Profile Documentation System',
            'category' => 'SaaS & Multi-Vendor',
            'filter_class' => 'filter-saas',
            'badge' => 'EU-Partnered NGO',
            'role' => 'Senior Backend Consultant',
            'client' => 'ICTC / EU-Partnered NGOs (Cairo, Egypt)',
            'date' => '08/2025 – 10/2025',
            'url' => 'https://ictc-egy.com/',
            'short_summary' => 'Enterprise-grade beneficiary management platform processing 15,000+ refugee applications with complex two-step eligibility workflow.',
            'description' => 'Engineered a secure beneficiary management and refugee documentation platform in collaboration with European Union partnered organizations. Designed to manage highly sensitive civil applications, dynamic evaluation workflows, and multilingual exports.',
            'features' => [
                'Developed secure 360-degree beneficiary data management with strict role-based isolation across 50+ international partner NGOs and education centers.',
                'Architected enterprise-grade workflow processing 15,000+ applications with complex two-step verification, slashing verification cycle times by 70%.',
                'Implemented memory-efficient streaming CSV exports with UTF-8 BOM encoding and bilingual headers (Arabic/English) for seamless partner ATS integration.',
                'Consolidated 10+ form types, history records, and digital attachments with sub-500ms query response times across 50,000+ records.',
                'Strict compliance with WCAG 2.1 accessibility standards and secure role-based data protection policies.'
            ],
            'tech_stack' => ['Laravel Polymorphic Relations', 'Multi-Tenant RBAC', 'Laravel Policies', 'UTF-8 Streaming Exports', 'MySQL', 'WCAG 2.1'],
            'images' => [
                'projects/ictc.png'
            ]
        ],
        'followers-management' => [
            'title' => 'Followers Platform — High-Throughput Order Queue Engine',
            'category' => 'SaaS & Multi-Vendor',
            'filter_class' => 'filter-saas',
            'badge' => 'High-Volume SaaS',
            'role' => 'Full-Stack Architect & DevOps Engineer',
            'client' => 'Freelance / B2B (Cairo, Egypt)',
            'date' => '01/2025 – Current',
            'url' => 'https://egfollow.com/',
            'short_summary' => 'Built a scalable social media engagement management platform using Laravel and Node.js for back-end workers, with MQTT for real-time publish/subscribe messaging and Redis-backed queues.',
            'description' => 'High-scale engagement management platform handling over 10,000 active users and 1,000+ orders daily. Utilizes distributed microservices, permanent MQTT worker processes, and Redis queues for instantaneous order execution and fraud mitigation.',
            'features' => [
                'Designed system architecture handling 10,000+ active users and 1,000+ daily orders with real-time order fulfillment via MQTT/WebSockets.',
                'Engineered Laravel backend with Node.js workers and Redis queues (Horizon), reducing fraud by 80% and processing time by 65%.',
                'Implemented Node.js MQTT publishers and permanent subscribers (managed with PM2 & Supervisor) for guaranteed message delivery.',
                'Built comprehensive admin dashboard with advanced filtering, bulk operations, and audit logging managing $100K+ monthly transaction volume.',
                'Optimized MySQL with composite indexes achieving <100ms query response under 500 concurrent operations.'
            ],
            'tech_stack' => ['Laravel', 'Node.js', 'PM2', 'MQTT', 'Redis Horizon', 'Supervisor', 'MySQL', 'JWT', 'RBAC'],
            'images' => [
                'projects/followers.png'
            ]
        ],
        'advertising-automation' => [
            'title' => 'SGH Advertising Automation — Multi-Screen Digital Signage',
            'category' => 'DevOps & HealthTech',
            'filter_class' => 'filter-devops',
            'badge' => 'HealthTech & IoT',
            'role' => 'Lead System Architect',
            'client' => 'Saudi German Hospital Cairo (Cairo, Egypt)',
            'date' => '08/2024 – 08/2025',
            'url' => 'https://saudiscai.com/',
            'short_summary' => 'Designed and developed a large-scale automated advertising system for Flutter-based applications with scheduled and targeted displays across 1,000+ screens.',
            'description' => 'Engineered enterprise digital signage orchestration platform managing 1,000+ hospital screens across multiple sites. Features precision time-window scheduling, instant campaign updates via MQTT, and detailed screen health monitoring.',
            'features' => [
                'Engineered platform supporting 1,000+ advertising screens simultaneously with 99.8% sync reliability.',
                'Implemented Laravel Scheduling, cron workers, and MQTT (QoS 1) achieving <2-second content delivery latency.',
                'Created custom admin dashboard for targeted ad distribution, playlist timing, and screen uptime telemetry.',
                'Optimized MySQL database with composite indexing and Redis caching supporting concurrent telemetry from 1,000+ devices with <200ms API latency.'
            ],
            'tech_stack' => ['Laravel', 'MQTT (QoS 1)', 'Flutter', 'Task Scheduling', 'Redis', 'MySQL', 'Cloud DevOps'],
            'images' => [
                'projects/saudiscai.png'
            ]
        ],
        'alsa7a' => [
            'title' => 'Alsa7a Sports Platform — Multi-Sided Marketplace & Escrow',
            'category' => 'FinTech & ERP',
            'filter_class' => 'filter-fintech',
            'badge' => 'Marketplace & FinTech',
            'role' => 'Full-Stack Developer (Freelance)',
            'client' => 'Alsa7a / Saha (Muscat, Oman)',
            'date' => '11/2025 – Current',
            'url' => 'https://saha.wasl-x.com/login',
            'short_summary' => 'Platform for delivering sports-related services (player photography, physiotherapy, training services) and enabling clubs to book or offer player services to third parties.',
            'description' => 'Multi-sided sports marketplace connecting 500+ athletes with certified service providers. Features automated commission distribution, escrow logic, provider vetting workflows, and Thawani payment integration.',
            'features' => [
                'Built multi-sided marketplace connecting 500+ athletes with certified providers, processing $50K+ in bookings in initial quarter.',
                'Engineered automated commission distribution system with escrow logic and multi-party payouts reducing manual processing by 90%.',
                'Integrated Thawani payment gateway with real-time webhook validation achieving 99.5% transaction success rate.',
                'Developed comprehensive admin dashboard managing 200+ provider profiles, club contracts, and revenue analytics with RBAC.'
            ],
            'tech_stack' => ['Laravel', 'Vue.js', 'MySQL', 'Thawani', 'Docker', 'Redis', 'Escrow Automation'],
            'images' => [
                'projects/alsa7a.png'
            ]
        ],
        'mazaya' => [
            'title' => 'Mazaya Almasya — Real-Time Smart Home IoT Dashboard',
            'category' => 'DevOps & HealthTech',
            'filter_class' => 'filter-devops',
            'badge' => 'IoT & Embedded Cloud',
            'role' => 'IoT & Full-Stack Engineer',
            'client' => 'Mazaya Almasya (Cairo, Egypt)',
            'date' => '12/2024 – 02/2025',
            'url' => 'https://mazaya-iot.org/en',
            'short_summary' => 'Created a smart home dashboard with Laravel and Livewire, enabling real-time monitoring and control of 500+ IoT devices.',
            'description' => 'Architected real-time IoT dashboard managing 500+ connected devices with bidirectional control via MQTT/WebSockets. Integrated REST APIs for mobile apps with 99.9% uptime and telemetry ingestion.',
            'features' => [
                'Built real-time dashboard with Laravel and Livewire for IoT device control with <300ms command latency.',
                'Integrated MQTT and WebSockets for bidirectional communication between cloud servers and embedded hardware.',
                'Designed REST APIs for iOS and Android mobile app integration, reducing average latency by 45% via Redis caching.',
                'Built background job queues processing 100K+ sensor readings per day with automated alerting for anomaly detection.'
            ],
            'tech_stack' => ['Laravel', 'Livewire', 'MQTT', 'WebSockets', 'REST API', 'Redis', 'Docker', 'IoT'],
            'images' => [
                'projects/mazaya.png'
            ]
        ],
        'skintreat' => [
            'title' => 'Skintreat — Fast Cosmetics E-Commerce & Thawani Checkout',
            'category' => 'FinTech & ERP',
            'filter_class' => 'filter-fintech',
            'badge' => 'E-Commerce & Payments',
            'role' => 'Full-Stack Developer',
            'client' => 'Muscat Apps (Freelance, Oman)',
            'date' => '2025',
            'url' => 'https://skintreat-oman.com/',
            'short_summary' => 'An e-commerce store for cosmetics with a secure Thawani payment gateway integration (Oman) and real-time inventory management.',
            'description' => 'Built a high-conversion e-commerce storefront for cosmetics retail in Oman with instant Thawani card and local payment integration, automated order invoicing, and mobile optimization.',
            'features' => [
                'Product catalog with dynamic categories, faceted filters, and sub-second instant search.',
                'Secure checkout integrated with Thawani (Oman) for credit cards and local debit with webhook reconciliation.',
                'Automated order status lifecycle updates and warehouse notifications.',
                'Responsive UI optimized for mobile shoppers with lazy loading and asset compression.'
            ],
            'tech_stack' => ['Laravel', 'Livewire', 'MySQL', 'Thawani', 'Stripe-like Checkout', 'Webhooks', 'Docker'],
            'images' => [
                'projects/skintreat.png'
            ]
        ],
        'edu-lens' => [
            'title' => 'Edu-Lens — High-Concurrency E-Learning Platform',
            'category' => 'SaaS & Multi-Vendor',
            'filter_class' => 'filter-saas',
            'badge' => 'EdTech SaaS',
            'role' => 'Full-Stack Developer',
            'client' => 'Edu-Lens (Giza, Egypt)',
            'date' => '12/2023 – 09/2024',
            'url' => 'https://edu-lens.com/',
            'short_summary' => 'Stabilized and scaled online learning platform serving 10,000+ concurrent students with gamification and progress analytics.',
            'description' => 'Refactored production e-learning infrastructure to withstand high-volume student examinations. Implemented gamified learning portals, teacher dashboards, and video streaming protection.',
            'features' => [
                'Stabilized production platform serving 10,000+ concurrent students, reducing critical errors by 80%.',
                'Optimized Laravel/MySQL queries with strategic indexing and Redis caching, cutting page load times by 55%.',
                'Built gamified youth learning portal with points, badges, and progress tracking increasing student engagement by 40%.',
                'Engineered private instructor portal with course management, enrollment workflows, and RBAC.'
            ],
            'tech_stack' => ['Laravel', 'MySQL', 'Gamification', 'Analytics', 'Redis', 'Performance Optimization'],
            'images' => [
                'projects/edulens.png'
            ]
        ]
    ];

    public static function allProjects()
    {
        return self::$projects;
    }

    public function getProjects()
    {
        return self::$projects;
    }

    public function show($slug)
    {
        if (!isset(self::$projects[$slug])) {
            abort(404);
        }

        $project = self::$projects[$slug];
        $projects = self::$projects;

        return view('portfolio.detail', [
            'project' => $project,
            'projects' => $projects,
            'slug' => $slug
        ]);
    }

    public function index()
    {
        return view('home', ['projects' => self::$projects]);
    }
}
