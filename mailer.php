<?php

        $recipient = "info@gifdesignstudios.com";


        // Set the email subject.
        $subject = "New contact from ".$_POST['q1'];

        // Build the email content.
        $email_content .= "First name: ".$_POST['q1']."\n\n";
        $email_content .= "Last name: ".$_POST['q2']."\n\n";
        $email_content .= "Email Address: ".$_POST['q3']."\n\n";
        $email_content .= "What is your website? ".$_POST['q4']."\n\n";
        $email_content .= "What city do you live in? ".$_POST['q5']."\n\n";
        $email_content .= "Are you available for a full time position? ".$_POST['q6']."\n\n";
        $email_content .= "What date are you available to start working? ".$_POST['q7']."\n\n";
        $email_content .= "Why are you interested in this particular position within our Design Studio? ".$_POST['q8']."\n\n";
        $email_content .= "What is your English level? ".$_POST['q9']."\n\n";
        $email_content .= "What is your experience with webdesign? ".$_POST['q10']."\n\n";
        $email_content .= "What creative suite softwares are you fluent in? ".$_POST['q11']."\n\n";
        $email_content .= "Please tell us about your long-term career goals. What do you hope to gain with this position? ".$_POST['q12']."\n\n";
        $email_content .= "Is there any other information you would like to share that might make you stand out from the other candidates?
 ".$_POST['q13']."\n\n";

        // Build the email headers.
        $email_headers = "From: ".$_POST['q1']." <".$_POST['q3'].">";

        $email_headers = 'From: info@gifdesignstudios.com' . "\r\n" .
    'Reply-To: info@gifdesignstudios.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo 1;
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo 2;
        }

?>
