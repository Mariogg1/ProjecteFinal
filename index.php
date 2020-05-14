<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>COVID19</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="js/registre.js"></script>
        <script src="js/mapaILlistat.js"></script>
    </head>
    <body>
        <?php 
            include_once 'headersAVer.php';
        ?>
        <div class="container">
            <div class="carta">
                <div class="carta2">
                    <p>Es una mapa clickejable que depèn de la comarca que posis et porta a un lloc amb una informació diferent</p>
                </div>
            </div>
            <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <button type="button" class="btn btn-secondary" id="boton1" onclick="veureMapa();">Mapa</button>
                    <button type="button" class="btn btn-secondary" id="boton2" onclick="veureLlistat();">Llistat</button>
                    <img class="img-fluid rounded mb-2 mb-lg-0" src="fotos/catalunyacomarques.jpg" id="mapa" alt="foto de catalunya">
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
        <script src="js/appVue.js"></script>
        <footer>
            <div>© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
        </footer>
    </body>
</html>