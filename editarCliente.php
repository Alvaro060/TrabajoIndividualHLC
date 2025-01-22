<?php
require_once("conexionesBD.php");
$conexion = obtenerConexion();

include_once("index.html");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
</head>
<body>
<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal" action="funcionEditarCliente.php" name="frmEditarCliente" id="frmEditarCliente" method="post">
            <fieldset>
                <legend>Editar Cliente</legend>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtEditarIdCliente">ID Cliente (No Editable)</label>
                    <div class="col-xs-4">
                        <input id="txtEditarIdCliente" name="txtEditarIdCliente" class="form-control input-md" type="text" style="background-color: #85afda"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtEditarNombreCliente">Nombre del Cliente</label>
                    <div class="col-xs-4">
                        <input id="txtEditarNombreCliente" name="txtEditarNombreCliente" placeholder="Nombre del Cliente" class="form-control input-md" type="text" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtEditarDireccionCliente">Dirección</label>
                    <div class="col-xs-4">
                        <input id="txtEditarDireccionCliente" name="txtEditarDireccionCliente" placeholder="Dirección del Cliente" class="form-control input-md" type="text" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtEditarTelefonoCliente">Teléfono</label>
                    <div class="col-xs-4">
                        <input id="txtEditarTelefonoCliente" name="txtEditarTelefonoCliente" placeholder="Teléfono del Cliente" class="form-control input-md" type="text" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtEditarEmailCliente">Email</label>
                    <div class="col-xs-4">
                        <input id="txtEditarEmailCliente" name="txtEditarEmailCliente" placeholder="Email del Cliente" class="form-control input-md" type="email" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-4">
                        <input type="submit" id="btnEditarCliente" name="btnEditarCliente" class="btn btn-primary" value="Aceptar" />
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</div>
<script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
