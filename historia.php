<?php

require_once'conexion/Trabajo.php';



?>

<html>

<head>
<script type="text/javascript" src="js/funciones.js"></script>
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
<title>Upload de Archivos</title>

<link href="css/estilos.css"type="text/css"rel="stylesheet">

<style type="text/css">

 .subir

 {

 position: relative;

overflow: hidden;

float: left;
 width: 150px;

}

.subirs {

  position: relative;

  overflow: hidden;

  float: left;

}



.subirs input[type="file"] {

  /** Posicionamos de forma absoluta **/

  position: absolute;

  top: 0;

  right: 0;

  margin: 0;

  /** Cambiamos los bordes **/

  border: solid transparent;

  border-width: 0 0 100px 200px;

  /** Lo hacemos transparente **/

  opacity: 0;

  filter: alpha(opacity=0);

  background: url('vacio.png') no-repeat;

}



.subirs{

  /** Lo que necesitamos **/

  cursor: pointer;

  /*background: url('vacio.png') no-repeat;*/

  width:144px;

}
#error

{

	margin-top: -59px;

margin-left: 147px;

color: #FFFFFF !important;

}


</style>

</head>

<body onLoad="document.form.reset();">

    <img src="image/3_historia_lleno.jpg">

<form name="form" action="procesa.php" method="post" enctype="multipart/form-data" >

<?php



?>

<!--<input type="text" name="nom" disabled />-->

<?php



?>

<br />

<div class="historia">

<textarea rows="3" cols="3" name="nom1" style="width: 266px; height: 312px;"></textarea>

<br>



</div>

<div class="camara">

<div class="subir">

<input type="file" name="foto" id="foto" class="subirs" value="test" title="test"/>

</div>

</div>



<div class="enviarh">

<input type="hidden" name="user" id="user" value="<?php echo $response[0]["name"];?>">

    <a href="javascript:void(0);" id="boton" onclick="valida_historia();"> <img src="image/Btn_enviar historia.png" width="155px" height="33px"></a>



</div>
 <div id="error"></div>
</form>

</body>

</html>

