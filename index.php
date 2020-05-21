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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="JS/snap.svg-min.js"></script>
        <script src="JS/registre.js"></script>
        <script src="JS/mapaILlistat.js"></script>
        <script src="JS/login.js"></script>
    </head>
    <body>
        <?php
            include_once "headersAVer.php";
        ?>
        <div class="container">
            <div class="carta">
                <div class="carta2">
                    <p>Es una mapa clickejable que depèn de la comarca que posis et porta a un lloc amb una informació diferent</p>
                </div>
            </div>
            <div class="row align-items-center my-5">
                <div class="col-lg-5">
                    <button type="button" class="btn btn-secondary" id="boton1" onclick="veureMapa()">Mapa</button>
                    <button type="button" class="btn btn-secondary" id="boton2" onclick="veureLlistat()">Llistat</button>
                    <svg id="mapa"></svg>
                   <!-- <img class="img-fluid rounded mb-2 mb-lg-0" src="fotos/catalunyacomarques.jpg" id="mapa" alt="foto de catalunya">-->
                </div>
                <div class="col-lg-7" id="targetaMapa">
                    <h2>{{comarcaActual.nom}}</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Homes Confirmats</th>
                            <th scope="col">Homes Sospitosos</th>
                            <th scope="col">Dones Confirmades</th>
                            <th scope="col">Dones Sospitoses</th>
                            <th scope="col">Total Confirmats</th>
                            <th scope="col">Total Sospitosos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>{{comarcaActual.casosConfirmatsHomes}}</td>
                            <td>{{comarcaActual.casosSospitososHomes}}</td>
                            <td>{{comarcaActual.casosConfirmatsDones}}</td>
                            <td>{{comarcaActual.casosSospitososDones}}</td>
                            <td>{{comarcaActual.casosConfirmatsTotals}}</td>
                            <td>{{comarcaActual.casosSospitososTotals}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="taula">
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
        <script src="JS/mapaInteractivo.js"></script>
        <footer>
            <div>© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
        </footer>
    </body>
</html>