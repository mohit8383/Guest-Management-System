<?php
include_once("controller.php");
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Guest Manager System, Welcome to GMS">
  <meta name="description" content="">
  <title>LoginPage</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="LoginPage.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.9.10, nicepage.com">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Bungee+Shade:400|Aclonica:400|Allerta+Stencil:400|Akaya+Telivigala:400">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": ""
}</script>
  <meta name="theme-color" content="#66c5e8">
  <meta property="og:title" content="LoginPage">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <div class="loader"></div>
  <section class="u-clearfix u-section-1" id="carousel_c111">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-custom-font u-text u-text-default u-text-1" data-animation-name="customAnimationIn"
        data-animation-duration="1000">Guest Manager System</h2>
      <h1 class="u-custom-font u-text u-text-default u-text-2" data-animation-name="customAnimationIn"
        data-animation-duration="1000">Welcome to GMS</h1>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-size-60 u-white u-layout-cell-1"
              data-animation-name="customAnimationIn" data-animation-duration="1000">
              <div class="u-container-layout u-container-layout-1">
                <div class="u-align-left u-form u-form-1">
                  <form action="LoginPage.php" method="POST" autocomplete="OFF"
                    class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 0px;"
                    source="email" name="form">
                    <div class="u-form-group u-form-name u-label-top">
                      <label for="name-5a14" class="u-label" wfd-invisible="true">Email</label>
                      <input type="email" placeholder="User name or Email" id="name-5a14" name="email"
                        class="u-border-none u-custom-font u-grey-5 u-input u-input-rectangle u-radius-7 u-input-1"
                        required="">
                    </div>
                    <div class="u-form-email u-form-group u-label-top">
                      <label for="email-5a14" class="u-label" wfd-invisible="true">Password</label>
                      <input type="password" placeholder="Valid Password" id="email-5a14" name="password"
                        class="u-border-none u-custom-font u-grey-5 u-input u-input-rectangle u-radius-7 u-input-2"
                        required>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit u-label-top" style="margin-bottom:10px;">
                      <button type="submit" value="Login" name="login" class="btn btn-secondary btn-lg"><a
                          href="Site3/AccountPage.php" style="color:white">Login</a></button>
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Successful Login !.</div>
                    <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Successful Login !</div>
                    <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                    <input type="hidden" name="formServices" value="787f48a381f6743a0333a6a64a63c8e4">
                  </form>
                </div>
                <h5 class="u-custom-font u-text u-text-default u-text-3" style="margin-top:1.5px;">
                  <a href="http://localhost/Guest-Manager-System/ForgotPasswordPage.php"
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2">FORGOT
                    PASSWORD ?</a>
                </h5>
                <h5 class="u-custom-font u-text u-text-default u-text-grey-75 u-text-4">OR</h5>
                <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-1995888031%3A1684384193942606&authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&hl=en&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession"
                  class="u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-font-merriweather u-none u-btn-4"><span
                    class="u-file-icon u-icon u-icon-1"><img src="images/300221.png" alt=""></span>&nbsp;Sign in with
                  google
                </a>
                <a href="http://localhost/Guest-Manager-System/SignUpPage.php"
                  class="u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-font-merriweather u-hover-feature u-none u-btn-5">New
                  USER ? CREATE ACCOUNT</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="u-image u-image-contain u-image-default u-image-1"
        src="images/man-cartoon-with-laptop-at-desk-working-design-free-vector.jpg" alt="" data-image-width="6323"
        data-image-height="5864" data-animation-name="customAnimationIn" data-animation-duration="1000">
    </div>
  </section>

  <script>
    window.addEventListener("load", () => {
      const loader = document.querySelector(".loader");

      loader.classList.add("loader--hidden");

      loader.addEventListener("transitionend", () => {
        document.body.removeChild(loader);
      });
    });
  </script>

</body>

</html>