<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COVID19</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="JS/registre.js"></script>
        <link rel="stylesheet" type="text/css" href="CSS/index.css">
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
                                    <a class="nav-link" href="index.php">Mapa</a>
                                    <a class="nav-link" href="#">Noticies</a>
                                    <a class="nav-link" href="#">Informació</a>
                                    <a class="nav-link" href="#">Foro</a>
                            </ul>
                        </nav>
                    </div>
                    <!--Final navbar-->
                    <!--Formulario-->
                    <form>
                        <div class="formulario">
                            <div>
                                <input type="text" placeholder="User name"  name="user_name">
                            </div>
                            <div>
                                <div >
                                    <input type="password" placeholder="Password" name="passwordc">
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
        </header>
        <div class="modal fade" id="modalRegistre">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">				
                        <h2 class="modal-title">Registre</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div class="alert alert-warning" id="alerta" role="alert">
                                This is a warning alert—check it out!
                        </div>
                    </div>
                    <div class="modal-body">				
                        <div class="form-group">
                            <label>*Usuari</label>
                            <input id ="registre_usuari" type="text" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <div class="clearfix">
                                <label>*Clau</label>
                            </div>
                            <input id ="registre_password" type="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>*Email</label>
                            <input id ="registre_email" type="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>*Nom</label>
                            <input id ="registre_nom" type="text" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>*Primer Cognom</label>
                            <input id ="registre_primer_cognom" type="text" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>*Segon Cognom</label>
                            <input id ="registre_segon_cognom"type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button data-dismiss="modal" type="submit" class="btn btn-outline-dark pull-right enviar" onclick="register()">Registrar</button>
                    </div> 
                    </div>
                </div>
            </div>
        </div>

        <div id="info">
            <table>
                <tr>
                    <td>Nom</td>
                    <td>Sospitosos</td>
                    <td>Confirmats</td>
                </tr>
                <tr v-for="comarca in comarques">
                    <td>{{comarca.nom}}</td>
                    <td>{{comarca.casosSospitososTotals}}</td>
                    <td>{{comarca.casosConfirmatsTotals}}</td>
                </tr>
            </table>
        </div>
        <script src="JS/appVue.js"></script>
    </body>
</html>