<?php
        include_once('./../../databases/conexion.php');
        
        $id_alumno = $_REQUEST["id_alumno"];    
        $query = "DELETE FROM tb_alumnos WHERE tb_alumnos.`id_alumno` = '$id_alumno'";
        $resultado = mysqli_query($conn,$query);
        if ($resultado) {
            header("Location: ./../../index.php");
        } else {
            echo "Error en la consulta:";
        }
?>
