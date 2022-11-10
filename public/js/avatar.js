function link1() {
    var l = document.links;
    document.getElementById('avatar').value=l.miLink1.href
}

function link2() {
    var l = document.links;
    document.getElementById('avatar').value=l.miLink2.href
}

function link3() {
    var l = document.links;
    document.getElementById('avatar').value=l.miLink3.href
}

function link4() {
    var l = document.links;
    document.getElementById('avatar').value=l.miLink4.href
}

/*************************************************************/

function ShowSelected() {
    /* Para obtener el valor */
    var rol = document.getElementById("rol").value;
}

function validar () {
    var name = document.getElementById('name').value;
    var apellido = document.getElementById('apellido').value;
    var date = document.getElementById('fecha_nacimiento').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var alertname = document.getElementById('alertname');
    var alertapellido = document.getElementById('alertapellido');
    var alertdate = document.getElementById('alertdate');
    var alertemail = document.getElementById('alertemail');
    var alertpassword = document.getElementById('alertpassword');

    expresion1 = /^[a-zA-Z\u00C0-\u017F]+$/;
    //expresion4 = /^[A-Z]+$/i;
    expresion2 = /\w+@\w+\.+([a-z]{2})/;

    if (name === "") {
        alertname.innerHTML = 'El campo Nombres no puede estar vacío';
        return false;
    }else if (apellido === "") {
        alertapellido.innerHTML = 'El campo Apellidos no puede estar vacío';
        return false;
    }else if (date === "") {
        alertdate.innerHTML = 'El campo Fecha de nacimiento no puede estar vacío';
        return false;
    }else if (email === "") {
        alertemail.innerHTML = 'El campo Correo no puede estar vacío';
        return false;
    }else if (password === "") {
        alertpassword.innerHTML = 'El campo Contraseña no puede estar vacío';
        return false;
    }

    if (!expresion1.test(name)) {
        alertname.innerHTML = 'El campo Nombres solo puede llevar letras';
        return false;
    }else if (!expresion1.test(apellido)) {
        alertapellido.innerHTML = 'El campo Apellidos solo puede llevar letras';
        return false;
    }else if (!expresion2.test(email)) {
        alertemail.innerHTML = 'El Correo es invalido';
        return false;
    }

}