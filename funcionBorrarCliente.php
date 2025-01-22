<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Recuperar el ID del cliente a borrar
$client_id = $_POST['txtBorrarIdCliente'];

// Definir la consulta para borrar al cliente
$sql = "DELETE FROM clientes WHERE client_id = ?";

// Preparar la consulta
$stmt = $conexion->prepare($sql);
if (!$stmt) {
    die("Error preparando la consulta: " . $conexion->error);
}

// Vincular el parámetro
$stmt->bind_param("i", $client_id);

// Ejecutar la consulta
if ($stmt->execute()) {
    $mensaje = "<h2 class='text-center mt-5'>Cliente borrado con éxito</h2>";
} else {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);
    $mensaje = "<h2 class='text-center mt-5'>Se ha producido un error número $numerror que corresponde a: $descrerror </h2>";
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conexion->close();

// Incluir cabecera HTML
include_once("index.html");

// Mostrar mensaje
echo $mensaje;
?>
