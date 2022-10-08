<?php
require_once("conexion/Trabajo.php");
//print_r($_GET);
/*if (isset($_GET["pos"]))
{
	$inicio=$_GET["pos"];
}else
{
	$inicio=0;
}*/

?>
<?php
$tra=new Trabajo();
$total=$tra->totaldatoscon();

$num=$total / 4;
$resto=$total % 4;
$ultimo=$total - $resto;

$reg=$tra->get_datosh($_GET["pos"]);
?>
	
	<h2>Existen <?php echo number_format($total,"","",".");?> comunas en la base de datos</h2>
<ul>
<?php
for ($i=0;$i<sizeof($reg);$i++)
{
?>
<li><?php echo $reg[$i]["historia"];?></li>
<li><?php echo '<img src="upload/'.$reg[$i]["foto"].'" />'?></li>
<?php
}
?>
</ul>	
<hr />
<?php
//cargamos los n�meros de p�ginas
$a=0;
for ($j=1;$j<=$total;$j++)
{
	if ($j<=$num)
	{
		//echo "$j-";
		//echo $a."<br>";
		if ($a==$_GET["pos"])
		{
			$style='style="font-weight:bold"';
		}else
		{
			$style="";
		}
		
		?>
		<a href="javascript:void(0);" <?php echo $style;?> title="P&aacute;gina <?php echo $j;?>" onclick="from('<?php echo $a?>')"><?php echo $j;?></a>
		<?php
		
		
	}
	$a=$a+4;
}
if (count($reg)==4)
{
	?>
	<a href="javascript:void(0);"  title="P&aacute;gina <?php echo number_format($num,"","",".")+1;?>" onclick="from('<?php echo $ultimo;?>')"><?php echo number_format($num,"","",".")+1;?></a>
	<?php
}else
{
	echo "<strong>";
	echo number_format($num,"","",".")+1;
	echo "</strong";
}
?>				