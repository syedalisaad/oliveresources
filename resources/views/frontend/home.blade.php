@extends(front_layout('master'))
@section('title', 'oliveresources | Top Recruitment Agency | Job Placement in Pakistan, USA, Dubai, UK, Saudi Arabia, KSA & Malaysia')
@section('meta_tags')
<meta name="keywords"
    content="recruitment agency, job placement, HR solutions, staffing, recruitment Pakistan, recruitment USA, job agency Dubai, job placement UK, recruitment Saudi Arabia,recruitment KSA, HR services Malaysia" />

<meta property="url" content="{{ url('/') }}" />
<meta property="type" content="website" />
<meta property="title" content="Best Recruitment Agency | Hiring Made Easy" />
<meta property="description"
    content="Looking for top recruitment services? We connect talented professionals with leading companies in Pakistan, USA, Dubai, UK, and Malaysia" />

<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Best Recruitment Agency | Hiring Made Easy" />
<meta property="og:description"
    content="Looking for top recruitment services? We connect talented professionals with leading companies in Pakistan, USA, Dubai, UK, Saudi Arabia, KSA & and Malaysia" />
<meta name="og:keywords"
    content="recruitment agency, job placement, HR solutions, staffing, recruitment Pakistan, recruitment USA, job agency Dubai, job placement UK, recruitment Saudi Arabia,recruitment KSA, HR services Malaysia" />

