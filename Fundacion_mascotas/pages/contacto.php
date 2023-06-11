<?php
    include '../db/conexion.php';
    $idM=@$_REQUEST['id'];
    $opcion=@$_REQUEST['opcion'];
    if(!empty($opcion)){
        $query=mysqli_query($conexion, "SELECT * FROM mascota WHERE idMascota='$idM'");
        $datos=mysqli_fetch_array($query);
        $nombre = $datos['masNombre'];
    }
    
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
    <section class="contacto">
        <h1>¿Como contactarnos?</h1>
        <div class="opciones_contacto">
            <div class="opcionC1">
                    <h2 class="linea">Telefonos</h2>
                    <h3 class="linea">3219670365</h3>

                    <h3 class="linea">3028754646 </h3><br>
                    <h3 class="linea">Correo </h3>
                    <h3 class="linea">nubhas02@gmail.com </h3>
                    <h3 class="linea">fundacionnube@gmail.com </h3>
            </div>
            <div class="opcionC2">
            <div class="formulario_contacto">
                <form action="../back/crearSolicitud.php" method="post">
                    <input type='hidden' name='id' value='<?php echo $idM ?>'>
                    <label for="nombre">Nombres </label>
                    <input class="input-padron" type="text" id="nombre" name ="nombre" required>
                    <label for="apellido">Apellidos </label>
                    <input class="input-padron" type="text" id="apellido" name ="apellido" required>
                    <label for="telefono">Telefono </label>
                    <input class="input-padron" type="tel" id="telefono" name ="telefono" required>
                    <label for="correo">Correo </label>
                    <input class="input-padron" type="email" id="correo" name ="correo" required>

                    <label for="interes">¿En que está interesado? </label>
                        <select class="input-padron" id="opcion" name="opcion" required>
                            <?php
                            if($opcion=="apadrinar"){
                                echo "<option value='apadrinar' selected='selected'> Apadrinar</option>";
                                $opcionI="Apadrinar";
                            }else if($opcion=="adoptar"){
                                echo"<option value='adoptar' selected='selected'> Adoptar</option>";
                                $opcionI="Adoptar";
                            }
                            ?>
                            <option value="apadrinar"> Apadrinar</option>
                            <option value="adoptar"> Adoptar</option>
                            <option value="informacion"> Información</option>
                        </select>

                    <label for="mensaje">Mensaje</label>
                    <?php 
                    if(!empty($opcion)){
                        echo "<textarea  class='input-padron' name='mensaje' id='mensaje' cols='30' rows='5' required>Estoy interesad@ en $opcionI a $nombre </textarea>";
                    }else{
                        echo "<textarea  class='input-padron' name='mensaje' id='mensaje' cols='30' rows='5' required></textarea>";
                    }
                    ?>
                    

                    <input class="enviar" name="registro" type="submit" value="Enviar">

                </form>
            </div>
                
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
            if($x==2){
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