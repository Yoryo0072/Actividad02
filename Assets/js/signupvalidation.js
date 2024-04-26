function validate() {
	var fulnme = document.getElementById('fulnme').value;
	var user = document.getElementById('user').value;
	var pwd = document.getElementById('pwd').value;
	var rpwd = document.getElementById('rpwd').value;
	var eml = document.getElementById('eml').value;
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var phone = document.getElementById('phone').value;
	var bd = document.getElementById('bd').value;
	var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
	var addrs = document.getElementById('addrs').value;
	var crednum = document.getElementById('crednum').value;
	var cvn = document.getElementById('cvn').value;
	var exp = document.getElementById('exp').value;
	var expformat = /^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/;

	if (fulnme == "") {
		alert("El nombre completo no debe estar vacío.");
		return false;
	}

	if (fulnme.length < 6) {
		alert("El nombre completo debe contener más de 6 caracteres.");
		return false;
	}

	if (user == "") {
		alert("El nombre de usuario no debe estar vacío.");
		return false;
	}

	if (user.length < 5) {
		alert("El nombre de usuario debe contener más de 5 caracteres.");
		return false;
	}

	if (eml == "") {
		alert("El correo electrónico no debe estar vacío.");
		return false;
	}

	if (!eml.match(mailformat)) {
		alert("El correo electrónico introducido no es válido.");
		return false;
	}

	if (pwd == "") {
		alert("La contraseña no debe estar vacía.");
		return false;
	}

	if (pwd.length < 5) {
		alert("La contraseña debe contener más de 5 caracteres.");
		return false;
	}

	if (pwd != rpwd) {
		alert("Las contraseñas no coinciden.");
		return false;
	}

	if (phone == "") {
		alert("El número de teléfono no debe estar vacío.");
		return false;
	}

	if ((phone.length != 8) || (isNaN(phone))) {
		alert("El número de teléfono introducido no es válido.");
		return false;
	}

	if (!bd.match(dateformat)) {
		alert("La fecha introducida no es válida.");
		return false;
	}

	if (addrs == "") {
		alert("La dirección no debe estar vacía.");
		return false;
	}

	if (addrs.length < 10) {
		alert("La dirección debe contener más de 10 caracteres.");
		return false;
	}

	if (crednum == "") {
		alert("El número de la tarjeta de crédito no debe estar vacío.");
		return false;
	}

	if ((crednum.length != 16) || (isNaN(crednum))) {
		alert("El número de tarjeta de crédito no es válido.");
		return false;
	}

	if (cvn == "") {
		alert("El CVN no debe estar vacío.");
		return false;
	}

	if ((cvn.length != 3) || (isNaN(cvn))) {
		alert("El CVN no es válido.");
		return false;
	}

	if (!exp.match(expformat)) {
		alert("La fecha de EXP introducida no es válida.");
		return false;
	}
}