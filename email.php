<?php
    $email = "mjc6r9@mail.missouri.edu";
    
    $msg = $_POST['message'];

    $subject = $_POST['subject'];

    mail($email, $subject, $msg);
    header("Location: contact.html");
    exit;
?>