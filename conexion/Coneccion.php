<?php
//clase conectora
class Coneccion
{
	//funcion para crear coneccion
	public static function con()
	{
		//datos de servidor
$con=mysql_connect("localhost","appigluc_fitness","%FN.f1tness.nestle-aa2014");
//$con=mysql_connect("localhost","root","");
		//base de datos
		mysql_select_db("appigluc_fitnessnestle");
		//mysql_select_db("fitness");
		return $con;
	}
}
?>