<?php
    $name $_POST["name"];
    $visitro_email = $_POST["email"];
    $message = $_POST['message'];

    $email_from = 'ronak.jain2018@vitbhopal.ac.in'

    $email_subject = "New From Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitro_email.\n".

                        "User Message: $message.\n";

    $to = "ronak.jain809@gmail.com";
    $headers = "Form: $email_from \r\n";
    $headers .= "Reply-To: $visitro_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>