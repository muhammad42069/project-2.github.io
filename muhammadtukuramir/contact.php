<?php 
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];
 
$to = 'test@email.com';
$subject = 'the subject';
$message = 'FROM: '.$name.'  Email: '.$email.'  Phone: '.$phone.'  Subject: '.$subject.'  Message: '.$message;
$headers = 'From: youremail@domain.com' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your email was sent!"; // success message
}else{
echo "Invalid Email!";
}

 ?>
