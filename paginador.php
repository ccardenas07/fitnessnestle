<html>
<head>
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
        width: 300px;
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
</body>
</html>
<?php
require_once('conexion.php');
$RegistrosAMostrar=4;

//estos valores los recibo por GET
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
	
}
/*$Resultado=mysql_query("SELECT * FROM historia ORDER BY id LIMIT $RegistrosAEmpezar, $RegistrosAMostrar",Coneccion::con());
echo "<table border='1px'>";
while($MostrarFila=mysql_fetch_array($Resultado)){
	echo "<tr>";
	
	echo "<td>".$MostrarFila['historia']."</td>";
	echo '<td>'.'<img src="upload/'.$MostrarFila['foto'].'".<td> />';
	//echo "<td>".$MostrarFila['foto']."</td>";
	echo "</tr>";
}
echo "</table>";*/



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
//******--------determinar las páginas---------******//
$NroRegistros=mysql_num_rows(mysql_query("SELECT historia,foto FROM historia",Coneccion::con()));

$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;

//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
// si hay residuo usamos funcion floor para que me
// devuelva la parte entera, SIN REDONDEAR, y le sumamos
// una unidad para obtener la ultima pagina
if($Res>0) $PagUlt=floor($PagUlt)+1;

//desplazamiento
echo "<a onclick=\"Pagina('1')\">Primero</a> ";
if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
echo "<a onclick=\"Pagina('$PagUlt')\">Ultimo</a>";
?>
