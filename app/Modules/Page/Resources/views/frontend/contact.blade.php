@php
    $meta_title = 'Contact Us | Olive Resources – Recruitment & HR Services';
    $meta_description = 'Contact Olive Resources for recruitment, staffing, HR outsourcing, and payroll services. Call, email, or send us a message today.';
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
    <meta property="og:image:alt" content="Contact Olive Resources HR Agency">

@endsection

@section('content')

<main class="main">

    <!-- Page Heading -->
    <section class="">
        <div class="row row-bg-gold mb-50 pb-3 pt-3">
            <h1 class="text-center wow animate__animated animate__fadeInUp touch-font" data-wow-delay=".1s">
                Contact Olive Resources
            </h1>

            <div class="col-xl-9 col-md-12 mx-auto">
                <div class="contact-from-area padding-20-row-col">

                    <!-- Contact Info -->
                    <div class="row mt-20">

                        <div class="col-md-4 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <img src="{{ asset(front_asset('imgs/theme/icons/headset-color.svg'))}}" width="35" height="35" alt="Phone Contact Olive Resources">
                            <p class="mb-10 font-address">Phone</p>
                            <p class="mb-0 comapny-contact-font">
                                <a href="tel:+923343588890">+92 334 3588890</a><br>
                                <a href="tel:+923122912921">+92 312 2912921</a>
                            </p>
                        </div>

                        <div class="col-md-4 mt-sm-30 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <img src="{{ asset(front_asset('imgs/theme/icons/marker-color.svg'))}}" width="35" height="35" alt="Email Olive Resources">
                            <p class="mb-10 font-address">Email</p>
                            <p class="mb-0 comapny-contact-font">
                                <a href="mailto:hr@oliveresources.com">hr@oliveresources.com</a><br>
                                <a href="mailto:info@oliveresources.com">info@oliveresources.com</a><br>
                                <a href="mailto:contact@oliveresources.com">contact@oliveresources.com</a><br>
                                <a href="mailto:sales@oliveresources.com">sales@oliveresources.com</a>
                            </p>
                        </div>

                        <div class="col-md-4 mt-sm-30 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <img src="{{ asset(front_asset('imgs/theme/icons/plane-color.svg'))}}" width="35" height="35" alt="Office Address Olive Resources">
                            <p class="mb-10 font-address">Address</p>
                            <p class="mb-0 comapny-contact-font">
                                A-156 Gulshan-e-Iqbal<br>
                                Block 10A, Karachi, Pakistan
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row mb-50">
            <div class="col-xl-8 col-md-12 mx-auto">
                <div class="row">

                    <div class="col-4 contact-us-image">
                        <img
                            src="{{ asset(front_asset('imgs/banner/banner.png')) }}"
                            alt="Contact Olive Resources HR Agency"
                            width="153"
                            height="400"
                            loading="lazy"
                            class="img-responsive img-banner shape-1"
                        >
                    </div>

                    <div class="col-md-8 col-sm-12">
                        <h2>Have a Question? Let’s Discuss</h2>
                        <p>
                            Please let us know how we can assist you with recruitment, HR outsourcing, or payroll services.
                        </p>

                        <div id="success-message" class="alert alert-success mt-3 d-none">
                            Thank you for contacting us, we will reach you shortly.
                        </div>

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
                                <div class="col-lg-6 mb-3">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <textarea
                                    name="message"
                                    class="form-control"
                                    rows="4"
                                    maxlength="250"
                                    placeholder="Your message (max 250 characters)">
                                </textarea>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-default font-heading">
                                    Send Message
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
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

        submitButton.prop('disabled', true).text('Sending...');

        $.ajax({
            url: "{{ route(front_route('page.contact')) }}",
            type: "POST",
            data: formData,
            success: function (response) {
                if (response.status === 'success') {
                    $('#success-message').removeClass('d-none').text(response.message);
                    form[0].reset();
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    for (let field in errors) {
                        let input = form.find(`[name="${field}"]`);
                        input.addClass('is-invalid');
                        input.next('.invalid-feedback').text(errors[field][0]);
                    }
                } else {
                    alert('Something went wrong. Please try again.');
                }
            },
            complete: function () {
                submitButton.prop('disabled', false).text('Send Message');
            }
        });
    });

});
</script>
@endpush
