<?php

    // Starting session
    session_start();
     
    // Removing session variable
    if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
    }
    else{
        echo "Session already destroyed."."<br>";
    }
    echo"Code By Manan Batra 114!";

?>