<?php 
    if(!isset($_SESSION['user'])){
        include_once 'foro1.php';
    }
    else{
        echo $_SESSION['user'];
        include_once 'foro2.php';
    }
?>