<?php 

require_once './db/db.php';

if(isset($_POST['agregar_usr'])){

    $usr_nombre = $_POST['usr_nombre'];
    $usr_depto = $_POST['usr_depto'];
    $usr_email = $_POST['usr_email'];
    $usr_user = strtok($usr_email, '@');
    $opt_data = $_POST['opt_data'];
    $opt_terms = $_POST['opt_terms'];
    $opt_publicidad = $_POST['opt_publicidad'];
  
    $userInfo = [
      'usr_nombre' => $usr_nombre,
      'usr_depto' => $usr_depto,
      'usr_email' => $usr_email,
      'usr_user' => $usr_user,
      'opt_data' => $opt_data,
      'opt_terms' => $opt_terms,
      'opt_publicidad' => $opt_publicidad
    ];

    $userQuery = "INSERT INTO usuarios (usr_nombre, usr_depto, usr_email, usr_user, opt_data, opt_terms, opt_publicidad) VALUES(:usr_nombre, :usr_depto, :usr_email, :usr_user, :opt_data, :opt_terms, :opt_publicidad)";
    $load_user = $pdo->prepare($userQuery);
    $load_user->execute($userInfo);

  
    //header("Location: ./index.php");
    //print_r($userInfo);
  
  }


  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Inicio</title>

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

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZR6B4P" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Hero (Parallax) and nav -->
    <?php include "./components/hero.php" ?>

    <!-- Process section -->
    <?php include "./components/process.php" ?>

    <!-- Form -->
    <?php include "./components/form_register.php" ?>

    <!-- Dark footer -->
    <?php include "./components/footer.php" ?>
    <!-- /Dark footer -->


    <!-- Google maps api call with api key -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/core.js"></script>
</body>

</html>