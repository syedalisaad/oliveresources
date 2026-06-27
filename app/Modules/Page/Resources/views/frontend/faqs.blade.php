@extends(front_layout('master'))

@php
    $site_settings    = get_site_settings();
    $meta_title       = $seo_metadata['meta_title'] ?? 'Frequently Asked Questions | Olive Resources';
    $meta_description = $seo_metadata['meta_description'] ?? 'Find answers to common questions about global B2B recruitment, contract staffing, executive search, and payroll solutions.';
    $meta_keywords    = $seo_metadata['meta_keywords'] ?? 'recruitment faq, staffing answers, corporate hr questions, executive headhunting help';
    $site_logo        = isset($site_settings['sites']['site_logo'])
        ? \App\Models\Setting::getImageURL($site_settings['sites']['site_logo'])
        : asset(front_asset('imgs/theme/logo.png'));
@endphp


@section('title', 'Frequently Asked Questions | Olive Resources')

@section('meta_tags')
    <meta name="description" content="{{ $meta_description }}">
    @if($meta_keywords)
        <meta name="keywords" content="{{ $meta_keywords }}">
    @endif

    <meta property="og:title" content="{{ $meta_title }}">
    <meta property="og:description" content="{{ $meta_description }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route(front_route('page.faq')) }}">
    <meta property="og:image" content="{{ $site_logo }}">

    <!-- DYNAMIC SCHEMA GRAPH COUPLING -->
    @php
        $baseUrl = url('/');
        $faqUrl = route(front_route('page.faq'));

        $schemaData = [
            "@context" => "https://schema.org",
            "@graph" => [
                // 1. BREADCRUMB LIST RESOURCING
                [
                    "@type" => "BreadcrumbList",
                    "@id" => $faqUrl . "/#breadcrumb",
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
                            "name" => "FAQs",
                            "item" => $faqUrl
                        ]
                    ]
                ],
                // 2. COMPLETE EXHAUSTIVE FAQ DATA
                [
                    "@type" => "FAQPage",
                    "@id" => $faqUrl . "/#faq",
                    "mainEntity" => [
                        [
                            "@type" => "Question",
                            "name" => "What services does your agency provide?",
                            "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => "We provide recruitment, permanent and contract staffing, HR outsourcing, payroll management, bulk hiring, and talent acquisition services globally."
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How does your recruitment process work?",
                            "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => "We analyze job requirements, source candidates, conduct screenings and interviews, and present the best profiles to our clients."
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Do you charge candidates for your services?",
                            "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => "No. Our services are completely free for candidates. Employers pay all service fees."
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What industries do you specialize in?",
                            "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => "We specialize in IT, cross-border technology, engineering, executive leadership, manufacturing, healthcare, and corporate enterprise services."
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Do you offer temporary, contract, and permanent positions?",
                            "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => "Yes. We offer temporary, contract-based, and permanent staffing solutions."
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How long does it take to find a suitable candidate?",
                            "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => "On average, we present suitable qualified candidates within 7–15 business days depending on specialization complexity."
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Do you provide background checks and skill assessments?",
                            "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => "Yes. We conduct structural background verification, reference tracking metrics, and intensive skill competency assessments."
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Do you provide services for blue-collar and white-collar jobs?",
                            "acceptedAnswer" => [
                                "@type" => "Answer",
                                "text" => "Yes. We recruit for both blue-collar technical roles and high-impact white-collar or executive positions."
                            ]
                        ]
                    ]
                ]
            ]
        ];
    @endphp
    <script type="application/ld+json">
    {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endsection

@section('content')
<main class="main">

    <!-- PAGE HERO HEADER BANNER -->
    <section class="section-box text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
        <div class="position-absolute rounded-circle opacity-10" style="top: -10%; right: -5%; width: 400px; height: 400px; background: #8FA43E; filter: blur(120px); pointer-events: none;"></div>
        <div class="container py-4 position-relative text-center" style="z-index: 2; max-width: 800px;">
            <span class="badge mb-3 py-2 px-3 text-uppercase font-heading" style="background-color: #8FA43E; color: #fff; letter-spacing: 1.5px; font-size: 0.8rem; font-weight: 600; border-radius: 4px;">FAQ Framework</span>
            <h1 class="display-4 font-heading text-white fw-bold wow animate__animated animate__fadeInUp" style="letter-spacing: -1px;">
                Frequently Asked Questions
            </h1>
            <p class="mt-2 text-gray-300 fs-5 wow animate__animated animate__fadeInUp" data-wow-delay=".1s" style="color: #cbd5e1; font-weight: 300;">
                Clear architectural insights regarding our operational frameworks and cross-border staffing logistics.
            </p>
        </div>
    </section>

    <!-- ACCORDION QUESTION LAYOUT PLATFORM -->
    <!-- ACCORDION QUESTION LAYOUT PLATFORM -->
<section class="py-5 my-4 bg-white">
    <div class="container">
        <div class="row g-4">
            
            <!-- LEFT ACCORDION COLUMN -->
            <div class="col-lg-6">
                <div class="accordion accordion-flush px-lg-2" id="faqLeft">

                    <!-- FAQ Item 1 (Starts Expanded) -->
                    <div class="accordion-item mb-4 border rounded shadow-sm faq-premium-card">
                        <h2 class="accordion-header" id="q1">
                            <button class="accordion-button fw-bold py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="true" aria-controls="a1">
                                What services does your agency provide?
                            </button>
                        </h2>
                        <div id="a1" class="accordion-collapse collapse show" aria-labelledby="q1" data-bs-parent="#faqLeft">
                            <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                                We provide structural recruitment, permanent and contract staffing paradigms, corporate HR outsourcing, multi-regional payroll management, volume bulk hiring, and talent acquisition consultancy services.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item mb-4 border rounded shadow-sm faq-premium-card">
                        <h2 class="accordion-header" id="q2">
                            <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="a2">
                                How does your recruitment process work?
                            </button>
                        </h2>
                        <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2" data-bs-parent="#faqLeft">
                            <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                                We process job descriptions, map candidate markets, execute systematic competency validation screenings, conduct context evaluations, and deliver a curated catalog of premium profiles to clients.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item mb-4 border rounded shadow-sm faq-premium-card">
                        <h2 class="accordion-header" id="q3">
                            <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="a3">
                                Do you charge candidates for your services?
                            </button>
                        </h2>
                        <div id="a3" class="accordion-collapse collapse" aria-labelledby="q3" data-bs-parent="#faqLeft">
                            <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                                No. Our pipeline registration, consultation, and sourcing services are completely free for all active candidates. Engagement service fees are entirely covered by corporate employers.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item mb-4 border rounded shadow-sm faq-premium-card">
                        <h2 class="accordion-header" id="q4">
                            <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#a4" aria-expanded="false" aria-controls="a4">
                                What industries do you specialize in?
                            </button>
                        </h2>
                        <div id="a4" class="accordion-collapse collapse" aria-labelledby="q4" data-bs-parent="#faqLeft">
                            <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                                We maintain robust pipelines across IT software engineering architectures, global tech infrastructure, executive leadership, manufacturing channels, corporate finance, and specialized operational services.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT ACCORDION COLUMN -->
            <div class="col-lg-6">
                <div class="accordion accordion-flush px-lg-2" id="faqRight">

                    <!-- FAQ Item 5 (Starts Expanded for visual balance) -->
                    <div class="accordion-item mb-4 border rounded shadow-sm faq-premium-card">
                        <h2 class="accordion-header" id="q5">
                            <button class="accordion-button fw-bold py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#a5" aria-expanded="true" aria-controls="a5">
                                Do you offer temporary, contract, and permanent positions?
                            </button>
                        </h2>
                        <div id="a5" class="accordion-collapse collapse show" aria-labelledby="q5" data-bs-parent="#faqRight">
                            <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                                Yes. Our engagement setups completely support temporary transitional task layers, long-term specialized project contract scaling architectures, and traditional direct-hire permanent additions.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="accordion-item mb-4 border rounded shadow-sm faq-premium-card">
                        <h2 class="accordion-header" id="q6">
                            <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#a6" aria-expanded="false" aria-controls="a6">
                                How long does it take to find a suitable candidate?
                            </button>
                        </h2>
                        <div id="a6" class="accordion-collapse collapse" aria-labelledby="q6" data-bs-parent="#faqRight">
                            <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                                On average, primary target candidate profile dossiers are processed and delivered to employer dashboards within 7–15 operational business days depending on specialization complexity.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="accordion-item mb-4 border rounded shadow-sm faq-premium-card">
                        <h2 class="accordion-header" id="q7">
                            <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#a7" aria-expanded="false" aria-controls="a7">
                                Do you provide background checks and skill assessments?
                            </button>
                        </h2>
                        <div id="a7" class="accordion-collapse collapse" aria-labelledby="q7" data-bs-parent="#faqRight">
                            <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                                Yes. Every profile undergoes rigorous credit and criminal reference verification, technical assessment matrix routing, and deep employment baseline background checking parameters.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="accordion-item mb-4 border rounded shadow-sm faq-premium-card">
                        <h2 class="accordion-header" id="q8">
                            <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#a8" aria-expanded="false" aria-controls="a8">
                                Do you provide services for blue-collar and white-collar jobs?
                            </button>
                        </h2>
                        <div id="a8" class="accordion-collapse collapse" aria-labelledby="q8" data-bs-parent="#faqRight">
                            <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                                Yes. We provide comprehensive infrastructure staffing solutions configured to handle executive white-collar talent requirements as well as high-volume structural blue-collar workflows.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- PREMIUM DESIGN EXTENSION STYLES -->
<style>
    /* Premium card container isolation and left indicator line */
    .collapse{
        visibility:visible

    }
    .faq-premium-card {
        background-color: #ffffff !important;
        border: 1px solid #e2e8f0 !important;
        border-left: 4px solid transparent !important;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }
    
    /* Elegant hover acceleration state */
    .faq-premium-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 20px -5px rgba(15, 23, 42, 0.04) !important;
        border-color: #cbd5e1 !important;
    }

    /* Target state highlighting matching logo (6).png primary accent */
    .faq-premium-card:has(.accordion-button:not(.collapsed)) {
        border-left-color: #8FA43E !important;
        box-shadow: 0 10px 25px -10px rgba(143, 164, 62, 0.15) !important;
    }

    /* Clear default gray button colors over custom corporate elements */
    .accordion-button {
        background-color: transparent !important;
        color: #1e293b !important;
        transition: color 0.2s ease !important;
    }

    .accordion-button:not(.collapsed) {
        color: #8FA43E !important;
        box-shadow: none !important;
    }

    .accordion-button:focus {
        box-shadow: none !important;
        border-color: transparent !important;
    }

    /* Soften background look for standard accordion bodies */
    .accordion-body {
        background-color: #fafafa !important;
        border-top: 1px solid #f1f5f9 !important;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
    }
