@extends('layouts.mail.app')

@section('title', 'TEMPORARY PORTAL')

@section('content')
    <div class="card-text-area">
        <div class="verified-logo-holder">
            <img class="verified-logo" src="{{ asset('images/contact-us.png') }}" alt="TEMPORARY PORTAL" />
            <h3 class="confirmation-text">{{$data['account']['accountClass']['name']}} Temporary Portal</h3>
        </div>

        <p class="greeting-text">Hello {{ $data['name'] }},</p>
        <p class="thank-you-text">
            We are happy to inform you that your <strong>{{$data['account']['accountClass']['name']}}</strong> opening is successful, and we at Optimus Bank are happy to onboard you to the Optimus Bank Family, where the success of your business is our priority. <br><br>
            Details of your account are as follows: <br><br>

            <strong>Account Name:</strong> {{$data['account']['account_name']}} <br>
            <strong>Account Number:</strong> {{$data['account']['account_number']}} <br>
            <strong>Bank Name:</strong> Optimus Bank LTD <br> <br>

            Following the success of your Account opening, we still need to do some background checks, and reviews, before we approve your business account for full optimal operation. <br><br>
            Given the above, we have created a temporary portal for you that serves that need, where you stay up to date on the status of your business document review (final steps to a full functioning business account).

        </p>

        <div class="items-ordered-area" style="margin-top:0px;">
            <div class="my-4 track-order bg-white">
                <p class="font-weight-bold bg-white mb-3">
                    Please click the button below to continue.
                </p>
                <a href="{{ url(env('CLIENT_BASE_URL') . 'auth/create-password/' . $data['verification_code'].'/'.$data['email']) }}"
                    class="track-order-btn">Login to Temporary Portal
                </a>

            </div>
        </div>
    </div>
    <hr class="my-3" />
@endsection
