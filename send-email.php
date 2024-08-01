<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["phone"];
$message = $_POST["message"];


print_r($name.$email);
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
// $mail->SMTPDebug = 1; // Uncomment to see detailed info about mail actions
$mail->Host = "smtp.hostinger.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "mails@blackitechs.com";
$mail->Password = "BitsMail@2022";
$mail->setFrom("mails@blackitechs.com", "FROM Pragathi");
$mail->AddAddress("contact@pragathiinteriors.com");
$mail->Subject = "PRAGATHI INTERIORS USER DETAILS";
$mail->msgHTML('
            <!DOCTYPE html>
            <html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">

            <head>
                <title>This is the PHP Mailer</title>
                <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
                <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            </head>

            <body>
                <br><br>
                <p>
                    Name .'.$name.'
                </p><br>
                <p>
                    Number.'.$subject.'
                </p><br>
                <p>
                    Message.'.$message.'
                </p><br>
            </body>

            </html>
            ');
if($mail->send()){
    echo('success');
}
else{
    echo('failure');
    echo($mail->ErrorInfo);

}