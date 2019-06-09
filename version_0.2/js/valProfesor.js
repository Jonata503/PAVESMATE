function revisar(elemento){
	if(elemento.value==''){
		elemento.className='error';
	}else{
		elemento.className='txt';
	}
}

function revisaCampo(elemento){
	if(elemento.value!==''){
		var data = elemento.value;
		if(!isNaN(data)){
			elemento.className='error';
		}else{
			elemento.className='txt';
		}
	}
}

function revisaNumero(elemento){
	if(elemento.value!==''){
		var data = elemento.value;
		if(isNaN(data)){
			elemento.className='error';
		}else{
			elemento.className='txt';
		}
	}
}

function revisaLongitud(elemento, min){
	if(elemento.value!==''){ 
		var data = elemento.value;
		if(data.length<min || data.length>min){
			elemento.className='error';
		}else{
			elemento.className='txt';
		}
	}
}
			
function revisarEmail(elemento){
	if(elemento.value!==''){
		var data = elemento.value;
		var exp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(!exp.test(data)){
			elemento.className='error';
		}else{
			elemento.className='txt';
		}	
	}
}

function validar(){
	var datosCorrectos=true;
	var error = "";
	if(document.getElementById("txtUsuario").value==""){
		datosCorrectos = false;
		error = "\n El usuario esta vacio";
	}

	if(document.getElementById("txtClave").value==""){
		datosCorrectos = false;
		error = "\n La contraseña esta vacia";
	}

	if(document.getElementById("op").value == "0"){
		datosCorrectos = false;
		error = "\n Seleccione un Docente valido";
	}

	if(document.getElementById("txtNombre").value==""){
		datosCorrectos = false;
		error = "\n La contraseña esta vacia";
	}

	if(document.getElementById("txtApellido").value==""){
		datosCorrectos = false;
		error = "\n La contraseña esta vacia";
	}

	if(document.getElementById("genero").value == "0"){
		datosCorrectos = false;
		error = "\n Seleccione genero";
	}
	var exp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if (document.getElementById("txtEmail").value == "") {
		datosCorrectos = false;
		error = "\n El correo esta vacia";
	}else if(!exp.test(document.getElementById("txtEmail").value)){
		datosCorrectos=false;
		error="\n Email Invalido";
	}

	if(!datosCorrectos){
		alert('Hay Errores En El formulario'+error);
	}
	return datosCorrectos;
}