function validarFormulario() {
    // Obtener los valores de los campos de entrada
    var email = document.getElementById("emailuser").value;
    var password = document.getElementById("pass").value;

    // Validar el correo electrónico
    var emailRegex = /^[\w-]+(\.[\w-]+)*@alerce\.edu\.mx$/;
    if (!emailRegex.test(email)) {
        alert("Ingrese un correo institucional");
        return false;
    }

    // Validar la contraseña (mínimo 8 caracteres con al menos una letra mayúscula, una letra minúscula y un número)
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if (!passwordRegex.test(password)) {
        alert("Ingrese una contraseña valida");
        return false;
    }

    // Si la validación es exitosa, puedes enviar el formulario al servidor
    return true;
}