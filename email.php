<?php
    $email = "matthew.j.carroll@outlook.com";
    
    $msg = real_escape_string($_POST['message']);

    $subject = real_escape_string($_POST['subject']);

    mail($email, $subject, $msg);
?>