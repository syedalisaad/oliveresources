@extends(front_layout('master'))
@section('title', 'Olive Resources | Global B2B Recruitment & Executive Search Solutions')
@section('meta_tags')
<meta name="keywords" content="B2B recruitment agency, executive search, enterprise staffing solutions, corporate recruitment Pakistan, global talent acquisition, technical recruitment USA, job placement Dubai, HR solutions UK, KSA recruitment" />

<meta property="url" content="{{ url('/') }}" />
<meta property="type" content="website" />
<meta property="title" content="Olive Resources | Elite B2B Recruitment & Staffing Solutions" />
<meta name="description" content="Olive Resources provides premier B2B recruitment, executive search, and flexible contract staffing solutions globally. Connect with top-tier talent effortlessly.">

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Olive Resources | Elite B2B Recruitment & Staffing Solutions" />
<meta property="og:description" content="Empowering corporate enterprises and fast-growing startups with high-impact talent acquisition solutions across Pakistan, USA, UAE, UK, and KSA." />
<meta name="og:keywords" content="recruitment agency, B2B staffing, executive headhunting, HR solutions, enterprise hiring, global recruitment" />

<meta property="image" content="{{ asset(front_asset('imgs/theme/logo.png')) }}" />
<meta property="og:image" content="{{ asset(front_asset('imgs/theme/logo.png')) }}" />

<!-- ADVANCED STRUCTURED DATA SCHEMAS -->
@php
$baseUrl = url('/');

