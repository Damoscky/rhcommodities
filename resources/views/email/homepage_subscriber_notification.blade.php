@extends('layouts.mail.app')

@section('title', 'SUBSCRIBER NOTIFICATION')

@section('content')
 <div style="margin: auto; width: 80%; color: #000000">
    <p class="">Hey,</p>
    <p class="">
      We appreciate you for subscribing! You have been added to our mailing list
      and will soon start receiving information about our launch and products.
    </p>
  
    <div class="my-2">
      <a class="footer-area bg-white">
        <img
          class="bg-white"
          src="{{ asset('images/thank-you.png') }}"
          alt="Optimus Bank"
          width="100%"
        />
      </a>
    </div>
  
    <hr class="hr" />
    <h4 style="text-align: center">
      Thank you for your interest in Optimus Bank Limited.
    </h4>
    <div>
      <h5 style="font-weight: 400">
        Please get in touch with us if you have any questions.
      </h5>
      <h5 style="font-weight: 400">Love from Optimus Bank Limited.</h5>
    </div>
  
    <div style="display: flex; justify-content: center">
      <a href="https://www.instagram.com/optimus_bank/">
        <img
          alt="Instagram"
          src="{{ asset('images/instagram.png') }}"
          width="30"
          height="30"
          class="mr-2"
        />
      </a>
      <a href="https://www.facebook.com/OptimusBank/">
        <img
          alt="Facebook"
          src="{{ asset('images/facebook.png') }}"
          width="30"
          height="30"
          class="mr-2"
        />
      </a>
      <a href="https://www.tiktok.com/@optimusbank">
        <img
          alt="Tiktok"
          src="{{ asset('images/web.png') }}"
          width="30"
          height="30"
          class="mr-2"
        />
      </a>
      <a href="https://www.linkedin.com/@optimusbank">
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
      <a href="https://twitter.com/OptimusBankHelp">
        <img
          alt="Twitter help"
          src="{{ asset('images/twitter.png') }}"
          width="30"
          height="30"
          class="mr-2"
        />
      </a>
    </div>
  </div>
  
  
  





{{-- 
    <div class="card-text-area">

        <p class="thank-you-text">Hey,</p>
        <p class="thank-you-text">
            We appreciate you for subscribing! You have been added to our mailing list and will soon start receiving information about our launch and products.
        </p>

        <div class="my-2">
            <a class="footer-area bg-white">
                <img class="bg-white" src="{{ asset('images/thank-you.png') }}" alt="Optimus Bank" width="100%"/>
            </a>   
        </div>   

        <hr class="my-3" />

        <p class="bg-white">
            <b>Thank you for your interest in Optimus Bank Limited.</b>
        </p>
        <p class="thank-you-text">
            Please get in touch with us if you have any questions.
        </p>
        <p class="thank-you-text">
            Love from Optimus Bank Limited.
        </p>

        <div class="my-3">
            <a href="https://www.instagram.com/optimus_bank/">
                <img alt="Instagram" src="{{ asset('images/instagram.png') }}"
                width="20" height="20" class="mr-2">
             </a>
             <a href="https://www.facebook.com/OptimusBank/">
                <img alt="Facebook" src="{{ asset('images/facebook.png') }}"
                width="20" height="20" class="mr-2">
             </a>
             <a href="https://www.tiktok.com/@optimusbank">
                <img alt="Tiktok" src="{{ asset('images/web.png') }}"
                width="20" height="20" class="mr-2">
             </a>
             <a href="https://twitter.com/OptimusBank">
                <img alt="Twitter" src="{{ asset('images/twitter.png') }}"
                width="20" height="20" class="mr-2">
             </a>
             <a href="https://twitter.com/OptimusBankHelp">
                <img alt="Twitter help" src="{{ asset('images/twitter.png') }}"
                width="20" height="20" class="mr-2">
             </a>
         </div>
    </div>
    <hr class="my-3" /> --}}
@endsection
