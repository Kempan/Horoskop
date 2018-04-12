<?php
session_start();
if($_SERVER["REQUEST_METHOD"] = "POST"){

    include 'calculateHoroscope.php';

    if($_SESSION["horoscope"] == null){
        $_SESSION["horoscope"] = $horoscope->printSign();
        exit(true);
    } else {
        exit(false);
    }

}











?>