<?php 
//INCLUIR LOS DIFERENTES LAYOUTS, PARA PODER RECICLAR CÓDIGO
include("layout/header.php");
include("layout/nav.php");
include_once("databases/conexion.php");
?>

<!-- CONTAINER/CONTENIDO -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <!-- Título del container -->
            <h1 class="mt-4">Exámen Diagnóstico</h1>

            <!-- BOTÓN DE AGREGAR -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <a href="./views/alumno/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-sm text-white-50"></i>Agregar Alumno</a>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    
                    <!-- Título de la tabla -->
                    <i class="fas fa-table me-1"></i>
                    Exámen Diagnóstico
                </div>
                <div class="card-body">
                    
                <!-- Dropdown de cantidad de datos que se pueden presentar y el "Search..." -->
                    <!-- <div class="datatable-top">
                        <div class="datatable-dropdown">
                                <label>
                                    <select class="datatable-selector"><option value="1">1</option><option value="2" selected="">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select> datos por página
                                </label>
                            </div>
                        <div class="datatable-search">
                                <input class="datatable-input" placeholder="Buscar..." type="search" title="Search within table" aria-controls="datatablesSimple">
                            </div>
                    </div> -->

                    <!-- Tabla -->
                    <table id="datatablesSimple">
                        <thead>
                            <!-- Encabezado superior -->
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Matricula</th>
                                <th>Nombre</th>
                                <th>fn</th>
                                <th>Género</th>
                                <th>Dirección</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Created_at</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <!-- CUERPO DE LA TABLA -->
                        <tbody>
                            <!-- Código que permite visualizar al contenido de la tabla  -->
                        <?php
                            $sql = "SELECT `id_alumno`, `nombre`, `fn`, `gen`, `matricula`, `direccion`, `email`, `pass`, `foto`, `created_at`  
                            FROM `tb_alumnos`";
                            $resultado = $conn->query($sql);
                            while ($alumno = $resultado->fetch_assoc()) {
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
                                <tr>
                                    <td><?php echo $id_alumno ?></td>
                                    <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($alumno['foto']);?>"></td> <!-- PERMITE AGREGAR IMÁGENES Y CONVERTIRLAS PARA PODER MOSTRARLAS -->
                                    <td><?php echo $matricula ?></td>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $fn ?></td>
                                    <td><?php echo $genero ?></td>
                                    <td><?php echo $direccion ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $password ?></td>
                                    <td><?php echo $created_at ?></td>  
                                    <td>
                                        <!-- BOTON AZUL DE MODIFICAR -->
                                        <a href="./views/alumno/modified.php?id_alumno=<?php echo $id_alumno; ?>">
                                            <button class="btn btn-primary btn-sm" type="button">
                                                <i class="fas fa-pen fa-sm   text-white-50"></i>
                                            </button>
                                        </a>

                                        <!-- BOTON ROJO ELIMINAR -->
                                        <a href="./views/alumno/delete.php?id_alumno=<?php echo $id_alumno; ?>">
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar<?php echo $id_alumno; ?>">
                                                <i class="fas fa-trash fa-sm text-white-50"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>  
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <!-- Encabezado inferior -->
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Matricula</th>
                                <th>Nombre</th>
                                <th>fn</th>
                                <th>Género</th>
                                <th>Dirección</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Created_at</th>
                                <th>Operaciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
<div>
    <?php
    //INCLUIR EL FOOTER
    include ("layout/footer.php")
    ?>
    </div>