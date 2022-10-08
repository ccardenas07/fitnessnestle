<?php
require_once 'conexion/Trabajo.php';
$his=new Trabajo();
$h=$his->getdat();
?>
<html lang="en"xmlns="https://www.w3.org/1999/xhtml" xmlns:fb="https://ogp.me/ns/fb#">
<head>

<input type="hidden" value="<?php echo $h[0]['foto'];?>"  id="foto">
<input type="hidden" value="<?php   echo  nl2br($h[0]['historia']);?>" id="texto">
<input type="hidden" value="escondido" id="escondido">
<meta name="title" content="Ya compart&iacute; mi historia Fitness® de Nestl&eacute;® cu&eacute;ntanos tu historia" />
<meta name="UIShareStage_Subtitle" content"subtitulo" />
<!--<meta name="description" content="<?php// echo '<p>'. nl2br($h[0]['historia']).'</p>'; ?>" />-->

<link href="css/estilos.css" type="text/css" rel="stylesheet">
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

<!--facebook-->
<div id="fb-root"></div>
        <script>
          // Additional JS functions here
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '252621411568916', // App ID
              channelUrl : 'https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/mecanica.html?', // Channel File
              status     : true, // check login status
              cookie     : true, // enable cookies to allow the server to access the session
              xfbml      : true  // parse XFBML
            });

             // Additional init code here

          };

          // Load the SDK asynchronously
          (function(d){
             var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement('script'); js.id = id; js.async = true;
             js.src = "//connect.facebook.net/en_US/all.js";
             ref.parentNode.insertBefore(js, ref);
           }(document));
        </script>

<div id="fb-root"></div>
<script>/*(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=456712504440229";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));*/</script>

 <script type="text/javascript" > 
 						var escondido=document.getElementById('escondido').value;
						var foto='https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/upload/'+document.getElementById('foto').value;
						var texto=document.getElementById('texto').value;
                    function postOnWall(){
                        FB.ui({
                        method: 'feed',
                        link: 'https://www.facebook.com/NestleFitnessEc/app_252621411568916',
                        picture: foto,
                        name: 'Ya compart&iacute; mi historia Fitness® de Nestl&eacute;® ¡Comparte tu historia!',
                        caption: '',
                        description: texto,
                        }, function(response){});
                    }  
                </script>
<!---->
<!--fin facebook-->
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
		font-family:'FuturaBT-Book';
		
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


    </head>
    <body>
    <img src="image/4_compartir-2.jpg" width="790px" height="321px" />
        <div class="cont">
               <?php
       
			
		
	
	
//echo 'upload/'.$h[0]['foto'];	
	
	
		 echo' <div class="palabras">';
        echo '<p>'. nl2br($h[0]['historia']).'</p>';
		echo '</div >';
		echo '<div id="imagen">';
		echo '<img src="upload/'.$h[0]['foto'].'" />';
        echo'</div>';//div dal
		?>
        <div id="boton">
         <a id="share_link" href="#" 
		onclick="postOnWall()" style="background: url('image/Btn_compartir.png') no-repeat; display: block; height: 48px; left: 317px; position: absolute; text-indent: -9999em; top: 565px; width: 158px;">
		 </a>	
        </div>
		 <?php
              
		//echo '</div >'; //class boton
        
               ?>
        
        </div>
    </body>
</html>
