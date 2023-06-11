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
                            <a href="#" class="nosotros">Nosotros</a>
                        </li>
                        <li>
                            <a href="pages/nuestrasMascotas.php">Adopta y Apadrina</a>
                        </li>
                        <li>
                            <a href="#">Dona</a>
                        </li>
                        <li>
                            <a href="#">Contactanos</a>
                        </li>
                        <li>
                            <a href="../pages/loginAdmin.php">Admin</a>
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
                $apellido = $_POST['apellido'];
                $telefono = $_POST['telefono'];
                $correo = $_POST['correo'];
                $opcion = $_POST['opcion'];
                $mensaje = $_POST['mensaje'];
                $id =@$_REQUEST['id'];


                $sql = mysqli_query($conexion,"INSERT INTO solicitud (solNombre, solApellido, solTelefono, solCorreo, solInteres, solMensaje, solMascota) VALUES
                ('$nombre', '$apellido', '$telefono', '$correo', '$opcion', '$mensaje', '$id')");


                if($sql){?>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <?php header("location: ../pages/nuestrasMascotas.php?x=1");?><?php
                } else{?>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <?php header("location: ../pages/contacto.php?x=2");
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