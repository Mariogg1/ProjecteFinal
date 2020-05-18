<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>COVID19</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="JS/snap.svg-min.js"></script>
        <script src="JS/registre.js"></script>
        <script src="JS/mapaILlistat.js"></script>
        <script src="JS/login.js"></script>
        <script src="JS/mapaInteractivo.js"></script>
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
                        <a class="nav-link" href="noticies.php">Noticies</a>
                        <a class="nav-link" href="info.php">Informació</a>
                        <a class="nav-link" href="foro.php">Foro</a>
                </ul>
            </nav>
        </div>
            <!--Final navbar-->
            <!--Formulario-->
        <form method="post" id="formulario">
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
                    <button type="submit" id="envia" onclick="login()">Envia</button>
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
                    <div class="alert alert-warning" role="alert" id="alerta">
                        Les dades no estan bé
                    </div>			
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
</header>
        <div class="container">
            <div class="carta">
                <div class="carta2">
                    <p>Es una mapa clickejable que depèn de la comarca que posis et porta a un lloc amb una informació diferent</p>
                </div>
            </div>
            <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <button type="button" class="btn btn-secondary" id="boton1" onclick="veureMapa()">Mapa</button>
                    <button type="button" class="btn btn-secondary" id="boton2" onclick="veureLlistat()">Llistat</button>
                    <svg id="mapa"></svg>
                   <!-- <img class="img-fluid rounded mb-2 mb-lg-0" src="fotos/catalunyacomarques.jpg" id="mapa" alt="foto de catalunya">-->
                </div>
                <div class="col-lg-5" id="targetaMapa">
                    <h1 class="font-weight-light">Titulo</h1>
                    <p>Informació a afegir</p>
                </div>
            </div>
            <div id="info">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Sospitosos</th>
                            <th>Confirmats</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(comarca, i) in comarques" v-if="(pag - 1) * perPag <= i  && pag * perPag > i">
                            <th class="table-active">{{comarca.id}}</th>
                            <th>{{comarca.nom}}</th>
                            <th>{{comarca.casosSospitososTotals}}</th>
                            <th>{{comarca.casosConfirmatsTotals}}</th>
                        </tr>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <li class="page-item">
                            <button type="button" class="btn btn-secondary" v-if="pag != 1" @click.prevent="pag -= 1">Anterior</button>
                        </li>
                        <li>
                        <button type="button" class="btn btn-secondary" v-if="pag * perPag / comarques.length < 1" @click.prevent="pag += 1">Següent</button>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Noticia 1</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                        </div>
                        <div class="card-footer">
                            <a href="noticies.php" class="btn btn-primary btn-sm">Més informació</a>
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
                            <a href="noticies.php" class="btn btn-primary btn-sm">Més informació</a>
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