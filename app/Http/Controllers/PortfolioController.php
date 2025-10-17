<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $projects = [
        'masqat' => [
            'title' => 'Masqat App - Financial & Accounting System',
            'category' => 'Full Stack Development',
            'client' => 'Masqat App (Remote, Oman)',
            'date' => '10/03/2025 – Current',
            'url' => 'https://acifma-oman.org.om',
            'description' => 'Developed and maintained financial & accounting applications using Laravel (PHP 8) and MySQL for a remote client in Oman.',
            'features' => [
                'Built financial & accounting applications achieving 30% faster data retrieval via query optimization',
                'Created dynamic Vue.js 3 components with AJAX and WebSockets for real-time user interactions',
                'Integrated REST APIs with secure authentication (OAuth2, JWT) and RBAC for data access control',
                'Configured Linux servers with Docker and automated CI/CD pipelines',
                'Collaborated in Agile/Scrum environment with cross-border teams in Europe and the Middle East'
            ],
            'tech_stack' => ['Laravel', 'PHP 8', 'Vue.js 3', 'MySQL', 'WebSockets', 'AJAX', 'OAuth2', 'JWT', 'Docker', 'Linux', 'CI/CD'],
            'images' => [
                'projects/aci.png'
            ]
        ],
        'followers-management' => [
            'title' => 'Followers Management Platform - Social Media Engagement',
            'category' => 'Full Stack Development',
            'client' => 'Freelance (Cairo, Egypt)',
            'date' => '01/07/2025 – Current',
            'url' => 'https://egfollow.com/',
            'description' => 'Built a scalable social media engagement management platform using Laravel and Node.js for back-end workers, with MQTT for real-time publish/subscribe messaging and Redis-backed queues for background processing.',
            'features' => [
                'Designed system architecture handling 10,000+ active users and 1,000+ daily orders',
                'Implemented Node.js MQTT publishers and permanent subscribers (managed with PM2) for reliable message delivery',
                'Used supervisor and PM2 to ensure long-running worker processes and permanent MQTT subscriptions',
                'Handled background tasks with Redis queues and Laravel queues/workers to publish actions and update execution status',
                'Created admin dashboard with advanced filtering, search, and bulk actions',
                'Implemented automated eligibility checks, points-based systems, and cooldown logic',
                'Secured authentication workflows using JWT with multi-role RBAC permissions',
                'Optimized MySQL queries and backend workflows for high concurrency'
            ],
            'tech_stack' => ['Laravel', 'Node.js', 'PM2', 'MQTT', 'Redis', 'Supervisor', 'MySQL', 'JWT', 'RBAC', 'Queue Management'],
            'images' => [
                'projects/followers.png'
            ]
        ],
        'mazaya' => [
            'title' => 'Mazaya Almasya - Smart Home Dashboard',
            'category' => 'IoT Development',
            'client' => 'Mazaya Almasya (Cairo, Egypt)',
            'date' => '20/12/2024 – 28/02/2025',
            'url' => 'https://mazaya-iot.org/en',
            'description' => 'Created a smart home dashboard with Laravel and Livewire, enabling real-time monitoring and control of IoT devices.',
            'features' => [
                'Built real-time dashboard with Laravel and Livewire for IoT device control',
                'Integrated MQTT and WebSockets for bidirectional communication',
                'Designed REST APIs for mobile app integration with 99.9% uptime',
                'Enhanced system scalability with API rate limiting and input validation',
                'Collaborated with embedded engineers for firmware-to-server communication'
            ],
            'tech_stack' => ['Laravel', 'Livewire', 'MQTT', 'WebSockets', 'REST API', 'IoT', 'Mobile Integration'],
            'images' => [
                'projects/mazaya.png'
            ]
        ],
        'ictc' => [
            'title' => 'ICTC - Portfolio Website with Custom CMS',
            'category' => 'Web Development & CMS',
            'client' => 'ICTC (Cairo, Egypt)',
            'date' => '01/12/2024 – 11/06/2025',
            'url' => 'https://ictc-egy.com/',
            'description' => 'Developed a dynamic portfolio website with a custom-built CMS allowing full content management without technical assistance.',
            'features' => [
                'Built custom CMS for full content management without technical assistance',
                'Designed responsive UI optimized for cross-device performance (WCAG 2.1)',
                'Implemented job listings, career sections, and CV upload flows',
                'Enhanced SEO with structured data and metadata optimization (25% traffic increase)',
                'Applied lazy loading, image compression, and database query optimization'
            ],
            'tech_stack' => ['Laravel', 'Custom CMS', 'Responsive Design', 'SEO', 'WCAG 2.1', 'MySQL'],
            'images' => [
                'projects/ictc.png'
            ]
        ],
        'edu-lens' => [
            'title' => 'Edu-Lens - E-Learning Platform',
            'category' => 'EdTech Platform',
            'client' => 'Edu-Lens (Giza, Egypt)',
            'date' => '30/12/2023 – 01/09/2024',
            'url' => 'https://edu-lens.com/',
            'description' => 'Improved an existing online learning platform and built custom e-learning solutions for various educational needs.',
            'features' => [
                'Optimized database queries and backend workflows for scalability',
                'Designed custom private learning platform for single instructor',
                'Developed interactive youth-focused course portal with gamified elements',
                'Maintained server security with regular updates and performance monitoring',
                'Built student progress tracking and analytics dashboards'
            ],
            'tech_stack' => ['Laravel', 'MySQL', 'Gamification', 'Analytics', 'Security', 'Performance Optimization'],
            'images' => [
                'projects/edulens.png'
            ]
        ],
        'advertising-automation' => [
            'title' => 'Advertising Automation System - Large-Scale Ad Management',
            'category' => 'Full Stack Development',
            'client' => 'Saudi German Hospital Cairo (Cairo, Egypt)',
            'date' => '01/08/2024 – 01/08/2025',
            'url' => 'https://saudiscai.com/',
            'description' => 'Designed and developed a large-scale automated advertising system for Flutter-based applications with scheduled and targeted displays.',
            'features' => [
                'Built system for scheduled and targeted ad displays across multiple locations',
                'Implemented Laravel Scheduling for dynamic ad timing and rotation control',
                'Integrated MQTT for real-time updates and instant content synchronization',
                'Created custom admin dashboard for ad management and performance tracking',
                'Engineered platform supporting 1,000+ advertising screens simultaneously',
                'Optimized for high throughput, scalability, and minimal downtime'
            ],
            'tech_stack' => ['Laravel', 'MQTT', 'Flutter', 'Scheduling', 'Real-time Sync', 'Admin Dashboard', 'Performance'],
            'images' => [
                'projects/saudiscai.png'
            ]
        ],
        'ajyalona' => [
            'title' => 'Ajyalona - News & Podcast Platform',
            'category' => 'Full Stack Development',
            'client' => 'Ajyalona (Remote, Egypt)',
            'date' => '14/06/2024 – 01/09/2024',
            'url' => 'https://ajyalona.org.ly/',
            'description' => 'Developed a news and podcast platform with custom Laravel + AJAX CMS for content management.',
            'features' => [
                'Built custom Laravel + AJAX CMS for news and podcast management',
                'Integrated REST APIs for automated news updates from third-party sources',
                'Improved site SEO and accessibility (20% engagement boost)',
                'Designed scalable architecture to handle high traffic',
                'Implemented real-time content updates and notifications'
            ],
            'tech_stack' => ['Laravel', 'AJAX', 'REST API', 'CMS', 'SEO', 'Accessibility', 'High Traffic'],
            'images' => [
                'projects/ajyalna.png'
            ]
        ],
        'menamaher-bigben' => [
            'title' => 'Menamaher BigBen - Cross-Platform Education App',
            'category' => 'EdTech / Mobile Development',
            'client' => 'Menamaher BigBen',
            'date' => '01/02/2024 – Current',
            'url' => 'https://menamaherbigben.com/',
            'description' => 'Developed a cross-platform education platform with Flutter mobile app and Laravel/Livewire web dashboard.',
            'features' => [
                'Built Flutter mobile app and Laravel/Livewire web dashboard',
                'Created REST APIs connecting mobile and web with real-time updates',
                'Integrated subscription-based payments with role-based content access',
                'Designed admin and teacher dashboards with analytics and subscription management',
                'Implemented course progress tracking and exam systems'
            ],
            'tech_stack' => ['Laravel', 'Livewire', 'Flutter', 'REST API', 'Subscription', 'Analytics', 'Role-Based Access'],
            'images' => [
                'projects/menamaher.png'
            ]
        ],
        'pos-inventory' => [
            'title' => 'POS & Inventory Management System',
            'category' => 'Full Stack Development',
            'client' => 'Freelance (Cairo, Egypt)',
            'date' => 'Various Dates',
            'url' => null,
            'description' => 'Designed a complete POS & inventory system with cashier, returns, and dynamic pricing modules.',
            'features' => [
                'Built complete POS system with cashier, returns, and dynamic pricing',
                'Implemented role-based permissions and multi-level user management',
                'Integrated low-stock alerts and purchase order automation',
                'Added real-time sales analytics dashboard',
                'Built treasury tracking and financial reporting'
            ],
            'tech_stack' => ['Laravel', 'AJAX', 'jQuery', 'MySQL', 'Real-time Analytics', 'Role-Based Access'],
            'images' => [
                'projects/sketo2.png'
            ]
        ],
        'ecommerce-novel' => [
            'title' => 'Novel - E-Commerce Platform',
            'category' => 'E-Commerce Development',
            'client' => 'Novel (Minya, Egypt)',
            'date' => 'Various Dates',
            'url' => 'https://skintreat-oman.com/',
            'description' => 'Built a responsive e-commerce platform with category-based product filtering and secure checkout.',
            'features' => [
                'Created responsive e-commerce platform with category-based filtering',
                'Developed admin dashboard for product, order, and promotion management',
                'Optimized backend queries for high-traffic conditions',
                'Implemented secure checkout and payment integration',
                'Built customer account management and order tracking'
            ],
            'tech_stack' => ['Laravel', 'Livewire', 'E-Commerce', 'Payment Integration', 'Admin Dashboard'],
            'images' => [
                'template/assets/img/portfolio/product-3.jpg'
            ]
        ],
        'skintreat' => [
            'title' => 'Skintreat - Cosmetics E-Commerce (Oman)',
            'category' => 'E-Commerce',
            'client' => 'Skintreat (Oman)',
            'date' => '2025',
            'url' => 'https://skintreat-oman.com/',
            'description' => 'An e-commerce store for cosmetics with a secure Thawani payment gateway integration (Oman). Built to provide a fast, mobile-friendly shopping experience with inventory and order management.',
            'features' => [
                'Product catalog with categories, filters, and search',
                'Secure checkout integrated with Thawani (Oman) for card and local payments',
                'Order management with webhooks for payment status updates',
                'Admin dashboard for products, orders, and inventory',
                'Responsive UI with performance optimizations for mobile shoppers'
            ],
            'tech_stack' => ['Laravel', 'Livewire', 'MySQL', 'Thawani', 'Stripe-like Checkout', 'Webhooks', 'Docker'],
            'images' => [
                'projects/skintreat.png'
            ]
        ],
        'erp-system' => [
            'title' => 'Custom ERP System',
            'category' => 'ERP Development',
            'client' => 'Contract (Cairo, Egypt)',
            'date' => '01/09/2023 – 29/12/2023',
            'url' => null,
            'description' => 'Led development of a custom ERP system from requirements gathering to deployment.',
            'features' => [
                'Led full development cycle from requirements to deployment',
                'Modernized company websites boosting load speed and SEO rankings',
                'Conducted regular code reviews for quality and performance',
                'Integrated financial, inventory, and HR modules',
                'Built reporting and analytics dashboards'
            ],
            'tech_stack' => ['Laravel', 'ERP', 'MySQL', 'Code Review', 'SEO', 'Performance Optimization'],
            'images' => [
                'template/assets/img/portfolio/branding-3.jpg'
            ]
        ]
    ];

    public function show($slug)
    {
        if (!isset($this->projects[$slug])) {
            abort(404);
        }

        $project = $this->projects[$slug];

        // Pass the full projects list so the detail view can render thumbnails of other projects
        $projects = $this->projects;
        return view('portfolio.detail', ['project' => $project, 'projects' => $projects, 'slug' => $slug]);
    }

    public function index()
    {
        return view('home', ['projects' => $this->projects]);
    }
}
