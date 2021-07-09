<?php
 require_once ('conexion.php');

 class ingcontacto{

    public function insertarComentario($nombreUs, $correoUs, $asuntoUs, $mensajeUs){

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "INSERT INTO contacto(nombreUsu, email, asunto, mensaje) VALUES(:nombreUsu, :email, :asunto, :mensaje)";

        $statement = $conexion->prepare($sql);
        $statement->bindParam(':nombreUsu', $nombreUs);
        $statement->bindParam(':email', $correoUs);
        $statement->bindParam(':asunto', $asuntoUs);
        $statement->bindParam(':mensaje', $mensajeUs);

        $statement->execute();
    }

 }

?>