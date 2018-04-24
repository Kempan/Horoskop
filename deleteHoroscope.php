<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    
    if(isset($_SESSION["horoscope"])){
        session_destroy();
        exit(true);
    } else {
        exit(false);
    }
}

?>