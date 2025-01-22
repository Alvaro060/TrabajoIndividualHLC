<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

include_once("index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Cliente</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal" action="funcionBorrarCliente.php" name="frmBorrarCliente" id="frmBorrarCliente" method="post">
            <fieldset>
                <legend>Borrar Cliente</legend>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtBorrarIdCliente">ID del Cliente a Borrar</label>
                    <div class="col-xs-4">
                        <input id="txtBorrarIdCliente" name="txtBorrarIdCliente" class="form-control input-md" type="text" required />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-4">
                        <input type="submit" id="btnBorrarCliente" name="btnBorrarCliente" class="btn btn-danger" value="Borrar" />
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
