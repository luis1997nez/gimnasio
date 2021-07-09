function validar(){
    var nombre, apellidos, email, usuario, clave, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    email = document.getElementById("email").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    telefono = document.getElementById("telefono").value;

    expresion = /\w+@\w+\.+[a-z]/;

        if(nombre === ""|| apellidos === "" || email === "" || usuario === "" || clave === "" || telefono === ""){
            alert("Todos los campos son obligatorios");
            return false;
    }
    else if(nombre.length>60){
        alert("El nombre es muy largo");
        return false;
    }
    else if(apellidos.length>60){
        alert("Los apellidos son muy largos");
        return false;
    }
    else if(email.length>60){
        alert("El correo es muy largo");
        return false;
    }
    else if (!expresion.test(email)){ 
        alert("El correo no es valido");
        return false; 
    }
    else if(usuario.length>60 || clave.length>60){
        alert("El usuario y la contraseña solo deben de tener 60 caracteres como máximo");
        return false;
    }
    else if(telefono.length>10){
        alert("El telefono es muy largo");
        return false;
    }
    else if(isNaN(telefono)){
        alert("El telefono ingresado es invalido");
        return false;
    }
}