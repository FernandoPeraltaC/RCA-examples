
# Envio de Correos


## Configuraciones
### Envio

```mail.php
    $mail->Username   = 'DireccionDeCorreoQueEnvia';
    $mail->Password   = 'ContraseñaDeCorreo';       
```
**Username** = correo electronico desde que se enviaran los email  
**Password** = contraseña del correo electronico
### Destinatarios

```mail.php
    $mail->setFrom('Dev@IndustriaSocial.com', 'Prueba-RCA');
    $mail->addAddress('correoDeDestinatario', 'destinatrio');
    $mail->addReplyTo('no-responder@example.com', 'Informacion');
```
**addAddress** = correo receptor, se pueden agregar mas de una linea para multiples Destinatarios  
**addReplyTo** = direccion de correo para responder a los emails

### Dominio
La configuracion esta montada para gmail, en caso de que el dominio cambie deberan cambiar las sigueintes configuraciones:
```mail.php
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
```