<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

function sendMail($to, $subject, $htmlMessage) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0; // Set to 1 to see detailed info about mail actions
    $mail->Host = "smtp.hostinger.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = "mails@pragathiinteriors.com";
    $mail->Password = "PIMail@2024";
    $mail->setFrom("mails@pragathiinteriors.com", "From Pragathi Interiors");
    $mail->AddAddress($to);
    $mail->Subject = $subject;
    $mail->msgHTML($htmlMessage);

    if ($mail->send()) {
        return true;
    } else {
        return $mail->ErrorInfo;
    }
}

// Message to yourself with user details
$htmlMessageToSelf = '
<!DOCTYPE html>
<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
    <title>User Details</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
</head>
<body>
    <p>Name: '.$name.'</p>
    <p>Email: '.$email.'</p>
    <p>Phone: '.$phone.'</p>
    <p>Message: '.$message.'</p>
</body>
</html>
';

// Message to the user as a confirmation
$htmlMessageToUser = '
<!DOCTYPE html>
<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
    <title>Thank You for Contacting Us</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
</head>
<body>
    <p>Dear '.$name.',</p>
    <p>Thank you for reaching out to Pragathi Interiors! We have received your details and appreciate your interest in our services. Our team is dedicated to transforming spaces with innovative and personalized interior design solutions, and we are thrilled at the opportunity to collaborate with you.

    One of our representatives will review your information and get back to you shortly to discuss your project and how we can best meet your needs. In the meantime, feel free to explore our portfolio and services on our website to get a sense of what we can offer.
    
    If you have any immediate questions or need further assistance, please do not hesitate to contact us at +91 9940239064</p>
    
    <p>Best regards,<br>Pragathi Interiors Team<br>
    <a href="www.pragathiinteriors.com">www.pragathiinteriors.com</a></p>
</body>
</html>
';

// Send mail to yourself(admin)
$result1 = sendMail("contact@pragathiinteriors.com", "User Details", $htmlMessageToSelf);

// Send confirmation mail to the user(who fills the form)
$result2 = sendMail($email, "Thank You for Contacting Us", $htmlMessageToUser);

// Check the results
if ($result1 === true && $result2 === true) {
    echo "<script>alert('Messages sent successfully!'); window.location.href='contact.php';</script>";
} else {
    $error = "Message could not be sent. Mailer Error: ";
    if ($result1 !== true) {
        $error .= "Error for admin email: $result1. ";
    }
    if ($result2 !== true) {
        $error .= "Error for user email: $result2. ";
    }
    echo "<script>alert('$error'); window.location.href='contact.php';</script>";
}

?>
