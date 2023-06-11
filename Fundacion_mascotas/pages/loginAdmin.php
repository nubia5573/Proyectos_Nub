<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="../img/icono_pagina.png" type="image/x-icon">
    <title>Ingreso admin</title>
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
    <!-- <section class="formularioCrearMascota">
     -->
    <hr class="linea-horizontal">
    <section class="Inicio-sesion">
        
        <form action="../back/validarIngresoAdmin.php" method="post">
            <h1>Inicio Sesion</h1>
            <div class="inputbox">
                <input type="text" name="usuario" required>
                <label for="">Documento</label>
            </div>
            <div class="inputbox">
                <input type="password" name="clave" required>
                <label for="">Clave</label>
            </div>
            <input class="enviar" name="registro" type="submit" value="Enviar">
            <div class="register">
                <p><a href="../pages/formularioRegistrarAdmin.php">Registrarse</a></p>
            </div>
        </form>
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
            $y=@$_REQUEST['y'];
            if($y==1){

        ?>
                <script>
                    swal.fire('Sus credenciales son incorrectas!','¡Intente nuevamente!','error')
                </script>
        <?php
                exit;
            }
            $x=@$_REQUEST['x'];
            if($x==1){

        ?>
                <script>
                    swal.fire('Excelente!','Su usuario fue registrado correctamente','success')
                </script>
        <?php
                exit;
            }else if (x==2){
                ?>
                <script>
                    swal.fire('No fue posible el registro!','¡Intente nuevamente!','error')
                </script>
                <?php
            }
        ?>
</body>
</html>
