<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Recuperar parámetros del formulario de edición de cliente
$client_id = $_POST['txtEditarIdCliente']; 
$client_name = $_POST['txtEditarNombreCliente'];
$address = $_POST['txtEditarDireccionCliente']; 
$phone_number = $_POST['txtEditarTelefonoCliente']; 
$email = $_POST['txtEditarEmailCliente'];

// Definir la consulta de actualización utilizando consultas preparadas para mejorar la seguridad
$sql = "UPDATE clientes SET client_name = ?, address = ?, phone_number = ?, email = ? WHERE client_id = ?;";

// Preparar consulta
$stmt = $conexion->prepare($sql);
if (!$stmt) {
    die("Error preparando la consulta: " . $conexion->error);
}

// Vincular parámetros y ejecutar
$stmt->bind_param("ssssi", $client_name, $address, $phone_number, $email, $client_id);
if ($stmt->execute()) {
    $mensaje = "<h2 class='text-center mt-5'>Cliente actualizado con éxito</h2>";
} else {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);
    $mensaje = "<h2 class='text-center mt-5'>Se ha producido un error número $numerror que corresponde a: $descrerror </h2>";
}

// Cerrar sentencia y conexión
$stmt->close();
$conexion->close();

// Incluir cabecera HTML
include_once("index.html");

// Mostrar mensaje
echo $mensaje;
?>
