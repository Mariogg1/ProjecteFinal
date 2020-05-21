<?php
   require "../bdd.php";
   require "../dades_BDD.php";
   
   $_POST = json_decode(file_get_contents("php://input"),true);

   if (!isset($_POST['usuari'], $_POST['passwd'])) {
      die ('Emplena tots els camps');
   }

   $bdd = new BDD($db_host, $db_user, $db_pass, $db_name);
   $resposta=$bdd->comprovaLogin($_POST['usuari'], $_POST['passwd']);
   echo $resposta;
?>