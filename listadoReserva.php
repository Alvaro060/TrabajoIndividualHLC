<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

include_once("index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Reservas</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal" name="frmListadoReservas" id="frmListadoReservas" method="post" action="funcionListadoReserva.php">
            <fieldset>
                <legend>Listado de Reservas</legend>
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="reservation_id">ID de la Reserva</label>
                    <div class="col-xs-4">
                        <input id="reservation_id" name="reservation_id" placeholder="ID de la Reserva" class="form-control input-md" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-4">
                        <input type="submit" id="btnListadoReservas" name="btnListadoReservas" class="btn btn-primary" value="Aceptar">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
