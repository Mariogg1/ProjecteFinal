<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        include_once 'foro1.php';
    }
    else{
        include_once 'foro2.php';
    }
?>