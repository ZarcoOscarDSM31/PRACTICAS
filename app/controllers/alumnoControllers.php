    <?php
    include('./../../databases/conexion.php');

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

    $query = "INSERT INTO `tb_alumnos` (`id_alumno`, `nombre`, `fn`, `gen`, `matricula`, `direccion`, `email`, `pass`, `foto`, `id_grupo`, `created_at`, `updated_at`) 
    VALUES ('','$nombre','$fn','$genero','$matricula','$direccion','$email','$password','$foto','5','$created_at','$updated_at')";
    $resultado = mysqli_query($conn,$query);
    if ($resultado = TRUE){
        //echo "EL registro  se insertó de manera correcta";
        header("Location: ./../../index.php");
    }else{
        echo "EL registro no se insertó";
    }

    ?>