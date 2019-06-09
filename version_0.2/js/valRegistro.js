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

function validar(){
    if(document.getElementById("txtNombre").value==""){
		datosCorrectos = false;
		error = "\n El nombre esta vacio";
	}

	if(document.getElementById("txtApellido").value==""){
		datosCorrectos = false;
		error = "\n El apellido esta vacio";
	}

	if(document.getElementById("txtTelefono").value==""){
		datosCorrectos=false;
		error="\n Debe de poner un número telefonico";
	}

	if(isNaN(document.getElementById("txtTelefono").value)){
		datosCorrectos=false;
		error="\n El número telefonico solo debe tener números";
	}

	if(!datosCorrectos){
		alert('Hay Errores En El formulario'+error);
	}
	return datosCorrectos;
}