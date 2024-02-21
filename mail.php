<html>
<body>


<?php
$location = $_POST["location"];
$name = $_POST['name'];
$sender = $_POST["email"];
$subject = $_POST["sub"];
$message = $_POST["msg"];

$headers = "Reply-To: The Sender <$sender>\r\n";
$headers .= "Return-Path: The Sender <$sender>\r\n";
$headers .= "From: <$sender>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

$thanksmessage = '<div style="font-family: Times New Roman, Helvetica, sans-serif;"><table width="600" style="margin:0 auto;"><tr style="background: rgb(231,241,243); background: linear-gradient(180deg, rgba(255,255,255,1) 13%, rgba(231,241,243,1) 54%);background-color: #eff2f7;"><td style="padding: 0px 21px"><img src="https://www.healingtouchpediatrics.com/assets/img/email-header-img.png" width="100%" style="padding-bottom:15px;"><div style="font-weight: 600; font-size: 16px;"><p>Dear '.$name.'</p><p>This is a quick mail to confirm your query has been received by Healing Touch Pediartics Team.</p><p>We will work on your problem and share the update quickly.</p><p style="text-align:right; margin-top:40px;">Thank You for submiting & Stay Healthy!!</p><div style="text-align:right;    width: 85%;"><a href="https://www.healingtouchpediatrics.com"><img src="https://www.healingtouchpediatrics.com/assets/img/logo_email.png" width="150"></a></div></div></td></tr></table></div>';

// Determine recipient email based on location
$recipient_email = "";
if ($location === "arlington_tx76018") {
    $recipient_email = "info@healingtouchpediatrics.com";
} elseif ($location === "frisco_tx75033") {
    $recipient_email = "contact@prohealthstudiopediatrics.com";
} elseif ($location === "plano_tx75024") {
    $recipient_email = "contact@sevenhillspediatrics.com";
}

if (!empty($recipient_email)) {
    // Send email to recipient
    mail($recipient_email, $subject, $message, $headers);

    // Send thank you email to sender
    $headers_thanks = "From: Healing Touch Pediatrics <info@healingtouchpediatrics.com>\r\n";
    $headers_thanks .= "Content-type: text/html; charset=iso-8859-1\r\n";
    mail($sender, "Thanks For Submiting..", $thanksmessage, $headers_thanks);
}

?>

<h1 align="center">Email sent successfully!!!</h1>
<div class="form-group">
    <a href="./contact.html"><h2  align="center">GO Back</h2></a>
</div>

</body>
</html>
