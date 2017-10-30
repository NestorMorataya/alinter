function chek(input){
	if(input.checked){
		document.getElementById("contraseña").type = "text";
		document.getElementById("contraseña2").type = "text";
		document.getElementById("contrasenhaU").type = "text";
		document.getElementById("contrasenhaU2").type = "text";
	}
	else{
		document.getElementById("contraseña").type = "password";
		document.getElementById("contraseña2").type = "password";
		document.getElementById("contrasenhaU").type = "password";
		document.getElementById("contrasenhaU2").type = "password";
	}
}


function limpiar(){
	document.getElementsByName("nombre")[0].value="";
	document.getElementsByName("apellido")[0].value="";
	document.getElementsByName("usuario")[0].value="";
	document.getElementsByName("contrasena")[0].value="";
	document.getElementsByName("contrasena2")[0].value="";
	document.getElementById("mostrar").checked=0;
	document.getElementsByName("tipo")[0].value="";

	/*document.getElementsByName("nombreU")[0].value="";
	document.getElementsByName("apellidoU")[0].value="";
	document.getElementsByName("puestoU")[0].value="";
	document.getElementsByName("jefeU")[0].value="";
	document.getElementsByName("unidadU")[0].value="";
	document.getElementsByName("usuarioU")[0].value="";
	document.getElementsByName("contrasenaU")[0].value="";
	document.getElementsByName("contrasenaU2")[0].value="";
	document.getElementsByName("tipoU")[0].value="";
	document.getElementById("mostrarU").checked=0;
	document.getElementsByName("usuarioSeleccionado")[0].value="";*/

	document.getElementById("contraseña").type = "password";
	document.getElementById("contraseña2").type = "password";
	/*document.getElementById("contrasenhaU").type = "password";
	document.getElementById("contrasenhaU2").type = "password";*/



}


