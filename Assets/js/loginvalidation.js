function validate() {
    var user = document.getElementById('user').value;
    var pwd = document.getElementById('pwd').value;

    if ((user == "") || (pwd == "")) {
        alert("El nombre de usuario y la contraseña no deben estar vacíos.");
        return false;
    }
}

