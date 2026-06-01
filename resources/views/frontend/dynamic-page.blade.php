{{-- Assuming there is a master frontend layout, if not, we use a basic HTML structure --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->meta_title ?: $page->title }}</title>
    <meta name="description" content="{{ $page->meta_description }}">
    
    <!-- Modern Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #4f46e5 0%, #ec4899 100%);
            --secondary-bg: #f8fafc;
            --text-dark: #0f172a;
            --text-light: #64748b;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }

        /* Navbar Premium Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        .navbar-brand {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            margin: 0 10px;
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #4f46e5 !important;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: var(--primary-gradient);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 180px 0 150px;
            text-align: center;
            display: flex;
            align-items: center;
            min-height: 80vh;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(15, 23, 42, 0.7); /* Dark overlay */
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            animation: fadeUp 1s ease-out;
        }
        .hero-title {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.1;
        }
        .hero-subtitle {
            font-size: 1.4rem;
            font-weight: 300;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        /* Dynamic Glass Cards (Services) */
        .service-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid rgba(0,0,0,0.05);
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            height: 100%;
        }
        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            border-color: rgba(79, 70, 229, 0.3);
        }
        .service-icon {
            font-size: 2.5rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        /* Features Section */
        .feature-section {
            padding: 100px 0;
            background: var(--secondary-bg);
            overflow: hidden;
        }
        .feature-img-wrapper {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transform: perspective(1000px) rotateY(-5deg);
            transition: transform 0.5s ease;
        }
        .feature-img-wrapper:hover {
            transform: perspective(1000px) rotateY(0deg);
        }
        .feature-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Stats Section */
        .stats-section {
            padding: 80px 0;
            background: var(--primary-gradient);
            color: white;
            position: relative;
        }
        .stat-box {
            text-align: center;
            padding: 20px;
            border-right: 1px solid rgba(255,255,255,0.2);
        }
        .stat-box:last-child {
            border-right: none;
        }
        .stat-value {
            font-size: 3.5rem;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
            margin-bottom: 10px;
        }
        .stat-label {
            font-size: 1.1rem;
            font-weight: 500;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Process Timeline Section */
        .process-section {
            padding: 100px 0;
            background: #ffffff;
            text-align: center;
        }
        .process-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(79, 70, 229, 0.1);
            color: #4f46e5;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 20px;
            border: 1px solid rgba(79, 70, 229, 0.2);
            text-transform: uppercase;
        }
        .process-badge i {
            margin-right: 5px;
        }
        .process-timeline {
            position: relative;
            margin-top: 60px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .process-timeline::before {
            content: '';
            position: absolute;
            top: 50px;
            left: 5%;
            right: 5%;
            height: 2px;
            background: repeating-linear-gradient(to right, transparent, transparent 10px, #4f46e5 10px, #4f46e5 20px);
            z-index: 0;
        }
        .process-step {
            position: relative;
            z-index: 1;
            flex: 1;
            padding: 0 15px;
        }
        .process-icon-wrapper {
            width: 100px;
            height: 100px;
            background: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 2px solid rgba(79, 70, 229, 0.1);
            position: relative;
            transition: all 0.3s ease;
        }
        .process-step:hover .process-icon-wrapper {
            transform: translateY(-5px);
            border-color: #4f46e5;
            box-shadow: 0 15px 35px rgba(79, 70, 229, 0.2);
        }
        .process-icon-wrapper i {
            font-size: 2rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .process-number {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ffffff;
            color: #0f172a;
            font-weight: 800;
            font-size: 0.8rem;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: 1px solid #f1f5f9;
        }
        .process-step h4 {
            font-size: 1.1rem;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .process-step p {
            font-size: 0.9rem;
            color: var(--text-light);
            line-height: 1.6;
        }
        @media (max-width: 991px) {
            .process-timeline {
                flex-direction: column;
                align-items: center;
            }
            .process-timeline::before {
                display: none;
            }
            .process-step {
                margin-bottom: 40px;
                width: 100%;
                max-width: 300px;
            }
        }

        /* Animations */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        .section-title h2 {
            font-size: 3rem;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        footer {
            background: #0f172a !important;
            padding: 40px 0;
        }
    </style>
</head>
<body>

    <!-- Dynamic Header Menu -->
    @php
        $headerMenu = \App\Models\Menu::with('items')->where('location', 'header')->first();
    @endphp
    
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">ISearch Digital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if($headerMenu)
                        @foreach($headerMenu->items as $item)
                            <li class="nav-item">
                                @if($item->page_id)
                                    <a class="nav-link" href="/{{ $item->page->slug }}">{{ $item->title }}</a>
                                @else
                                    <a class="nav-link" href="{{ $item->url }}">{{ $item->title }}</a>
                                @endif
                            </li>
                        @endforeach
                    @else
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dynamic Page Sections -->
    <div class="page-content">
        @foreach($page->sections as $index => $section)
            @php $content = $section->content; @endphp
            
            @if($section->section_type === 'hero')
                <div class="hero-section" style="background-image: url('{{ isset($content['background_image']) ? Storage::url($content['background_image']) : asset('assets/svg/default-hero.jpg') }}');">
                    <div class="container hero-content">
                        <h1 class="hero-title">{{ $content['title'] ?? 'Digital Solutions' }}</h1>
                        <p class="hero-subtitle">{{ $content['subtitle'] ?? 'Elevate your business with our cutting edge strategies.' }}</p>
                        <a href="#explore" class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold text-primary shadow">Explore More</a>
                    </div>
                </div>
                
            @elseif($section->section_type === 'text')
                <div class="container py-5 my-5" id="explore">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            @if(!empty($content['heading']))
                                <h2 class="mb-4 display-5 fw-bold text-dark">{{ $content['heading'] }}</h2>
                            @endif
                            <div class="lead text-muted" style="line-height: 1.8;">
                                {!! $content['body'] ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
                
            @elseif($section->section_type === 'services')
                <div class="container py-5 my-5">
                    <div class="section-title">
                        <h2>{{ $content['title'] ?? 'Our Popular Services' }}</h2>
                        <p class="text-muted mt-2">Discover how we can transform your digital presence.</p>
                    </div>
                    
                    <div class="row g-4">
                        @php 
                            $icons = ['fa-chart-line', 'fa-code', 'fa-mobile-screen', 'fa-bullhorn', 'fa-pen-nib', 'fa-cloud'];
                            $limit = $content['limit'] ?? 6;
                        @endphp
                        @for($i = 0; $i < $limit; $i++)
                            <div class="col-md-6 col-lg-4">
                                <div class="service-card">
                                    <i class="fa-solid {{ $icons[$i % count($icons)] }} service-icon"></i>
                                    <h4 class="mb-3">Service Element {{ $i + 1 }}</h4>
                                    <p class="text-muted">High quality digital solutions tailored specifically for your brand's growth and scalability in modern markets.</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

            @elseif($section->section_type === 'features')
                <div class="feature-section">
                    <div class="container">
                        <div class="row align-items-center {{ $index % 2 == 0 ? '' : 'flex-row-reverse' }}">
                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <div class="feature-img-wrapper">
                                    <img src="{{ isset($content['feature_image']) ? Storage::url($content['feature_image']) : 'https://via.placeholder.com/800x600' }}" alt="Feature">
                                </div>
                            </div>
                            <div class="col-lg-5 {{ $index % 2 == 0 ? 'ms-auto' : 'me-auto' }}">
                                <h2 class="display-5 fw-bold mb-4">{{ $content['title'] ?? 'Why Choose Us?' }}</h2>
                                <div class="lead text-muted mb-4">
                                    {!! $content['description'] ?? 'We deliver scalable, resilient, and beautifully designed digital experiences.' !!}
                                </div>
                                <ul class="list-unstyled">
                                    <li class="mb-3"><i class="fa-solid fa-circle-check text-success me-2"></i> Innovative Solutions</li>
                                    <li class="mb-3"><i class="fa-solid fa-circle-check text-success me-2"></i> Experienced Team</li>
                                    <li><i class="fa-solid fa-circle-check text-success me-2"></i> 24/7 Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            @elseif($section->section_type === 'stats')
                <div class="stats-section my-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stat-box">
                                    <div class="stat-value">{{ $content['stat1_value'] ?? '500+' }}</div>
                                    <div class="stat-label">{{ $content['stat1_label'] ?? 'Projects Delivered' }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-box">
                                    <div class="stat-value">{{ $content['stat2_value'] ?? '100%' }}</div>
                                    <div class="stat-label">{{ $content['stat2_label'] ?? 'Happy Clients' }}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-box">
                                    <div class="stat-value">{{ $content['stat3_value'] ?? '10+' }}</div>
                                    <div class="stat-label">{{ $content['stat3_label'] ?? 'Years Experience' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @elseif($section->section_type === 'process')
                <div class="process-section">
                    <div class="container">
                        <div class="process-badge"><i class="fa-solid fa-circle text-primary" style="font-size: 8px; vertical-align: middle;"></i> {{ $content['badge'] ?? 'HOW WE WORK' }}</div>
                        <h2 class="display-5 fw-bold mb-3">{{ $content['heading'] ?? 'Our 6-Step Process' }}</h2>
                        <p class="lead text-muted mb-5 mx-auto" style="max-width: 700px;">
                            {{ $content['subheading'] ?? 'We follow a structured step-by-step process to deliver effective services that drive results.' }}
                        </p>
                        
                        <div class="process-timeline">
                            @if(isset($content['steps']) && is_array($content['steps']))
                                @foreach($content['steps'] as $i => $step)
                                    @if(!empty($step['title']))
                                        <div class="process-step">
                                            <div class="process-icon-wrapper">
                                                <i class="fa-solid {{ $step['icon'] ?? 'fa-check' }}"></i>
                                                <div class="process-number">{{ sprintf('%02d', $i) }}</div>
                                            </div>
                                            <h4>{{ $step['title'] }}</h4>
                                            <p>{{ $step['desc'] ?? '' }}</p>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            @endif
        @endforeach
    </div>

    <footer class="text-white text-center">
        <div class="container">
            <h4 class="mb-4">ISearch Digital Solutions</h4>
            <p class="text-muted mb-4">Elevating businesses through digital innovation.</p>
            <div class="d-flex justify-content-center gap-3 mb-4">
                <a href="#" class="text-white fs-4"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="text-white fs-4"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#" class="text-white fs-4"><i class="fa-brands fa-github"></i></a>
            </div>
            <p class="mb-0 text-muted small">&copy; {{ date('Y') }} ISearch Digital. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>
