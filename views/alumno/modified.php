<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Alumno</title>
    <!-- ESTILOS -->
    <link href="./../../css/styles.css" rel="stylesheet">
</head>
<body>
    
<?php
//INCLUIR BASE DE DATOS Y REUTILIZAR CÓDIGO
include ("./../../layout/nav.php");
include ("./../../layout/header.php");
include_once('./../../databases/conexion.php');
?>
    <!-- REUTILIZAR CÓDIGO DEL INDEX.PHP PARA MANTENER LOS DATOS AL MODIFICAR -->
    <?php
        $id_al = $_REQUEST['id_alumno'];

        $sql = "SELECT `id_alumno`, `nombre`, `fn`, `gen`, `matricula`, `direccion`, `email`, `pass`, `foto`, `created_at`  
        FROM `tb_alumnos` WHERE id_alumno = '$id_al'";
        $resultado = $conn->query($sql);
        $alumno = $resultado->fetch_assoc();
            $id_alumno = $alumno['id_alumno'];
            $nombre = $alumno['nombre'];
            $fn = $alumno['fn']; 
            $genero = $alumno['gen'];
            $matricula = $alumno['matricula'];
            $direccion = $alumno['direccion'];
            $email = $alumno['email'];
            $password = $alumno['pass'];
            $foto = $alumno['foto'];
            $created_at = $alumno['created_at'];
    ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <!-- Título del container -->
            <h2 class="mt-4">MODIFICAR ALUMNO</h2>
            <div class="card mb-4">
                <div class="card-header">
                    <!-- Título de la tabla -->
                    <i class="fas fa-table me-1"></i>
                </div>
                    <div class="card-body">
                        <!-- ES HACIA DONDE SE DIRIGE UNA VEZ QUE SE HACEN LOS CAMBIOS -->
                        <form action="./../../app/controllers/alumnoModificar.php?id_alumno=<?php echo $id_alumno; ?>" method="POST" enctype="multipart/form-data">
                        <div class="col m-3">
                            <img height="150px" src="data:image/jpg;base64, <?php echo base64_encode($alumno['foto']);?>"><!-- CÓDIGO QUE PERMITE VISUALIZAR LA IMÁGEN --> 
                            <div class="row m-2">
                                <label for="">Foto</label>
                                <input required class="form-control" name="foto" type="file" value="">
                            </div>
                            <div class="row m-2">
                                <label for="">Matricula</label>
                                <input required class="form-control" name="matricula" type="text" value="<?php echo $alumno['matricula']?>"> <!-- CON ESTE VALUE PODEMOS MANTENER LOS DATOS -->
                            </div>
                            <div class="row m-2">
                                <label for="">Nombre</label>
                                <input required class="form-control" name="nombre" type="text" value="<?php echo $alumno['nombre']?>">
                            </div>
                            <div class="row m-2">
                                <label for="">Fn</label>
                                <input required class="form-control" name="fn" type="text" value="<?php echo $alumno['fn']?>">
                            </div>
                            <div class="row m-2">
                                <label for="">Género</label>
                                <input required class="form-control" name="gen" type="text" value="<?php echo $alumno['gen']?>">
                            </div>
                            <div class="row m-2">
                                <label for="">Dirección</label>
                                <input required class="form-control" name="direccion" type="text" value="<?php echo $alumno['direccion']?>">
                            </div>
                            <div class="row m-2">
                                <label for="">Email</label>
                                <input required class="form-control" name="email" type="text" value="<?php echo $alumno['email']?>">
                            </div>
                            <div class="row m-2">
                                <label for="">Password</label>
                                <input class="form-control" name="pass" type="text" value="<?php echo $alumno['pass']?>">
                            </div>
                            <div class="row m-2">
                                <label for="">Created at</label>
                                <input required class="form-control" name="created_at" type="text" value="<?php echo $alumno['created_at']?>">
                            </div>
                        </div>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>

</body>
</html>