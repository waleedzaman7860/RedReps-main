@component('mail::message')
<img src="{{ asset('assets/logo.png') }}"  width="60px" height="60px" alt="">
<p>
Dear {{ $data['firstname'] }},
</p>

<p>
Thank you for applying for the {{ $data['vacancy'] }} role at {{ config('app.name') }}. Your application is
confirmed,
and we appreciate your
interest.
</p>

<p>
Here's what's next:
</p>

<p>
Application Review: Our team will carefully review your application.
</p>

<p>
Screening: If you match our requirements, we'll reach out for an initial interview.
</p>

<p>
Updates: We'll keep you informed throughout the process.
</p>

<p>
Questions? Contact us at hello@redrep.io.
</p>


<p>
Best regards,<br>
{{ env('MAIL_SENDER_NAME') }}<br>
Head of Talent Acquisition<br>
{{ config('app.name') }}
</p>
@endcomponent
