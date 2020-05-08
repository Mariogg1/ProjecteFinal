<?php
   require "bdd.php";
   $_POST = json_decode(file_get_contents("php://input"),true);

   if (!isset($_POST['rUsuari'], $_POST['rPassword'], $_POST['rEmail'], $_POST['rNom'], $_POST['rPCognom'], $_POST['rSCognom'])) {
      die ('Emplena tots els camps');
   }

   $bdd = new BDD();
   $bdd->inserirUsuari($_POST['rUsuari'], $_POST['rPassword'], $_POST['rEmail'], $_POST['rNom'], $_POST['rPCognom'], $_POST['rSCognom']);
   
?>
