<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID19</title>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   <script src="JS/registre.js"></script>
</head>
<body>
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
                        <button type="button" data-toggle="modal" data-target="#modalRegistre">Registra't</button>
                    </div>
                </div>
            </form>
            <!--Final formulario-->
    </div>
    <div class="modal fade" id="modalRegistre">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">				
                    <h2 class="modal-title">Registre</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">				
                    <div class="form-group">
                        <label>Usuari</label>
                        <input id ="rUsuari" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <div class="clearfix">
                              <label>Clau</label>
                        </div>
                        <input id ="rPassword" type="password" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input id ="rEmail" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nom</label>
                        <input id ="rNom" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Primer Cognom</label>
                        <input id ="rPCognom" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Segon Cognom</label>
                        <input id ="rSCognom"type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" type="submit" class="btn btn-outline-dark pull-right enviar" onclick="register()">Registrar</button>
                </div>
            </div>
          </div>
    </div>
</body>
</html>