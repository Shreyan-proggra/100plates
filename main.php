<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "shreyanbiswas2010@gmail.com";
        $headers = "From: ".$email;
        $txt = "You have recieved email from ".$name."\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html");
        
    }
?>