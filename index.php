<?php
session_start();
?>

<!doctype html>
<html lang="es">

<head>
    <title>Sky Discover</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <!-- estilos.css -->
    <link href="CSS/estilos.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Grenze+Gotisch:wght@200&family=PT+Sans&display=swap" rel="stylesheet">

    <script src="JS/utilidades.js" type="text/javascript"></script>

    <!-- Bootstrap JS -->
    <script src="JS/jquery.js" type="text/javascript"></script>
</head>

<body>



    <?php
    //navegador
    include_once('./vista/navegador.html');
    ?>

    <div class="container" id="paginas">
        <br/>
        <?php
        //controlador
        include_once './controlador/controlador.php';
        new Controlador();
        ?>
        <br/>
    </div>

    <?php
       // include_once('./vista/pie_pagina.html');

    ?>







</body>

</html>