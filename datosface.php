
<!--$config["appId"]='1408222269423664';
$config["secret"]='51bdf54816ece7f7d9ba0fb5b96a863e';
$config["fileUpload"]=false;-->
<?php 
session_start();
include("conexion.php");//incluimos la conexión a base de datos
require_once 'lib/config_face.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--        <link rel="stylesheet" type="text/css" href="css/style.css">-->
		<title>Calendario Navidad index</title>
        <script src="https://connect.facebook.net/en_US/all.js#appId=1408222269423664&amp;xfbml=1"></script>
        <script type="text/javascript">
			FB.Canvas.setSize({ width: 790, height: 1000 });
			FB.Canvas.setAutoGrow( { width: 790, height: 1000 });       
		</script>
<style type="text/css">
     /*   body{
         
			background:url(images/1_back_instrucciones.jpg);
			width:790px;
			height:800px;
			background-repeat:no-repeat;
        }*/
        .facebook_friends{
            margin: 630px 0px 0px 610px;
            border-radius: 6px;
            border: 0px;
            border-radius: 5px;
            color: #fbfbfb;
            width: 150px;
			height: 52px;
			
         
            cursor: pointer;
			background-image:url(images/btn_continuar1.png);
			background-repeat:no-repeat;
			background-position:center;
			
			
        }
		  .facebook_friends:hover{
            margin: 630px 0px 0px 610px;
            border-radius: 6px;
            border: 0px;
            border-radius: 5px;
            color: #fbfbfb;
            width: 150px;
			height: 52px;
			
         
            cursor: pointer;
			background-image:url(images/btn_continuar1.png);
			background-repeat:no-repeat;
			background-position:center;
			
			
        }
    </style>	
    
    </head>
	
	<body >
	  
        
		<? require('../../utils/srcfb/facebook.php');
	    $app_id = "1408222269423664";
		$app_secret = "51bdf54816ece7f7d9ba0fb5b96a863e";
			
			$facebook = new Facebook(array(
			'appId' => $app_id,
			'secret' => $app_secret,
			'cookie' => true
			));
			
$signed_request = $facebook->getSignedRequest();
			function parsePageSignedRequest() {
				if (isset($_REQUEST['signed_request'])) {
					$encoded_sig = null;
					$payload = null;
					list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
					$sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
					$data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
					return $data;
				}
				return false;
			}
			 ?>
				
 <?php
   	  
$canvas_page = "https://apps.facebook.com/$appName/";
$scope = 'publish_stream,email,user_birthday,user_likes';
$auth_url = "https://www.facebook.com/dialog/oauth?client_id=" . $appId . "&redirect_uri=" . urlencode($canvas_page) . "&scope=" . $scope;
$signed_request = $_REQUEST["signed_request"];
list($encoded_sig, $payload) = explode('.', $signed_request, 2);
$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);
if (empty($data["user_id"])) 
{
    echo("<script> top.location.href='" . $auth_url . "'</script>");
   	
}
else
{


echo("<script> top.location.href='" . $urlredirecs . "'</script>");

}
$objetoUser = $facebook->api('/me');
//Objeto de facebook
//Iniciamos las variables de sesión
foreach ($objetoUser as $key => $value)
{
   // echo '<strong>' . $key . '</strong> => ' . $value . '<br />';
//                                        if ($key == 'username') {
//                                            $_SESSION['username'] = $value;
//                                        }
    if ($key == 'id') {
        $_SESSION['idFacebook'] = $value;
//                                            $_SESSION['image'] = 'https://graph.facebook.com/'.$value.'/picture';
    }
    if ($key == 'email') {
        $_SESSION['email'] = $value;
    }
    if ($key == 'first_name') {
        $_SESSION['nameface'] = (string) $value;
    }
    if ($key == 'last_name') {
        $_SESSION['lastface'] = $value;
    }
	die($_SESSION['email']);
}

?>