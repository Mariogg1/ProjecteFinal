<?php
    if(isset($_POST['user_name']) && isset($_POST['passwordc'])){
        $user_name = htmlspecialchars($_POST['user_name']);
        $password = htmlspecialchars($_POST['passwordc']);
        include_once 'connexioDB.php';
        $sql = "SELECT * FROM usuaris WHERE nomUsuari = '" . $user_name . "' AND passwordc = '" . $password . "'";
        $usuari_DB = mysqli_query($connexio, $sql);
        if(mysqli_num_rows($usuari_DB) == 1){
            session_start();
            $_SESSION['login_usuari']=$user_name;
            header("location: principal.php");
        }else{
            header("location: principal.php?login=failed");
        }
    }else{
        include_once 'dades.php';
?>
    <!--Header-->
        <head>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        </head>
        <body>
    <header>
    <div class="todoHeader">
        <div>
            <div class="titulo">
                <h1>
                    Informació actualizada sobre el Covid-19
                </h1>
            </div>
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white" style="justify-content: center;">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="header.php">Mapa</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Noticies</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Informació</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Foro</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--Final navbar-->
        <!--Formulario-->
        <form>
            <div class="formulario">
                <div>
                    <input type="text" placeholder="Email"  name="userName">
                </div>
                <div>
                    <div >
                        <input type="text" placeholder="Password" name="passwordc">
                    </div>
                </div>
                <div class="boton">
                    <button type="submit" id="envia">Envia</button>
                    <a href="registroDB.php">Registra't</a>
                </div>
            </div>
        </form>
        <!--Final formulario-->
    </div>
</header>
</body>
<?php
    }
?>