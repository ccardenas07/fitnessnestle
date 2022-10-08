<?php

require_once'conexion/Trabajo.php';

$tra=new Trabajo();
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")

{
	/*instancia de la clase trabajo*/
	
	$tra=new Trabajo();

	$tra->insertusuario();

	exit; 
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38627793-1']);
  _gaq.push(['_setDomainName', 'appiglu.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type="text/css">

body

{

	color:#FFF;

}

#error

{

	margin-top: -59px;

margin-left: 147px;

color: #FFFFFF !important;

}
.mensaje
{
	margin-left: 462px;
	margin-top: 81px;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Formulario</title>

<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.10.2.min.js" ></script>

<script type="text/javascript" src="js/funciones.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>     

<script type="text/javascript" src="js/validCampoFranz.js"></script>

<script type="text/javascript">

            $(function(){

                //Para escribir solo letras

                $('#minombre').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

				$('#miapellido').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

				$('#miciudad').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

                //Para escribir solo numeros    

                $('#micelular').validCampoFranz('0123456789'); 

				 $('#micedula').validCampoFranz('0123456789'); 

				  $('#miedad').validCampoFranz('0123456789');   

            });

        </script>      

</head>



<body>

<img src="image/2_formulario2.jpg" width="790px" height="800px" />


    <div class="formulario">

        <form name="form" id="form" method="post" action="formulario.php">
		
        <div class="lnom">Nombres:</div>

        <div class="nombre"><input type="text" name="nombre" id="minombre" size="10"/></div>

        <div class="apellido"><input type="text" name="apellido" id="miapellido" size="14" /></div>

        <div class="lcel">Celular:</div>

        <div class="celular"><input type="text" name="celular" id="micelular"  size="35"/>

        </div>

        <div class="lemail">E-mail:</div>

        <div class="email"><input type="text" name="email" id="miCampo1"size="35" /></div>

        <div class="lced">C&eacute;dula:</div>

        <div class="cedula"><input type="text" name="cedula" id="micedula"size="35" /></div>

        <div class="lciudad">Ciudad:</div>

        <div class="ciudad"><input type="text" name="ciudad" id="miciudad"size="35" /></div>



        <div class="botonform">

        <input type="hidden" name="grabar" id="grabar"  value="si" />

        <a href="javascript:void(0);" id="boton" onclick="valida_registro();">

        <img src="image/btn_enviar.png" width="104px" height="33px" />

        </a>

        </div>

        <div id="error"></div>
			
        </form>

    </div>
	<div class="mensaje">
			<?php
			if (isset($_GET["m"]) and $_GET["m"]==1)
			{
			?>
			<h2 style="color:black;">Tus datos ya estan registrados</h2>
			<?php
			}
			?>
	</div>
</body>

</html>

