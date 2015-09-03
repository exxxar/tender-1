<?php

if (isset($_POST['send_email']) {
	$name = $_POST['name_field'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$message = $message." ".$utm_source." ".$utm_medium;
}

if (isset($_POST['send_tel']){
	$tel = $_POST['tel'];
	$utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$message = $utm_source." ".$utm_medium;
}

$to = 'smitg9@gmail.com';
$subject = 'the subject';
$message = 'FROM: '.$name.' tel '.$tel.'Message: '.$message;
$headers = 'From: smitg9@gmail.com';
 
mail($to, $subject, $message) or die('Error sending Mail'); //This method sends the mail.

}

?>