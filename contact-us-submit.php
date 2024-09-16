<?php
session_start();

function pr($arr){
    echo '<pre>';
    print_r($arr);
}

function prx($arr){
    echo '<pre>';
    print_r($arr);
    die();
}

function get_safe_value($str){
    global $conn;
    $str=mysqli_real_escape_string($conn,$str);
    return $str;
}

include('config.php');

$name = get_safe_value($_POST['name']);
$email = get_safe_value($_POST['email']);
$message = get_safe_value($_POST['message']);
$added_on = date('Y-m-d');

// Insert data into database
mysqli_query($conn,"INSERT INTO contact_us(name,email,message,added_on) VALUES('$name','$email','$message','$added_on')");

// Send email to admin
$to = 'vkumari683@rku.ac.in'; // Replace with your admin email address
$subject = 'New Message from Contact Form';
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

// Check if mail is sent successfully
if(mail($to, $subject, $body, $headers)){
    $_SESSION['c-msg'] = "Thank you for connecting with us, we will get back to you shortly";
} else {
    $_SESSION['c-msg'] = "Message could not be sent, please try again later";
}

// Redirect user
header('location:index.php');
?>
