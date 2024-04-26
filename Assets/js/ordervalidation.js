function validate() {
    var name = document.getElementById('name').value;
    var add = document.getElementById('add').value;

    if (name == "") {
        alert("El nombre del destinatario no debe estar vacío.");
        return false;
    }

    if (name.length < 5) {
        alert("El nombre del destinatario debe contener más de 5 caracteres.");
        return false;
    }

    if (add == "") {
        alert("La dirección del destinatario no debe estar vacía.");
        return false;
    }

    if (add.length < 5) {
        alert("La dirección del destinatario debe contener más de 5 caracteres.");
        return false;
    }
}

