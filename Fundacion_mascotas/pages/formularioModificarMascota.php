<?php
    include '../db/conexion.php';
    session_start();
    if($_SESSION['admin'] != 1){
        header("location:salir.php");
        die();
    }
    $idM=$_REQUEST['mascota'];
    $query = mysqli_query($conexion, "SELECT * from mascota where idMascota='$idM'");
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
    <title>Editar mascota</title>
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
    <section class="formularioCrearMascota">
        <hr class="linea-horizontal">
        <h1> Editar mascota</h1>
        <div class="formulario">
            <form action="../back/modificarMascota.php" method="post" enctype="multipart/form-data">
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
                <label for="id">Id </label>
                <input class="input-padron" type="text" id="id" name ="id" value=<?php echo $id ?> readonly>
                
                <label for="nombre">Nombre </label>
                <input class="input-padron" type="text" id="nombre" name ="nombre" value=<?php echo $nombre ?> required>

                <label for="edad">Edad aproximada </label>
                    <select class="input-padron" id="edad" name="edad" required>
                        <option value="<?php echo $edad ?>" selected="selected"><?php if ($edad==0){echo "< 1 año";}else if($edad>15){echo "> 15 año";}else{ echo $edad." años";}?></option>  
                        <option value="0"> < 1 año</option>
                        <option value="1"> 1 año</option>
                        <option value="2"> 2 años</option>
                        <option value="3"> 3 años</option>
                        <option value="4"> 4 años</option>
                        <option value="5"> 5 años</option>
                        <option value="6"> 6 años</option>
                        <option value="7"> 7 años</option>
                        <option value="8"> 8 años</option>
                        <option value="9"> 9 años</option>
                        <option value="10"> 10 años</option>
                        <option value="11"> 11 años</option>
                        <option value="12"> 12 años</option>
                        <option value="13"> 13 años</option>
                        <option value="14"> 14 años</option>
                        <option value="15"> 15 años</option>
                        <option value="16"> > 15 años</option>
                    </select>

                <label for="color">Color</label>
                <input class="input-padron"  id="color" name="color" value=<?php echo $color ?> required>

                <label for="raza"> Raza</label>
                <input class="input-padron" id="raza"  name="raza" value=<?php echo $raza ?> required>
                <label for="especie"> Especie</label>
                    <select class="input-padron" id="especie" name="especie" value=<?php echo $especie ?> required>
                        <option value="perro">perro</option>
                        <option value="gato">gato</option>
                    </select>
                
                <label for="tamano"> Tamaño</label>
                    <select class="input-padron" id="tamano" name="tamano" required>
                    <option value="<?php echo $tamano ?>" selected="selected"><?php echo $tamano?></option>  
                        <option value="pequeno">Pequeño</option>
                        <option value="mediano">Mediano</option>
                        <option value="grande">Grande</option>
                    </select>

                <label for="imagen">Selecciona una imagen:</label>
                    <img class="imgForm" src="../img/img_mascotas/<?php echo $img ?>" alt="">
                    <input  type="file" id="imagen" name="imagen" value="<?php echo $img ?>" accept=".jpg, .jpeg, .png" >

                <input class="enviar" name="registro" type="submit" value="Enviar">
                <?php
            }
            ?>
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
            if($x==4){

        ?>
                <script>
                    swal.fire('El usuario no fue editado!','¡Intente nuevamente!','error')
                </script>
        <?php
                exit;
            }?>
</body>
</html>
