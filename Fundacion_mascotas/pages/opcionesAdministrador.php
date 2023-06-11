<?php
    include '../db/conexion.php';
    session_start();
    if($_SESSION['admin'] != 1){
        header("location:salir.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="../img/icono_pagina.png" type="image/x-icon">
    <title>Menu administrador</title>
</head>
<body>
<section class="encabezado">
        <div class="div_1">

        </div>
        <div class="div_2">
            <div class="logo_principal">
            <a href="../index.html" class="nosotros"><img src="../img/logo_fundacion.png" alt="Fundación Nube"></a>

            </div>
            <div class="menu">
                <nav>
                    <input type="checkbox" id="menu">
                    <label for="menu"> ☰ </label>
                    <ul>
                        <li>
                            <a href="../pages/nosotros.php" class="nosotros">Nosotros</a>
                        </li>
                        <li>
                            <a href="../pages/nuestrasMascotas.php">Adopta y Apadrina</a>
                        </li>
                        <li>
                            <a href="../pages/dona.php">Dona</a>
                        </li>
                        <li>
                            <a href="../pages/contacto.php">Contactanos</a>
                        </li>
                        <li>
                            <a href="../pages/salir.php">Salir</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <hr class="linea-horizontal">
    <section class="menu-administrador">
        <h1>Menú</h1>
        <div class="opciones">
            <div class="opcion">
                <a href="../pages/administrarMascotas.php"><img src="../img/mascotas.jpg" alt="Opcion mascotas"></a>
                <div class="contenido_opcion">
                    <h2 class="titulo">Mascotas</h2>
                </div>
            </div>
            <div class="opcion">
                <a href="../pages/consultarSolicitudes.php"><img src="../img/solicitudes.jpg" alt="Opcion solicitudes"></a>
                <div class="contenido_opcion">
                    <h2 class="titulo">Solicitudes</h2>
                </div>
                
            </div>
        </div>

    </section>
    <footer>
        <p class="Copyright">&copy 2023 - Todos los derechos reservados</p>
        <ul class="lista_iconos_redes">
            <li><a href="https://www.facebook.com/nubeoficials?mibextid=ZbWKwL"><img src="../img/icono_facebook.png" alt="facebook"></li></a>
            <li><a href="https://api.whatsapp.com/send?phone=573219670365"><img src="../img/icono_whatsapp.png" alt="whatsapp"></a></li>
            <li><a href="mailto:fundacionnube@gmail.com"><img src="../img/icono_correo.png" alt="correo"></li></a>

        </ul>
    </footer>

</body>
</html>