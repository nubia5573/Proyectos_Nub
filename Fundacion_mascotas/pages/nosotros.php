<?php
    include '../db/conexion.php';
    $query = mysqli_query($conexion, "SELECT * from mascota");
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
    <title>Nosotros</title>
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
                            <a href="../pages/loginAdmin.php">Admin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <section class="conocenos">
        <hr class="linea-horizontal">
        <h1>
            ¿Quienes somos?</h1>
        <div class="mision">
            <div class="mision_text">
                <h2>Misión</h2>
                <p>Nuestra misión es brindar amor, cuidado y protección a los perros y gatos en situación de abandono, maltrato o riesgo, buscando para ellos un hogar seguro y amoroso. Trabajamos incansablemente para promover el bienestar animal y fomentar la adopción responsable, con el objetivo de reducir la población de animales callejeros y mejorar su calidad de vida.</p>
            </div>
            <div class="mision_img">
                <img src="../img/mision.jpg" alt="img_mision">
            </div>
        </div>
        <div class="vision">
            <div class="vision_img">
                <img src="../img/vision.jpg" alt="img_vision">
            </div>

            <div class="vision_text">
                <h2>Visión</h2>
                <p>Ser reconocidos como líderes en la protección y bienestar de los animales, trabajando incansablemente para construir un mundo donde todos los perros y gatos reciban amor, cuidado y un hogar seguro. Nos esforzamos por ser un referente en la promoción de la adopción responsable, la prevención del maltrato animal y la educación de la comunidad sobre la importancia de respetar y proteger a nuestros compañeros de cuatro patas. Nuestra visión es lograr un futuro donde cada perro y gato tenga la oportunidad de vivir una vida plena y feliz, rodeado de amor y compasión.</p>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php 
            $x=@$_REQUEST['x'];
            if($x==1){
        ?>
                <script>
                    swal.fire('Excelente!','Su solicitud fue enviada con exito','success')
                </script>
        <?php
                exit;
            }
        ?>
</body>
</html>