@extends( front_layout('master') )
@section('title', 'contact-us')
@section('content')
<main class="main">

    <section class="">
        <div class="row row-bg-gold mb-50 pb-3 pt-3">
            <h5 class="text-center wow animate__animated animate__fadeInUp touch-font" data-wow-delay=".1s">Get in Touch</h5>
            <div class="col-xl-9 col-md-12 mx-auto ">
                <div class="contact-from-area padding-20-row-col">
                    <div class="row mt-20">
                        <div class="col-md-4 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <img src="assets/imgs/theme/icons/headset-color.svg" alt="">
                            <p class="mb-10 font-address">Phone</p>
                            <p class="mb-0 comapny-contact-font">
                                +92 334 3588890 <br>
                                +92 312 2912921
                            </p>
                        </div>
                        <div class="col-md-4 mt-sm-30 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <img src="assets/imgs/theme/icons/marker-color.svg" alt="">
                            <p class="mb-10 font-address">Email</p>
                            <p class="mb-0 comapny-contact-font">
                                hr@oliveresources.com <br>
                                info@oliveresources.com <br>
                                contact@oliveresources.com <br>
                                sales@oliveresources.com
                            </p>
                        </div>
                        <div class="col-md-4 mt-sm-30 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <img src="assets/imgs/theme/icons/plane-color.svg" alt="">
                            <p class="mb-10 font-address">Address</p>
                            <p class="mb-0 comapny-contact-font">
                                A-156 Gulshan-e-Iqbal <br>
                                block 10A, Karachi, Pakistan
                            </p>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="row mb-50">
            <div class="col-xl-8 col-md-12 mx-auto ">
                <div class="row ">
                    <div class="col-4 contact-us-image">
                        <div class="banner-imgs">
                            <img alt="Talent bees" src="{{ asset( front_asset('imgs/banner/banner.png'))}}"
                                class="img-responsive img-banner shape-1" />
                        </div>
                    </div>
                    <div class="col-md-8 col-md-8 col-sm-12">
                        <div class="container">
                            <h4>Have a Question? Let's Discuss</h4>
                            <p>Please let us know if you prefer email or a phone response, and what we can assist you with.</p>
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
        </div>

    </section>
    @include( frontend_module_view('common.newsletter', 'Page') )

</main>

@endsection
<script src="{{ asset( front_asset('js/plugins/leaflet.js'))}}"></script>

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
                    if (response.status === 'success') {
                        $('#success-message').removeClass('d-none').text(response.message);
                        $('form')[0].reset();
                        $('#contactModal').modal('hide');
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