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
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="JS/comentaris.js"></script> 
    </head>
    <body>
        <?php
            include_once 'header_registrat.php';
        ?>
        <form>
            <div class="form-group row" id="foro">
            <div class="col-md-2"></div>
                <div class="col-md-7">
                    <input id="registre_comentari" type="text" class="form-control" placeholder="Posa el teu comentari: ">
                </div>
                <button type="submit" class="btn btn-primary" id="botonforo" onclick="comentari()">Sign in</button>
            </div>
        </form>
        <hr/>
    </body>
</html>