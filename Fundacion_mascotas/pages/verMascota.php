<?php
    include '../db/conexion.php';
    
    $idM=@$_REQUEST['id'];
    $query=mysqli_query($conexion, "SELECT * FROM mascota WHERE idMascota='$idM'");
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
    <title>Mascota</title>
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
    <hr class="linea-horizontal">
    <section class="ver_mascota">
        <h1>Conoceme</h1>
        <div class="opciones_ver_mascota">
            <?php
            while ($datos=mysqli_fetch_array($query)) {
                 $id= $datos['idMascota'];
                   $nombre = $datos['masNombre'];
                   $raza = $datos['masRaza'];
                   $tamano=$datos['masTamaño'];
                   $edad=$datos['masEdadAprox'];
                   $img=$datos['masImg'];
                   $color=$datos['masColor'];
                   $especie=$datos['masEspecie'];
                   ?>


            <div class="opcion1">
               <img src="../img/img_mascotas/<?php echo $img?>" alt="Opcion mascotas">
            </div>
            <div class="opcion2">
                <div class="contenido_opcion2">
                    
                    <h2 class="linea">¡Soy el <?php echo $especie ?> que necesitas!</h2><br>
                    <h3 class="linea">Descripcion:</h3><br>

                    <h3 class="linea">Nombre: <?php echo $nombre?></h3>
                    <h3 class="linea">Raza: <?php echo $raza?></h3>
                    <h3 class="linea">Tamaño: <?php echo $tamano?></h3>
                    <h3 class="linea">Edad: <?php if($edad==0){echo "menor a 1 año";}else if($edad>15){echo "mayor a 15 años";}else{echo $edad." años";}?></h3>
                    <h3 class="linea">Color: <?php echo $color?></h3>
                    
                    <a href="../pages/contacto.php?opcion=apadrinar&amp;id=<?php echo $id ?>" class="apadrinar">Apadrinar</a>
                    <a href="../pages/contacto.php?opcion=adoptar&amp;id=<?php echo $id ?>" class="adoptar">Adoptar</a>
                
            </div>
            <?php
                    }
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

</body>
</html>