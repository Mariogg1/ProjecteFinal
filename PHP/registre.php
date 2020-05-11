<?php
   require "../bdd.php";
   $_POST = json_decode(file_get_contents("php://input"),true);

   if (!isset($_POST['registre_usuari'], $_POST['registre_password'], $_POST['registre_email'], $_POST['registre_nom'], $_POST['registre_primer_cognom'], $_POST['registre_segon_cognom'])) {
      die ('Emplena tots els camps');
   }

   $bdd = new BDD();
   $bdd->inserirUsuari($_POST['registre_usuari'], $_POST['registre_password'], $_POST['registre_email'], $_POST['registre_nom'], $_POST['registre_primer_cognom'], $_POST['registre_segon_cognom']);
   
?>
