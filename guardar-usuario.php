<?php
    switch($_REQUEST["accion"]){
        case "guardar":
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $clave = $_POST["clave"];
            $fecha_nac = $_POST["fecha_nac"];

            $sql = "INSERT INTO usuarios (nombre, email, clave, fecha_nac) VALUES ('{$nombre}', '{$email}', '{$clave}', '{$fecha_nac}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Registrado con éxito');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('No fue posible registrar');</script>;";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case "editar":
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $clave = $_POST["clave"];
            $fecha_nac = $_POST["fecha_nac"];

            $sql = "UPDATE usuarios SET 
                nombre='{$nombre}', 
                email='{$email}', 
                clave='{$clave}', 
                fecha_nac='{$fecha_nac}'
                WHERE
                    id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado con éxito');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('No fue posible Editar');</script>;";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case "eliminar":
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Eliminado con éxito');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('No fue posible Eliminar');</script>;";
                print "<script>location.href='?page=listar';</script>";
            }
            
            break;
    }

?>