<?php

#Receive user input
$email_address = $_POST['email'];
$objet = $_POST['objet'];
$feedback = $_POST['message'];


#Send email
$headers = "From: $email_address";
$sent = mail('picq.elian@gmail.com', 'Portfolio Email:' . $objet, $feedback, $headers);

#Thank user or notify them of a problem
if ($sent) {
	echo "<script type=\"text/js\">alert(\"Le mail à bien été envoyé\")</script>";
} else {
echo "<script type=\"text/js\">alert(\"Le mail à bien été envoyé\")</script>";
}

?>