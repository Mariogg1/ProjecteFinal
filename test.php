<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COVID19</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="JS/test.js"></script>
    </head>
    <body>
    <?php
            include_once 'header_registrat.php';
        ?>
        <div class="row" id="questionari">
            <div class="col-sm-2"></div>
            <div class="col-sm-7" id="tablatest">
                <div>
                    <h3>1. Has viatjat fora d'Espanya en aquests ultims mesos?</h3>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">No</label>
                    </div>
                </div>
                <br>
                <div>
                    <h3>2. Tens febre, tos o et sents cansat?</h3>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="customRadioInline2" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline3">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="customRadioInline2" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline4">No</label>
                    </div>
                </div>
                <br>
                <div>
                    <h3>3. Has estat convivint o aprop d'algun infectat?</h3>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline5" name="customRadioInline3" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline5">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline6" name="customRadioInline3" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline6">No</label>
                    </div>
                </div>
                <br>
                <div>
                    <h3>4. Has tingut perdua del olfacte i gust?</h3>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline7" name="customRadioInline4" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline7">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline8" name="customRadioInline4" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline8">No</label>
                    </div>
                </div>
                <br>
                <div>
                    <h3>5. Has tingut calfreds o ets sents amb un mal cos?</h3>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline9" name="customRadioInline5" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline9">Si</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline10" name="customRadioInline5" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline10">No</label>
                    </div>
                </div>
                <br>
                <div>
                    <h3>6. A quina comarca pertanys?</h3>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                            <option>Alt Camp</option>
                            <option>Alt Empordà</option>
                            <option>Alt Penedès</option>
                            <option>Alt Urgell </option>
                            <option>Alta Ribagorça</option>
                            <option>Anoia</option>
                            <option>Aran</option>
                            <option>Bages</option>
                            <option>Baix Camp</option>
                            <option>Baix Ebre</option>
                            <option>Baix Empordà</option>
                            <option>Baix Llobregat</option>
                            <option>Baix Penedès</option>
                            <option>Barcelonès</option>
                            <option>Berguedà</option>
                            <option>Cerdanya</option>
                            <option>Conca de Barberà</option>
                            <option>Garraf</option>
                            <option>Garrigues</option>
                            <option>Garrotxa</option>
                            <option>Gironès</option>
                            <option>Maresme</option>
                            <option>Moianès</option>
                            <option>Montsià</option>
                            <option>Noguera</option>
                            <option>Osona</option>
                            <option>Pallars Jussà</option>
                            <option>Pallars Sobirà</option>
                            <option>Pla d'Urgell</option>
                            <option>Pla de l'Estany</option>
                            <option>Priorat</option>
                            <option>Ribera d'Ebre</option>
                            <option>Ripollès</option>
                            <option>Segarra</option>
                            <option>Segrià</option>
                            <option>Selva</option>
                            <option>Solsonès</option>
                            <option>Tarragonès</option>
                            <option>Terra Alta</option>
                            <option>Urgell</option>
                            <option>Vallès Occidental</option>
                            <option>Vallès Oriental</option>
                        </select>
                    </div>
                </div>
                <br>
                <div>
                    <h3>7. Quin sexe ets?</h3>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline13" name="customRadioInline7" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline13">Home</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline14" name="customRadioInline7" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline14">Dona</label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" onclick="veureCoincidencies()">Envia</button>
            </div>
        </div>
        <div class="container">
            <div class="row" id="tablaSospitososAPI">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Comarca</th>
                                <th scope="col">Homes sospitosos</th>
                                <th scope="col">Dones sospitoses</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(comarca, i) in comarcas" v-if="(pag - 1) * perPag <= i  && pag * perPag > i">
                            <th class="table-active">{{i+1}}</th>
                            <th>{{comarca.nom}}</th>
                            <th>{{comarca.homes}}</th>
                            <th>{{comarca.dones}}</th>
                            </tr>
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <button type="button" class="btn btn-secondary" v-if="pag != 1" @click.prevent="pag -= 1">Anterior</button>
                            </li>
                            <li class="page-item">
                            <button type="button" class="btn btn-secondary" v-if="pag * perPag / comarcas.length < 1" @click.prevent="pag += 1">Següent</button>
                            </li>
                        </ul>
                    </nav>
                </div> 
            </div>
        </div>
        <footer>
            <div>© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
        </footer>
        <script src="JS/SospitososVUE.js"></script>
    </body>
</html>