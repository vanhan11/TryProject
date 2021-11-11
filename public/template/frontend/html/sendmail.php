<?php
// Get and clear post data
$type = check_input($_POST["type"]);
$phone_field = check_input($_POST["phone_field"]);
$name_field = check_input($_POST["name_field"]);
$mail_field = check_input($_POST["mail_field"]);
$message_field = check_input($_POST["message_field"]);
$date_field = check_input($_POST["date_field"]);
$title_field = check_input($_POST["order_name"]);
$price_field = check_input($_POST["order_price"]);

$headers = "Content-Type: text/html; charset=utf-8";

if ($type === 'preOrder') {
	$subject = "Pre-order! From the site -Odiss- was sent an message!";
	$message = file_get_contents('mail/order.html');

	// Fill form
	$message = str_replace('{{ phone }}', $phone_field, $message);
	$message = str_replace('{{ name }}', $name_field, $message);
    $message = str_replace('{{ mail }}', $mail_field, $message);
    $message = str_replace('{{ message }}', $message_field, $message);
    $message = str_replace('{{ date }}', $date_field, $message);

    $message = str_replace('{{ title }}', $title_field, $message);
    $message = str_replace('{{ price }}', $price_field, $message);
} else {
	$subject = "Message! From the site -Odiss- was sent an message!";
	$message = file_get_contents('mail/message.html');

	// Fill form
	$message = str_replace('{{ name }}', $name_field, $message);
    $message = str_replace('{{ mail }}', $mail_field, $message);
    $message = str_replace('{{ message }}', $message_field, $message);
}

$to = "mail@example.com";
mail($to, $subject, $message, $headers);

function check_input($data, $problem = ""){
    $data = htmlentities(trim(strip_tags(stripslashes($data))), ENT_NOQUOTES, "UTF-8");

    if ($problem && strlen($data) == 0){
        show_error($problem);
    }

    return $data;
};

function show_error($myError) {
    echo $myError;
    exit();
}