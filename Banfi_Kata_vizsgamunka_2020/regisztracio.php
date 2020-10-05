<?php
    $to = "banfikata78@gmail.com";
    $vezeteknev = $_POST["vezeteknev"];
    $keresztnev = $_POST["keresztnev"];
    $emailcim = $_POST["emailcim"];
    $programok = $_POST["programok"];
    $subject = "Regisztráció a honlapon";
    $message = "Regisztráció:<br>Név: " . $vezeteknev . " " . $keresztnev . "<br>" . "Email Cím: " . $emailcim . "<br>" . "Erre a programra jelentkezik: " . $programok;
    $from = "reg@amh.hu";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
?> 