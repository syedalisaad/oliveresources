@component('mail::message')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');
    body, table, td, p, a, div { font-family: 'Plus Jakarta Sans', Helvetica, Arial, sans-serif !important; }
</style>

<div style="margin: -32px; background-color: #f8fafc;">
    <!-- Brand Logo Header -->
    <center style="padding: 35px 0; background-color: #ffffff;">
        <a href="{{ url('/') }}" style="display: block; text-decoration: none;">
            <img src="{{ asset(front_asset('imgs/theme/logo.png')) }}" alt="Olive Resources Logo" style="vertical-align: middle; max-height: 50px; border: 0;" />
        </a>
    </center>

    <!-- Welcome Hero Graphic Banner -->
    <div style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); text-align: center; padding: 50px 40px;">
        <h4 style="color: #ffffff; font-size: 32px; font-weight: 700; margin: 0; letter-spacing: -0.5px;">Welcome to Olive Resources</h4>
        <p style="color: #94a3b8; font-size: 16px; margin: 10px 0 0; font-weight: 400;">Your Strategic Human Capital & Talent Partner</p>
    </div>

    <!-- Core Message Body -->
    <div style="padding: 45px 40px 50px; text-align: center; background-color: #ffffff;">
        <span style="font-size: 20px; font-weight: 600; color: #0f172a; display: block; margin-bottom: 15px;">Hello,</span>
        
        <p style="font-size: 16px; line-height: 1.7; color: #475569; margin: 0 auto 30px; max-width: 520px;">
            Thank you for subscribing to our corporate insights channel. You are now connected with Olive Resources. Moving forward, you will receive high-impact workforce strategies, global hiring updates, and executive market insights directly in your inbox.
        </p>

        <!-- CTA Aesthetic Divider -->
        <div style="margin: 20px auto; width: 60px; height: 3px; background-color: #8FA43E; border-radius: 2px;"></div>

        <p style="font-size: 15px; color: #64748b; margin: 20px 0 0; font-weight: 500;">
            Regards,<br>
            <span style="color: #0f172a; font-weight: 600;">{!! email_template_sitename($site_settings) !!}</span>
        </p>
    </div>

    <!-- Get in Touch Support Area -->
    <div style="background: #f1f5f9; padding: 35px 40px; text-align: center; border-top: 1px solid #e2e8f0;">
        <h4 style="color: #0f172a; font-size: 16px; font-weight: 700; text-uppercase; letter-spacing: 1px; margin: 0 0 15px;">GET IN TOUCH</h4>
        
        @if(!empty($site_settings['contact_support']['contact_number']))
            <a style="font-size: 15px; text-decoration: none; color: #475569; font-weight: 500; display: inline-block; margin-bottom: 8px;" href="tel:+{{ preg_replace( '/[^0-9]/', '', $site_settings['contact_support']['contact_number']) }}">
                📞 {{ $site_settings['contact_support']['contact_number'] }}
            </a>
            <br>
        @endif
        
        <a style="font-size: 15px; text-decoration: none; color: #8FA43E; font-weight: 600;" href="mailto:{{ $site_settings['sites']['email_info'] }}">
            ✉️ {{ $site_settings['sites']['email_info'] }}
        </a>
    </div>

    <!-- Corporate Footer Bar -->
    <div style="background: #0f172a; text-align: center; color: #94a3b8; font-size: 13px; padding: 20px 20px; line-height: 1.5;">
        Copyright © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        <br>
        <span style="font-size: 11px; color: #64748b; display: inline-block; margin-top: 5px;">You are receiving this automated email because you subscribed on our platform.</span>
    </div>
</div>
@endcomponent