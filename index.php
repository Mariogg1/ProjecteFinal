<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>COVID19</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="css/small-business.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="JS/registre.js"></script>
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
        <div class="container">
            <div class="carta">
                <div class="carta2">
                    <p>Informacio sobre el</p>
                </div>
            </div>
            <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <button type="button" class="btn btn-secondary" id="boton1">Mapa</button>
                    <button type="button" class="btn btn-secondary" id="boton2">Llistat</button>
                    <img class="img-fluid rounded mb-2 mb-lg-0" src="fotos/catalunyacomarques.jpg" alt="foto de catalunya">
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Titulo</h1>
                    <p>Informació a afegir</p>
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
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Noticia 1</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary btn-sm">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Noticia 2</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary btn-sm">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="JS/appVue.js"></script>
        <footer>
            <div>© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
        </footer>
    </body>
</html>