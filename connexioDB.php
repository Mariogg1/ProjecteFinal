<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $db = "a18margongon_proyecto";

    $connexio = mysqli_connect($host, $user, $password, $db);

    mysqli_set_charset($connexio,"utf8");
    if(!$connexio){
        echo "La connexio amb la base de dades no ha estat correcta";
    }
?>