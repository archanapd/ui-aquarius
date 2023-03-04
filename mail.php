<?php
//get data from form  
$name = $_POST['name'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "archana.kmoorthy@mail.com";
$subject = "Mail From Aquarius website";
$txt ="Name = ". $name . "\r\n  Mobile = ". $mobile . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>