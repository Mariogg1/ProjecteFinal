<?php
    require "../api/comarques_BDD.php";
    require "../api/dades_BDD.php";
    $bdd = new ComarquesBDD($db_host, $db_user, $db_pass, $db_name);
    $dades = $bdd->getInfoComarques();
    
    echo json_encode($dades);
?>
