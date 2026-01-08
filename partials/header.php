<?php
// Obține limba din path (/ro sau /ru) sau default 'ro'
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);
$pathParts = array_filter(explode('/', trim($path, '/')), function($part) {
    return !empty($part);
});
$pathParts = array_values($pathParts); // Reindex array

// Verifică dacă ultimul segment este 'ro' sau 'ru' (limba)
$currentLang = 'ro'; // Default
if (!empty($pathParts)) {
    $lastPart = end($pathParts);
    if ($lastPart === 'ro' || $lastPart === 'ru') {
        $currentLang = $lastPart;
    }
}

// Obține base URL-ul (cu subdirectorul dacă există, dar fără limba) pentru hreflang tags
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];

// Construiește base path-ul (fără limba)
$basePath = '';
foreach ($pathParts as $part) {
    if ($part !== 'ro' && $part !== 'ru') {
        $basePath .= '/' . $part;
    }
}

// Asigură-te că baseUrl este corect (pentru root domain va fi doar protocol + host)
$baseUrl = $protocol . "://" . $host . $basePath;
?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>" id="htmlLang">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant Poseidon - Restaurant de nuntă elegant pentru evenimentul tău de vis. Locație rafinată, meniu personalizat, servicii complete pentru nunți memorabile.">
    <title>Restaurant Poseidon - Restaurant de Nuntă Elegant</title>
    
    <!-- Base URL pentru path-uri relative (funcționează pe root domain și subdirectoare) -->
    <base href="<?php echo $baseUrl; ?>/">
    
    <!-- Hreflang tags pentru SEO -->
    <link rel="alternate" hreflang="ro" href="<?php echo $baseUrl; ?>/ro">
    <link rel="alternate" hreflang="ru" href="<?php echo $baseUrl; ?>/ru">
    <link rel="alternate" hreflang="x-default" href="<?php echo $baseUrl; ?>/ro">
    
    <!-- Google Fonts - Premium Elegant Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Lato:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark': {
                            '900': '#221c17',
                            '800': '#302821',
                            '700': '#463c33',
                        },
                        'gold': {
                            'light': '#faf1df',
                            'DEFAULT': '#f3e1b8',
                            'dark': '#e6cd95',
                        },
                        'text': {
                            'light': '#f0f4f8',
                            'muted': '#d1d9e6',
                            'subtle': '#a8b5c8',
                        }
                    },
                    fontFamily: {
                        'heading': ['Cinzel', 'Playfair Display', 'serif'],
                        'body': ['Lato', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- Custom CSS pentru animații și efecte speciale -->
    <style>
       html {
    scroll-behavior: smooth;
    margin: 0;
    padding: 0;
}

body {
    margin: 0;
    padding: 0;
}

body {
        font-family: 'Lato', sans-serif;
        color: #f0f4f8;
    }

    /* FONT */
    .font-heading {
        font-family: 'Cinzel', 'Playfair Display', serif;
    }

    /* NAVBAR — COMPLET OPAC TOT TIMPUL */
    .navbar-scrolled {
        background-color: #221c17 !important; /* fără transparență */
        backdrop-filter: none; /* fără blur */
    }

    /* MOBILE MENU — când e deschis rămâne pe ecran */
    .mobile-menu-open {
        transform: translateX(0);
    }

    /* BLOCHEAZĂ SCROLL-UL CÂND ESTE MENIUL DESCHIS */
    .body-no-scroll {
        overflow: hidden;
    }

    /* GALERIE — rămâne la fel */
    .gallery-item img {
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }
    
    /* HERO SECTION - Fix pentru a începe exact de la header */
    #hero {
        margin-top: 0 !important;
        padding-top: 0 !important;
        position: relative;
        top: 0;
        background-color: #1a1612; /* Background solid pentru a preveni gap-uri */
        overflow: hidden;
    }
    
    /* Imaginea de fundal trebuie să înceapă exact de la top (sub header) */
    #hero > .absolute.inset-0 {
        top: -1px !important;
        left: -1px !important;
        right: -1px !important;
        bottom: -1px !important;
        position: absolute;
        z-index: 0;
        overflow: hidden;
    }
    
    /* Asigură că imaginea acoperă complet, începând de la top */
    #hero > .absolute.inset-0 img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        min-height: 100vh;
        object-fit: cover;
        object-position: center center;
        display: block;
    }
    
    /* Fix pentru desktop - elimină gap-uri la margini */
    @media (min-width: 769px) {
        #hero > .absolute.inset-0 {
            overflow: hidden;
        }
        
        #hero > .absolute.inset-0 img {
            transform: scale(1.05);
            width: calc(100% + 2px);
            height: calc(100% + 2px);
            margin: -1px;
        }
    }
    
    /* Overlay trebuie să fie exact peste imagine */
    #hero > .absolute.z-10 {
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        z-index: 10;
    }
    
    /* Fix specific pentru mobile - elimină gap-uri */
    @media (max-width: 768px) {
        #hero {
            background-color: #1a1612;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            margin-top: 0;
            padding-top: 0;
        }
        
        #hero > .absolute.inset-0 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            min-height: 100vh;
            z-index: 0;
            overflow: hidden;
        }
        
        #hero > .absolute.inset-0 img {
            position: absolute;
            top: -10px; /* Compensate for any potential gap */
            left: -10px;
            width: calc(100% + 20px);
            height: calc(100% + 20px);
            min-height: 100vh;
            min-width: 100%;
            object-fit: cover;
            object-position: center center;
            transform: scale(1.08); /* Slightly scaled to ensure coverage */
            -webkit-transform: scale(1.08);
        }
        
        #hero > .absolute.z-10 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            min-height: 100vh;
            z-index: 10;
        }
        
        /* Conținutul trebuie să fie relativ pentru a fi peste imagine */
        #hero > .container {
            position: relative;
            z-index: 20;
        }
    }
    </style>
