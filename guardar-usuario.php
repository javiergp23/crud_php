<?php
    switch($_REQUEST["accion"]){
        case "guardar":
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $clave = $_POST["clave"];
            $fecha_nac = $_POST["fecha_nac"];

            $sql = "INSERT INTO usuarios (nombre, email, clave, fecha_nac) VALUES ('{$nombre}', '{$email}', '{$clave}', '{$fecha_nac}')";

            $res = $conn->query($sql);
        break;
    }

?>