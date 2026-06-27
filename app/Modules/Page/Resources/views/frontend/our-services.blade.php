@extends(front_layout('master'))

{{-- ================= ADVANCED SEO METADATA ================= --}}
@section('title', 'Global B2B Recruitment & Staffing Solutions | Olive Resources')

@section('meta_tags')
<meta name="keywords" content="B2B recruitment agency, executive search, enterprise staffing solutions, corporate recruitment Pakistan, global talent acquisition, technical recruitment USA, job placement Dubai, HR solutions UK, KSA recruitment, RPO frameworks, offshore teams" />
<meta name="description" content="Olive Resources delivers premier B2B staffing, executive search, contract talent expansion, and end-to-end RPO solutions across Pakistan, USA, UAE, UK, KSA, and Malaysia." />
<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="Enterprise Recruitment & Staffing Services | Olive Resources" />
<meta property="og:description" content="Empowering corporate enterprises and fast-growing startups with high-impact talent acquisition solutions globally." />
<meta property="og:image" content="{{ asset(front_asset('imgs/theme/logo.png')) }}" />

<!-- DYNAMIC SCHEMAS INJECTION ENGINE -->
@php
$baseUrl = url('/');
$currentUrl = url()->current();

$servicesSchemaGraph = [
    "@context" => "https://schema.org",
    "@graph" => [
        // 1. BREADCRUMB LISTING
        [
            "@type" => "BreadcrumbList",
            "@id" => $currentUrl . "/#breadcrumb",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => $baseUrl
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Our Services",
                    "item" => $currentUrl
                ]
            ]
        ],
        // 2. COMPREHENSIVE SERVICE PLATFORM PROPERTIES
        [
            "@type" => "Service",
            "@id" => $currentUrl . "/#recruitment-services",
            "serviceType" => "B2B Recruitment and Enterprise Staffing Solutions",
            "provider" => [
                "@type" => "Organization",
                "name" => "Olive Resources",
                "url" => $baseUrl,
                "logo" => asset(front_asset('imgs/theme/logo.png'))
            ],
            "description" => "Premium IT staffing, permanent corporate placement, executive headhunting, and end-to-end RPO frameworks globally.",
            "areaServed" => [
                ["@type" => "Country", "name" => "Pakistan"],
                ["@type" => "Country", "name" => "United Arab Emirates"],
                ["@type" => "Country", "name" => "Saudi Arabia"],
                ["@type" => "Country", "name" => "United States"],
                ["@type" => "Country", "name" => "United Kingdom"],
                ["@type" => "Country", "name" => "Malaysia"]
            ],
            "hasOfferCatalog" => [
                "@type" => "OfferCatalog",
                "name" => "Workforce Solutions",
                "itemListElement" => [
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "Permanent Recruitment",
                            "description" => "Connecting organizations with top-tier talent for long-term roles."
                        ]
                    ],
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "Contract Staffing",
                            "description" => "Flexible workforce solutions for project-based corporate needs."
                        ]
                    ],
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "Executive Search & Headhunting",
                            "description" => "Identifying and securing high-impact leaders and C-suite professionals globally."
                        ]
                    ]
                ]
            ]
        ]
    ]
];
@endphp

