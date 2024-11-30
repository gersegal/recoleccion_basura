<?php

$template_file = "emailTemplates/emailTemplate.php";

$mail = new PHPMailer();

//Mail template
if(file_exists($template_file))
    $template = file_get_contents($template_file); 
else
    die("Unable to locate the template file");
        
        
$template = str_replace('$nombre_cliente', $alias, $template);
$template = str_replace('$no_departamento', $no_depto, $template);
$template = str_replace('$fecha_recoleccion', $fecha_recoleccion, $template);

            //Enviar mail
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "fpldojosender@gmail.com";
            $mail->Password = 'c8i5gG8%4j';
            $mail->Port = 587;
            $mail->SMTPSecure = "tls";

            $mail->isHTML(true);
            $mail->setFrom("fpldojosender@gmail.com");
            //En la de abajo luego cambiar a email del cliente
            $mail->addAddress("zlotnik.leon91@gmail.com@gmail.com", "Notificación Email");
            $mail->CharSet = 'UTF-8';
            $mail->Subject = "Prueba email";
            $mail->Body = $template;
            //$mail->Body = "<div><h1>Registra tu usuario en Dankemo</h2><br /><a href='dankemo.store/registro-cuenta.php?afiliado=$nombre_negocio'>Registro de usuario</a></div>";

if($mail->send()){
    $status = "Success";
    $response = "email sent";

    //header("Location: form-sent.php");
}else{
    $status = "Success";
    $response = "Something went wrong" . $mail->ErrorInfo;
}

?>