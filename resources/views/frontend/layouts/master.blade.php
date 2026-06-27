<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="theme-color" content="#8FA43E" />
    <meta name="base-url" content="{{ url('/') }}" />
    
    <title>@yield('title', 'Olive Resources | IT Staff Augmentation & Team Extension')</title>
    <meta name="description" content="@yield('meta_description', 'Premium IT Staff Augmentation and Tech Team Scaling across Pakistan, UAE, Saudi Arabia, and Malaysia.')" />
    <link rel="canonical" href="{{ url()->current() }}" />
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(front_asset('imgs/theme/logo.ico')) }}" />
    <link rel="apple-touch-icon" href="{{ asset(front_asset('imgs/theme/logo.ico')) }}" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="@yield('title', 'Olive Resources')" />
    <meta property="og:description" content="@yield('meta_description', 'Premium IT Staff Augmentation and Tech Team Scaling.')" />
    <meta property="og:image" content="{{ asset(front_asset('imgs/theme/logo.png')) }}" />

    <link rel="preload" as="script" href="{{ asset(front_asset('js/vendor/modernizr-3.6.0.min.js')) }}">
    <link rel="preload" as="script" href="{{ asset(front_asset('js/vendor/jquery-3.6.0.min.js')) }}">
    <link rel="preload" as="script" href="{{ asset(front_asset('js/vendor/bootstrap.bundle.min.js')) }}">
    <link rel="preload" as="script" href="{{ asset(front_asset('js/main.js?v=1.0')) }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Framework Layout Assets -->
    <link rel="stylesheet" href="{{ asset(front_asset('css/vendors/normalize.css')) }}">
    <link rel="stylesheet" href="{{ asset(front_asset('css/vendors/bootstrap.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(front_asset('css/vendors/uicons-regular-rounded.css')) }}">
    <link rel="stylesheet" href="{{ asset(front_asset('css/plugins/animate.min.css')) }}" />
    <link rel="stylesheet" href="{{ asset(front_asset('css/plugins/swiper-bundle.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(front_asset('css/plugins/magnific-popup.css')) }}">
    <link rel="stylesheet" href="{{ asset(front_asset('css/plugins/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(front_asset('css/plugins/perfect-scrollbar.css')) }}">
    <link rel="stylesheet" href="{{ asset(front_asset('css/preloader.css?v=1.0')) }}" />
    <link rel="stylesheet" href="{{ asset(front_asset('css/main.css?v=1.0')) }}" />
    
    <!-- Production Standalone Tailwind Engine layer (Alternative over raw v2 file to prevent layout conflicts) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: {
                // Safely disables Tailwind's global layout reset to ensure Bootstrap components don't collapse or lose spacing definitions
                preflight: false, 
            },
            theme: {
                extend: {
                    colors: {
                        brandOlive: '#8FA43E',
                        slate: {
                            900: '#0f172a',
                            800: '#1e293b',
                            300: '#cbd5e1'
                        }
                    }
                }
            }
        }
    </script>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </noscript>

    <meta name="google-api-key" content="{{ env('GOOGLE_API_KEY') }}" />

    @stack('styles')
    @yield('meta_tags')

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5QG53JL9');
    </script>
    
    @php
    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Olive Resources',
        'url' => url('/'),
        'logo' => asset(front_asset('imgs/theme/logo.png')),
        'description' => 'Premium IT staff augmentation and dedicated software engineering teams for enterprise acceleration.',
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'Pakistan',
        ],
        'areaServed' => [
            [
                '@type' => 'Country',
                'name' => 'Pakistan',
            ],
            [
                '@type' => 'Country',
                'name' => 'United Arab Emirates',
            ],
            [
                '@type' => 'Country',
                'name' => 'Saudi Arabia',
            ],
            [
                '@type' => 'Country',
                'name' => 'Malaysia',
            ],
        ],
        'sameAs' => array_values(array_filter([
            $site_settings['social_links']['linkedin'] ?? null,
            $site_settings['social_links']['facebook'] ?? null,
        ])),
    ];
    @endphp

    <script type="application/ld+json">
    {!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
</head>

<body>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QG53JL9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    <div class="preloader">
        <div class="preloader-container">
            <div class="slice"></div>
            <div class="slice"></div>
            <div class="slice"></div>
            <div class="slice"></div>
            <div class="slice"></div>
            <div class="slice"></div>
        </div>
    </div>

    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo">
                        <a href="{{ url('/') }}" class="d-flex">
                            <img title="Olive Resources Logo" 
                                 alt="Olive Resources Official Brand Logo"
                                 src="{{ asset(front_asset('imgs/theme/logo.png')) }}" 
                                 width="206" 
                                 height="46" 
                                 decoding="async" />
                        </a>
                    </div>
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                                <li><a href="{{ route(front_route('page.our-services')) }}" class="{{ Request::is('*services*') ? 'active' : '' }}">Our Services</a></li>
                                <li><a href="{{ route(front_route('page.faq')) }}" class="{{ Request::is('*faq*') ? 'active' : '' }}">FAQs</a></li>
                                <li><a href="{{ route(front_route('page.contact')) }}" class="{{ Request::is('*contact*') ? 'active' : '' }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="burger-icon burger-icon-white" aria-label="Toggle Mobile Menu">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="burger-icon burger-icon-white" aria-label="Close Mobile Menu">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-menu-wrap mobile-header-border">
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route(front_route('page.our-services')) }}">Our Services</a></li>
                                <li><a href="{{ route(front_route('page.privacy_policy')) }}">Privacy Policy</a></li>
                                <li><a href="{{ route(front_route('page.faq')) }}">FAQs</a></li>
                                <li><a href="{{ route(front_route('page.contact')) }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="mobile-social-icon mb-20">
                        <p class="mb-25 fw-bold">Follow Us</p>
                        @if(isset($site_settings['social_links']['facebook']) && $site_settings['social_links']['facebook'])
                            <a href="{{ $site_settings['social_links']['facebook'] }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <i class="fa fa-facebook" style="font-size:24px"></i>
                            </a>
                        @endif

                        @if(isset($site_settings['social_links']['twitter']) && $site_settings['social_links']['twitter'])
                            <a href="{{ $site_settings['social_links']['twitter'] }}" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                                <i class="fa fa-twitter" style="font-size:24px"></i>
                            </a>
                        @endif

                        @if(isset($site_settings['social_links']['instagram']) && $site_settings['social_links']['instagram'])
                            <a href="{{ $site_settings['social_links']['instagram'] }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <i class="fa fa-instagram" style="font-size:24px"></i>
                            </a>
                        @endif

                        @if(isset($site_settings['social_links']['linkedin']) && $site_settings['social_links']['linkedin'])
                            <a href="{{ $site_settings['social_links']['linkedin'] }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <i class="fa fa-linkedin" style="font-size:24px"></i>
                            </a>
                        @endif
                    </div>
                    <div class="site-copyright small text-muted">Copyright {{ date('Y') }} © Olive Resources.</div>
                </div>
            </div>
        </div>
    </div>

    <main class="main-content-wrapper">
        @yield('content')
    </main>

    <footer class="footer pt-50 pb-20 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <a href="{{ url('/') }}" class="d-inline-block mb-3">
                        <img loading="lazy" 
                             title="Olive Resources Logo" 
                             class="img-fluid" 
                             alt="Olive Resources Official Logo"
                             src="{{ asset(front_asset('imgs/theme/logo.png')) }}" 
                             width="260" 
                             height="42" 
                             decoding="async" />
                    </a>
                    <p class="text-muted small mt-2 pr-3">
                        Premium IT staff augmentation and software team extension services powering enterprises across Pakistan, Middle East, and Southeast Asia.
                    </p>
                </div>

                <div class="col-6 col-sm-4 col-md-2 mb-4 mb-md-0">
                    <h6 class="footer-heading mb-3">Company</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="{{ url('/') }}" class="text-secondary text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="{{ route(front_route('page.contact')) }}" class="text-secondary text-decoration-none">Contact Us</a></li>
                        <li class="mb-2"><a href="{{ route(front_route('page.faq')) }}" class="text-secondary text-decoration-none">FAQs</a></li>
                    </ul>
                </div>

                <div class="col-6 col-sm-4 col-md-3 mb-4 mb-md-0">
                    <h6 class="footer-heading mb-3">Services</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">IT Staff Augmentation</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Dedicated Developer Teams</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Software Team Scaling</a></li>
                    </ul>
                </div>

                <div class="col-12 col-sm-4 col-md-3 mb-4 mb-md-0">
                    <h6 class="footer-heading mb-3">Regions We Serve</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">United Arab Emirates (UAE)</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Saudi Arabia (KSA)</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Malaysia</a></li>
                        <li class="mb-2"><a href="#" class="text-secondary text-decoration-none">Pakistan</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom row align-items-center">
                <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0 small text-muted">
                    Copyright © {{ date('Y') }} <a href="{{ url('/') }}" class="text-dark fw-bold text-decoration-none">Olive Resources</a>. All Rights Reserved.
                </div>
                
                <div class="col-12 col-md-6 text-center text-md-end">
                    <div class="footer-social d-flex justify-content-center justify-content-md-end gap-3">
                        @if(isset($site_settings['social_links']['facebook']) && $site_settings['social_links']['facebook'])
                            <a href="{{ $site_settings['social_links']['facebook'] }}" target="_blank" rel="noopener noreferrer" class="text-secondary fs-5" aria-label="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        @endif

                        @if(isset($site_settings['social_links']['twitter']) && $site_settings['social_links']['twitter'])
                            <a href="{{ $site_settings['social_links']['twitter'] }}" target="_blank" rel="noopener noreferrer" class="text-secondary fs-5" aria-label="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        @endif

                        @if(isset($site_settings['social_links']['instagram']) && $site_settings['social_links']['instagram'])
                            <a href="{{ $site_settings['social_links']['instagram'] }}" target="_blank" rel="noopener noreferrer" class="text-secondary fs-5" aria-label="Instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        @endif

                        @if(isset($site_settings['social_links']['linkedin']) && $site_settings['social_links']['linkedin'])
                            <a href="{{ $site_settings['social_links']['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="text-secondary fs-5" aria-label="LinkedIn">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        @endif
                        
                        <a href="{{ route(front_route('page.privacy_policy')) }}" class="text-secondary text-decoration-none small ms-2">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @stack('modals')

    <script src="{{ asset(front_asset('js/vendor/modernizr-3.6.0.min.js')) }}" defer></script>
    <script src="{{ asset(front_asset('js/vendor/jquery-3.6.0.min.js')) }}" defer></script>
    <script src="{{ asset(front_asset('js/vendor/bootstrap.bundle.min.js')) }}" defer></script>
    <script src="{{ asset(front_asset('js/main.js?v=1.0')) }}" defer></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const preloader = document.querySelector('.preloader');
        if (preloader) {
            preloader.style.transition = 'opacity 0.3s ease-out';
            preloader.style.opacity = '0';
            setTimeout(() => { preloader.style.display = 'none'; }, 300);
        }
    });
    </script>

    <script>
    window.addEventListener('load', function() {
        const plugins = [
            '{{ asset(front_asset("js/plugins/waypoints.js")) }}',
            '{{ asset(front_asset("js/plugins/wow.js")) }}',
            '{{ asset(front_asset("js/plugins/magnific-popup.js")) }}',
            '{{ asset(front_asset("js/plugins/perfect-scrollbar.min.js")) }}',
            '{{ asset(front_asset("js/plugins/select2.min.js")) }}',
            '{{ asset(front_asset("js/plugins/isotope.js")) }}',
            '{{ asset(front_asset("js/plugins/swiper-bundle.min.js")) }}',
            '{{ asset(front_asset("js/slider.js")) }}'
        ];

        plugins.forEach(src => {
            const s = document.createElement('script');
            s.src = src;
            s.defer = true;
            document.body.appendChild(s);
        });
    });
    </script>

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/67b4c2ccca485e190c13ed3f/1ikd1hrr4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-85VFT91NHZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-85VFT91NHZ');
    </script>

    @stack('scripts')
</body>
</html>