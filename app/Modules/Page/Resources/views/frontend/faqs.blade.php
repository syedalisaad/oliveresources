@php
    $site_settings  = get_site_settings();
    $meta_title     = $seo_metadata['meta_title'] ?? 'FAQ\'s';
@endphp
@extends( front_layout('master') )
@section('title', 'FAQ\'s')
@section('meta_tags')
    @if( isset($seo_metadata['meta_keywords']) && $seo_metadata['meta_keywords'] )
        <meta name="keywords" content="{{ $seo_metadata['meta_keywords'] }}"/>
    @endif

    <meta property="url" content="{{ route(front_route('page.faq')) }}" />
    <meta property="type" content="article" />
    <meta property="title" content="{{ $meta_title }}" />
    @if( isset($seo_metadata['meta_description']) && $seo_metadata['meta_description'] )
        <meta property="description" content="{{ $seo_metadata['meta_description'] }}"/>
    @endif

    <meta property="og:url" content="{{ route(front_route('page.faq')) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $meta_title }}" />
    @if( isset($seo_metadata['meta_description']) && $seo_metadata['meta_description'] )
        <meta property="og:description" content="{{ $seo_metadata['meta_description'] }}" />
    @endif

    @if( isset($site_settings['sites']) && isset($site_settings['sites']['site_logo']) )
        <meta property="image" content="{{ ( \App\Models\Setting::getImageURL( $site_settings['sites']['site_logo']) ?: front_asset('images/logo.png')) }}" />
        <meta property="og:image" content="{{ ( \App\Models\Setting::getImageURL( $site_settings['sites']['site_logo']) ?: front_asset('images/logo.png')) }}" />
    @endif
@endsection
@section('content')

<main class="main">
        <section class="section-box">
            <div class="container pt-50">
                <div class="w-50 w-md-100 mx-auto text-center">
                    <h1 class="section-title-large mb-30 wow animate__animated animate__fadeInUp">FAQs</h1>
                </div>
            </div>
        </section>


        <section class="mt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        What services does your agency provide?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p class="mb-15">
                                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                                        </p>
                                        <p>
                                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        How does your recruitment process work?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Do you charge candidates for your services?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        What industries do you specialize in?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Do you offer remote job opportunities?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Do you manage the full HR operations for your clients?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        If your client only wants help with specific HR operations, such as payroll or LinkedIn posting, will you assist them?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne2">
                                        Do you offer temporary, contract, and permanent positions?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-15">
                                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                                        </p>
                                        <p>
                                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                                        How do you find and screen candidates?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo2" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
                                        What are your fees for hiring services?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree2" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour2" aria-expanded="false" aria-controls="flush-collapseFour2">
                                        How long does it take to find a suitable candidate?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour2" class="accordion-collapse collapse show" aria-labelledby="flush-headingFour2" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-15">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                        <p><a href="#">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour2" aria-expanded="false" aria-controls="flush-collapseFour2">
                                        Can you help with bulk hiring?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour2" class="accordion-collapse collapse show" aria-labelledby="flush-headingFour2" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-15">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                        <p><a href="#">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour2" aria-expanded="false" aria-controls="flush-collapseFour2">
                                        Do you provide background checks and skill assessments?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour2" class="accordion-collapse collapse show" aria-labelledby="flush-headingFour2" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-15">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                        <p><a href="#">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour2" aria-expanded="false" aria-controls="flush-collapseFour2">
                                        Do you provide services for both blue-collar and white-collar jobs?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour2" class="accordion-collapse collapse show" aria-labelledby="flush-headingFour2" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">
                                        <p class="mb-15">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                        <p><a href="#">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

        <section class="section-box bg-blue-full mt-90 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">                <h3 class="mb-20">Want to talk about ideas? <br>Let's get started right now.</h3>
                    </div>
                    <div class="col-lg-4 pl-100 pl-md-15 mt-md-50">
                        <div class="box-button-shadow mr-20">
                            <a href="{{ route(front_route('page.contact')) }}" class="btn btn-default">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include( frontend_module_view('common.newsletter', 'Page') )
    </main>

@endsection
@push('scripts')

@endpush


