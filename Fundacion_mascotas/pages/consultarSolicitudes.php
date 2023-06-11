<?php
    include '../db/conexion.php';
    session_start();
    if($_SESSION['admin'] != 1){
        header("location:salir.php");
        die();
    }
    $query = mysqli_query($conexion, "SELECT * from solicitud");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Tabla</title>
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
<hr class="linea-horizontal">
<section class="tabla-mascota">
    <h1>Solicitudes recibidas</h1>
    <div class="wrapper">
        <div class="container">
            <div class="filter">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="show-row">
                            <select class="form-control">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20" selected="selected">20</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-4">
                            <div class="search-row">
                                <input type="text" name="search" class="form-control" placeholder="Buscar">
                            </div>
                        </div>
                    </div>
                </div>
                <table id="music">
                    <thead>
                        <tr  class="myHead">
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Interes</th>
                            <th>Mensaje</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php
            while ($datos=mysqli_fetch_array($query)) {
                $id= $datos['idSolicitud'];
                $nombre = $datos['solNombre'];
                $apellido = $datos['solApellido'];
                $telefono=$datos['solTelefono'];
                $correo=$datos['solCorreo'];
                $interes=$datos['solInteres'];
                $mensaje=$datos['solMensaje'];
                echo '
                <tr data-url="FQS7i2z1CoA">
        
                <td>'.$id.'</td>
                <td>'.$nombre.'</td>
                <td>'.$apellido.'</td>
                <td>'.$telefono.'</td>
                <td>'.$correo.'</td>
                <td>'.$interes.'</td>
                <td>'.$mensaje.'</td>';
                ?>
              </tr>
                <?php
            }
                    ?>
                </tbody>
            </table>
            <div class="text-center-controller">
                <ul class="pagination"></ul>
                <ul class="pager">
                    <li ><a href="javascript:void(0)" class="prev">Anterior</a></li>
                    <li><a href="javascript:void(0)" class="next">Siguiente</a></li>
                </ul>
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

 <script src="../js/script.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php 
            $x=@$_REQUEST['x'];
            if($x==1){
        ?>
                <script>
                    swal.fire('Excelente!','La mascota fue creada con exito','success')
                </script>
        <?php
                exit;
            }else if($x==3){
        ?>
                <script>
                    swal.fire('Excelente!','La mascota fue editada con exito','success')
                </script>
        <?php
                exit;
            }else if($x==5){
                ?>
                <script>
                    swal.fire('Excelente!','La mascota fue eliminada con exito','success')
                </script>
                <?php
                exit;
            }else if($x==6){
                ?>
                <script>
                    swal.fire('La mascota no fue eliminada!','¡Intente nuevamente!','error')
                </script>
                <?php
                exit;
            }
        ?>
        
</body>
</html>