<?php
include_once("database.php");
session_start();
$errors = [];

if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (strlen(trim($_POST['password'])) < 8) {
        $errors['password'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password'] = 'Password not matched';
        } else {
            $password = md5($_POST['password']);
        }
    }
    $code = rand(999999, 111111);
    $status = "Not Verified";

    $sql = "SELECT * FROM manager WHERE email = '$email'";
    $res = mysqli_query($conn, $sql) or die('query failed');
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = 'Email is Already Taken';
    }

    if (count($errors) === 0) {
        $insertQuery = "INSERT INTO manager (firstName,lastName,phone,email,password,code,status)
            VALUES ('$fname','$lname','$phone','$email','$password',$code,'$status')";
        $insertInfo = mysqli_query($conn, $insertQuery);

        if ($insertInfo) {

            $subject = 'Email Verification Code';
            $message = "Welcome to the GMS-Guest Manager System!<br> Your Verification Code: $code <br>Use the high-security code provided to reset existing password and generate new password.<br><br>Best Wishs<br>Ayush Gautam [21BCS11582]<br>GMS";
            $sender = 'From: ayushgautam01332@gmail.com';

            if (mail($email, $subject, $message, $sender)) {
                $message = "We have sent a verification code to your registered Email ID<br> $email";

                $_SESSION['message'] = $message;
                header('location: CodeVerification.php');
            } else {
                $errors['otp_errors'] = 'Failed while sending code! Please try again later.';
            }
        } else {
            $errors['db_errors'] = "Failed while inserting data into database!";
        }
    }
}


if (isset($_POST['OTPverify'])) {
    $_SESSION['message'] = "";
    $otp = mysqli_real_escape_string($conn, $_POST['otp']);
    $otp_query = "SELECT * FROM manager WHERE code = $otp";
    $otp_result = mysqli_query($conn, $otp_query);

    if (mysqli_num_rows($otp_result) > 0) {
        $fetch_data = mysqli_fetch_assoc($otp_result);
        $fetch_code = $fetch_data['code'];

        $update_status = "Verified";
        $update_code = 0;

        $update_query = "UPDATE manager SET status = '$update_status' , code = $update_code WHERE code = $fetch_code";
        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            header('location: LoginPage.php');
        } else {
            $errors['db_error'] = "Failed To Insering Data In Database!";
        }
    } else {
        $errors['otp_error'] = "You enter invalid verification code!";
    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $emailQuery = "SELECT * FROM manager WHERE email = '$email'";
    $email_check = mysqli_query($conn, $emailQuery);

    if (mysqli_num_rows($email_check) > 0) {
        $passwordQuery = "SELECT * FROM manager WHERE email = '$email' AND password = '$password'";
        $password_check = mysqli_query($conn, $passwordQuery);
        if (mysqli_num_rows($password_check) > 0) {
            $fetchInfo = mysqli_fetch_assoc($password_check);
            $status = $fetchInfo['status'];
            $name = $fetchInfo['firstName'] . " " . $fetchInfo['lastName'];
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $fetchInfo['email'];
            $_SESSION['password'] = $fetchInfo['password'];
            if ($status === 'Verified') {
                header('location: Site3/AccountPage.php');
            } else {
                $info = "It's look like you haven't still verify your email $email";
                $_SESSION['message'] = $info;
                header('location: CodeVerification.php');
            }
        } else {
            $errors['email'] = 'Password did not matched';
        }
    } else {
        $errors['email'] = 'Invalid Email Address';
    }
}

if (isset($_POST['forgot_password'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $email;

    $emailCheckQuery = "SELECT * FROM manager WHERE email = '$email'";
    $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

    if ($emailCheckResult) {
        if (mysqli_num_rows($emailCheckResult) > 0) {
            $code = rand(999999, 111111);
            $updateQuery = "UPDATE manager SET code = $code WHERE email = '$email'";
            $updateResult = mysqli_query($conn, $updateQuery);
            if ($updateResult) {
                $subject = 'Email Verification Code';
                $message = "Welcome to the GMS-Guest Manager System!<br> Your Verification Code: $code <br>Use the high-security code provided to reset existing password and generate new password.<br><br>Best Wishs<br>Ayush Gautam [21BCS11582]<br>GMS";
                $sender = 'From: ayushgautam01332@gmail.com';

                if (mail($email, $subject, $message, $sender)) {
                    $message = "We've sent a verification code to your Email <br> $email";

                    $_SESSION['message'] = $message;
                    header('location: ForgotPasswordPage.php');
                } else {
                    $errors['otp_errors'] = 'Failed while sending code!';
                }
            } else {
                $errors['db_errors'] = "Failed while inserting data into database!";
            }
        } else {
            $errors['invalidEmail'] = "Invalid Email Address";
        }
    } else {
        $errors['db_error'] = "Failed while checking email from database!";
    }
}
if (isset($_POST['verifyEmail'])) {
    $_SESSION['message'] = "";
    $OTPverify = mysqli_real_escape_string($conn, $_POST['OTPverify']);
    $verifyQuery = "SELECT * FROM manager WHERE code = $OTPverify";
    $runVerifyQuery = mysqli_query($conn, $verifyQuery);
    if ($runVerifyQuery) {
        if (mysqli_num_rows($runVerifyQuery) > 0) {
            $newQuery = "UPDATE manager SET code = 0";
            $run = mysqli_query($conn, $newQuery);
            header("location: NewPassword.php");
        } else {
            $errors['verification_error'] = "Invalid Verification Code";
        }
    } else {
        $errors['db_error'] = "Failed while checking Verification Code from database!";
    }
}

if (isset($_POST['changePassword'])) {
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);

    if (strlen($_POST['password']) < 8) {
        $errors['password_error'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password_error'] = 'Password not matched';
        } else {
            $email = $_SESSION['email'];
            $updatePassword = "UPDATE manager SET password = '$password' WHERE email = '$email'";
            $updatePass = mysqli_query($conn, $updatePassword) or die("Query Failed");
            session_unset();
            session_destroy();
            header('location: LoginPage.php');
        }
    }
}