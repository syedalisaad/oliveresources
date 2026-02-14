@extends(front_layout('master'))

{{-- ================= SEO META ================= --}}
@section('title', 'Recruitment & Staffing Services in Pakistan | Olive Resources')

@section('meta_description', 'Olive Resources provides professional recruitment, staffing, executive search, RPO, and HR solutions across Pakistan. Hire top talent with confidence.')

@section('og_title', 'Recruitment & Staffing Services | Olive Resources')
@section('og_description', 'Expert recruitment, executive search, contract staffing, and HR outsourcing services in Pakistan.')
@section('og_image', asset('images/og/services.jpg'))

     @php
                        $services = [
                            ['Permanent Recruitment', 'Connecting organizations with top-tier talent for long-term roles.', [
                                'Industry-specific hiring for entry-level to executive positions.',
                                'Comprehensive vetting for cultural and skill alignment.'
                            ]],
                            ['Contract Staffing', 'Flexible workforce solutions for project-based needs.', [
                                'Rapid deployment of skilled professionals.',
                                'Ongoing contract employee management.'
                            ]],
                            ['Executive Search & Headhunting', 'Identifying high-impact leaders and C-suite professionals.', [
                                'Discreet and targeted search methods.',
                                'Industry-specialized leadership hiring.'
                            ]],
                            ['Talent Acquisition Strategy', 'Custom recruitment strategies aligned with business goals.', [
                                'Workforce planning & employer branding.',
                                'Data-driven hiring insights.'
                            ]],
                            ['Temporary Staffing Solutions', 'Immediate access to skilled temporary professionals.', [
                                'Scalable workforce solutions.',
                                'Seamless team integration.'
                            ]],
                            ['Recruitment Process Outsourcing (RPO)', 'End-to-end recruitment management.', [
                                'Cost reduction & hiring efficiency.',
                                'Dedicated sourcing & onboarding teams.'
                            ]],
                            ['Diversity & Inclusion Hiring', 'Inclusive recruitment strategies.', [
                                'Focused diverse talent sourcing.',
                                'Culture & inclusion consulting.'
                            ]],
                            ['Graduate & Campus Recruitment', 'University hiring programs.', [
                                'Career fairs & internship programs.',
                                'Entry-level talent pipelines.'
                            ]],
                            ['Onboarding & Retention Support', 'Employee engagement & retention strategies.', [
                                'Reduced turnover initiatives.',
                                'Continuous feedback & follow-ups.'
                            ]],
                        ];
                    @endphp
@section('content')
<main class="main">

    <section class="section-box">
        <div class="row">
        <div class="col-lg-12 text-center our-services-banner">
            <h1 class="section-title-large wow animate__animated animate__fadeInUp">
                Recruitment & Staffing Services in Pakistan
            </h1>
            <p class="text-white mt-20 mb-20">
                Olive Resources is a trusted recruitment and staffing agency in Pakistan, delivering permanent recruitment,
                contract staffing, executive search, RPO, and tailored hiring solutions. We help businesses attract, hire,
                and retain top talent while empowering candidates to build successful careers.
            </p>
        </div>

            <div class="container our-services-inner-banner pt-30 pr-30 pl-30">
                <div class="row gridRow gap-y-10 justify-content-center">

                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-news noMt hover-up wow animate__animated animate__fadeIn">
                                <div class="card-info-bottom">
                                    <h3>{{ $service[0] }}</h3>
                                    <p class="text-gray-200">{{ $service[1] }}</p>
                                    <ul class="ulofSer">
                                        @foreach($service[2] as $point)
                                            <li>{{ $point }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    {{-- ================= PRICING ================= --}}
    @include(frontend_module_view('common.price', 'Page'))

    {{-- ================= MISSION / VISION ================= --}}
    <section class="section-box mb-80">
        <div class="container pt-50">
            <div class="row mt-40 gap-y-20 gridRow">
                <div class="col-lg-6">
                    <div class="card-grid mission hover-up wow animate__animated animate__fadeInUp">
                        <h2 class="card-heading">Our Mission</h2>
                        <p class="mt-10">
                            Our mission is to connect exceptional talent with extraordinary opportunities,
                            delivering ethical, innovative recruitment solutions that foster growth and success.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-grid vision hover-up wow animate__animated animate__fadeInUp">
                        <h2 class="card-heading">Our Vision</h2>
                        <p class="mt-10">
                            To be the most trusted recruitment partner, transforming how talent connects with opportunity
                            through technology, inclusivity, and long-term partnerships.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= NEWSLETTER ================= --}}
    @include(frontend_module_view('common.newsletter', 'Page'))

    {{-- ================= SERVICE SCHEMA ================= --}}
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "provider": {
        "@type": "Organization",
        "name": "Olive Resources",
        "url": "https://yourdomain.com"
      },
      "serviceType": "Recruitment and Staffing Services",
      "areaServed": {
        "@type": "Country",
        "name": "Pakistan"
      }
    }
    </script>
    @endverbatim

</main>
@endsection

{{-- ================= SCRIPTS ================= --}}
@push('scripts')
<script src="{{ asset(front_asset('js/plugins/counterup.js')) }}"></script>
@endpush
