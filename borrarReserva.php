<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

include_once("index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Reserva</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal" action="funcionBorrarReserva.php" name="frmBorrarReserva" id="frmBorrarReserva" method="post">
            <fieldset>
                <legend>Borrar Reserva</legend>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtBorrarIdReserva">ID de la Reserva a Borrar</label>
                    <div class="col-xs-4">
                        <input id="txtBorrarIdReserva" name="txtBorrarIdReserva" class="form-control input-md" type="text" required />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-4">
                        <input type="submit" id="btnBorrarReserva" name="btnBorrarReserva" class="btn btn-danger" value="Borrar" />
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>