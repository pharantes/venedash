<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer(true);

try {
    $legal_company_name    = $_POST['legal_company_name'];
    $company_address       = $_POST['company_address'];
    $tax_number            = $_POST['tax_number'];
    $full_name             = $_POST['full_name'];
    $contact_email         = $_POST['contact_email'];
    $skype_id              = $_POST['skype_id'];
    $phone_number          = $_POST['phone_number'];
    $finance_contact_name  = $_POST['finance_contact_name'];
    $finance_contact_email = $_POST['finance_contact_email'];
    $hosted_region         = $_POST['hosted_region'];
    $default_currency      = $_POST['default_currency'];
    $platform_name         = $_POST['platform_name'];
    $desired_plan          = $_POST['desired_plan'];
    $business_model        = $_POST['business_model'];
    $other_model           = $_POST['other_model'];
    $clicks_month          = $_POST['clicks_month'];
    $conversions_month     = $_POST['conversions_month'];
    $current_platform      = $_POST['current_platform'];
    $start_date            = $_POST['start_date'];

    $body =
        "<strong>Legal Company Name:</strong> " . $legal_company_name . "<br/>" .
        "<strong>Company Address:</strong> " . $company_address . "<br/>" .
        "<strong>VAT/Tax Number:</strong> " . $tax_number . "<br/>" .
        "<strong>Full Name:</strong> " . $full_name . "<br/>" .
        "<strong>Contact Email:</strong> " . $contact_email . "<br/>" .
        "<strong>Skype ID:</strong> " . $skype_id . "<br/>" .
        "<strong>Phone Number:</strong> " . $phone_number . "<br/>" .
        "<strong>Finance Contact Name:</strong> " . $finance_contact_name . "<br/>" .
        "<strong>Finance Contact Email:</strong> " . $finance_contact_email  . "<br/>" .
        "<strong>Hosted Region:</strong> " . $hosted_region . "<br/>" .
        "<strong>Default Currency:</strong> " . $default_currency . "<br/>" .
        "<strong>Platform Name:</strong> " . $platform_name . "<br/>" .
        "<strong>Desired Plan:</strong> " . $desired_plan . "<br/>" .
        "<strong>Business Model:</strong> " . $business_model . "<br/>" .
        "<strong>Other Model:</strong> " . $other_model . "<br/>" .
        "<strong>Clicks:</strong> " . $clicks_month . "<br/>" .
        "<strong>Conversions:</strong> " . $conversions_month . "<br/>" .
        "<strong>Current Platform:</strong> " . $current_platform . "<br/>" .
        "<strong>Desired start date:</strong> " . $start_date . "<br/>" .
        "<strong>User confirmation:</strong> User request to receive a new vene dash instance
        with the above details <br/>" .


        "<br/>" . "-------------" . "<br/>" .
        "This e-mail was sent from instance form on venedash.io (https://www.venedash.io/dash-instance-form)" . "<br/>" .
        "<strong>" . date("h:m:i d/m/Y") . "</strong>";

    $mail->Host = 'localhost';
    $mail->Port = 25;
    $mail->setfrom('info@venedash.io', 'dash-instance');
    $mail->addaddress('dash-sales@vene.io', 'dash-sales@vene.io');
    $mail->Subject = 'Customer details for new dash instance';
    $mail->msgHTML($body);
    $mail->send();
    echo "<strong>Success! </strong> Thank you.";
} catch (phpmailerException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
