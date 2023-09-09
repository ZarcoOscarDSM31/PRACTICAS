<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Alumno</title>
    <link href="./../../css/styles.css" rel="stylesheet">
</head>
<body>
    
<?php
//INCLUIR BASE DE DATOS Y REUTILIZAR CÓDIGO
include ("./../../layout/nav.php");
include ("./../../layout/header.php");
include_once('./../../databases/conexion.php');
?>

    
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <!-- Título del container -->
            <h2 class="mt-4">AGREGAR ALUMNO</h2>
            <div class="card mb-4">
                <div class="card-header">
                    <!-- Título de la tabla -->
                    <i class="fas fa-table me-1"></i>
                </div>
                    <div class="card-body">
                        <!-- FORMULARIO PARA AGREGAR -->
                        <form action="./../../app/controllers/alumnoControllers.php" method="POST" enctype="multipart/form-data">
                        <div class="col m-3">
                            <div class="row m-2">
                                <label for="">Foto</label>
                                <input required class="form-control" name="foto" type="file">
                            </div>
                            <div class="row m-2">
                                <label for="">Matricula</label>
                                <input required class="form-control" name="matricula" type="text" placeholder="Ejemplo: 222211330">
                            </div>
                            <div class="row m-2">
                                <label for="">Nombre</label>
                                <input required class="form-control" name="nombre" type="text" placeholder="Ejemplo: Juan Pérez">
                            </div>
                            <div class="row m-2">
                                <label for="">Fn</label>
                                <input required class="form-control" name="fn" type="text" placeholder="00/00/0000">
                            </div>
                            <div class="row m-2">
                                <label for="">Género</label>
                                <input required class="form-control" name="gen" type="text" placeholder="M / F">
                            </div>
                            <div class="row m-2">
                                <label for="">Dirección</label>
                                <input required class="form-control" name="direccion" type="text" placeholder="Ejemplo: Estado de México">
                            </div>
                            <div class="row m-2">
                                <label for="">Email</label>
                                <input required class="form-control" name="email" type="text" placeholder="Ejemplo: example@gmail.com">
                            </div>
                            <div class="row m-2">
                                <label for="">Password</label>
                                <input required class="form-control" name="pass" type="text" placeholder="Ejemplo: 123abc">
                            </div>
                            <div class="row m-2">
                                <label for="">Created at</label>
                                <input required class="form-control" name="created_at" type="text" placeholder="00/00/0000">
                            </div>
                        </div>
                        <!-- BOTÓN DE ENVÍO -->
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