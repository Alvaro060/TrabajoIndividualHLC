<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Recuperar parámetro del formulario
$reservationId = $_POST['reservation_id'];

// Definir la consulta con JOIN para obtener los datos del cliente
$sql = "
    SELECT r.reservation_id, r.check_in_date, r.check_out_date, r.room_number, r.price, c.client_name
    FROM reservas r
    INNER JOIN clientes c ON r.client_id = c.client_id
    WHERE ? IS NULL OR r.reservation_id = ?";

// Preparar la consulta
$stmt = $conexion->prepare($sql);
if (!$stmt) {
    die("Error preparando la consulta: " . $conexion->error);
}

// Pasar parámetros a la consulta
$stmt->bind_param("ii", $reservationId, $reservationId);
$stmt->execute();
$resultado = $stmt->get_result();

// Generar la salida en formato HTML
$mensaje = "";
if ($resultado->num_rows > 0) { // Si hay resultados
    $mensaje .= "<div class='container mt-5 p-4 border rounded shadow-sm'>";
    $mensaje .= "<h2 class='text-center text-primary mb-4'>Listado de Reservas</h2>";
    $mensaje .= "<table class='table table-bordered table-hover'>";
    $mensaje .= "<thead class='table-light'><tr><th>ID Reserva</th><th>Cliente</th><th>Check-In</th><th>Check-Out</th><th>Habitación</th><th>Precio</th></tr></thead>";
    $mensaje .= "<tbody>";

    // Recorrer filas de resultados
    while ($fila = $resultado->fetch_assoc()) {
        $mensaje .= "<tr>";
        $mensaje .= "<td>" . htmlspecialchars($fila['reservation_id']) . "</td>";
        $mensaje .= "<td>" . htmlspecialchars($fila['client_name']) . "</td>";
        $mensaje .= "<td>" . htmlspecialchars($fila['check_in_date']) . "</td>";
        $mensaje .= "<td>" . htmlspecialchars($fila['check_out_date']) . "</td>";
        $mensaje .= "<td>" . htmlspecialchars($fila['room_number']) . "</td>";
        $mensaje .= "<td>" . htmlspecialchars($fila['price']) . "€</td>";
        $mensaje .= "</tr>";
    }

    $mensaje .= "</tbody></table>";
    $mensaje .= "</div>";
} else { // Si no hay resultados
    $mensaje = "<div class='container mt-5'><h2 class='text-center text-warning'>No se encontraron reservas con ese ID</h2></div>";
}

// Cerrar la consulta y la conexión
$stmt->close();
$conexion->close();

// Insertar cabecera HTML
include_once("index.html");

// Mostrar el contenido generado
echo $mensaje;
?>
