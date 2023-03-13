<?php
include("./db/dbconnection.php");
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $message = $_POST['message'];

    $to = "icetriplex@gmail.com";
    $from = "Reply to: " . $email;
    $subject = "test mail in php";
    $body = "You have received a new message from your website contact form.\n\n" .
        "Here are the details:\n\nName: $user_name\n\nEmail: $email\n\Subject: $subject\n\nMessage:\n$message";
    if (mail($to, $subject, $body, $from)) {
        echo "mail sent";
    } else {
        echo "mail not sent";
    }

    // $sql = "insert into users(user_name,email,subject,message) VALUES('$user_name','$email','$subject','$message')";
    // $execute = mysqli_query($con, $sql);
    // if ($execute) {
    //     header("Location: home.php?thank you, data added successfully");
    // } else {
    //     die("error:" . mysqli_error($con));
    // }
}
?>