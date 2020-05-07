<?php
    include_once 'connexioDB.php';
    if($_POST){
        if(!empty($_POST['nomUsuari']) && !empty($_POST['passwordc']) && !empty($_POST['nomReal']) && !empty($_POST['primerCognom']) && !empty($_POST['segonCognom']) && !empty($_POST['Email'])){
            $nomUsuari = htmlspecialchars($_POST['nomUsuari']);
            $password = htmlspecialchars($_POST['passwordc']);
            $nomReal = htmlspecialchars($_POST['nomReal']);
            $primerCognom = htmlspecialchars($_POST['primerCognom']);
            $segonCognom = htmlspecialchars($_POST['segonCognom']);
            $email = htmlspecialchars($_POST['Email']);

            $emailDB= "SELECT * FROM usuaris WHERE email = '" . $email . "'";
            $usuariDB = "SELECT * FROM usuaris WHERE nomUsuari = '" . $nomUsuari . "'";
            
            if(mysqli_num_rows(mysqli_query($connexio, $emailDB))){
                echo "Aquest correu ja ha sigut utilitzat";
            }elseif(mysqli_num_rows(mysqli_query($connexio, $usuariDB))){
                echo "Aquest nom d'usuari ja ha estat registrat";
            }else{
                $insertInDB = "INSERT INTO usuaris(nomUsuari, passwordc, nom, primerCognom, SegonCognom, correuElectronic) VALUES('$nomUsuari', '$password', '$nomReal', '$primerCognom', '$segonCognom', '$email')";
                if(!mysqli_query($connexio, $insertInDB)){
                    echo "Error a la DataBase";
                }
            }
        }
    }else{
        include_once 'dades.php';
?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <form>
                <div class="form-group">
                    <label>Nom d'usuari:</label>
                    <input type="text" class="form-control" name="nomUsuari">
                </div>
                <div class="form-group">
                    <label for="inputPassword4">Contrasenya</label>
                    <input type="password" class="form-control" name="passwordc">
                </div>
            <div class="form-group">
                <label>Nom:</label>
                <input type="text" class="form-control" name="nomReal">
            </div>
            <div class="form-group">
                <label>Primer cognom: </label>
                <input type="text" class="form-control" name="primerCognom">
            </div>
            <div class="form-group">
                <label>Segon cognom: </label>
                <input type="text" class="form-control" name="segonCognom">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" class="form-control" name="Email" placeholder="www@example.com">
                </div>
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-outline-primary">Sign in</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
<?php
    }
?>