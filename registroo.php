<?php
include 'conexionn.php';
$username=$_REQUEST['correo'];
$password=$_REQUEST['contra'];

$sql= "INSERT INTO usuarios(correo,contrasena)
VALUES (\"$username\",\"$password\")";

if (mysqli_query($conn,$sql)){
    echo "nuevo registro creado exitosamente";
}
else {
    echo "error: " .$sql ."<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>