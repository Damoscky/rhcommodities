@extends('layouts.mail.app')

@section('title', 'CONTACT NOTIFICATION')

@section('content')
    <div class="card-text-area">
        <div class="verified-logo-holder">
            <img class="verified-logo" src="{{ asset('images/inbox.png') }}" alt="Email Verification" />
            <h3 class="confirmation-text">CONTACT NOTIFICATION</h3>
        </div>

        <p class="greeting-text">Hello {{ $data['fullname'] }},</p>
        <p class="thank-you-text">
            Thank you for contacting us. This is an automatic email to confirm that we have receive your request and  we will get in touch with you as soon as possible.
        </p>

        <div class="items-ordered-area" style="margin-top:0px;">
            <div class="my-4 track-order bg-white">
                <p class="font-weight-bold bg-white mb-3">
                    Please visit our website or download our mobile app for more enquires.
                </p>
                

            </div>
        </div>
    </div>
    <hr class="my-3" />
@endsection
