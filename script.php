<?php

/*
 * @author John O'Shea x13104977
*/



$emailSubject = 'New Order!';
/*We will use my personal email address for testing*/
$webMaster = 'johnoshea@rcsi.ie';

$nameField = $_POST['name'];
$addressField = $_POST['address'];
$phoneField = $_POST['phone'];
//$emailField = $_POST['email'];


//$body = " <br/><hr/><br/> Name: $nameField <br/> Address: $addressField <br/> Phone Number: $phoneField <br/>";

$headers = "From: $emailField\r\n";
$headers += "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);

/* Results rendered as HTML */

$theResults = "Thank you for your order! We are on our way!";

echo $theResults;

?>


