<?php 
    session_start();
    if(isset($_SESSION["last_modified_time"])){
        echo "last modified time". $_SESSION["last_modified_time"];
    } else {
        echo "no value";
    }
?>