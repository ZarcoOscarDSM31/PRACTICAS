<?php
    include('./../../databases/conexion.php');

    $id_al = $_REQUEST['id_alumno'];

    $nombre = $_POST['nombre'];
    $fn = $_POST['fn'];
    $genero = $_POST['gen'];
    $matricula =  $_POST['matricula'];
    $direccion =  $_POST['direccion'];
    $email = $_POST['email'];
    $password = $_POST['pass']; 
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name'])); //Método para guardar bits de una imágen en la base de datos
    $created_at = $_POST['created_at']; 
    $updated_at = $_POST['updated_at']; 

    $query = "UPDATE tb_alumnos SET nombre='$nombre',fn='$fn',gen='$genero',matricula='$matricula',direccion='$direccion',email='$email',pass='$password',foto='$foto',created_at='$created_at'
    WHERE id_alumno='$id_al'";
    $resultado = mysqli_query($conn,$query);
    if ($resultado = TRUE){
        //echo "EL registro  se insertó de manera correcta";
        header("Location: ./../../index.php");
    }else{
        echo "EL registro no se insertó";
    }

    ?>