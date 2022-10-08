<?php

require_once("conexion.php");

$foto=$_FILES["foto"]["name"];
$temp=$_FILES["foto"]["tmp_name"];
$tamano=$_FILES["foto"]["size"];
$tipo=$_FILES["foto"]["type"];



if(!empty($foto)) // si esta lleno
{
	if ($tipo=="image/jpeg" or $tipo=="image/png")
	{
		//**************************************************************************
		//Ahora podemos subir la imagen al servidor
		switch ($tipo)
		{
			case 'image/jpeg':
				$ext=".jpg";
			break;
			case 'image/png':
				$ext=".png";
			break;
		}		
		
		$nombre_foto=$foto;
		//$nombre_foto=str_replace(" ","_",$nombre_foto);
		//$nombre_foto=$nombre_foto.$ext;
		//sube al servidor la imagen
		copy($temp,"upload/$nombre_foto");
	}
}
else
{
	$nombre_foto = "Perfil_foto2.png";
	
	
}
//***********************************************************************
//Ahora validamos la extensi�n o el tipo de archivo
	

//**************************************************************************
	//Ahora guardamos el archivo en una tabla de la base de datos HISTORIA Y NOMBRE DE LA FOTO
	$sql="insert into historia 	values (null,'".$_POST["nom1"]."','$nombre_foto')";
	//$res=mysql_db_query($bd,$sql,$con);
	mysql_query($sql,Coneccion::con());
	
	echo "<script type='text/javascript'>";
	echo" window.location='mostrar.php'";
	echo"</script>";
?>