<?php

if($_POST["submit"]) {
    $recipient="neha.agrawal3093@gmail.com";
    $subject    ="Contact form message";
    $sender     =$_POST["name"];
    $senderEmail=$_POST["email"];
    $senderPhone=$_POST["phone"];
    $senderSub  =$_POST["subject"];
    $message    =$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nSubject: $senderSub\nPhone: $senderPhone\n\n$message";
    
    $headers = '';
    $headers = "From: $sender <$senderEmail>";
    $headers .= "Organization: SouvikBanerjee.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    if(mail($recipient, $subject, $mailBody, $headers))
    {
        echo "<script>alert('Mail was sent !');</script>";
        echo "<script>document.location.href='contact.html'</script>";
    }
    else
    {
      echo "<script>alert('Mail was not sent. Please try again later');</script>";
      echo "<script>document.location.href='contact.html'</script>";
    }

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    //header("location:contact.html");  
}
?>