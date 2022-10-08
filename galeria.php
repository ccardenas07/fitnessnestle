<html>
<head>
<title>
</title>
<link href="css/estilos.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="ajax.js"></script>
<style type="text/css">
#listado >  div{
	display:inline-block;
	vertical-align:top;
	padding:10px;
	border:1px solid #ddd;
	margin:4px;
        height: 250px;
        /*overflow: auto;*/
}
#listado > div p{
	margin-right:  100px;
        width: 550px;
        height: 150px;
        overflow: auto;
}
#listado > div img
{
    height: 90px;
   /* width: 80px;*/
}
#listado > div img+p{
	margin-right:20px;
}
</style>
</head>
<body>
<?php
/*
require_once'conexion.php';
$hist=new Trabajo();
$hi=$hist->getdatos();
echo '<div id="listado">';
for($i=0;$i<sizeof($hi);$i++)
{
	
		echo'<div>';		
		echo '<img src="upload/'.$hi[$i]["foto"].'" />';
                echo '<p>'. nl2br($hi[$i]["historia"].'</p>');
		echo'</div>';
	
}
echo'</div>';
*/
?>
<img src="images/4_galeria.jpg" width="790px" height="800px">
<div class="contenido">
<?php include('paginador.php')?>
</div>
</body>
</html>



