<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>EJEMPLO MVC</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/90a9af3531.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--=====================================
    	LOGOTIPO
    	======================================-->

    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <!--=====================================
    	BOTONERA
    	======================================-->

    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <!-- GET: $_GET["variable"] Variabls qe se pasan como parámetros Vía URL (tambien conocido como cadena 
          de consulta a través de la URL)
         cuando es la primera variable se separa con ?
         las que siguen a continuación se separan con & 
        -->
                <?php if (isset($_GET["pagina"])) : ?>

                <?php if ($_GET["pagina"] == "registro") : ?>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>

                <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=registro">Registro</a>
                </li>

                <?php endif ?>

                <?php if ($_GET["pagina"] == "ingreso") : ?>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <?php endif ?>

                <?php if ($_GET["pagina"] == "inicio") : ?>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                </li>

                <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
                </li>

                <?php endif ?>

                <?php if ($_GET["pagina"] == "salir") : ?>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                </li>

                <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=salir">Salir</a>
                </li>

                <?php endif ?>


                <?php else : ?>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>

                <?php endif ?>

            </ul>
        </div>
    </div>

    <!--=====================================
    	CONTENIDO
    	======================================-->

    <div class="container-fluid">
        <div class="container py-5">
            <?php

      #ISSET: isset() determina si una variable está definida y no es NULL
      if (isset($_GET["pagina"])) {
        if (
          $_GET["pagina"] == "registro" ||
          $_GET["pagina"] == "ingreso" ||
          $_GET["pagina"] == "inicio" ||
          $_GET["pagina"] == "editar" ||
          $_GET["pagina"] == "salir"
        ) {
          include "paginas/" . $_GET["pagina"] . ".php";
        } else {
          include "paginas/error404.php";
        }
      } else {
        include "paginas/registro.php";
      }
      ?>
        </div>
    </div>
</body>

</html>