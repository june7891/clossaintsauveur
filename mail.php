<?php
    $to = "contact@tomajune.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
 
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
 
    $message = $name ." wrote the following:" . "\n\n" . $_POST['message'];
 
 
    $headers = "From:" . $from;
 
    $mail_status = mail($to,$phoneNumber,$message,$headers);
 
    if($mail_status == true){
    echo "<script>alert('Thank you for the message. We will contact you shortly.');</script>";
    header('Location: http://www.tomajune.com/mail_sent.html');
    }else{
    echo "<script>alert('Sorry! Please try again.');</script>";
    header('Location:http://www.tomajune.com/#contact');
    }
 
 
?> 