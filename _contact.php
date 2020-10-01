<?php

$name = $_REQUEST['names'];
$email = $_REQUEST['emails'];
$phone = $_REQUEST['phone'];
$ordercode = $_REQUEST['code'];
$message = $_REQUEST['message'];

echo $name . $email . $phone . $ordercode . $message;

?>