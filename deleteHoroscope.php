<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    
    if($_SESSION["horoscope"] == null){
        exit(false);
    } else {
        session_destroy();
        exit(true);
    }
}

?>