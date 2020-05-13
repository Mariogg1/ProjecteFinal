<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <?php 
        if(isset($_SESSION['login_user'])){
            include_once 'headerLogIn.php';
        }else{
            include_once 'header_sense_registrar.php';
        }
    ?>
    </body>
</html>
