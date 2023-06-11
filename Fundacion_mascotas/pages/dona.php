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
    <title>Dona</title>
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
    <section class="aplicaciones_donacion">
        <hr class="linea-horizontal">
        <h1>¿Como donar?</h1>
        <h2>Para realizar donaciones economicas puedes usar los siguientes medios</h2>
        <div class="aplicaciones">
            <div class="bancolombia">
                <h2>Bancolombia</h2>
                <p>Cuenta ahorros N°01234567894 - Fundación Nube</p>
                <img src="../img/icono_bancolombia.png" alt="">
                
            </div>
            <div class="nequi">
                <h2>Nequi</h2>
                <p>Cuenta N°3219670365</p>
                <img src="../img/icono_nequi.png" alt="">
            </div>
        
            <div class="daviplata">
                <h2>Daviplata</h2>
                <p>Cuenta N°3219670365</p>
                <img src="../img/icono_daviplata.png" alt="">
            </div>
        </div>
    </section>
    <section class="contacto_donacion">
        <h2>Para realizar donaciones de insumos puedes usar los siguientes medios</h2>
            <div class="donaciones">
                <div class="donaciones_text">
                    <p>Para donaciones de comida, juguetes, ropita, medicamentos, correas,etc. Por favor contactate con nosotros, te escribiremos lo mas pronto posible.<p>
                    <a href="../pages/contacto.php"><input value="Contactanos" type="submit" class="enviar" name="enviar"></a>
                </div>
                <div class="donaciones_img">
                    <img src="../img/donacion.png" alt="">
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