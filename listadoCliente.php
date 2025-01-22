<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

include_once("index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Clientes</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal" name="frmListadoCliente" id="frmListadoCliente" method="post" action="funcionListadoCliente.php">
            <fieldset>
                <legend>Listado de Clientes</legend>
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="client_id">ID del Cliente</label>
                    <div class="col-xs-4">
                        <input id="client_id" name="client_id" placeholder="ID del Cliente" class="form-control input-md" type="text" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-4">
                        <input type="submit" id="btnListadoCliente" name="btnListadoCliente" class="btn btn-primary" value="Aceptar">
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
