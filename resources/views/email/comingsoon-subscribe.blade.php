@extends('layouts.mail.subscribe')

@section('title', 'SUBSCRIPTION NOTIFICATION')

@section('content')
    <div class="card-text-area">
        {{-- <div class="verified-logo-holder">
            <img class="verified-logo" src="{{ asset('images/inbox.png') }}" alt="Subscription Notification" />
            <h3 class="confirmation-text">SUBSCRIPTION NOTIFICATION</h3>
        </div> --}}

        <p class="greeting-text">Hey {{$data['name']}}, </p>
        <p class="thank-you-text">

            We appreciate you for subscribing! You have been added to our mailing list and will soon start receiving information
            about our launch and products.
        </p>
        <br>
        <img class="verified-logo" src="{{ asset('images/thank-you2.png') }}" alt="Thank You" />
        <br> <br>
        <hr class="hr" /> <br>
        <h4 style="text-align: center">
            <b>Thank you for your interest in Optimus Bank Limited.</b>
        </h4> <br>
        <div>
              <p>Please get in touch with us if you have any questions.</p>
              <p><i class='fa fa-heart' style='color: green'></i> from Optimus Bank Limited.</p>
        </div> <br> <br>
        <div class="items-ordered-area" style="margin-top:0px;">
            <div class="my-4 track-order bg-white">
                <div style="display: flex; justify-content: center">
                    <a href="https://www.instagram.com/optimus_bank/" style="mr-2">
                      <img
                        alt="Instagram"
                        src="{{ asset('images/instagram.png') }}"
                        width="30"
                        height="30"
                        class="mr-2"
                      />
                    </a> <br>
                    <a href="https://www.facebook.com/OptimusBank/">
                      <img
                        alt="Facebook"
                        src="{{ asset('images/facebook.png') }}"
                        width="30"
                        height="30"
                        class="mr-2"
                      />
                    </a>
                    <a href="https://www.optimusbank.com/">
                      <img
                        alt="Tiktok"
                        src="{{ asset('images/web.png') }}"
                        width="30"
                        height="30"
                        class="mr-2"
                      />
                    </a>
                    <a href="https://www.linkedin.com/company/optimusbank">
                      <img
                        alt="linkedin"
                        src="{{ asset('images/linkedin.png') }}"
                        width="30"
                        height="30"
                        class="mr-2"
                      />
                    </a>
                    <a href="https://twitter.com/OptimusBank">
                      <img
                        alt="Twitter"
                        src="{{ asset('images/twitter.png') }}"
                        width="30"
                        height="30"
                        class="mr-2"
                      />
                    </a>
              
                  </div>
                

            </div>
        </div>
    </div>
    <hr class="my-3" />
@endsection
