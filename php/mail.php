<?php
if(isset($_POST['submit'])){
    $to = "info@ayatclothing.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "ayatclothing.com Client Form Submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: http://www.ayatclothing.com/thanks.html');
    }
?>