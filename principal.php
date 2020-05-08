<?php
session_start();
include_once 'dades.php';
if(!isset($_SESSION['login_usuari'])){
    echo "hola no registrat";
}else{
    echo "hola registrat";
}
?>