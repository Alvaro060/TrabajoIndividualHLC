<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Recuperar el ID del cliente a borrar
$reserva_id = $_POST['txtBorrarIdReserva'];

// Definir la consulta para borrar al cliente
$sql = "DELETE FROM reservas WHERE reservation_id = ?";

// Preparar la consulta
$stmt = $conexion->prepare($sql);
if (!$stmt) {
    die("Error preparando la consulta: " . $conexion->error);
}

// Vincular el parámetro
$stmt->bind_param("i", $reserva_id);

// Ejecutar la consulta
if ($stmt->execute()) {
    $mensaje = "<h2 class='text-center mt-5'>Reserva borrada con éxito</h2>";
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
