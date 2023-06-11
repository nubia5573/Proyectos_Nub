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
    <title>Conoce nuestras mascotas</title>
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
    <section class="conoce_nuestras_mascotas">
        <hr class="linea-horizontal">
        <h1>
            Encuentra a tu nuevo mejor amigo
        </h1>
        <div class="opciones_mascotas">
            <?php
                echo '<div class="mascota">'; 
                $contador = 0;
                
                while ($datos=mysqli_fetch_array($query)) {
                    $id=$datos['idMascota'];
                    $img= $datos['masImg'];
                
                    echo '<a href="../pages/verMascota.php?id='.$id.'"><img alt="imagen-mascota" src="../img/img_mascotas/' . $img . '"></a>';
                    
                    $contador++;
                    if ($contador % 4 == 0) {
                        echo '</div>'; // Cierra el contenedor div
                        echo '<div class="mascota" >'; // Inicia un nuevo contenedor div para la siguiente línea de imágenes
                    }
                }
                
                echo '</div>'; 
            
            ?>
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