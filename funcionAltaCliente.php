<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Recuperar datos del formulario
$client_name = $_POST['client_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

// Preparar la consulta para insertar en la tabla 'clientes'
$sql = "INSERT INTO clientes(client_name, address, phone_number, email) VALUES (?, ?, ?, ?);";

$stmt = $conexion->prepare($sql);
if (!$stmt) {
    die("Error preparando la consulta: " . $conexion->error);
}

// Vincular parámetros a la consulta preparada
$stmt->bind_param("ssss", $client_name, $address, $phone_number, $email);

// Ejecutar consulta
if ($stmt->execute()) {
    $mensaje = "<h2 class='text-center mt-5'>Cliente insertado con éxito</h2>";
} else {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);
    $mensaje = "<h2 class='text-center mt-5'>Se ha producido un error número $numerror que corresponde a: $descrerror</h2>";
}

$stmt->close();
$conexion->close();

// Mostrar mensaje
echo $mensaje;

// Redireccionar después de 5 segundos
echo "<script>setTimeout(function(){ window.location.href = 'alta_cliente.php'; }, 5000);</script>";
?>
