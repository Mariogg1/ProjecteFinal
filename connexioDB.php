<?php
    $host = "labs.iam.cat";
    $user = "a18margongon_a18";
    $password = "proyectofinal";
    $db = "a18margongon_proyecto";

    $connexio = new mysqli($host, $user, $password, $db);

    mysqli_set_charset($connexio,"utf8");
    if(!$connexio){
        echo "<h1>La connexio amb la base de dades no ha estat correcta</h1>";
    }
    else
    echo "<h1>bien</h1>";
?>