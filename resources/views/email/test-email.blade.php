<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;400&display=swap" rel="stylesheet" />
    <title>@yield('title')</title>

    <style>
 .footer {
  width: 100%;
  margin-top: 2rem;
  min-height: 40vh;
  background-image: url("/assets/footer-2.svg");
  background-repeat: no-repeat;
  background-size: cover;
  text-align: center;
}

.hr {
  margin: 2rem 0;
}

.footer-content {
  background-color: #fff;
  font-size: 1rem;
  text-align: center;
  color: #000000;
  width: 100%;
  display: flex;
  justify-content: center;
  height: 100%;
  padding: 2rem;
}

@media (min-width: 576px) {
  .footer {
    padding: 2rem;
  }
}
@media (min-width: 992px) {
  .footer {
    padding: 3rem;
  }
}
@media (min-width: 1440px) {
  .footer {
    padding: 3rem 4rem;
  }
}

    </style>
</head>

<body>

    <div class="header">
  <img src="/assets/The new onr.svg" alt="" style="width: 100%" height="" />
</div>

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
        src="/assets/optimus.svg"
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
        src="/assets/instagram.svg"
        width="30"
        height="30"
        class="mr-2"
      />
    </a>
    <a href="https://www.facebook.com/OptimusBank/">
      <img
        alt="Facebook"
        src="/assets/facebook.svg"
        width="30"
        height="30"
        class="mr-2"
      />
    </a>
    <!-- <a href="https://www.tiktok.com/@optimusbank">
      <img
        alt="Tiktok"
        src="/assets/facebook.svg"
        width="30"
        height="30"
        class="mr-2"
      />
    </a> -->
    <a href="https://www.linkedin.com/@optimusbank">
      <img
        alt="linkedin"
        src="/assets/linkedin.svg"
        width="30"
        height="30"
        class="mr-2"
      />
    </a>
    <a href="https://twitter.com/OptimusBank">
      <img
        alt="Twitter"
        src="/assets/twitter.svg"
        width="30"
        height="30"
        class="mr-2"
      />
    </a>
    <a href="https://twitter.com/OptimusBankHelp">
      <img
        alt="Twitter help"
        src="/assets/web.svg"
        width="30"
        height="30"
        class="mr-2"
      />
    </a>
  </div>
</div>

<div class="footer">
  <div class="footer-content">
    <div>
      <p>
        This email was sent to you because you subscribed. You can opt out of
        receiving emails from us, if you choose to do so you can
      </p>
      <a style="color: green" href="https://optimusbank.com">unsubscribe</a>
      <p style="padding: 2px; margin: 0">here</p>
      <p>but that will make us really sad .</p>
      <p>Copyright &copy; {{ "date" }}, Optimus Limited.</p>
      <p style="padding: 0; margin: 0">
        55 Bishop Oluwole Street, Victoria Island, Lagos
      </p>
    </div>
  </div>
</div>

</body>

</html>
