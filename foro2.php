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
        <script src="JS/borrarComent.js"></script>
        <script>
            function comentari(){
                let coment = document.getElementById("registre_comentari").value;
                let date = new Date();
                let data = `${date.getFullYear()}-${date.getMonth()+1}-${date.getDate()}`;
                let nom= '<?php echo $_SESSION['user']?>'

                if(coment==""){
                    Swal.fire({
                        icon: 'error',
                        text: 'La caixa de comentaris esta buida'
                    })
                }
                else{
                    axios.post('api.php/records/comentaris', {
                        comentari: coment,
                        fecha: data,
                        nomUsuari: nom
                    }).then(function(response) {
                        console.log("Comentari registrat amb id="+ response.data);
                        location.reload();
                    }).catch(error => console.error(error));
                }
            }
        </script>
    </head>
    <body>
        <?php
            include_once 'header_registrat.php';
        ?>
        <div class="form-group row" id="foro">
        <div class="col-md-2"></div>
            <div class="col-md-7">
                <input id="registre_comentari" type="text" class="form-control" placeholder="Posa el teu comentari: ">
            </div>
            <button type="button" class="btn btn-primary" id="botonforo" onclick="comentari()">Comenta</button>
        </div>
        <hr/>
        <div id="main" class="container">
            <div v-for="coment in coments" class="row coment-general">
                <div class="coment-info col-lg-2">
                    <img src="fotos/user.svg" class="coment-avatar" alt="avatar icon">
                    <p>Usuari: {{coment.nomUsuari}}</p>
                    <p>Data Publicació: {{coment.fecha}}</p>
                </div>
                <div class="coment-content col-lg-10">
                 <button :id="coment.codiComentari"v-if="coment.nomUsuari=='<?php echo $_SESSION['user']?>'" type="button" class="close" onclick="borrarComent(this)">&times;</button>
                    <p>{{coment.comentari}}</p>
                </div>                
            </div>
        </div>
        <footer>
            <div>© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
        </footer>
        <script src="JS/vueForo.js"></script>
    </body>
</html>