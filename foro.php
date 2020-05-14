<?php 
    if(!isset($_SESSION['login_user'])){
        echo("No pot Obrir aquesta pagina sense fer LogIn");
    }
    else{
        include_once 'foro2.php';
    }
?>