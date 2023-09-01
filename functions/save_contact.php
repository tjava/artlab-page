<?php
session_start();

$content = "Name : ".$_POST['name']." Email : ".$_POST['email']." Message : ".$_POST['message'];

$result = writeToOrCreateFile($content);

if ($result) {
    // echo "Content written successfully.";
    $_SESSION['send_status'] = "Thank you. We'll get back to you as soon as possible.";
    header("Location: ../contact.php");
    exit();
} else {
    // echo "Error writing to file.";
    $_SESSION['send_status'] = "Oops something went wrong.";
    header("Location: ../contact.php");
    exit();
}

function writeToOrCreateFile($content) {
    $file = fopen('../contact_us.txt', 'a+');

    if ($file) {
        fwrite($file, $content . "\n");
        fclose($file);
        return true;
    } else {
        return false;
    }
}
