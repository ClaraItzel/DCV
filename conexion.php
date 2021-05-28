<?php
$conexion = mysqli_connect("localhost", "root", "", "dycvdb");
if (!$conexion){
    echo "Error al conectar con la base de datos";

} else {
    echo "Conexión exitosa";
}
?>