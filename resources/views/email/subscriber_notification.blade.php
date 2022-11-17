@extends('layouts.mail.app')

@section('title', 'CONTACT NOTIFICATION')

@section('content')
    <div class="card-text-area">
        <div class="verified-logo-holder">
            <img class="verified-logo" src="{{ asset('images/inbox.png') }}" alt="Email Verification" />
            <h3 class="confirmation-text">NEWSLETTER NOTIFICATION</h3>
        </div>

        <p class="greeting-text">Hello,</p>
        <p class="thank-you-text">
            You're receiving this email because you have successfully subscribed to our newsletter.
        </p>

        <div class="items-ordered-area" style="margin-top:0px;">
            <div class="my-4 track-order bg-white">
               
                <a href="{{ url(env('CLIENT_BASE_URL') . 'auth/email-verified/' . $data['verification_code']) }}"
                    class="track-order-btn">Unsubscribe
                </a>
            </div>
        </div>
    </div>
    <hr class="my-3" />
@endsection
