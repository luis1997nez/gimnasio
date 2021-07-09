<?php

    class valregistro{

        public function insertarRegistro($nom, $ape, $corre, $us, $pw, $tel, $rol){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $sql = "INSERT INTO usuarios(nombreUser, apellidosUser, correoUser, nickUser, contrasenia, telefono, idRol) VALUES(:nombreUser, :apellidosUser, :correoUser, :nickUser, :contrasenia, :telefono, :idRol)";
        

            $statement = $conexion->prepare($sql);
            $statement->bindParam(':nombreUser', $nom);
            $statement->bindParam(':apellidosUser', $ape);
            $statement->bindParam(':correoUser', $corre);
            $statement->bindParam(':nickUser', $us);
            $statement->bindParam(':contrasenia', $pw);
            $statement->bindParam(':telefono', $tel);
            $statement->bindParam(':idRol', $rol);

            if(!$statement){
                return "Error";
            }else{
                $statement->execute();
            }

        }

    }

?>