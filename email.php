<?php
    $email = "mjc6r9@mail.missouri.edu";
    
    $msg = real_escape_string($_POST['message']);

    $subject = real_escape_string($_POST['subject']);

    mail($email, $subject, $msg);
?>