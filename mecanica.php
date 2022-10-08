<?php 

session_start();

//include("conexion.php");//incluimos la conexión a base de datos

require_once 'lib/config_face.php';

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Mecanica</title>

 

<link href="css/estilos.css" rel="stylesheet" type="text/css" />



</head>



<body>

<div id="fb-root"></div>

        <script src="https://connect.facebook.net/en_US/all.js#appId=252621411568916&amp;xfbml=1"></script>

        <script type="text/javascript">

			FB.Canvas.setSize({ width: 790, height: 1000 });

			FB.Canvas.setAutoGrow( { width: 790, height: 1000 });       

		</script>

        

		<?php require('../../utils/srcfb/facebook.php');

	    $app_id = "252621411568916";

		$app_secret = "e476ff29b2b8ea0220c26c1a83efed67"; 

			

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

			if($signed_request = parsePageSignedRequest()) {

				if($signed_request->page->liked) { ?>

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

                                    }

									

                              

                                    ?>

                                     <iframe src="https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/despues.php" width="790" height="1000" frameborder="0"/>

                                  <!--  <img src="https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/image/1_mecanica.jpg" height="700px" width="790px" />-->

                                    

                                    

                                    

			                                

                                <?php 

								

								

									/*	$urlredirecs = "https://www.facebook.com/NestleFitnessEc/app_252621411568916";

													echo("<script> top.location.href='" . $urlredirecs . "'</script>");*/

								} 

                                else

                                {

									 ?>



                                    <iframe src="fangating.html" width="790" height="1000" frameborder="0"/>		



				<?php

				}

			}

			

		?>



<div style="background-image:url(https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/image/1_mecanica.jpg); width:780px; height:700px; margin-left:-10px">

</div>



<div style="background-image:url(https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/image/Btn_empezar.png); width:188px; height:40px; margin-left: 302px;

margin-top: -27px !important;">

<a href="https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/formulario.php">

    <p ><img src="https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/image/Btn_empezar.png" width="188" height="40"/></p>

</a>



</div>









<br />



<div style="margin-left:302px !important;">

<a href="https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/terminos.php"target="_blank" onClick="window.open(this.href, this.target,  'width=870,height=600, scrollbars=1'); return false;">

<img src="https://www.appiglu.com/apps.facebook/nestle/fitnessnestle/image/terminos.png" width="178px" height="19px" />

</a>

</div>





</body>

</html>

