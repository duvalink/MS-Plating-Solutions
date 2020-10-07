<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (empty($name) || empty($lastName) || empty($mailFrom) || empty($phone) || empty($message)) {
        header('Location::index.php?error');
    } else {
        $to = "jose86mend@gmail.com";
        if (mail($to, $name, $lastName, $mailFrom, $phone, $message)) {
            header('Location:index.php?success');
        }
    }
} else {
    header('Location:index.php');
}
