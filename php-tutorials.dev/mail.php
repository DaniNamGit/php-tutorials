<?php
    // VERSION 1

    $to_email = 'daniel.nam.2004@gmail.com';
    $subject = 'Testing PHP Mail';
    $message = 'nice email tho';
    $headers = 'From: daniel.nam.2004@gmail.com';
    mail($to_email, $subject, $message, $headers) or die('oops');

    // VERSION 2

    // function sanitize_my_email($field) {
    //     $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    //     if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // $to_email = 'daniel.nam.2004@gmail.com';
    // $subject = 'Testing PHP Mail';
    // $message = 'this is secured one!';
    // $headers = 'From: daniel.nam.2004@gmail.com';
    
    // $secure_check = sanitize_my_email($to_email); // check if the email address is invalid
    // if ($secure_check == false) {
    //     echo "Invalid input";
    // } else {
    //     if (mail($to_email, $subject, $message, $headers)) { // send email
    //         echo "This email is sent using PHP Mail";
    //     } else {
    //         die('oops');
    //     }
    // }