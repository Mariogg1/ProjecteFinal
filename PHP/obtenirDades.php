<?php
    require "../API/comarques_BDD.php";
    $bdd = new ComarquesBDD();
    $dades = $bdd->getInfoComarques();
    
    echo json_encode($dades);
?>
