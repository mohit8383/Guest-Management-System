<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Wedding Guest Registration Form">
  <meta name="description" content="">
  <title>BirthdayPartyRegistrationForm</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="BirthdayPartyRegistrationForm.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.9.10, nicepage.com">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Aladin:400|Akaya+Kanadaka:400">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": ""
}</script>
  <meta name="theme-color" content="#66c5e8">
  <meta property="og:title" content="BirthdayPartyRegistrationForm">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <div class="container">

  <?php
    if (isset($_POST["submit"])) {

      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $firstline = $_POST["firstline"];
      $secondline = $_POST["secondline"];
      $attendee = $_POST["attendee"];


      $errors = array();

      if (
        empty($fname) or empty($lname) or empty($email) or empty($phone) or empty($firstline) or empty($secondline) or
        empty($attendee)
      ) {
        array_push($errors, "All fields are required");
      }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
      }

      require_once "guestdatabase.php";
      $sql = "SELECT * FROM birthdayguest WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if ($rowCount > 0) {
        array_push($errors, "Email already exists!");
      }
      if (count($errors) > 0) {
        foreach ($errors as $error) {
          echo "<div class='alert alert-danger'>$error</div>";
        }
      } else {

        $sql = "INSERT INTO birthdayguest (fname, lname, email, phone, firstline, secondline, attendee ) VALUES ( ?, ?,
    ?, ?, ?, ?, ? )";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
          mysqli_stmt_bind_param($stmt, "ssssssi", $fname, $lname, $email, $phone, $firstline, $secondline, $attendee);
          mysqli_stmt_execute($stmt);
          echo "<div class='alert alert-success'>Thank you! You have registered successfully for the event.</div>";
        } else {
          die("Something went wrong! Please try again later");
        }
      }

    }
    ?>

    <section class="u-clearfix u-white u-section-1" id="carousel_3895">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div
                class="u-container-align-center u-container-style u-image u-image-round u-layout-cell u-radius-50 u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1"
                data-image-width="4480" data-image-height="6720" data-animation-name="customAnimationIn"
                data-animation-duration="1000">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div
                class="u-align-left u-container-style u-layout-cell u-size-40-lg u-size-40-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-2"
                data-animation-name="customAnimationIn" data-animation-duration="1000">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-custom-font u-text u-text-palette-1-dark-2 u-text-1"
                    data-animation-name="customAnimationIn" data-animation-duration="1000">Bithday-Party Guest
                    Registration Form</h2>
                  <div class="u-form u-form-1">
                    <form action="BirthdayPartyRegistrationForm.php" method="post"
                      class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="email" name="form"
                      style="padding: 28px;">
                      <p class="u-align-center u-custom-font u-form-group u-form-text u-text u-text-2"> "Join me for a
                        birthday bash! Celebrate with fun, food, and friends. Save the date!"</p>
                      <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
                        <label for="name-3b6b" class="u-label">First Name</label>
                        <input type="text" placeholder="Enter your First Name" id="name-3b6b" name="fname"
                          class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none"
                          required="">
                      </div>
                      <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-3">
                        <label for="name-3b6b" class="u-label">Last Name</label>
                        <input type="text" placeholder="Enter your Last Name" id="name-3b6b" name="lname"
                          class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none"
                          required="">
                      </div>
                      <div class="u-form-email u-form-group u-form-group-4">
                        <label for="email-a1f4" class="u-label">Email</label>
                        <input type="email" placeholder="Enter a valid email address" id="email-a1f4" name="email"
                          class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none"
                          required="">
                      </div>
                      <div class="u-form-group u-form-phone u-form-group-5">
                        <label for="phone-ae91" class="u-label">Phone</label>
                        <input type="tel"
                          pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                          placeholder="Enter your phone (e.g. +14155552675)" id="phone-ae91" name="phone"
                          class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none"
                          required="">
                      </div>
                      <div class="u-form-group u-form-group-6">
                        <label for="text-30f4" class="u-label">Address</label>
                        <input type="text" placeholder="Line 1" id="text-30f4" name="firstline"
                          class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                      </div>
                      <div class="u-form-group u-form-group-7">
                        <label for="text-cfac" class="u-form-control-hidden u-label"></label>
                        <input type="text" placeholder="Line 2" id="text-cfac" name="secondline"
                          class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                      </div>
                      <div class="u-form-group u-form-select u-form-group-8">
                        <label for="select-b0cb" class="u-label">No. of Attendee</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-b0cb" name="attendee"
                            class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                            <option value="One Attendee" data-calc="One Attendee">1</option>
                            <option value="Two Attendee" data-calc="Two Attendee">2</option>
                            <option value="Three Attendee" data-calc="Three Attendee">3</option>
                            <option data-calc="Four Attendee" value="Four Attendee">4</option>
                            <option data-calc="More Than Four Attendee" value="More Than Four Attendee">More Than 4
                            </option>
                          </select>
                          <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                            viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                            <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                          </svg>
                        </div>
                      </div>
                      <div class="u-align-center u-form-group u-form-submit">
                        <input class="btn btn-secondary btn-lg" type="submit" value="submit" class="u-form">
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent.
                      </div>
                      <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors
                        then try again. </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                      <input type="hidden" name="formServices" value="787f48a381f6743a0333a6a64a63c8e4">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>