</style>

    <!-- CALL TO ACTION CONTEXT BLOCK -->
    <section class="section-box py-5 mt-5 mb-5" style="background-color: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="row align-items-center py-2">
                <div class="col-lg-8 text-center text-lg-start">
                    <h3 class="fw-bold mb-2" style="color: #0f172a; font-size: 1.75rem; letter-spacing: -0.5px;">Have specific project requirements or custom questions?</h3>
                    <p class="text-secondary mb-0 small">Connect with an engagement advisor directly to structure your custom operational brief requirements.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route(front_route('page.contact')) }}" class="btn font-heading text-white px-4 py-3 fw-bold transition btn-cta" style="background-color: #8FA43E; border-radius: 4px; border: none; letter-spacing: 0.5px;">
                        Connect With Us &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include(frontend_module_view('common.newsletter', 'Page'))

</main>
@endsection

@push('scripts')
<script>
    // Aesthetic UI state tracking for accordion arrows
    document.addEventListener('DOMContentLoaded', function () {
        console.log('FAQ layout metrics initialized successfully.');
    });
</script>
@endpush

<style>
    /* Framework Design Refinements */
    .btn-cta:hover {
        background-color: #7b8e34 !important;
        transform: translateY(-1px);
        box-shadow: 0 8px 20px rgba(143,164,62,0.25) !important;
    }
    .accordion-button:not(.collapsed) {
        background-color: rgba(143, 164, 62, 0.08) !important;
        color: #8FA43E !important;
    }
    .accordion-button:focus {
        border-color: #8FA43E !important;
        box-shadow: 0 0 0 4px rgba(143, 164, 62, 0.15) !important;
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
</style>