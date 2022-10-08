<?php
require_once'Coneccion.php';
class Trabajo
{
	private $dato;
        private $com;
	/**contructor inicializo el array*/
	      public function __construct()
		  {
			  $this->dato=array();
                          $this->com=array();
		  }
	/*FUNCION SQL PARA INGRESAR USUARIOS*/
public function insertusuario()
{
	$query="select email,cedula from datos where email='".$_POST["email"]."' && cedula='".$_POST["cedula"]."'";
		$resp=mysql_query($query,Coneccion::con());
		if (mysql_num_rows($resp)==0)
		{
		$sql="insert into datos values(null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["celular"]."','".$_POST["email"]."','".$_POST["cedula"]."','".$_POST["ciudad"]."')";
		mysql_query($sql,Coneccion::con());
		echo("<script type='text/javascript'> 
		window.location='historia.php'
		</script>");
		}else
		{
			header("Location: formulario.php?m=1");
		}
}
public function consultaid()
{
	
}
public function gethistoria($id)
{
	$sql="select id, historia,foto from historia where id='$id'";
	$res=mysql_query($sql,Coneccion::con());
	while($reg=mysql_fetch_assoc($res))
	{
		$this->dato[]=$reg;
	}
	return $this->dato;
}
public function totaldatoscon()
{
    $sql="select count(*)as cuantos from historia";
    $res= mysql_query($sql,  Coneccion::con());
    if($reg=  mysql_fetch_array($res))
    {
    $total=$reg["cuantos"];
    }
    return $total;
}
public function get_datosh($inicio)
	{
		$sql="select * from historia limit $inicio,4";
		$res=mysql_query($sql,Coneccion::con());
		while($reg=mysql_fetch_assoc($res))
		{
			$this->com[]=$reg;
		}
			return $this->com;
	}
public function getdat()
{
	$sql="select id, foto,historia from historia order by id desc";
	$res= mysql_query($sql,Coneccion::con());
	while($reg=mysql_fetch_assoc($res))
	{
		$this->dato[]=$reg;
	}
	return $this->dato;
}

}//fin clase
?>