<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

// Obtener lista de clientes para el dropdown
$sql = "SELECT client_id, client_name FROM clientes;";
$resultado = mysqli_query($conexion, $sql);

if ($resultado === false) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

$options = "";
while ($fila = mysqli_fetch_assoc($resultado)) {
    $options .= "<option value='" . $fila["client_id"] . "'>" . $fila["client_name"] . "</option>";
}

include_once("index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Reserva</title>
</head>
<body>
<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal" action="funcionAltaReserva.php" name="frmAltaReserva" id="frmAltaReserva" method="post">
            <fieldset>
                <legend>Alta de Reserva</legend>
                
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="lstClientId">Nombre del Cliente</label>
                    <div class="col-xs-4">
                        <select name="lstClientId" id="lstClientId" class="form-select">
                            <option value="">Seleccione un nombre</option>
                            <?php echo $options; ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="check_in_date">Fecha de Entrada</label>
                    <div class="col-xs-4">
                        <input id="check_in_date" name="check_in_date" class="form-control input-md" type="date" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="check_out_date">Fecha de Salida</label>
                    <div class="col-xs-4">
                        <input id="check_out_date" name="check_out_date" class="form-control input-md" type="date" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="room_number">Número de Habitación</label>
                    <div class="col-xs-4">
                        <input id="room_number" name="room_number" placeholder="Número de Habitación" class="form-control input-md" type="text" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="price">Precio de la Habitación</label>
                    <div class="col-xs-4">
                        <input id="price" name="price" placeholder="Precio de la Habitación" class="form-control input-md" type="text" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-xs-4">
                        <input type="submit" id="btnAltaReserva" name="btnAltaReserva" class="btn btn-primary" value="Aceptar">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
