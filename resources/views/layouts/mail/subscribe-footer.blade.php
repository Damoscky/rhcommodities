<div class="info-area bg-white">
  <div class="items-ordered-area" style="margin-top:0px;">
      <div class="my-4 track-footer bg-white">
          <p class="font-weight-bold bg-white mb-3">
            This email was sent to you because you subscribed. You can opt out of receiving emails from us, if you choose to do so please click on the link to unsubscribe.  
          </p>
          <a href="{{ url(env('CLIENT_BASE_URL') . 'auth/email/unsubscribe/' . $data['email']) }}"
              class="track-footer-btn">Unsubscribe
          </a> <br> <br>
          <p>This will make us really sad <i class='fa fa-user-circle-o' style="color:red"></i> </p>

      </div>
  </div>
  {{-- <p class="bg-white">
    This email was sent to you because you subscribed. You can opt out of receiving emails from us, if you choose to do so please click on the link to unsubscribe.  
  </p>
  <a href="#"
      class="track-order-btn">Verify Email
  </a>
  
    <p class="bg-white mt-2">
      <a class="text-dark bg-white" href="mailto:info@optimusbank.com">info@optimusbank.com</a>
      or call
      <a class="text-dark bg-white" href="tel:+2349099309550">+234 9099 309 550</a>,
      <a class="text-dark bg-white" href="tel:+2349099309550">+234 9099 309 550</a>
  </p> --}}
  <div class="copyright-text">
    <p class="bg-white">
        Copyright &copy; {{ date('Y') }}, Optimus Bank, All rights reserved.
    </p>
  
    <p class="bg-white mt-2">
        No 55 Bishop Oluwole Street,
    </p>
  
    <p class="bg-white mt-2">Victoria Island Lagos, Nigeria</p>
  </div>
</div>



{{-- <div class="footer-area bg-white">
  <div class="card-footer">
    <img
      class="logo-img"
      src="{{asset("images/headeremail.png")}}"
      alt="Optimus Bank"
    />
  </div>
  <img class="bg-white" src="{{ asset('images/Optimus_Logo.png') }}" alt="Optimus Bank" />
</div> --}}
