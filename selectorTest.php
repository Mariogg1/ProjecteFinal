<?php 
    session_start();
    if(isset($_SESSION['user'])){
        include_once 'test.php';
    }else{
        include_once 'test2.php';
    }
?>