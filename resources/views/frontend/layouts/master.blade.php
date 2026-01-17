<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="theme-color" content="#7e9527" />
    <meta name="base-url" content="{{ url('/') }}" />
    <link rel="shortcut icon" type="ico" href="{{ asset( front_asset('imgs/theme/logo.ico'))}}" />
    <link rel="stylesheet" href="{{ asset( front_asset('css/plugins/animate.min.css'))}}" />
    <link rel="stylesheet" href="{{ asset( front_asset('css/main.css?v=1.0'))}}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="google-api-key" content="{{ env('GOOGLE_API_KEY')}}" />

    <link rel="apple-touch-icon" href="{{ asset( front_asset('imgs/theme/logo.ico'))}}" />


    <style>
        .preloader {
            background-color: #f7f7f7;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999999;
            transition: 0.6s;
            margin: 0 auto;
        }

        .preloader-container {
            --uib-size: 100px;
            --uib-color: #7e9527;
            --uib-speed: 2.5s;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: var(--uib-size);
            width: var(--uib-size);
        }

        .slice {
            position: relative;
            height: calc(var(--uib-size) / 6);
            width: 100%;
        }

        .slice::before,
        .slice::after {
            --uib-a: calc(var(--uib-speed) / -2);
            --uib-b: calc(var(--uib-speed) / -6);
            content: '';
            position: absolute;
            top: 0;
            left: calc(50% - var(--uib-size) / 12);
            height: 100%;
            width: calc(100% / 6);
            border-radius: 50%;
            flex-shrink: 0;
            animation: orbit var(--uib-speed) linear infinite;
            transition: background-color 0.3s ease;
        }


        .slice:nth-child(1)::after,
        .slice:nth-child(1)::before,
        .slice:nth-child(3)::after,
        .slice:nth-child(3)::before {
            background-color: #7e9527;

        }

        .slice:nth-child(2)::after,
        .slice:nth-child(2)::before,
        .slice:nth-child(5)::after,
        .slice:nth-child(5)::before {

            background-color: black;
        }

        .slice:nth-child(4)::after,
        .slice:nth-child(4)::before,
        .slice:nth-child(6)::after,
        .slice:nth-child(6)::before {
            background-color: #7e9527;

        }

        .slice:nth-child(1)::after {
            animation-delay: var(--uib-a);

        }

        .slice:nth-child(2)::before {
            animation-delay: var(--uib-b);

        }

        .slice:nth-child(2)::after {
            animation-delay: calc(var(--uib-a) + var(--uib-b));
        }

        .slice:nth-child(3)::before {
            animation-delay: calc(var(--uib-b) * 2);
        }

        .slice:nth-child(3)::after {
            animation-delay: calc(var(--uib-a) + var(--uib-b) * 2);
        }

        .slice:nth-child(4)::before {
            animation-delay: calc(var(--uib-b) * 3);
        }

        .slice:nth-child(4)::after {
            animation-delay: calc(var(--uib-a) + var(--uib-b) * 3);
        }

        .slice:nth-child(5)::before {
            animation-delay: calc(var(--uib-b) * 4);
        }

        .slice:nth-child(5)::after {
            animation-delay: calc(var(--uib-a) + var(--uib-b) * 4);
        }

        .slice:nth-child(6)::before {
            animation-delay: calc(var(--uib-b) * 5);
        }

        .slice:nth-child(6)::after {
            animation-delay: calc(var(--uib-a) + var(--uib-b) * 5);
        }

        @keyframes orbit {
            0% {
                transform: translateX(calc(var(--uib-size) * 0.25)) scale(0.73684);
                opacity: 0.65;
            }

            5% {
                transform: translateX(calc(var(--uib-size) * 0.235)) scale(0.684208);
                opacity: 0.58;
            }

            10% {
                transform: translateX(calc(var(--uib-size) * 0.182)) scale(0.631576);
                opacity: 0.51;
            }

            15% {
                transform: translateX(calc(var(--uib-size) * 0.129)) scale(0.578944);
                opacity: 0.44;
            }

            20% {
                transform: translateX(calc(var(--uib-size) * 0.076)) scale(0.526312);
                opacity: 0.37;
            }

            25% {
                transform: translateX(0%) scale(0.47368);
                opacity: 0.3;
            }

            30% {
                transform: translateX(calc(var(--uib-size) * -0.076)) scale(0.526312);
                opacity: 0.37;
            }

            35% {
                transform: translateX(calc(var(--uib-size) * -0.129)) scale(0.578944);
                opacity: 0.44;
            }

            40% {
                transform: translateX(calc(var(--uib-size) * -0.182)) scale(0.631576);
                opacity: 0.51;
            }

            45% {
                transform: translateX(calc(var(--uib-size) * -0.235)) scale(0.684208);
                opacity: 0.58;
            }

            50% {
                transform: translateX(calc(var(--uib-size) * -0.25)) scale(0.73684);
                opacity: 0.65;
            }

            55% {
                transform: translateX(calc(var(--uib-size) * -0.235)) scale(0.789472);
                opacity: 0.72;
            }

            60% {
                transform: translateX(calc(var(--uib-size) * -0.182)) scale(0.842104);
                opacity: 0.79;
            }

            65% {
                transform: translateX(calc(var(--uib-size) * -0.129)) scale(0.894736);
                opacity: 0.86;
            }

            70% {
                transform: translateX(calc(var(--uib-size) * -0.076)) scale(0.947368);
                opacity: 0.93;
            }

            75% {
                transform: translateX(0%) scale(1);
                opacity: 1;
            }

            80% {
                transform: translateX(calc(var(--uib-size) * 0.076)) scale(0.947368);
                opacity: 0.93;
            }

            85% {
                transform: translateX(calc(var(--uib-size) * 0.129)) scale(0.894736);
                opacity: 0.86;
            }

            90% {
                transform: translateX(calc(var(--uib-size) * 0.182)) scale(0.842104);
                opacity: 0.79;
            }

            95% {
                transform: translateX(calc(var(--uib-size) * 0.235)) scale(0.789472);
                opacity: 0.72;
            }

            100% {
                transform: translateX(calc(var(--uib-size) * 0.25)) scale(0.73684);
                opacity: 0.65;
            }
        }
    </style>
    @yield('meta_tags')
    @stack('styles')


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
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5QG53JL9');
    </script>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QG53JL9"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
                        <a href="{{url('/')}}" class="d-flex"><img loading="lazy" title="Website Logo" alt="Talent bees"
                                src="{{ asset( front_asset('imgs/theme/logo.png'))}}" width="206" height="46" /></a>
                    </div>
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <li>
                                    <a href="{{url('/')}}" class="active">Home</a>
                                </li>
                                <!-- <li><a href="{{ route(front_route('page.about')) }}">About Us</a></li> -->
                                <li><a href="{{route(front_route('page.our-services'))}}">Our Services</a></li>
                                <li><a href="{{ route(front_route('page.faq')) }}">FAQs</a></li>
                                <li><a href="{{ route(front_route('page.contact')) }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="burger-icon burger-icon-white">
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

                <div class="burger-icon burger-icon-white">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">

                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li>
                                    <a href="{{url('/')}}" class="active">Home</a>
                                </li>
                                <li>
                                    <a href="{{route(front_route('page.our-services'))}}" class="active">Our Service</a>
                                </li>
                                <li>
                                    <a href="{{route(front_route('page.privacy_policy'))}}" class="active">Privacy Policy</a>
                                </li>
                                <!-- <li>
                                    <a href="{{route(front_route('page.terms')).'/#dp'}}" class="active">Refund Policy</a>
                                </li> -->

                                <li>
                                    <a href="{{ route(front_route('page.faq')) }}" class="active">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{ route(front_route('page.contact')) }}" class="active">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>

                    <div class="mobile-social-icon mb-20 ">
                        <p class="mb-25">Follow Us</p>
                        @if( isset($site_settings['social_links']['facebook']) && $site_settings['social_links']['facebook'] )
                        <a href="{{$site_settings['social_links']['facebook']}}" target="_blank" class="icon-socials"> <i class="fa fa-facebook" style="font-size:24px"></i></a>
                        @endif
                        @if( isset($site_settings['social_links']['twitter']) && $site_settings['social_links']['twitter'] )
                        <a href="{{$site_settings['social_links']['twitter']}}" target="_blank" class="icon-socials icon-twitter"><i class="fa fa-twitter" style="font-size:24px"></i></a>
                        @endif
                        @if( isset($site_settings['social_links']['instagram']) && $site_settings['social_links']['instagram'] )
                        <a href="{{$site_settings['social_links']['instagram']}}" target="_blank" class="icon-socials icon-instagram"><i class="fa fa-instagram" style="font-size:24px"></i></a>
                        @endif

                        @if( isset($site_settings['social_links']['linkedin']) && $site_settings['social_links']['linkedin'] )
                        <a href="{{$site_settings['social_links']['linkedin']}}" target="_blank" class="icon-socials icon-linkedin"><i class="fa fa-linkedin" style="font-size:24px"></i></a>
                        @endif
                    </div>
                    <div class="site-copyright">Copyright 2025 © Talent bees.</div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 handle-footer-image d-flex align-items-center">
                    <a href="{{url('/')}}" class="d-flex align-items-center">
                        <img loading="lazy" title="Website Logo" class="img-fluid w-md-50 w-sm-75" alt="Olive Resources"
                            src="{{ asset( front_asset('imgs/theme/logo.png'))}}" width="260" height="42" /></a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-xs-6">
                            <div class="row">
                                <div class="col-md-3 col-xs-12">
                                    <h6>Company</h6>
                                </div>
                                <div class="col-md-3 col-xs-12"><a href="{{url('/')}}">Home</a></div>
                                <!-- <div class="col-md-3 col-xs-12"><a href="{{ route(front_route('page.about')) }}">About Us</a></div> -->
                                <div class="col-md-3 col-xs-12"><a href="{{ route(front_route('page.contact')) }}">Contact</a></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-6">

                            <div class="row">
                                <div class="col-md-3 col-xs-12">
                                    <h6>Support</h6>
                                </div>
                                <div class="col-md-3 col-xs-12"><a href="{{route(front_route('page.privacy_policy'))}}">Privacy Policy</a></div>
                                <!-- <div class="col-md-3 col-xs-12"><a href="{{route(front_route('page.terms')).'/#dp'}}">Refund Policy</a></div> -->
                                <div class="col-md-3 col-xs-12"><a href="{{ route(front_route('page.faq')) }}">FAQ</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-20">
                <div class="row">
                    <div class="col-md-6">
                        Copyright ©2025 <a href="{{url('/')}}"><strong>Olive Resources</strong></a>. All Rights Reserved.
                    </div>
                    <div class="col-md-6 text-md-end text-start">
                        <div class="footer-social">
                            @if( isset($site_settings['social_links']['facebook']) && $site_settings['social_links']['facebook'] )
                            <a href="{{$site_settings['social_links']['facebook']}}" target="_blank" class="icon-socials"> <i class="fa fa-facebook" style="font-size:24px"></i></a>
                            @endif
                            @if( isset($site_settings['social_links']['twitter']) && $site_settings['social_links']['twitter'] )
                            <a href="{{$site_settings['social_links']['twitter']}}" target="_blank" class="icon-socials icon-twitter"><i class="fa fa-twitter" style="font-size:24px"></i></a>
                            @endif
                            @if( isset($site_settings['social_links']['instagram']) && $site_settings['social_links']['instagram'] )
                            <a href="{{$site_settings['social_links']['instagram']}}" target="_blank" class="icon-socials icon-instagram"><i class="fa fa-instagram" style="font-size:24px"></i></a>
                            @endif

                            @if( isset($site_settings['social_links']['linkedin']) && $site_settings['social_links']['linkedin'] )
                            <a href="{{$site_settings['social_links']['linkedin']}}" target="_blank" class="icon-socials icon-linkedin"><i class="fa fa-linkedin" style="font-size:24px"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    @stack('modals')

    <script src="{{ asset( front_asset('js/vendor/modernizr-3.6.0.min.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/vendor/jquery-3.6.0.min.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/vendor/jquery-migrate-3.3.0.min.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/vendor/bootstrap.bundle.min.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/plugins/waypoints.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/plugins/wow.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/plugins/magnific-popup.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/plugins/perfect-scrollbar.min.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/plugins/select2.min.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/plugins/isotope.js'))}}" defer></script>
    <script src="{{ asset( front_asset('js/plugins/swiper-bundle.min.js'))}}" defer></script>
    <!-- Template  JS -->
    <script src="{{ asset( front_asset('js/main.js?v=1.0'))}}" defer></script>
    <script src="https://unpkg.com/swiper@9/swiper-bundle.min.js" defer></script>
    <script src="{{ asset( front_asset('js/slider.js'))}}" defer></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/67b4c2ccca485e190c13ed3f/1ikd1hrr4';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script>
        window.addEventListener('load', function() {
            const preloader = document.querySelector('.preloader');
            preloader.style.opacity = '0'; // Add fade-out effect
            preloader.style.transition = 'opacity 0.5s'; // Smooth transition

            setTimeout(() => {
                preloader.style.display = 'none'; // Completely remove preloader
            }, 500); // Matches the duration of the fade-out transition


        });
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-85VFT91NHZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-85VFT91NHZ');
    </script>

    @stack('scripts')
</body>

</html>