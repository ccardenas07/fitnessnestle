<?php
require_once 'conexion/Trabajo.php';
$his=new Trabajo();
$h=$his->getdat();
?>
<html lang="en"xmlns="https://www.w3.org/1999/xhtml" xmlns:fb="https://ogp.me/ns/fb#"><head>
        <title></title>
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
        <style type="text/css">
/*            
        #gal >  div {
	display:inline-block;
	vertical-align:top;
	padding:10px;
	border:1px solid #ddd;
	margin:4px;
        height: 250px;
        overflow: auto;
		background-color:#83C4EC;
}
#gal   p{
	margin-right:  100px;
        width: 300px;
        height: 150px;
        overflow: auto;
}
#gal  img
{
    height: 90px;
   /* width: 80px;*/
/*}
#gal p+ img{
	margin-right:20px;
	display:block;
}
a img
{
    width:48px!important;
	 height:19px !important; 
	 overflow:auto;
}

	.boton
	{
		margin-top:12px;
		margin-left:14px;
	}*/
	.boton
	{
		margin-top:12px;
		margin-left:14px;
	}
	/*.contenidos
	{
		width:779px;
		height:288px;
		margin-top: -560px;
		background:#83C4EC;
		
	}*/
	#contenedor
	{
		height:800px;
		width:790px;
		overflow:auto;
	}
	.cont
	{
		
		background: #83C4EC;
		border: 1px solid #83C4EC;
		padding: 10px 20px;
		width: 600px;
		margin: 0 auto;
		border-radius: 10px;
		padding-top: 12px;
		z-index: 200;
		box-shadow: 0 0 4px #83C4EC;
		overflow: hidden;
		display: block;
		margin-left: 82px;
		
	}
	.palabras
	{
		
		border: none;
		width: 400px;
		float: left;
		height:195px;
		overflow:inherit !important;
		display:table-row-group;
		
		
	}
	
	#pruebas
	{
		margin-top:-1px;
		top:50%; 

	
		
		
	}
	
	#imagen > img
	{
		
		float:right;*/	
		float: right;
		width: 30%;	
	}
	#boton
	{
		margin-top: 199px;
	}
	
	
</style>
<script type="text/javascript">

</script>
    </head>
    <body>
    <img src="image/4_compartir-2.jpg" width="790px" height="321px" />
        <div class="cont">
               <?php
       
			
		
	
	
//echo 'upload/'.$h[0]['foto'];	
	
	
		 echo' <div class="palabras">';
        echo '<p>'. nl2br($h[0]['historia']).'text'.'</p>';
		echo '</div >';
		echo '<div id="imagen">';
		echo '<img src="upload/'.$h[0]['foto'].'" />';
        echo'</div>';//div dal
		?>
        <div id="boton">
         <div class="fb-share-button"   data-href="http://www.appiglu.com/apps.facebook/nestle/fitnessnestle/compartir.php?v1=<?php echo $h[0]['historia'];?>&v2=<?php echo 'upload/'.$h[0]['foto'];?>" data-type="button_count">
         </div>
        </div>
		 <?php
              
		//echo '</div >'; //class boton
        
               ?>
        
        </div>
    </body>
</html>
