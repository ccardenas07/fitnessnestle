


<html>
<head>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<meta name="title" content="Ya compart&iacute; mi historia Fitness® de Nestl&eacute;® cu&eacute;ntanos tu historia" />
<meta name="description" content="<?php echo '<p>'. $h.'</p>'; ?>" />
<meta name="UIShareStage_Subtitle" content"subtitulo" />

</head>
<body>
<?php 

   $h=$_GET['v1'];
	$h2 = $_GET['v2'];

	/*echo $h2;
	echo $h;*/
	
	echo '<img src="'.$h2.'" width="40" height="40" />';
        echo '<p>'. $h.'</p>';


?>

</body>
</html>