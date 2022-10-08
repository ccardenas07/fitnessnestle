function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }

function limpiar_logueo()
{
	document.form.reset();
	document.form.user.focus();
}
function validar_logueo()
{
	var form=document.form;
	if (form.user.value==0)
	{
		alert("Ingrese su Login");
		form.user.value="";
		form.user.focus();
		return false;
	}
	if (form.pass.value==0)
	{
		alert("Ingrese su Password");
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	
	form.pass.value=calcMD5(form.pass.value);
	form.submit();
	
}
function valida_registro()
{
	var form=document.form;	
	if (form.nombre.value==0)
	{
		//alert("Ingrese su Nombre");
		document.getElementById("error").innerHTML="<font color='white'>El campo Nombre es requerido</font>";
		form.nombre.value="";
		form.nombre.focus();
		return false;
	}
	if (form.apellido.value==0)
	{
		document.getElementById("error").innerHTML="<font color='white'>El campo  Apellido es requerido</font>";
		//alert("Ingrese su Apellido");
		form.apellido.value="";
		form.apellido.focus();
		return false;
	}
	/*if (form.edad.value==0)
	{
		document.getElementById("error").innerHTML="<font color='red'>El campo  Edad es requerido</font>";
		//alert("Ingrese su Apellido");
		form.edad.value="";
		form.edad.focus();
		return false;
	}*/
	if (form.celular.value==0)
	{
		//alert("Ingrese su Celular");
		document.getElementById("error").innerHTML="<font color='white'>El campo Celular es requerido</font>";
		form.celular.value="";
		form.celular.focus();
		return false;
	}
	if (form.celular.value.length >10) {
	document.getElementById("error").innerHTML="<font color='white'>El campo celular debe tener 10 digitos</font>";
	form.celular.value="";
	form.celular.focus();
	return false;
	}
	if (form.email.value==0)
	{
		//alert("Ingrese su Email");
		document.getElementById("error").innerHTML="<font color='white'>El campo Email es requerido</font>";
		form.email.value="";
		form.email.focus();
		return false;
	}
	if (valida_correo(form.email.value)==false)
	{
		//alert("Ingrese su Email");
		document.getElementById("error").innerHTML="<font color='white'>El campo Email está incorrecto</font>";		
		form.email.value="";
		form.email.focus();
		return false;
	}
	
	if (form.cedula.value==0)
	{
		
		//alert("Ingrese su Cedula");
		document.getElementById("error").innerHTML="<font color='white'>El campo Cédula es requerido</font>";
		form.cedula.value="";
		form.cedula.focus();
		return false;
	}
	if (form.cedula.value.length >10) {
	document.getElementById("error").innerHTML="<font color='white'>El campo Cédula debe tener 10 digitos</font>";
	form.cedula.value="";
	form.cedula.focus();
	return false;
	}
	if (form.ciudad.value==0)
	{
		
		//alert("Ingrese su Cedula");
		document.getElementById("error").innerHTML="<font color='white'>El campo Ciudad es requerido</font>";
		form.ciudad.value="";
		form.ciudad.focus();
		return false;
	}
	form.submit();
}
function valida_historia()
{
	var form=document.form;	
	if (form.nom1.value==0)
	{
		//alert("Ingrese su Nombre");
		document.getElementById("error").innerHTML="<font color='black'>El campo de la Historia es requerido</font>";
		form.nom1.value="";
		form.nom1.focus();
		return false;
	}
	form.submit();
}