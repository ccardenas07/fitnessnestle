<html>
<head>
<title></title>
<link href="css/estilos.css" type="text/css" rel="stylesheet">
<style type="text/css">
#listado >  div{
	display:inline-block;
	vertical-align:top;
	padding:10px;
	border:1px solid #ddd;
	margin:4px;
        height: 250px;
     overflow: auto;
}
#listado > div p{
	margin-right:  100px;
        width: 300px;
        height: 150px;
        overflow: auto  ;
}
#listado > div img
{
    height: 90px;
   /* width: 80px;*/
   
   
}
#listado > div img+p{
	margin-right:20px;
}
a img
{
	width:48px!important;
	 height:19px !important; 
	 overflow:auto;
}
</style>
<!----facebook--->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=252621411568916";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!---fin-->
</head>
 <body>
           <img src="images/4_galeria.jpg" width="790px" height="800px">
       <div class="contenido">

           <?php
//para ver al detalle la utilizacion de esta libreria puede ingresar a
//http://phppaging.phperu.net/basico/
//WWW.djcharlie.tk
require_once 'PHPPaging.lib.php';
/*mysql_connect("localhost","root");
mysql_select_db("fitness");*/
mysql_connect("localhost","appigluc_fitness","%FN.f1tness.nestle-aa2014");
mysql_select_db("appigluc_fitnessnestle");
$paging = new PHPPaging;
      
     
        $paging->agregarConsulta("select * from historia");
        
        // Ejecutamos la paginaci�n
        $paging->ejecutar();  

	echo '<div id="listado">';

	while($f= $paging->fetchResultado()) 
	{
	echo'<div >';
	
	echo '<img src="upload/'.$f['foto'].'" />';
        echo '<p>'. nl2br($f['historia']).'</p>';
       
       ;
        ?>
      
         <div class="fb-share-button" data-href="http://www.appiglu.com/apps.facebook/nestle/fitnessnestle/compartir.php?v1=<?php echo $f['historia'];?>&v2=<?php echo 'upload/'.$f['foto'];?>" data-type="button_count"></div>
        <?php
        
		echo '</div >';
       
        }
	
	echo'  </div>';
	echo 'Paginas '.$paging->fetchNavegacion();
	?>
  </div>
</body>
</html>


         
      