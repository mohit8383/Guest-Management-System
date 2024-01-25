<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "art_gallery_ceremony_guest";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['submit']) && !empty($_POST['submit'])) {
  if (
    isset($_POST['fname']) && isset($_POST['lname']) &&
    isset($_POST['email']) && isset($_POST['[phone']) &&
    isset($_POST['ad']) && isset($_POST['attendee'])
  ) {

    $username = $_POST['fname'];
    $password = $_POST['lname'];
    $gender = $_POST['email'];
    $email = $_POST['phone'];
    $phoneCode = $_POST['ad'];
    $phone = $_POST['attendee'];

    if ($conn->connect_error) {
      die('Could not connect to the database.');
    } else {
      $Select = "SELECT Email FROM art_guest_registration WHERE email = ? LIMIT 1";
      $Insert = "INSERT INTO art_guest_registration(fname, lname, email, phone, ad, attendee) values(?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($Select);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->bind_result($resultEmail);
      $stmt->store_result();
      $stmt->fetch();
      $rnum = $stmt->num_rows;
      if ($rnum == 0) {
        $stmt->close();
        $stmt = $conn->prepare($Insert);
        $stmt->bind_param("sssssi", $fname, $lname, $email, $phone, $ad, $attendee);
        if ($stmt->execute()) {
          echo "Thank You! You have successfully registered for the Art Gallery Event.";
        } else {
          echo $stmt->error;
        }
      } else {
        echo "Email ID already exist.";
      }
      $stmt->close();
      $conn->close();
    }
  } else {
    echo "All field are required.";
    die();
  }
}
?>