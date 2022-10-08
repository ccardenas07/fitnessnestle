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
//$bd=mysql_select_db("trabajo_de_curso",$con);

//******************************************************************
function saludo()
{
	echo "hola mundo";
}
//*************************************************************
//Convierto los acentos a HTML
function chao_tilde($entra)
{
$traduce=array( '�' => '&aacute;' , '�' => '&eacute;' , '�' => '&iacute;' , '�' => '&oacute;' , '�' => '&uacute;' , '�' => '&ntilde;' , '�' => '&Ntilde;' , '�' => '&auml;' , '�' => '&euml;' , '�' => '&iuml;' , '�' => '&ouml;' , '�' => '&uuml;');
$sale=strtr( $entra , $traduce );
return $sale;
}
class Trabajo
{
	private $hi;
	public function __construct()
	{
		$this->hi=array(); 
		
	}
	public function getdatos()
	{
		$sql="select id,historia,foto from historia";
		$res=mysql_query($sql,Coneccion::con());
		while($reg=mysql_fetch_assoc($res))
		{
			$this->hi[]=$reg;
		}
		return $this->hi;
	}
        public function getdatosid($id)
        {
        $sql="select id,historia,foto from historia where id='$id' ";
        $res=  mysql_query($sql,  Coneccion::con());
        while($reg=  mysql_fetch_assoc($res))
        {
            $this->hi=$reg;
        }
        return $this->hi;
        }
}
?>