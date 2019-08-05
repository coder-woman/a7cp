<?php
require '952532phpmailer/PHPMailerAutoload.php';

//form data
$name = $_POST['f_name'];
$email = $_POST['f_email'];
$domain = $_POST['f_phone'];
$services = $_POST['f_message'];

//sumbission data
$ipaddress = $_SERVER['REMOTE_ADDR'];
$date = date('d/m/Y');
$time = date('H:i:s');

// include 'db_conect.php';
// $query = "SELECT * FROM `sucursales` WHERE id = $sucursal ORDER BY id DESC;";
// $stmt = $con->prepare( $query );
// $stmt->execute();
//
// if( $stmt->rowCount() == 0 ){
//
// 	echo "No se encontro sucursal.";
//
//  } else {
// 		 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

					// $correo = $row['email'];
					// $nombre = $row['nombre'];

					//send email if all is ok
					if(true){


							$mail = new PHPMailer;

							//$mail->SMTPDebug = 3;                               // Enable verbose debug output

							//$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'localhost';  // Specify main and backup SMTP servers
							//$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = 'hola@asiete.mx';                 // SMTP username
							$mail->Password = 'asiete2019';                           // SMTP password
							//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
							//$mail->Port = 465;                                    // TCP port to connect to

							$mail->From = 'hola@asiete.mx';
							$mail->FromName = 'asiete contact form';
							//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
							$mail->addAddress('hola@asiete.mx');      // Name is optional
							//$mail->addReplyTo('info@example.com', 'Information');
							//$mail->addBCC('montesdeoca@auroracreativa.com');

							//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
							//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
							$mail->isHTML(true);                                  // Set email format to HTML

							$mail->Subject = 'Prospecto Web';
							$mail->Body    = '<div><h2>Mensaje desde el sitio web:</h2><p><b>Nombre:</b> '.$_POST['f_name'].'</p><p><b>Telefono:</b> '.$_POST['f_phone'].'</p><p><b>Email:</b> '.$_POST['f_email'].'</p><p><b>Mensaje:</b> '.$_POST['f_message'].'</p><p><small>Este mensaje fue enviado desde la direccion IP: '.$ipaddress.' el dia '.$date.' a las '.$time.'</small></p></div>';
							//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

							if(!$mail->send()) {
							    echo 'El Mensaje no pudo ser enviado.';
							    echo 'Mailer Error: ' . $mail->ErrorInfo;
							} else {
							    echo '<span class="message" style="margin-top: 3em; text-align: center; font-weight: 400;display: block; width: 100%; font-size: 16px;">¡Gracias por escribir!<br>En breve un asesor especializado lo contactará, en breve.</span>';
							}

					} else {
						echo '<span class="message" style="margin-top: 3em; text-align: center; font-weight: 400;display: block; width: 100%; font-size: 16px;">Por favor verifique los campos</span>';
					}

	// 	 }
 // }
// $con = null;




/*
//what we need to return back to our form
$returndata = array(
    'posted_form_data' => array(
        'name' => $name,
        'email' => $email,
        'telephone' => $telephone,
        'message' => $message
    ),
    'form_ok' => $formok,
    'errors' => $errors
);

$respu = $returndata[errors];
print_r($respu);
*/

/*
//if this is not an ajax request
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
    //set session variables
    session_start();
    $_SESSION['cf_returndata'] = $returndata;

    //redirect back to form
    header('location: ' . $_SERVER['HTTP_REFERER']);
}
*/




  ?>
