<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$form = $_POST['boton'];
$nombre=$_POST['nombre'];
$edad = $_POST['edad'];
$msj = $_POST['mensaje'];

$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'DireccionDeCorreoQueEnvia';                     //SMTP username
    $mail->Password   = 'ContraseñaDeCorreo';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPOptions=array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );
    //Recipients
    $mail->setFrom('Dev@IndustriaSocial.com', 'Prueba-RCA');
    $mail->addAddress('correoDeDestinatario', 'destinatrio');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('no-responder@example.com', 'Informacion');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    if($form=="form1"){
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $form;
        $mail->Body    = '
        <div style="font-family: Verdana, Geneva, Tahoma, sans-serif;background-color: #800040;color:white;text-align: center;padding-top:10px;padding-bottom: 0px;">
            <h2>Formulario1</h2>
            <p>'.$nombre.'</p>
            <p>'.$edad.'</p>
            <p>'.$msj.'</p>
        </div>
        ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->setLanguage('es','../Resources/PHPMailer/language/phpmailer.lang-es.php');
    
        $mail->send();
        echo 'Message has been sent';
    }elseif($form=="form2"){
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $form;
        $mail->Body    = '
        <div style="font-family: Verdana, Geneva, Tahoma, sans-serif;background-color: #800040;color:white;text-align: center;padding-top:10px;padding-bottom: 0px;">
            <h2>Formulario2</h2>
            <p>'.$nombre.'</p>
            <p>'.$edad.'</p>
            <p>'.$msj.'</p>
        </div>
        ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->setLanguage('es','../Resources/PHPMailer/language/phpmailer.lang-es.php');
    
        $mail->send();
        echo 'Message has been sent';
    }elseif($form=="form3"){
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $form;
        $mail->Body    = '
        <div style="font-family: Verdana, Geneva, Tahoma, sans-serif;background-color: #800040;color:white;text-align: center;padding-top:10px;padding-bottom: 0px;">
            <h2>Formulario3</h2>
            <p>'.$nombre.'</p>
            <p>'.$edad.'</p>
            <p>'.$msj.'</p>
        </div>
        ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->setLanguage('es','../Resources/PHPMailer/language/phpmailer.lang-es.php');
    
        $mail->send();
        echo 'Message has been sent';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>