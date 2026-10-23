<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bola Naguib (Bola Ishak) — Senior Full-Stack & DevOps Engineer | Enterprise SaaS, FinTech & Cloud Architect</title>
    <meta content="Portfolio of Bola Naguib (Bola Ishak) — Senior Full-Stack & DevOps Engineer & Technical Consultant with 5+ years of experience in Enterprise SaaS, FinTech, Microservices, Real-time IoT, Docker, and AWS Cloud Architecture." name="description">
    <meta content="Bola Naguib, Bola Ishak, Senior Full-Stack Engineer, DevOps Engineer, Technical Consultant, Laravel, Vue.js, Docker, AWS, MySQL Optimization, Redis, Microservices, FinTech, MEN TOO, Wasl-X, Clinova" name="keywords">
    
    <!-- Open Graph / Social Sharing -->
    <meta property="og:title" content="Bola Naguib — Senior Full-Stack & DevOps Engineer | Enterprise SaaS & Cloud Architect">
    <meta property="og:description" content="Senior Full-Stack & DevOps Engineer with 5+ years building scalable SaaS, FinTech, and real-time distributed platforms. Available for Remote Contracts & Consultancy.">
    <meta property="og:image" content="{{ asset('projects/mentoo.jpg') }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicons -->
    <link href="{{ asset('template/assets/img/bola-profile.png') }}?v=2" rel="icon">
    <link href="{{ asset('template/assets/img/bola-profile.png') }}?v=2" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('template/assets/css/main.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
        <img src="{{ asset('template/assets/img/bola-profile.png') }}?v=2" alt="Bola Naguib" class="img-fluid rounded-circle shadow" style="aspect-ratio: 1/1; object-fit: cover;">
        </div>

        <a href="{{ url('/') }}" class="logo d-flex flex-column align-items-center justify-content-center text-decoration-none">
            <h1 class="sitename mb-0">Bola Naguib</h1>
            <span class="text-white-50 small mt-1 text-center" style="font-size: 0.75rem; letter-spacing: 0.5px;">Senior Full-Stack & DevOps</span>
        </a>

        <div class="social-links text-center mt-2">
            <a href="https://github.com/bola-cloud" target="_blank" rel="noopener" class="github" title="GitHub"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/bola-ishak-761000215/" target="_blank" rel="noopener" class="linkedin" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://wa.me/971555873368" target="_blank" rel="noopener" class="whatsapp" title="WhatsApp (UAE &amp; EG)"><i class="bi bi-whatsapp"></i></a>
            <a href="mailto:bola.ishak41@gmail.com" class="google-plus" title="Email"><i class="bi bi-envelope"></i></a>
        </div>

            <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
                {{-- <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Deep Dropdown 1</a></li>
                            <li><a href="#">Deep Dropdown 2</a></li>
                            <li><a href="#">Deep Dropdown 3</a></li>
                            <li><a href="#">Deep Dropdown 4</a></li>
                            <li><a href="#">Deep Dropdown 5</a></li>
                        </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>

    </header>


    @yield('content')

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('template/assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
