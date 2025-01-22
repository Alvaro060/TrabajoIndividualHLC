<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Recuperar parámetro
$clientId = $_POST['client_id'];

// Usar consultas preparadas para prevenir inyecciones SQL
$sql = "SELECT * FROM clientes WHERE client_id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $clientId);
$stmt->execute();
$resultado = $stmt->get_result();

// Generar salida HTML para la tabla
$mensaje = "";
if ($fila = $resultado->fetch_assoc()) { // Hay datos
    $mensaje .= "<div class='container mt-5 p-4 border rounded shadow-sm'>";
    $mensaje .= "<h2 class='text-center text-primary mb-4'>Listado de cliente por ID: $clientId</h2>";
    $mensaje .= "<table class='table table-bordered table-hover'>";
    $mensaje .= "<thead class='table-light'><tr><th>NOMBRE</th><th>DIRECCIÓN</th><th>NÚMERO DE TELÉFONO</th><th>EMAIL</th></tr></thead>";
    $mensaje .= "<tbody>";
    
    // Mostrar todas las filas encontradas
    do {
        $mensaje .= "<tr>";
        $mensaje .= "<td>" . htmlspecialchars($fila['client_name']) . "</td>";
        $mensaje .= "<td>" . htmlspecialchars($fila['address']) . "</td>";
        $mensaje .= "<td>" . htmlspecialchars($fila['phone_number']) . "</td>";
        $mensaje .= "<td>" . htmlspecialchars($fila['email']) . "</td>";
        $mensaje .= "</tr>";
    } while ($fila = $resultado->fetch_assoc());
    
    $mensaje .= "</tbody></table>";
    $mensaje .= "</div>";
} else { // No hay datos
    $mensaje = "<div class='container mt-5'><h2 class='text-center text-warning'>No se encontraron clientes con ese ID</h2></div>";
}

// Cerrar la declaración preparada y la conexión
$stmt->close();
$conexion->close();

// Insertar cabecera HTML
include_once("index.html");

// Mostrar el contenido calculado
echo $mensaje;
?>
