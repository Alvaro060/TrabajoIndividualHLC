<?php
// Incluir archivo de funciones y conexión a la base de datos
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Recuperar los datos del formulario
$idReserva = $_POST['txtEditarIdReserva']; // ID de la reserva que se está editando
$idCliente = $_POST['txtEditarIdCliente']; // ID del cliente
$checkInDate = $_POST['dateEditar_check_in_date']; // Fecha de entrada
$checkOutDate = $_POST['dateEditar_check_out_date']; // Fecha de salida
$roomNumber = $_POST['txtEditarRoomNumber']; // Número de la habitación
$price = $_POST['txtEditarPrice']; // Precio de la habitación

// Consulta para actualizar la reserva
$sql = "UPDATE reservas SET client_id = ?, check_in_date = ?, check_out_date = ?, room_number = ?, price = ? WHERE reservation_id = ?";
$stmt = $conexion->prepare($sql);

// Se usan tipos de datos apropiados para bind_param:
// "i" para enteros, "s" para cadenas y "d" para dobles (precio es un valor numérico)
$stmt->bind_param("issdii", $idCliente, $checkInDate, $checkOutDate, $roomNumber, $price, $idReserva);

// Definir el mensaje
if ($stmt->execute()) {
    $mensaje = "<h2 class='text-center mt-5'>Reserva actualizada con éxito</h2>";
} else {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);
    $mensaje = "<h2 class='text-center mt-5'>Se ha producido un error número $numerror que corresponde a: $descrerror</h2>";
}

// Cerrar sentencia y conexión
$stmt->close();
$conexion->close();

// Incluir cabecera HTML
include_once("index.html");

// Mostrar mensaje
echo $mensaje;
?>