<script type="application/ld+json">
{!! json_encode($servicesSchemaGraph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endsection

{{-- ================= PAGE CONTENT CONTENT MODULE ================= --}}
@section('content')
<main class="main">

    <!-- HERO HEADER BANNER BLOCK -->
    <section class="section-box text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
        <div class="position-absolute rounded-circle opacity-10" style="top: -10%; right: -5%; width: 400px; height: 400px; background: #8FA43E; filter: blur(120px); pointer-events: none;"></div>
        <div class="container py-5 position-relative text-center" style="z-index: 2; max-width: 900px;">
            <span class="badge mb-3 py-2 px-3 text-uppercase font-heading" style="background-color: #8FA43E; color: #fff; letter-spacing: 1.5px; font-size: 0.8rem; font-weight: 600; border-radius: 4px;">Enterprise Capabilities</span>
            <h1 class="display-4 font-heading text-white fw-bold wow animate__animated animate__fadeInUp" style="letter-spacing: -1px; line-height: 1.2;">
                Our Workforce Solutions
            </h1>
            <p class="mt-3 text-gray-300 fs-5 wow animate__animated animate__fadeInUp" data-wow-delay=".1s" style="color: #cbd5e1; line-height: 1.6; font-weight: 300;">
                Olive Resources scales organizational foundations globally. We partner with world-class enterprises and fast-growing startups across Pakistan, USA, UAE, UK, KSA, and Malaysia to deliver precision hiring parameters.
            </p>
        </div>
    </section>

    <!-- CAPABILITIES MODULE MATRIX BLOCKS -->
    @php
        $services = [
            ['Permanent Recruitment', 'Connecting organizations with top-tier talent for long-term roles.', [
                'Industry-specific hiring for entry-level to executive positions.',
                'Comprehensive vetting for cultural and skill alignment.'
            ], 'bi-people'],
            ['Contract Staffing', 'Flexible workforce solutions for project-based needs.', [
                'Rapid deployment of skilled professionals.',
                'Ongoing contract employee management & multi-regional compliance.'
            ], 'bi-cpu'],
            ['Executive Search & Headhunting', 'Identifying high-impact leaders and C-suite professionals globally.', [
                'Discreet and targeted passive search methods.',
                'Industry-specialized organizational leadership hiring.'
            ], 'bi-award'],
            ['Talent Acquisition Strategy', 'Custom recruitment strategies aligned with operational business goals.', [
                'Workforce planning & deep employer branding consulting.',
                'Data-driven metrics optimizing long-term hiring insights.'
            ], 'bi-diagram-3'],
            ['Temporary Staffing Solutions', 'Immediate access to skilled temporary professionals to handle workload spikes.', [
                'Scalable workforce solutions built for dynamic markets.',
                'Seamless execution for rapid team integration modules.'
            ], 'bi-calendar-range'],
            ['Recruitment Process Outsourcing (RPO)', 'End-to-end recruitment pipeline management configurations.', [
                'Substantial cost mitigation & internal hiring efficiencies.',
                'Dedicated support teams handling sourcing, screening, and onboarding.'
            ], 'bi-briefcase'],
            ['Diversity & Inclusion Hiring', 'Inclusive cross-border recruitment optimization strategies.', [
                'Focused sourcing configurations target underrepresented talent pools.',
                'Tailored consulting to enhance progressive workplace cultures.'
            ], 'bi-shield-check'],
            ['Graduate & Campus Recruitment', 'Structured university partnership program architectures.', [
                'Organizing career fairs, specialized hackathons, and internship programs.',
                'Building powerful pipelines connecting entry-level resources.'
            ], 'bi-mortarboard'],
            ['Onboarding & Retention Support', 'Continuous professional employee engagement & retention management.', [
                'Reduced operational employee turnover initiatives.',
                'Persistent post-placement evaluations & feedback frameworks.'
            ], 'bi-heart-pulse']
        ];
    @endphp

    <section class="section-box py-5" style="background-color: #f8fafc;">
        <div class="container-xl py-4">
            <div class="row g-4 justify-content-center">

                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card h-100 border-0 shadow-sm p-4 hover-corporate bg-white text-dark transition" style="border-top: 4px solid #8FA43E !important; border-radius: 8px; box-shadow: 0 10px 30px -10px rgba(15,23,42,0.05) !important;">
                            <div class="card-body p-0 d-flex flex-column h-100">
                                
                                <!-- Card Icon & Heading Header Row -->
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="rounded p-2 d-flex align-items-center justify-content-center" style="background-color: rgba(143,164,62,0.1); width: 44px; height: 44px; flex-shrink: 0;">
                                        <i class="bi {{ $service[3] }}" style="color: #8FA43E; font-size: 1.3rem;"></i>
                                    </div>
                                    <h4 class="fw-bold mb-0" style="color: #0f172a; font-size: 1.2rem; letter-spacing: -0.3px;">{{ $service[0] }}</h4>
                                </div>
                                
                                <p class="text-secondary small mb-4" style="line-height: 1.6; font-size: 0.9rem;">{{ $service[1] }}</p>
                                
                                <!-- Bullet Deliverables Matrix -->
                                <ul class="list-unstyled mt-auto pt-3 border-top pl-0 mb-0" style="border-color: #f1f5f9 !important;">
                                    @foreach($service[2] as $point)
                                        <li class="small text-muted mb-2 d-flex align-items-start gap-2" style="line-height: 1.5;">
                                            <i class="bi bi-check2" style="color: #8FA43E; font-weight: 700;"></i>
                                            <span>{{ $point }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- ================= PRICE MODULES SECTION ================= --}}
    @include(frontend_module_view('common.price', 'Page'))

    <!-- CORPORATE VISIONARY FOCUS STATEMENTS -->
    <section class="section-box py-5" style="background-color: #ffffff; border-top: 1px solid #e2e8f0;">
        <div class="container py-4">
            <div class="row g-4 justify-content-center">
                <!-- Mission Box -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 p-4 p-md-5 bg-light rounded-3 shadow-sm transition hover-up" style="border-left: 5px solid #8FA43E;">
                        <h3 class="fw-bold mb-3" style="color: #0f172a; font-size: 1.5rem;">Our Mission</h3>
                        <p class="text-secondary mb-0 style-lh26" style="font-size: 1rem; line-height: 1.6;">
                            Our mission is to connect exceptional executive and technical talent with extraordinary corporate environments, executing ethical, innovative recruitment parameters that foster long-term global acceleration.
                        </p>
                    </div>
                </div>
                <!-- Vision Box -->
                <div class="col-lg-6">
                    <div class="card h-100 border-0 p-4 p-md-5 bg-light rounded-3 shadow-sm transition hover-up" style="border-left: 5px solid #0f172a;">
                        <h3 class="fw-bold mb-3" style="color: #0f172a; font-size: 1.5rem;">Our Vision</h3>
                        <p class="text-secondary mb-0 style-lh26" style="font-size: 1rem; line-height: 1.6;">
                            To stand as the world's most trusted global talent acquisition partner—fundamentally evolving ecosystem integration through advanced vetting infrastructure, cross-border deployment metrics, and human integrity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= NEWSLETTER PIPELINES ================= --}}
    @include(frontend_module_view('common.newsletter', 'Page'))

</main>
@endsection

{{-- ================= GLOBAL PUSH SCRIPTS ARCHITECTURE ================= --}}
@push('scripts')
<script src="{{ asset(front_asset('js/plugins/counterup.js')) }}"></script>
@endpush

<style>
    /* Premium Hover Dynamics Micro-Interactions */
    .hover-corporate {
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    .hover-corporate:hover {
        transform: translateY(-5px) !important;
        box-shadow: 0 20px 35px -10px rgba(15, 23, 42, 0.08) !important;
    }
    .hover-up {
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
    }
    .hover-up:hover {
        transform: translateY(-2px);
    }
</style>