<meta property="image" content="{{ asset(front_asset('imgs/theme/logo.png')) }}" />
<meta property="og:image" content="{{ asset(front_asset('imgs/theme/logo.png')) }}" />
@endsection
@section('content')
<main class="main">
    <section class="section-box">
        <div class="banner-hero hero-1">
            <div class="banner-inner">
                <div class="row">
                    <div class="col-xl-9 col-md-12 mx-auto ">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="block-banner">
                                    <h1 class="heading-banner wow animate__animated animate__fadeInUp">Top Recruitment Agency for Pakistan, USA, Dubai, UK, KSA & Malaysia
                                    </h1>
                                    <div class="banner-description mt-30 wow animate__animated animate__fadeInUp"
                                        data-wow-delay=".1s">At Olive Resources, we’re focused on working closely with
                                        world’s &
                                        local top Startups and Giants acquire Talent in Real time. We’re also good with
                                        products and services that streamline daily operations, boost productivity and
                                        help
                                        you invest energies on the real goal – THE GROWTH.</div>
                                    <button type="button" class="btn btn-default font-heading mt-20" data-bs-toggle="modal" data-bs-target="#contactModal">
                                        Contact Us
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="banner-imgs">
                                    <img alt="Olive Resources" src="{{ asset(front_asset('imgs/banner/banner.png')) }}"
                                        class="img-responsive img-banner shape-1" />
                                    <span class="union-icon"><img alt="Olive Resources"
                                            src="{{ asset(front_asset('imgs/banner/union.svg')) }}"
                                            class="img-responsive shape-3" /></span>
                                    <span class="congratulation-icon"><img alt="Olive Resources"
                                            src="{{ asset(front_asset('imgs/banner/congratulation.svg')) }}"
                                            class="img-responsive shape-2" width="200" /></span>
                                    <span class="docs-icon"><img alt="Olive Resources"
                                            src="{{ asset(front_asset('imgs/banner/docs.svg')) }}"
                                            class="img-responsive shape-2" /></span>
                                    <span class="course-icon"><img alt="Olive Resources"
                                            src="{{ asset(front_asset('imgs/banner/course.png')) }}"
                                            class="img-responsive shape-3" width="100" /></span>
                                    <span class="web-dev-icon"><img alt="Olive Resources"
                                            src="{{ asset(front_asset('imgs/banner/web-dev.svg')) }}"
                                            class="img-responsive shape-3" /></span>
                                    <span class="tick-icon"><img alt="Olive Resources"
                                            src="{{ asset(front_asset('imgs/banner/tick.svg')) }}"
                                            class="img-responsive shape-3" /></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="success-message" class="alert alert-success mt-3 d-none"> Thank you for contacting us, we will reach you shortly</div>
                    <form id="contactForm">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="4" maxlength="250" placeholder="Your message - Max 250 characters"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>



                        <div class="text-center">
                            <button type="submit" class="btn btn-default font-heading">Send</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    @include(frontend_module_view('common.how-it-works', 'Page'))
    <!-- @include(frontend_module_view('common.price', 'Page')) -->
    <section class="section-box mt-50 mb-70 bg-patern">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="content-job-inner">
                        <h2 class="section-title heading-lg wow animate__animated animate__fadeInUp titleEmpower">
                            EMPOWERING YOUR
                            HIRING JOURNEY</h2>
                        <div class="mt-30 text-md-lh28 wow animate__animated animate__fadeInUp">
                            At Olive Resources, we are dedicated to transforming the hiring experience into a journey of
                            empowerment, efficiency, and excellence. Whether you’re scaling your team or looking for
                            specialized talent, our expertise and innovative approach ensure you’re equipped with
                            the right resources to succeed.
                            <br>
                            <br>
                            We go beyond filling positions—we craft connections that drive growth, align with your
                            vision, and strengthen your organization's foundation. From sourcing exceptional
                            candidates to offering insights on workforce strategies, we’re your trusted partner
                            every step of the way.
                            <br>
                            <br>
                            Let’s redefine hiring together. Empower your journey with us.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="box-image-job">
                        <figure class=" wow animate__animated animate__fadeIn"><img alt="Olive Resources"
                                src="{{ asset(front_asset('imgs/blog/img-job.png')) }}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-40">
        <div class="container">
            <h2 class="section-title text-center heading-lg wow animate__animated animate__fadeInUp titleEmpower">
                OUR SERVICES</h2>
            <div class="box-swiper mt-50">
                <div class="swiper-container swiper-group-3 slider-our-service">
                    <div class="swiper-wrapper pt-5">
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-1 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Permanent Recruitment:</h5>
                                    <p class="text-gray-200">
                                        Connecting organizations with top-tier talent for long-term roles.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Industry-specific hiring for entry-level to executive positions.</li>
                                        <li>Comprehensive vetting to ensure a perfect cultural and skill match.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-2 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Contract Staffing:</h5>
                                    <p class="text-gray-200">
                                        Flexible workforce solutions for short-term or project-based needs.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Rapid deployment of skilled professionals to meet urgent requirements.
                                        </li>
                                        <li>Ongoing support to manage contract employees.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-3 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Executive Search & Headhunting:</h5>
                                    <p class="text-gray-200">
                                        Identifying and securing high-impact leaders and C-suite professionals.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Discreet and targeted approaches to find the best-fit candidates.</li>
                                        <li>Specialized expertise across industries for critical leadership roles.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-4 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Talent Acquisition Strategy Development:</h5>
                                    <p class="text-gray-200">
                                        Custom strategies tailored to organizational goals and market trends.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Workforce planning and employer branding consultancy.</li>
                                        <li>Data-driven insights to optimize hiring processes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-5 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Temporary Staffing Solutions:</h5>
                                    <p class="text-gray-200">
                                        Immediate access to skilled temporary workers to manage workload spikes.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Scalable solutions for seasonal or transitional needs.</li>
                                        <li>Seamless integration into existing teams for efficiency.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-6 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Recruitment Process Outsourcing (RPO):</h5>
                                    <p class="text-gray-200">
                                        End-to-end management of your recruitment functions.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Streamlining hiring processes to reduce costs and improve efficiency.
                                        </li>
                                        <li>Dedicated support teams to handle sourcing, screening, and onboarding.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-7 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Diversity and Inclusion Hiring:</h5>
                                    <p class="text-gray-200">
                                        Strategies to promote diverse and inclusive workplaces.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Focused efforts on underrepresented talent pools.</li>
                                        <li>Tailored training and consulting to enhance organizational culture.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-8 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Graduate and Campus Recruitment:</h5>
                                    <p class="text-gray-200">
                                        Building talent pipelines through partnerships with universities.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Organizing career fairs, internships, and campus events.</li>
                                        <li>Connecting fresh graduates with entry-level opportunities.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-9 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Onboarding and Employee Retention Support:</h5>
                                    <p class="text-gray-200">
                                        Assistance with onboarding processes to ensure smooth transitions.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Retention strategies to reduce turnover and enhance employee
                                            satisfaction.</li>
                                        <li>Continuous engagement through follow-ups and feedback collection.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-news service-card-10 hover-up wow animate__animated animate__fadeIn"
                                data-wow-delay=".0s">
                                <div class="card-info-bottom">
                                    <h5>Customized Recruitment Solutions:</h5>
                                    <p class="text-gray-200">
                                        Niche hiring for specialized roles across unique sectors.
                                    </p>
                                    <ul class="ulofSer">
                                        <li>Tailored services for startups, SMEs, and large enterprises.</li>
                                        <li>Flexible approaches to meet dynamic business needs.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
    </section>
    <!-- @include(frontend_module_view('common.price', 'Page')) -->
    <!-- <div class="section-box">
        <div class="container">
             <h2 class="section-title text-center heading-lg wow animate__animated animate__fadeInUp titleEmpower">
                OUR CLIENTS</h2>
            <ul class="list-partners">
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay="0s">
                    <figure><img class="companyLogo" alt="Digital Code Studio"
                            src="{{ asset(front_asset('imgs/companies/digital.png')) }}" />
                    </figure>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".1s">
                    <figure><img class="companyLogo" alt="Design Pro Labs"
                            src="{{ asset(front_asset('imgs/companies/design.png')) }}" />
                    </figure>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".2s">
                    <figure><img class="companyLogo" alt="Tech-zone 360"
                            src="{{ asset(front_asset('imgs/companies/techzone.png')) }}" />
                    </figure>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".3s">
                    <figure><img class="companyLogo" alt="write right"
                            src="{{ asset(front_asset('imgs/companies/writeright.png')) }}" />
                    </figure>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".4s">
                    <figure><img class="companyLogo" alt="wandktech"
                            src="{{ asset(front_asset('imgs/companies/w&k.svg')) }}" />
                    </figure>
                    </a>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".5s">
                    <figure><img class="companyLogo" alt="AMZ Writers"
                            src="{{ asset(front_asset('imgs/companies/amz.png')) }}" />
                    </figure>
                </li>
                 <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".6s">
                    <figure><img class="companyLogo bg-black" alt="11 prop" 
                            src="{{ asset(front_asset('imgs/companies/bg-head-left-candidate.svg')) }}" />
                    </figure>
                </li>
                 <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".6s">
                    <figure><img class="companyLogo bg-black" alt="hyper nym" 
                            src="{{ asset(front_asset('imgs/companies/Logo-Hypernym.png')) }}" />
                    </figure>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".6s">
                    <figure><img class="companyLogo" alt="kamel pay" 
                            src="{{ asset(front_asset('imgs/companies/kamalpay.png')) }}" />
                    </figure>
                </li>
                <li class="wow animate__animated animate__fadeInUp hover-up" data-wow-delay=".6s">
                    <figure><img class="companyLogo" alt="connect heat" 
                            src="{{ asset(front_asset('imgs/companies/logo-full HIRES.avif')) }}" />
                    </figure>
                </li>
            </ul>
        </div>
    </div> -->
    @include(frontend_module_view('common.newsletter', 'Page'))
</main>



@endsection


@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            console.log('contactForm')
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
                    if (response.status === 'success') { // Ensure correct key check
                        $('#success-message').removeClass('d-none').text(response.message); // Display message
                        $('form')[0].reset(); // Reset the form
                        $('#contactModal').modal('hide'); // Hide the modal
                        setTimeout(() => {
                            $('#success-message').addClass('d-none');
                        }, 2000);
                    }
                },
                error: function(xhr) {
                    console.log(xhr)
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
                    submitButton.prop('disabled', false).text('Send');
                }
            });
        });
    });
</script>
@endpush