<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="../img/icono_pagina.png" type="image/x-icon">
    <title>Ingresar nueva mascota</title>
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
    <section class="formularioCrearMascota">
        <hr class="linea-horizontal">
        <h1> Crear usuario administrador</h1>
        <div class="formulario">
            <form action="../back/crearAdmin.php" method="post" enctype="multipart/form-data">
                <label for="documento">Documento </label>
                <input class="input-padron" type="number" id="documento" name ="documento" required>
                <label for="nombre">Nombre </label>
                <input class="input-padron" type="text" id="nombre" name ="nombre" required>
                <label for="apellido">Apellido </label>
                <input class="input-padron" type="text" id="apellido" name ="apellido" required>
                <label for="clave">Clave</label>
                <input class="input-padron"  type="password" id="clave" name="clave" required >
                <input class="enviar" name="registro" type="submit" value="Crear">

            </form>
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
            if($x==2){

        ?>
                <script>
                    swal.fire('La mascota no fue agregada!','¡Intente nuevamente!','error')
                </script>
        <?php
                exit;
            }
        ?>
</body>
</html>
