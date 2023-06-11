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
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $clave_enc = base64_encode($clave);

            $consulta = mysqli_query($conexion,"SELECT * from administrador 
            where admDocumento = '$usuario' AND admClave = '$clave_enc'");

            $cant = mysqli_num_rows($consulta);

            if ($cant == 1) {
                while ($captura = mysqli_fetch_array($consulta)) {
                    session_start();
                    $_SESSION['admin'] ="1";
                    $_SESSION['usuario'] = $captura['admDocumento'];
                }
                
                header('location:../pages/opcionesAdministrador.php');
            }else{
                header('location:../pages/loginAdmin.php?y=1');
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