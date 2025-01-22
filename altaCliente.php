<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

include_once("index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Cliente</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal" action="funcionAltaCliente.php" name="frmAltaCliente" id="frmAltaCliente" method="post">
            <fieldset>
                <legend>Alta de Cliente</legend>
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="client_name">Nombre del Cliente</label>
                    <div class="col-xs-4">
                        <input id="client_name" name="client_name" placeholder="Nombre Del Cliente" class="form-control input-md" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="address">Dirección</label>
                    <div class="col-xs-4">
                        <input id="address" name="address" placeholder="Dirección Del Cliente" class="form-control input-md" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="phone_number">Teléfono</label>
                    <div class="col-xs-4">
                        <input id="phone_number" name="phone_number" placeholder="Teléfono Del Cliente" class="form-control input-md" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="email">Email</label>
                    <div class="col-xs-4">
                        <input id="email" name="email" placeholder="Email Del Cliente" class="form-control input-md" type="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-4">
                        <input type="submit" id="btnAceptarAltaCliente" name="btnAceptarAltaCliente" class="btn btn-primary" value="Aceptar">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
