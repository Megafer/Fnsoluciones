<?php
    //Capturar datos del formulario en variables
    $Nombre = $_POST['nombre'];
    $Email = $_POST['email'];
    $Mensaje = $_POST['mensaje'];
    // $archivo = $_FILES['adjunto'];

    require("archivosmail/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = $Email;
    $mail->FromName = $Nombre;
    //*****Dirección a la que llegaran los mensajes*****
    $mail->AddAddress("electrofyn@gmail.com");
   
    // Aquí van los datos que apareceran en el correo que se envia
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Nombre: $Nombre \n<br />".    
    "Email: $Email \n<br />".    
    "Mensaje: $Mensaje \n<br />";
    // $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
    
    //*****Datos del servidor SMTP para hacer posible el envio del correo*****
    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465"; //Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "mailventasfn@gmail.com"; //Correo Electrónico
    $mail->Password = "@Mega2020@"; //Contraseña
    
    if ($mail->Send())
        echo "<script>alert('Formulario enviado exitosamente.');
        window.location='http://fnsoluciones.com.ar';
        </script>";
    else
        echo "<script>alert('Error al enviar el formulario');
        window.location='http://fnsoluciones.com.ar';
        </script>";
?>