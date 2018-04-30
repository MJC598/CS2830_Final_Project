<?php
    $email = "mjc6r9@mail.missouri.edu";
    
    $msg = $_POST['message'];

    $subject = $_POST['subject'];

    mail($email, $subject, $msg);
    $error = "Message sent";
    require "contact.php";
    exit;
?>