$schemaData = [
    "@context" => "https://schema.org",
    "@graph" => [
        [
            "@type" => "BreadcrumbList",
            "@id" => $baseUrl . "/#breadcrumb",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => $baseUrl
                ]
            ]
        ],
        [
            "@type" => "FAQPage",
            "@id" => $baseUrl . "/#faq",
            "mainEntity" => [
                [
                    "@type" => "Question",
                    "name" => "What industries does Olive Resources specialize in for B2B recruitment?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Olive Resources specializes in cross-border global recruitment across Technology, Engineering, Executive Leadership, Healthcare, Construction, and Enterprise Operations."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "How does Olive Resources vet candidates for executive placements?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Our multi-tiered screening process includes deep cultural assessment alignment, exhaustive technical competency profiling, and comprehensive background verification matrices before presentation."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "What hiring models do you support?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "We offer dynamic enterprise workforce solutions including Permanent Corporate Placement, Executive Search & Headhunting, Agile Contract Staffing, and RPO frameworks."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "Which geographical regions do your global talent services cover?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "We actively execute workforce strategies and cross-border candidate placements matching regions across Pakistan, USA, Dubai (UAE), UK, Saudi Arabia (KSA), and Malaysia."
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
<div class="main">
  <!-- HERO SECTION -->
<section class="section-box bg-slate-900 text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
    <!-- Subtle Background Ambient Light Effects -->
    <div class="position-absolute rounded-circle opacity-10" style="top: -10%; right: -5%; width: 400px; height: 400px; background: #8FA43E; filter: blur(120px); pointer-events: none;"></div>
    <div class="position-absolute rounded-circle opacity-5" style="bottom: -10%; left: 5%; width: 300px; height: 300px; background: #ffffff; filter: blur(100px); pointer-events: none;"></div>

    <div class="container px-5 py-20 position-relative" style="z-index: 2;">
        <!-- Added d-flex and align-items-stretch to equalize left and right column heights perfectly -->
        <div class="row align-items-stretch g-5">
            
            <!-- Left Content Column -->
            <div class="col-xl-7 col-lg-7 d-flex align-items-center">
                <div class="block-banner w-100">
                    <span class="badge mb-3 py-2 px-3 text-uppercase font-heading" style="background-color: #8FA43E; color: #fff; letter-spacing: 1.5px; font-size: 0.8rem; font-weight: 600; border-radius: 4px;">Global Talent Acquisition</span>
                    <h1 class="heading-banner text-white fw-bold display-4 wow animate__animated animate__fadeInUp" style="line-height: 1.2; letter-spacing: -1px;">
                        Where Talent Meets <br><span style="color: #8FA43E;">Corporate Opportunity</span>.
                    </h1>
                    <p class="banner-description mt-4 text-gray-300 fs-5 wow animate__animated animate__fadeInUp" data-wow-delay=".1s" style="color: #cbd5e1; max-width: 600px; line-height: 1.6; font-weight: 300;">
                        Olive Resources partners with world-class enterprises, high-growth startups, and multinational corporations to secure industry-defining talent in real time. Scale your organizational foundation with precision.
                    </p>
                    <div class="mt-4 pt-2 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <button type="button" class="btn btn-lg font-heading text-white px-4 py-3 shadow-lg btn-partner transition" data-bs-toggle="modal" data-bs-target="#contactModal" style="background-color: #8FA43E; border: none; border-radius: 4px; font-weight: 600; letter-spacing: 0.5px;">
                            Partner With Us &rarr;
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Right Dynamic Image Frame Column -->
            <div class="col-xl-5 col-lg-5 d-none d-lg-flex align-items-stretch">
                <!-- Forced h-100 on the animation container to let the children fill the height -->
                <div class="position-relative d-inline-block w-100 wow animate__animated animate__fadeInRight h-100">
                    
                    <!-- Decorative Frame Accent Line -->
                    <div class="position-absolute border rounded-3 opacity-20" style="border-color: #8FA43E !important; top: 20px; left: -20px; width: 100%; height: 100%; z-index: 1; pointer-events: none;"></div>
                    
                    <!-- Main Image Wrap (Now perfectly inherits full height) -->
                    <div class="position-relative rounded-3 overflow-hidden bg-slate-800 shadow-2xl h-100 w-100" style="z-index: 2; border: 1px solid rgba(255,255,255,0.1); background: #1e293b; min-height: 460px;">
                        
                        <img rel="preload" as="image" src="{{ asset(front_asset('imgs/banner/banner.webp')) }}" class="img-fluid img-banner" alt="Olive Resources Executive Search" loading="lazy" decoding="async" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.5s ease; position: absolute; top: 0; left: 2; bottom: 0; right: 0;"/>
                        
                        <!-- Premium Overlay Tag using brand colors -->
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 text-start" style="background: linear-gradient(to top, rgba(15,23,42,0.95) 0%, rgba(15,23,42,0) 100%); z-index: 3;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle p-2 d-flex align-items-center justify-content-center" style="background-color: rgba(143,164,62,0.2); border: 1px solid #8FA43E; width: 42px; height: 42px; flex-shrink: 0;">
                                    <i class="bi bi-shield-check" style="color: #8FA43E; font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <h6 class="text-white mb-0 fw-bold small font-heading">Vetted Executive Placements</h6>
                                    <p class="text-muted mb-0 xx-small" style="font-size: 0.75rem; color: #94a3b8 !important;">Verified pipelines across KSA, UAE, USA & PK</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</section>
<style>
    /* Clean button slide transition effect */
    .btn-partner:hover {
        background-color: #7b8e34 !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(143,164,62,0.3) !important;
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
    .shadow-2xl {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }
</style>

    <!-- TRUSTED CLIENTS SECTION -->
    

    <!-- HOW IT WORKS MODULE -->
    @include(frontend_module_view('common.how-it-works', 'Page'))
    <section class="section py-5" style="background-color: #1e293b; border-bottom: 1px solid black;">
        <div class="container">
            <p class="text-center text-uppercase fw-semibold tracking-wider  mb-4 font-heading " style="font-size: 0.85rem; letter-spacing: 1.5px; color:white;">Trusted by Global Innovators & Enterprises</p>
            <div class="row row-cols-2 row-cols-md-5 g-4 justify-content-center align-items-center opacity-75">
                <div class="col text-center"><img class="img-fluid filter-grayscale" style="max-height: 40px;" alt="Digital Code Studio" src="{{ asset(front_asset('imgs/companies/digital.png')) }}" /></div>
                <div class="col text-center"><img class="img-fluid filter-grayscale" style="max-height: 60px;" alt="Design Pro Labs" src="{{ asset(front_asset('imgs/companies/design.png')) }}" /></div>
                <div class="col text-center"><img class="img-fluid filter-grayscale" style="max-height: 40px;" alt="Tech-zone 360" src="{{ asset(front_asset('imgs/companies/techzone.png')) }}" /></div>
                <div class="col text-center"><img class="img-fluid filter-grayscale" style="max-height: 40px;" alt="WandK Tech" src="{{ asset(front_asset('imgs/companies/w&k.svg')) }}" /></div>
                <div class="col text-center"><img class="img-fluid filter-grayscale" style="max-height: 40px;" alt="Hypernym" src="{{ asset(front_asset('imgs/companies/Logo-Hypernym.png')) }}" /></div>
            </div>
        </div>
    </section>

    <!-- EMPOWERING HIRING SECTION -->
    <section class="section-box my-5 py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="content-job-inner pe-lg-4">
                        <span style="color: #8FA43E; font-weight: 700;" class="text-uppercase font-heading small">Strategic Execution</span>
                        <h2 class="section-title fw-bold mt-2 mb-4 heading-lg wow animate__animated animate__fadeInUp" style="color: #0f172a;">
                            Empowering Your Corporate Hiring Journey
                        </h2>
                        <div class="text-md-lh28 text-secondary wow animate__animated animate__fadeInUp" style="font-size: 1.05rem; line-height: 1.75;">
                            At Olive Resources, we redefine how companies discover talent. We move past typical placement frameworks to deliver an engineered approach to workforce consulting, vetting, and execution. 
                            <br><br>
                            Whether your roadmap demands rapid engineering team expansion or highly targeted executive headhunting, we align perfect-fit professional profiles with your operational infrastructure and culture.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 mt-4 mt-lg-0 text-center">
                    <div class="box-image-job">
                        <figure class="wow animate__animated animate__fadeIn">
                            <img alt="Corporate Strategic Partnership" src="{{ asset(front_asset('imgs/blog/img-job.png')) }}" class="img-fluid rounded shadow-sm" style="max-width: 90%; border-left: 5px solid #8FA43E;" loading="lazy"/>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR ENTERPRISE SERVICES -->
    <section class="section-box py-5" style="background-color: #f8fafc;">
        <div class="container">
            <div class="text-center max-w-xl mx-auto mb-5">
                <span style="color: #8FA43E; font-weight: 700;" class="text-uppercase font-heading small">Capabilities</span>
                <h2 class="section-title fw-bold mt-2 heading-lg text-center wow animate__animated animate__fadeInUp" style="color: #0f172a;">
                    Our Workforce Solutions
                </h2>
            </div>
            
            <div class="box-swiper mt-4">
                <div class="swiper-container swiper-group-3 slider-our-service">
                    <div class="swiper-wrapper pt-2">
                        <!-- Card 1 -->
                        <div class="swiper-slide h-auto mb-4">
                            <div class="card h-100 border-0 shadow-sm p-4 hover-up bg-white text-dark transition" style="border-top: 4px solid #8FA43E !important;">
                                <div class="card-body p-0">
                                    <h4 class="fw-bold mb-3" style="color: #0f172a;">Permanent Recruitment</h4>
                                    <p class="text-muted small">Connecting organizations with high-caliber talent designed for sustainable, long-term operational success.</p>
                                    <ul class="list-unstyled mt-3 small text-secondary">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #8FA43E;"></i> Industry-specific executive placement</li>
                                        <li><i class="bi bi-check-circle-fill me-2" style="color: #8FA43E;"></i> Exhaustive asset & culture vetting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="swiper-slide h-auto mb-4">
                            <div class="card h-100 border-0 shadow-sm p-4 hover-up bg-white text-dark transition" style="border-top: 4px solid #8FA43E !important;">
                                <div class="card-body p-0">
                                    <h4 class="fw-bold mb-3" style="color: #0f172a;">Executive Search</h4>
                                    <p class="text-muted small">Targeted cross-border search strategies exclusively focused on securing C-Suite professionals and organizational leaders.</p>
                                    <ul class="list-unstyled mt-3 small text-secondary">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #8FA43E;"></i> Discreet, elite network headhunting</li>
                                        <li><i class="bi bi-check-circle-fill me-2" style="color: #8FA43E;"></i> Global leadership pipeline access</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="swiper-slide h-auto mb-4">
                            <div class="card h-100 border-0 shadow-sm p-4 hover-up bg-white text-dark transition" style="border-top: 4px solid #8FA43E !important;">
                                <div class="card-body p-0">
                                    <h4 class="fw-bold mb-3" style="color: #0f172a;">Contract Staffing Solutions</h4>
                                    <p class="text-muted small">Agile, scalable workforce architecture configured for immediate mid-level, enterprise contract deployments.</p>
                                    <ul class="list-unstyled mt-3 small text-secondary">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2" style="color: #8FA43E;"></i> Rapid operational workload mitigation</li>
                                        <li><i class="bi bi-check-circle-fill me-2" style="color: #8FA43E;"></i> Managed workforce risk profiling</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW FRONTEND VISUAL FAQ ACCORDION SECTION -->
    <section class="section-box py-5 my-4" style="background-color: #ffffff;">
        <div class="container" style="max-width: 900px;">
            <div class="text-center mb-5">
                <span style="color: #8FA43E; font-weight: 700;" class="text-uppercase font-heading small">FAQ Framework</span>
                <h2 class="section-title fw-bold mt-2 heading-lg text-center" style="color: #0f172a;">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="accordion accordion-flush" id="corporateFaqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item mb-3 border rounded shadow-sm">
                    <h2 class="accordion-header" id="faqHeadingOne">
                        <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="false" aria-controls="faqCollapseOne" style="color: #0f172a; font-size: 1.1rem;">
                            What industries does Olive Resources specialize in for B2B recruitment?
                        </button>
                    </h2>
                    <div id="faqCollapseOne" class="accordion-collapse collapse" aria-labelledby="faqHeadingOne" data-bs-parent="#corporateFaqAccordion">
                        <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                            Olive Resources specializes in delivering cross-border recruitment paradigms across key industrial layers including Technology, Executive Management, Engineering, Corporate Operations, and Professional Services.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item mb-3 border rounded shadow-sm">
                    <h2 class="accordion-header" id="faqHeadingTwo">
                        <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="color: #0f172a; font-size: 1.1rem;">
                            How does Olive Resources vet candidates for executive placements?
                        </button>
                    </h2>
                    <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#corporateFaqAccordion">
                        <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                            Our screening strategy encompasses comprehensive behavioral evaluations, technical benchmark testing, structural verification, and rigorous leadership parameter tracking to ensure deep cultural integration with clients.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item mb-3 border rounded shadow-sm">
                    <h2 class="accordion-header" id="faqHeadingThree">
                        <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="color: #0f172a; font-size: 1.1rem;">
                            What hiring models do you support?
                        </button>
                    </h2>
                    <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#corporateFaqAccordion">
                        <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                            We optimize global talent configurations through Permanent Corporate Placements, discreet Executive Headhunting pipelines, flexible Contract Staffing configurations, and End-to-End Recruitment Process Outsourcing (RPO).
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item mb-3 border rounded shadow-sm">
                    <h2 class="accordion-header" id="faqHeadingFour">
                        <button class="accordion-button fw-bold collapsed py-3 font-heading" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="color: #0f172a; font-size: 1.1rem;">
                            Which geographical regions do your global talent services cover?
                        </button>
                    </h2>
                    <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#corporateFaqAccordion">
                        <div class="accordion-body text-secondary small" style="line-height: 1.6; font-size: 0.95rem;">
                            Our primary international talent channels actively support enterprises and bridge pipelines across Pakistan, USA, Dubai (UAE), UK, Saudi Arabia (KSA), and Malaysia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include(frontend_module_view('common.newsletter', 'Page'))
</div>

<!-- CONTACT MODAL -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title fw-bold text-white" id="contactModalLabel">Request Consultation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div id="success-message" class="alert alert-success mt-3 d-none">Thank you for contacting us, we will reach you shortly</div>
                <form id="contactForm">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="first_name" class="form-control py-2" placeholder="First Name" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="last_name" class="form-control py-2" placeholder="Last Name" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="tel" name="phone" class="form-control py-2" placeholder="Corporate Phone">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control py-2" placeholder="Business Email" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" rows="4" maxlength="250" placeholder="Specify your hiring requirements (Max 250 characters)" required></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="text-center pt-2">
                        <button type="submit" class="btn w-100 font-heading text-white py-2" style="background-color: #8FA43E;">Submit Engagement Brief</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            let form = $(this);
            let formData = form.serialize();
            let submitButton = form.find('button[type="submit"]');

            form.find('.is-invalid').removeClass('is-invalid');
            form.find('.invalid-feedback').text('');

            submitButton.prop('disabled', true).text('Sending...');

            $.ajax({
                url: "{{ route(front_route('page.contact')) }}",
                type: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function(response) {
                    if (response.status === 'success') {
                        $('#success-message').removeClass('d-none').text(response.message);
                        $('form')[0].reset();
                        $('#contactModal').modal('hide');
                        setTimeout(() => {
                            $('#success-message').addClass('d-none');
                        }, 2000);
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        for (let field in errors) {
                            let input = form.find(`[name="${field}"]`);
                            input.addClass('is-invalid');
                            input.siblings('.invalid-feedback').text(errors[field][0]);
                        }
                    } else {
                        alert('Something went wrong. Please try again.');
                    }
                },
                complete: function() {
                    submitButton.prop('disabled', false).text('Submit Engagement Brief');
                }
            });
        });
    });
</script>
@endpush