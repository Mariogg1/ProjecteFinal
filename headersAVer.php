<?php 
    if(isset($_SESSION['user'])){
        include_once 'header_registrat.php';
    }else{
        include_once 'header_sense_registrar.php';
    }
?>