</head>
<body class="bg-gradient-to-b from-dark-900 via-dark-800 to-dark-900 text-white font-body antialiased" style="background-color: #1a1612; margin: 0; padding: 0; overflow-x: hidden;">
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-dark-900 border-b border-gold/20 transition-all duration-300">
        <div class="container mx-auto px-4 lg:px-8 max-w-7xl">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="#hero" class="flex items-center space-x-2 lg:space-x-3 z-50 flex-shrink-0" onclick="scrollToSection('hero'); return false;">
                    <img src="assets/img/logo_poseidon.png" alt="Restaurant Poseidon" class="h-10 md:h-12 lg:h-14 w-auto object-contain">
                    <span class="font-heading text-xl md:text-2xl lg:text-3xl text-gold-light font-semibold whitespace-nowrap">Poseidon</span>
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-6 xl:space-x-8 flex-1 justify-center">
                    <a href="#hero" onclick="scrollToSection('hero'); return false;" class="nav-link text-sm font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider whitespace-nowrap flex items-center leading-none" data-translate="nav.home">Acasă</a>
                    <a href="#despre" onclick="scrollToSection('despre'); return false;" class="nav-link text-sm font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider whitespace-nowrap flex items-center leading-none" data-translate="nav.about">Despre</a>
                    <a href="#galerie" onclick="scrollToSection('galerie'); return false;" class="nav-link text-sm font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider whitespace-nowrap flex items-center leading-none" data-translate="nav.gallery">Galerie</a>
                    <a href="#beneficii" onclick="scrollToSection('beneficii'); return false;" class="nav-link text-sm font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider whitespace-nowrap flex items-center leading-none" data-translate="nav.benefits">Beneficii</a>
                    <a href="#testimoniale" onclick="scrollToSection('testimoniale'); return false;" class="nav-link text-sm font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider whitespace-nowrap flex items-center leading-none" data-translate="nav.testimonials">Recenzii</a>
                    <a href="#locatie" onclick="scrollToSection('locatie'); return false;" class="nav-link text-sm font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider whitespace-nowrap flex items-center leading-none" data-translate="nav.location">Locație</a>
                </div>
                
                <!-- Desktop Language & CTA Buttons -->
                <div class="hidden lg:flex items-center flex-shrink-0 ml-6 gap-4">
                    <!-- Language Switcher -->
                    <button id="languageButton" class="px-4 py-2.5 bg-dark-700/50 border border-gold/30 text-gold-light font-semibold rounded-md hover:bg-gold-light hover:text-dark-900 transition-all duration-300 uppercase tracking-wider text-sm whitespace-nowrap flex items-center justify-center leading-none" title="Schimbă limba">
                        RU
                    </button>
                    <!-- CTA Button -->
                    <button onclick="scrollToSection('reservation'); return false;" class="px-6 py-2.5 bg-gold-light text-dark-900 font-semibold rounded-md hover:bg-gold-dark transition-all duration-300 uppercase tracking-wider text-sm shadow-lg hover:shadow-gold/30 transform hover:-translate-y-0.5 whitespace-nowrap flex items-center justify-center leading-none" data-translate="nav.reserve">
                        Rezervă
                    </button>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" type="button" class="lg:hidden z-50 p-2 text-gold-light hover:text-gold-dark transition-colors flex-shrink-0" aria-label="Toggle mobile menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden fixed inset-0 z-40 transform -translate-x-full transition-transform duration-300 ease-in-out pt-20 bg-gradient-to-br from-dark-900 via-dark-800 to-dark-900 bg-opacity-100">
            <div class="flex flex-col space-y-6 px-8 py-8">
                <a href="#hero" onclick="scrollToSection('hero'); closeMobileMenu(); return false;" class="nav-link text-lg font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider py-2 border-b border-gold/10" data-translate="nav.home">Acasă</a>
                <a href="#despre" onclick="scrollToSection('despre'); closeMobileMenu(); return false;" class="nav-link text-lg font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider py-2 border-b border-gold/10" data-translate="nav.about">Despre</a>
                <a href="#galerie" onclick="scrollToSection('galerie'); closeMobileMenu(); return false;" class="nav-link text-lg font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider py-2 border-b border-gold/10" data-translate="nav.gallery">Galerie</a>
                <a href="#beneficii" onclick="scrollToSection('beneficii'); closeMobileMenu(); return false;" class="nav-link text-lg font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider py-2 border-b border-gold/10" data-translate="nav.benefits">Beneficii</a>
                <a href="#testimoniale" onclick="scrollToSection('testimoniale'); closeMobileMenu(); return false;" class="nav-link text-lg font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider py-2 border-b border-gold/10" data-translate="nav.testimonials">Recenzii</a>
                <a href="#locatie" onclick="scrollToSection('locatie'); closeMobileMenu(); return false;" class="nav-link text-lg font-medium text-text-muted hover:text-gold-light transition-colors duration-300 uppercase tracking-wider py-2 border-b border-gold/10" data-translate="nav.location">Locație</a>
                <div class="flex gap-4 mt-4">
                    <button id="languageButtonMobile" class="px-4 py-3 bg-dark-700/50 border border-gold/30 text-gold-light font-semibold rounded-md hover:bg-gold-light hover:text-dark-900 transition-all duration-300 uppercase tracking-wider text-sm">
                        RU
                    </button>
                    <button onclick="scrollToSection('reservation'); closeMobileMenu(); return false;" class="flex-1 px-6 py-3 bg-gold-light text-dark-900 font-semibold rounded-md hover:bg-gold-dark transition-all duration-300 uppercase tracking-wider text-sm shadow-lg" data-translate="nav.reserve">
                        Rezervă
                    </button>
                </div>
            </div>
        </div>
    </nav>