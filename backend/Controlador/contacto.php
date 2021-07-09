<?php

require_once ('../Modelo/conexion.php');
require_once ('../Modelo/ingcontacto.php');

$nombreUs = $_POST['nombre'];
$correoUs = $_POST['email'];
$asuntoUs = $_POST['asunto'];
$mensajeUs = $_POST['mensaje'];

$comentario = new ingcontacto();
$comentario->insertarComentario($nombreUs, $correoUs, $asuntoUs, $mensajeUs);

header('location: ../../contacto.php');


?>