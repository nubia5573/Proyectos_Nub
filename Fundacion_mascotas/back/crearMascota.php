<?php
    include '../db/conexion.php';
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
    <title>Conoce nuestras mascotas</title>
</head>
<body>
<section class="encabezado">
        <div class="div_1">

        </div>
        <div class="div_2">
            <div class="logo">
            <a href="../index.html" class="nosotros"><img src="../img/logo_fundacion.png" alt="Fundación Nube"></a>

            </div>
            <div class="menu">
                <nav>
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
    <main>
        <?php

            if (isset($_POST['registro'])) {
                $nombre = $_POST['nombre'];
                $edad = $_POST['edad'];
                $color = $_POST['color'];
                $raza = $_POST['raza'];
                $tamano = $_POST['tamano'];
                $especie =$_POST['especie'];

                $nombreArchivo = $_FILES['imagen']['name'];

                //$horaActual = date('H:i:s'); // Obtener la hora actual en formato HH:MM:SS

                $archivoTemporal = $_FILES['imagen']['tmp_name'];
                //$nombreArchivo = $nombreArchivo."-".$horaActual;


                $sql = mysqli_query($conexion,"INSERT INTO mascota (masNombre, masEdadAprox, masColor, masRaza, masTamaño, masImg, masEspecie) VALUES
                ('$nombre', '$edad', '$color', '$raza', '$tamano', '$nombreArchivo', '$especie')");

                $archivoTemporal = $_FILES['imagen']['tmp_name']; //ruta donde está guardada la imagen actualmente

                $carpetaDestino = '../img/img_mascotas/';

                
                

                if (move_uploaded_file($archivoTemporal, $carpetaDestino . $nombreArchivo)) {
                    echo 'Imagen guardada correctamente.';
                } else {
                    echo 'Error al guardar la imagen.';
                    $sql=false;
                }

                if($sql){?>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <?php header("location: ../pages/administrarMascotas.php?x=1");?><?php
                } else{?>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <?php header("location: ../pages/formularioCrearMascota.php?x=2");
                }
            }
                
        ?>
    </main>
    <footer>
        <p class="Copyright">&copy 2023 - Todos los derechos reservados</p>
        <ul class="lista_iconos_redes">
            <li><img src="../img/icono_facebook.png" alt="facebook"></li>
            <li><img src="../img/icono_whatsapp.png" alt="whatsapp"></li>
            <li><img src="../img/icono_correo.png" alt="correo"></li>

        </ul>
    </footer>

</body>
</html>