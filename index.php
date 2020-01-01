<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mail = $_POST['mail'];
    $number = $_POST['number'];
    $company = $_POST['company'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $from = 'From: Pushmedea'; 
    $to = 'info@pushmedea.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $firstname $lastname\n E-Mail: $mail\n Phone No: $number\n Company: $company\n Title: $title\n Message:\n $message";
				
    if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
    } else { 
       echo "<script type=\"text/javascript\">".
        "alert('Something went wrong');".
        "</script>";
    }
}
?>


