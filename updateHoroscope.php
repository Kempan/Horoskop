<?php

parse_str(file_get_contents("php://input"), $_PUT);
session_start();

if($_SERVER["REQUEST_METHOD"] == "PUT"){

    if($_PUT["personNr"] == null) {
        exit(false);
    }
    else{
        $_POST["personNr"] = $_PUT["personNr"];
        include 'calculateHoroscope.php';
        $_SESSION["horoscope"] = $horoscope->printSign();
        exit(true);
    }  
} 


?>