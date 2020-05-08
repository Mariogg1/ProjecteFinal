<?php
    $nom_usuari = $_SESSION['login_usuari'];
    include_once 'connexioDB.php';
    $sql = "SELECT id, nomUsuari FROM usuaris WHERE nomUsuari='$nom_usuari'";
    $resultats = mysqli_query($connexio, $sql);
    foreach($resultats as $resultat){
        $id = $resultat['id'];
    }
?>
            <div class="row">
                <a href="sortir.php">Sortir</a> 
            </div>  
</header>