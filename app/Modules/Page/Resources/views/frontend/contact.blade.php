@php
    $meta_title = 'Contact Us | Olive Resources – Premium B2B Recruitment & HR Search';
    $meta_description = 'Connect with Olive Resources for global B2B recruitment, executive search, contract staffing, and technical team extension frameworks.';
    $og_image = asset(front_asset('imgs/banner/banner.png'));
@endphp

@extends(front_layout('master'))

@section('title', $meta_title)

@section('meta_tags')
    <meta name="description" content="{{ $meta_description }}">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="{{ $meta_title }}">
    <meta property="og:description" content="{{ $meta_description }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route(front_route('page.contact')) }}">
    <meta property="og:image" content="{{ $og_image }}">
    <meta property="og:image:alt" content="Contact Olive Resources Corporate Recruitment Team">

    <!-- BREADCRUMB & CORPORATE CONTACT DATA SCHEMA -->
    @php
        $baseUrl = url('/');
        $contactUrl = route(front_route('page.contact'));

        $schemaData = [
            "@context" => "https://schema.org",
            "@graph" => [
                [
                    "@type" => "BreadcrumbList",
                    "@id" => $contactUrl . "/#breadcrumb",
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
                            "name" => "Contact Us",
                            "item" => $contactUrl
                        ]
                    ]
                ],
                [
                    "@type" => "ContactPage",
                    "@id" => $contactUrl . "/#contact",
                    "url" => $contactUrl,
                    "name" => "Contact Olive Resources",
                    "description" => "Corporate partner engagement and talent acquisition consultation portal.",
                    "mainEntity" => [
                        "@type" => "Organization",
                        "name" => "Olive Resources",
                        "telephone" => ["+923343588890", "+923122912921"],
                        "email" => ["info@oliveresources.com", "sales@oliveresources.com"],
                        "address" => [
                            "@type" => "PostalAddress",
                            "streetAddress" => "A-156 Gulshan-e-Iqbal, Block 10A",
                            "addressLocality" => "Karachi",
                            "addressRegion" => "Sindh",
                            "addressCountry" => "Pakistan"
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

    <!-- PAGE HERO HEADER -->
    <section class="section-box text-white py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
        <div class="position-absolute rounded-circle opacity-10" style="top: -10%; right: -5%; width: 400px; height: 400px; background: #8FA43E; filter: blur(120px); pointer-events: none;"></div>
        <div class="container py-4 position-relative text-center" style="z-index: 2; max-width: 800px;">
            <span class="badge mb-3 py-2 px-3 text-uppercase font-heading" style="background-color: #8FA43E; color: #fff; letter-spacing: 1.5px; font-size: 0.8rem; font-weight: 600; border-radius: 4px;">Partner Engagement</span>
            <h1 class="display-4 font-heading text-white fw-bold wow animate__animated animate__fadeInUp" style="letter-spacing: -1px;">
                Contact Our Global Team
            </h1>
            <p class="mt-2 text-gray-300 fs-5 wow animate__animated animate__fadeInUp" data-wow-delay=".1s" style="color: #cbd5e1; font-weight: 300;">
                Connect with our human capital consultants to engineer, scale, and optimize your global developer pipelines.
            </p>
        </div>
    </section>

    <!-- STRUCTURED CORPORATE INFRASTRUCTURE INFOCARDS -->
    <section class="section-box py-5" style="background-color: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container py-2">
            <div class="row g-4 justify-content-center">
                <!-- Phone Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center bg-white" style="border-top: 3px solid #8FA43E !important;">
                        <div class="rounded-circle p-2 mx-auto mb-3 d-flex align-items-center justify-content-center" style="background-color: rgba(143,164,62,0.1); width: 50px; height: 50px;">
                            <img src="{{ asset(front_asset('imgs/theme/icons/headset-color.svg'))}}" width="26" height="26" alt="Phone Support Lines">
                        </div>
                        <h5 class="fw-bold mb-2 font-heading" style="color: #0f172a;">Enterprise Phone Lines</h5>
                        <p class="small text-secondary mb-0" style="line-height: 1.6;">
                            <a href="tel:+923343588890" class="text-decoration-none text-secondary hover-olive font-address font-weight-bold">+92 334 3588890</a><br>
                            <a href="tel:+923122912921" class="text-decoration-none text-secondary hover-olive font-address font-weight-bold">+92 312 2912921</a>
                        </p>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center bg-white" style="border-top: 3px solid #0f172a !important;">
                        <div class="rounded-circle p-2 mx-auto mb-3 d-flex align-items-center justify-content-center" style="background-color: rgba(15,23,42,0.05); width: 50px; height: 50px;">
                            <img src="{{ asset(front_asset('imgs/theme/icons/marker-color.svg'))}}" width="26" height="26" alt="Email Channels">
                        </div>
                        <h5 class="fw-bold mb-2 font-heading" style="color: #0f172a;">Corporate Email Channels</h5>
                        <p class="small text-secondary mb-0" style="line-height: 1.5;">
                            <a href="mailto:hr@oliveresources.com" class="text-decoration-none text-secondary hover-olive font-address font-weight-bold">hr@oliveresources.com</a>
                        </p>
                    </div>
                </div>

                <!-- Office Address Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-4 text-center bg-white" style="border-top: 3px solid #8FA43E !important;">
                        <div class="rounded-circle p-2 mx-auto mb-3 d-flex align-items-center justify-content-center" style="background-color: rgba(143,164,62,0.1); width: 50px; height: 50px;">
                            <img src="{{ asset(front_asset('imgs/theme/icons/plane-color.svg'))}}" width="26" height="26" alt="Headquarters Location">
                        </div>
                        <h5 class="fw-bold mb-2 font-heading" style="color: #0f172a;">Regional HQ</h5>
                        <p class="small text-secondary mb-0 font-address" style="line-height: 1.6;">
                            A-156, Block 10A, Gulshan-e-Iqbal,<br>
                            Karachi, Pakistan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PREMIUM CENTRAL ENGAGEMENT FORM -->
    <section class="section-box py-5 bg-white">
        <div class="container" style="max-width: 800px;">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2" style="color: #0f172a;">Initiate a Consultation</h2>
                <p class="text-muted">Specify your talent constraints or staffing requirements to begin partner onboarding.</p>
            </div>

            <div id="success-message" class="alert alert-success mt-3 d-none shadow-sm">
                Thank you for contacting us, our engagement managers will reach you shortly.
            </div>

            <form id="contactForm" class="p-4 rounded shadow-sm border mt-3 bg-light">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold text-dark text-uppercase tracking-wider">First Name</label>
                        <input type="text" name="first_name" class="form-control py-2" placeholder="First Name" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold text-dark text-uppercase tracking-wider">Last Name</label>
                        <input type="text" name="last_name" class="form-control py-2" placeholder="Last Name" required>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold text-dark text-uppercase tracking-wider">Corporate Phone</label>
                        <input type="tel" name="phone" class="form-control py-2" placeholder="e.g. +92 300 1234567">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold text-dark text-uppercase tracking-wider">Business Email</label>
                        <input type="email" name="email" class="form-control py-2" placeholder="name@company.com" required>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label small fw-bold text-dark text-uppercase tracking-wider">Engagement / Brief Details</label>
                    <textarea name="message" class="form-control" rows="5" maxlength="250" placeholder="Describe your talent pipeline profiles or HR outsourcing dependencies (Max 250 characters)..." style="resize: none;" required></textarea>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn w-100 font-heading text-white py-3 fw-bold btn-submit shadow transition" style="background-color: #8FA43E; border: none; border-radius: 4px; font-size: 1rem; letter-spacing: 0.5px;">
                        Submit Engagement Brief &rarr;
                    </button>
                </div>
            </form>
        </div>
    </section>

    @include(frontend_module_view('common.newsletter', 'Page'))

</main>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();

        let form = $(this);
        let formData = form.serialize();
        let submitButton = form.find('button[type="submit"]');

        form.find('.is-invalid').removeClass('is-invalid');
        form.find('.invalid-feedback').text('');

        submitButton.prop('disabled', true).text('Processing Engagement...');

        $.ajax({
            url: "{{ route(front_route('page.contact')) }}",
            type: "POST",
            data: formData,
            success: function (response) {
                if (response.status === 'success') {
                    $('#success-message').removeClass('d-none').text(response.message);
                    form[0].reset();
                    setTimeout(() => {
                        $('#success-message').addClass('d-none');
                    }, 4000);
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    for (let field in errors) {
                        let input = form.find(`[name="${field}"]`);
                        input.addClass('is-invalid');
                        input.siblings('.invalid-feedback').text(errors[field][0]);
                    }
                } else {
                    alert('Something went wrong. Please check your data variables and try again.');
                }
            },
            complete: function () {
                submitButton.prop('disabled', false).text('Submit Engagement Brief');
            }
        });
    });
});
</script>
@endpush

<style>
    /* Styling Polish Transitions */
    .hover-olive:hover {
        color: #8FA43E !important;
    }
    .btn-submit:hover {
        background-color: #7b8e34 !important;
        transform: translateY(-1px);
        box-shadow: 0 10px 20px rgba(143,164,62,0.2) !important;
    }
    .form-control:focus {
        background-color: #ffffff !important;
        border: 1px solid #8FA43E !important;
        box-shadow: 0 0 0 4px rgba(143,164,62,0.15) !important;
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
</style>