<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

include_once("index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Reserva</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal" action="funcionEditarReserva.php" name="frmEditarReserva" id="frmEditarReserva" method="post">
            <fieldset>
                <legend>Editar Reserva</legend>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtEditarIdReserva">Id De La Reserva Que Quieres Editar (ID NO EDITABLE)</label>
                    <div class="col-xs-4">
                        <input id="txtEditarIdReserva" name="txtEditarIdReserva" class="form-control input-md" type="text" style="background-color: #85afda"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="lstClienteId">Id Del Cliente</label>
                    <div class="col-xs-4">
                        <input id="txtEditarIdCliente" name="txtEditarIdCliente" class="form-control input-md" type="text"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="dateEditar_check_in_date">Fecha De Entrada</label>
                    <div class="col-xs-4">
                        <input id="dateEditar_check_in_date" name="dateEditar_check_in_date" class="form-control input-md" type="date" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="dateEditar_check_out_date">Fecha De Salida</label>
                    <div class="col-xs-4">
                        <input id="dateEditar_check_out_date" name="dateEditar_check_out_date" class="form-control input-md" type="date" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtEditarRoomNumber">Número De La Habitación</label>
                    <div class="col-xs-4">
                        <input id="txtEditarRoomNumber" name="txtEditarRoomNumber" class="form-control input-md" type="text" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtEditarPrice">Precio De La Habitación</label>
                    <div class="col-xs-4">
                        <input id="txtEditarPrice" name="txtEditarPrice" class="form-control input-md" type="text" required />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-4">
                        <input type="submit" id="btnEditarReserva" name="btnEditarReserva" class="btn btn-primary" value="Aceptar" />
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
