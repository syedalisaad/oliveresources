@php
    $site_settings  = get_site_settings();
    $meta_title     = $seo_metadata['meta_title'] ?? 'Frequently Asked Questions | Recruitment & HR Services';
    $meta_description = $seo_metadata['meta_description']
        ?? 'Find answers to common questions about recruitment, staffing, HR outsourcing, payroll, and hiring services.';
    $meta_keywords = $seo_metadata['meta_keywords'] ?? '';
    $site_logo = isset($site_settings['sites']['site_logo'])
        ? \App\Models\Setting::getImageURL($site_settings['sites']['site_logo'])
        : front_asset('images/logo.png');
@endphp

@extends(front_layout('master'))

@section('title', 'Frequently Asked Questions | Recruitment & HR Services')

@section('meta_tags')
    <meta name="description" content="{{ $meta_description }}">
    @if($meta_keywords)
        <meta name="keywords" content="{{ $meta_keywords }}">
    @endif

    <meta property="og:title" content="{{ $meta_title }}">
    <meta property="og:description" content="{{ $meta_description }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ route(front_route('page.faq')) }}">
    <meta property="og:image" content="{{ $site_logo }}">
@endsection

@section('content')

<main class="main">

    <!-- Page Header -->
    <section class="section-box">
        <div class="container pt-50 text-center">
            <h1 class="section-title-large mb-30">Frequently Asked Questions</h1>
            <p class="text-muted">
                Answers to common questions about our recruitment and HR services.
            </p>
        </div>
    </section>


    <section class="mt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="faqLeft">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q1">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#a1">
                                    What services does your agency provide?
                                </button>
                            </h2>
                            <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqLeft">
                                <div class="accordion-body">
                                    We provide recruitment, permanent and contract staffing, HR outsourcing,
                                    payroll management, bulk hiring, and talent acquisition services.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q2">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a2">
                                    How does your recruitment process work?
                                </button>
                            </h2>
                            <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqLeft">
                                <div class="accordion-body">
                                    We analyze job requirements, source candidates, conduct screenings and interviews,
                                    and present the best profiles to our clients.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q3">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a3">
                                    Do you charge candidates for your services?
                                </button>
                            </h2>
                            <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqLeft">
                                <div class="accordion-body">
                                    No. Our services are completely free for candidates. Employers pay all service fees.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q4">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a4">
                                    What industries do you specialize in?
                                </button>
                            </h2>
                            <div id="a4" class="accordion-collapse collapse" data-bs-parent="#faqLeft">
                                <div class="accordion-body">
                                    We specialize in IT, healthcare, manufacturing, finance, logistics, retail,
                                    education, and corporate services.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="col-lg-6">
                    <div class="accordion accordion-flush" id="faqRight">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q5">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#a5">
                                    Do you offer temporary, contract, and permanent positions?
                                </button>
                            </h2>
                            <div id="a5" class="accordion-collapse collapse show" data-bs-parent="#faqRight">
                                <div class="accordion-body">
                                    Yes. We offer temporary, contract-based, and permanent staffing solutions.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q6">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a6">
                                    How long does it take to find a suitable candidate?
                                </button>
                            </h2>
                            <div id="a6" class="accordion-collapse collapse" data-bs-parent="#faqRight">
                                <div class="accordion-body">
                                    On average, we present suitable candidates within 7–15 business days.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q7">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a7">
                                    Do you provide background checks and skill assessments?
                                </button>
                            </h2>
                            <div id="a7" class="accordion-collapse collapse" data-bs-parent="#faqRight">
                                <div class="accordion-body">
                                    Yes. We conduct background verification, reference checks, and skill assessments.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q8">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a8">
                                    Do you provide services for blue-collar and white-collar jobs?
                                </button>
                            </h2>
                            <div id="a8" class="accordion-collapse collapse" data-bs-parent="#faqRight">
                                <div class="accordion-body">
                                    Yes. We recruit for both blue-collar and white-collar roles.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section-box bg-blue-full mt-90 mb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3>Want to discuss your hiring needs? Let’s get started.</h3>
                </div>
                <div class="col-lg-4 text-lg-end mt-md-30">
                    <a href="{{ route(front_route('page.contact')) }}" class="btn btn-default">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include(frontend_module_view('common.newsletter', 'Page'))

</main>

@endsection

@push('scripts')
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What services does your agency provide?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We provide recruitment, staffing, HR outsourcing, payroll management, and bulk hiring services."
      }
    },
    {
      "@type": "Question",
      "name": "Do you charge candidates for your services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, our services are completely free for candidates."
      }
    }
  ]
}
</script>
@endverbatim
@endpush
