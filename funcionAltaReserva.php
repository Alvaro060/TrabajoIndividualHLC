<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Recuperar los parámetros del formulario
$clientId = $_POST['lstClientId'];
$checkInDate = $_POST['check_in_date'];
$checkOutDate = $_POST['check_out_date'];
$roomNumber = $_POST['room_number'];
$price = $_POST['price'];

// Preparar la consulta para insertar la reserva en la tabla 'reservas'
$sql = "INSERT INTO reservas(client_id, check_in_date, check_out_date, room_number, price) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
if (!$stmt) {
    die("Error preparando la consulta: " . $conexion->error);
}

// Vincular los parámetros a la consulta preparada
$stmt->bind_param("isssd", $clientId, $checkInDate, $checkOutDate, $roomNumber, $price);

// Ejecutar la consulta
if ($stmt->execute()) {
    $mensaje = "<h2 class='text-center mt-5'>Reserva insertada con éxito</h2>";
} else {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);
    $mensaje = "<h2 class='text-center mt-5'>Se ha producido un error número $numerror que corresponde a: $descrerror</h2>";
}

$stmt->close();
$conexion->close();

// Mostrar mensaje
echo $mensaje;

// Redirigir después de 2 segundos
echo "<script>setTimeout(function(){ window.location.href = 'alta_reserva.php'; }, 2000);</script>";
?>
