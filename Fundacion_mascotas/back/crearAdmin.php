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
    <title>Crear user</title>
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
                $apellido = $_POST['apellido'];
                $documento = $_POST['documento'];
                $clave = $_POST['clave'];
                $clave_enc = base64_encode($clave);

                $sql = mysqli_query($conexion,"INSERT INTO administrador (admClave, admNombre, admApellido, admDocumento) VALUES
                ('$clave_enc', '$nombre', '$apellido', '$documento')");

                if($sql){?>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <?php header("location: ../pages/loginAdmin.php?x=1");?><?php
                } else{?>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <?php header("location: ../pages/loginAdmin.php?x=2");
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