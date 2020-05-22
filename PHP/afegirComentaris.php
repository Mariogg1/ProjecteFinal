<?php
   require "../bdd.php";
   require "../dades_BDD.php";
   
   $_POST = json_decode(file_get_contents("php://input"),true);

   if (!isset($_POST['registre_comentari'])) {
      die ('Emplena el camp!');
   }

   $bdd = new BDD($db_host, $db_user, $db_pass, $db_name);
   $bdd->inserirComentari($_POST['registre_comentari']);
   
?>