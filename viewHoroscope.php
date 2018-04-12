<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if($_SESSION != null){
        exit($_SESSION["horoscope"]);
    } else {
        exit(false);
    }
}



?>