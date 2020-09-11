<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer(true);

try {
  $referrals_name         = $_POST['referrals_name'];
  $referrals_company_name = $_POST['referrals_company_name'];
  $referrals_email        = $_POST['referrals_email'];
  $skype_phone            = $_POST['skype_phone'];
  $directly               = $_POST['directly'];
  $through_me             = $_POST['through_me'];
  $name                   = $_POST['name'];
  $email                  = $_POST['email'];
  $company                = $_POST['company'];

  $body =
    "<strong>From:</strong> " . $name . " (" . $email . ")<br/>" .
    "<br/><br/>" .
    "<strong><big>Referral Details</big></strong><br/>" .
    "<strong>Name:</strong> " . $referrals_name . "<br/>" .
    "<strong>Email:</strong> " . $referrals_email . "<br/>" .
    "<strong>Skype/Phone:</strong> " . $skype_phone . "<br/>" .
    "<strong>Company Name:</strong> " . $referrals_company_name . "<br/>" .
    "<br/>" .
    "<strong><big>User Details</big></strong><br/>" .
    "<strong>Name:</strong> " . $name . "<br/>" .
    "<strong>Email:</strong> " . $email . "<br/>" .
    "<strong>Company Name:</strong> " . $company . "<br/>" .
    "<br/>" .
    "<strong>Preferred outreach method</strong><br/>" .
    "<strong>Directly:</strong> " . ($directly == "true" ? "Yes" : "No") . "<br/>" .
    "<strong>Through Me:</strong> " . ($through_me == "true" ? "Yes" : "No") . "<br/>" .


    "<br/><br/><br/>" . "-------------" . "<br/><br/><br/>" .
    "This e-mail was sent from a contact form on venedash.io (https://www.venedash.io/referral)" . "<br/><br/><br/>" .
    "<strong>" . date("h:m:i d/m/Y") . "</strong>";

  $mail->Host = 'localhost';
  $mail->Port = 25;
  $mail->setfrom('info@venedash.io', 'dash-referral');
  $mail->addReplyTo($email);
  $mail->addaddress('dash-sales@vene.io', 'dash-sales@vene.io');
  $mail->Subject = 'New vene dash request from referral page';
  $mail->msgHTML($body);
  $mail->send();
  echo "<strong>Success! </strong> Thanks for the message.";

} catch (phpmailerException $e) {
  echo $e->errorMessage();
} catch (Exception $e) {
  echo $e->getMessage();
}

?>
