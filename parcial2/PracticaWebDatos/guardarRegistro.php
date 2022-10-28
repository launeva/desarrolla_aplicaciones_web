<?php
    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $domicilio = $_POST["domicilio"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $sql = "UPDATE usuarios SET nombre='".$nombre."', edad='".$edad."', domicilio='".$domicilio."', sexo='".$sexo."',
    fecha_nacimiento='".$fecha_nacimiento."'"."WHERE id=".$id;

    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado con éxito<a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Erro: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }
?>