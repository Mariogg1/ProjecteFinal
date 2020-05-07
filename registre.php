<?php
   require "bdd.php";
    
   if (!isset($_POST['rUsuari'], $_POST['rPassword'], $_POST['rEmail'], $_POST['rNom'], $_POST['rPCognom'], $_POST['rSCognom'])) {
      die ('Emplena tots els camps');
   }

   $bdd = new BDD();
   $bdd->inserirUsuari($_POST['rUsuari'], $_POST['rPassword'], $_POST['rEmail'], $_POST['rNom'], $_POST['rPCognom'], $_POST['rSCognom']);
   
?>