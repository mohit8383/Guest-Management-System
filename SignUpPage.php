<?php
include_once("controller.php");
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​Get Started">
  <meta name="description" content="">
  <title>SignUpPage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="SignUpPage.css" media="screen">
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.9.10, nicepage.com">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Bungee+Shade:400|Allerta+Stencil:400">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": ""
}</script>
  <meta name="theme-color" content="#66c5e8">
  <meta property="og:title" content="SignUpPage">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <div class="loader"></div>
  <section class="u-align-center u-clearfix u-container-align-center u-image u-section-1" id="carousel_4f2a"
    data-image-width="1945" data-image-height="1440">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-align-center u-custom-font u-text u-text-default u-text-1" data-animation-name="customAnimationIn"
        data-animation-duration="1000"> Guest Manager System</h2>
      <div class="u-form u-radius-20 u-white u-form-1">
        <form action="SignUpPage.php" method="POST" autocomplete="on"
          class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="email" name="form"
          style="padding: 38px;">

          <h4 class="u-align-left u-custom-font u-font-merriweather u-form-group u-form-text u-text u-text-2">Sign Up
            a<span style="font-weight: 700;"></span>s a Manager<br>
            <span style="font-size: 1.125rem;">It's quick and easy</span>
          </h4>
          <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
            <label for="name-be0e" class="u-label">First Name*</label>
            <input type="text" placeholder="Enter your First Name" name="fname"
              class="u-custom-font u-input u-input-rectangle u-input-1" required>
          </div>
          <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-3">
            <label for="name-be0e" class="u-label">Last Name*</label>
            <input type="text" placeholder="Enter your Last Name" name="lname"
              class="u-custom-font u-input u-input-rectangle u-input-2" required>
          </div>
          <div class="u-form-group u-form-phone u-form-group-4">
            <label class="u-label">Phone No.*</label>
            <input type="number" placeholder="Enter your Phone No.(e.g. +918415555265)" name="phone"
              class="u-custom-font u-input u-input-rectangle u-input-3" required>
          </div>
          <div class="u-form-email u-form-group u-form-group-5">
            <label class="u-label"> Email*</label>
            <input type="email" placeholder="Enter a valid email address" name="email"
              class="u-custom-font u-input u-input-rectangle u-input-4" required>
          </div>
          <div class="u-form-group u-form-group-6">
            <label class="u-label">New Password*</label>
            <input type="password" placeholder="Create new Password" name="password"
              class="u-custom-font u-input u-input-rectangle u-input-5">
          </div>
          <div class="u-form-group u-form-group-7">
            <label class="u-label">Confirm Password*</label>
            <input type="password" placeholder="Re-enter Password" name="confirmPassword"
              class="u-custom-font u-input u-input-rectangle u-input-6" required>
            <div style="margin-top:10px" class="u-align-center u-form-group u-form-submit u-label-top">
              <button class="btn btn-secondary btn-lg" type="submit" placeholder="Sign Up" name="signup"><a
                  href="http://localhost/Guest-Manager-System/CodeVerification.php" style="color:white;">Sign UP</a></button>
            </div>
          </div>
          <div class="u-form-send-message u-form-send-success"> Successful Login !.</div>
                    <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Successful Sign Up !</div>
        </form>
        <h5 class="u-align-center u-custom-font u-text u-text-default u-text-3">Already a Manager ? <a
            href="http://localhost/Guest-Manager-System/LoginPage.php"
            class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-dark-1 u-btn-2">SIGN
            IN</a>
        </h5>
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