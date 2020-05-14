<?php 
    if(isset($_SESSION['login_user'])){
        include_once 'header_registrat.php';
    }else{
        include_once 'header_sense_registrar.php';
    }
?>