<?php

w

    //esto enlasa la pagina al xampp

    $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);






    if(isset($_POST['registro'])){

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $texto = $_POST['texto'];
        
        //ingresa los datos a la tabla

        $insertarDatos = "INSERT INTO `datos`(`nombre`, `email`, `telefono`, `texto`) VALUES ('$nombre','$email','$telefono','$texto')";
        $resultado = mysqli_query($conexion, $insertarDatos) or die("error al insertar los registros.");

        mysqli_close($conexion);
        echo "Datos insertados correctamente";

    }

?>
