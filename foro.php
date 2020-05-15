<?php 
    if(!isset($_SESSION['login_user'])){
        include_once 'foro1.php';
    }
    else{
        include_once 'foro2.php';
    }
?>