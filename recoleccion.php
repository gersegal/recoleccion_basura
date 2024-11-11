<?php 

require_once './db/db.php';

//PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;

require_once "./PHPMailer/PHPMailer.php";
require_once "./PHPMailer/SMTP.php";
require_once "./PHPMailer/Exception.php";



if(isset($_POST['agregar_record'])){

    $email = $_POST['email'];
    $no_depto = $_POST['no_depto'];
    //$basura_reciclar = $_POST['basura_reciclar'];
    $basura_reciclar = $_POST['basura_reciclar'];
    $kilos = $_POST['kilos'];
    $fecha_recoleccion = $_POST['fecha_recoleccion'];

    $sql_check = "SELECT * FROM usuarios WHERE usr_email LIKE '$email' AND usr_depto LIKE '$no_depto'";
    $run_check = $pdo->prepare($sql_check);
    $run_check->execute();
    $count = $run_check->rowCount();

    if($count > 0){
      
        $userInfo = [
          'usr_email' => $email,
          'no_depto' => $no_depto,
          'basura_reciclar' => $basura_reciclar,
          'kilos' => $kilos,
          'fecha_recoleccion' => $fecha_recoleccion,
          'estatus' => 'En proceso'
        ];
      
        $userQuery = "INSERT INTO solicitudes_recoleccion (usr_email, no_depto, basura_reciclar, kilos, fecha_recoleccion, estatus) VALUES(:usr_email, :no_depto, :basura_reciclar, :kilos, :fecha_recoleccion, :estatus)";
        $load_user = $pdo->prepare($userQuery);
        $load_user->execute($userInfo);
      
        //header("Location: ./index.php");
        //print_r($userInfo);

        /*

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
                    $mail->Username = "[sender email]";
                    $mail->Password = 'owdv cqcf fggd dizt';
                    $mail->Port = 587;
                    $mail->SMTPSecure = "tls";
        
                    $mail->isHTML(true);
                    $mail->setFrom("[sender email]");
                    //En la de abajo luego cambiar a email del cliente
                    $mail->addAddress("[email address receiving info]", "Notificación Email");
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

        */

    }else{
        echo "Imputs dont match";
    }
  
  }


  

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Solicitud - Recolección</title>

    <!-- Google Tag Manager -->
    <script>
        ;
        (function(w, d, s, l, i) {
            w[l] = w[l] || []
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            })
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : ''
            j.async = true
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl
            f.parentNode.insertBefore(j, f)
        })(window, document, 'script', 'dataLayer', 'GTM-MZR6B4P')
    </script>
    <!-- End Google Tag Manager -->

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link id="theme-sheet" rel="stylesheet" href="assets/css/core.css" />

    <style>
        .process-block .process-number {
            background: #00d1b2 !important;
        }
        .title-divider {
            background: #00d1b2 !important;
        }
        .select.is-primary select {
            border-color: #00d1b2 !important;
        }
        .button.primary-btn {
            border-color: #00d1b2 !important;
            background-color: #00d1b2 !important;
        }
        .section.section-feature-grey {
             background-color: #ffffff; 
        }
    </style>
</head>

<body class="is-theme-core">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZR6B4P" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Hero (Parallax) and nav -->
    <?php include "./components/nav.php" ?>

    <div class="columns">
        <div class="column"><!-- Form -->
        <?php include "./components/form_solicitud.php" ?></div>
        <div class="column"><!-- Process section -->
        <?php include "./components/process.php" ?></div>
    </div>


    <!-- Dark footer -->
    <?php include "./components/footer.php" ?>
    <!-- /Dark footer -->


    <!-- Google maps api call with api key -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/core.js"></script>
</body>

</html>