<?php 

require_once "../db/db.php";
require_once './session.php';

$retrieve_sql = "SELECT * FROM admins ORDER BY admin_name ASC";
$retrieve_admin = $pdo->prepare($retrieve_sql);
$retrieve_admin->execute();


$totalResults = $retrieve_admin->rowCount();


$retrieve_admin->setFetchMode(PDO::FETCH_ASSOC);
$retrieve_admin = $retrieve_admin->fetchAll();


?>

<!DOCTYPE html>
<html
  lang="en"
  class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded"
>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Administradores</title>

    <!-- Bulma is included -->
    <link rel="stylesheet" href="css/main.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body>
    <div id="app">
    <?php include "./symbol/nav.php" ?>
      <?php include "./symbol/aside.php" ?>

      <section class="hero is-hero-bar">
        <div class="hero-body">
          <div class="level">
            <div class="level-left">
              <div class="level-item"><h1 class="title">Administradores</h1></div>
            </div>
            <div class="level-right">
              <div class="level-item">
                  <a href="registro.php">
                      <button class="button is-success">Crear nuevo administrador</button>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section is-main-section">
        <?php include "./symbol/admins-table.php" ?>
      </section>

      <?php include "footer.php" ?>
    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="js/main.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
    ></script>
    <script type="text/javascript" src="js/chart.sample.min.js"></script>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link
      rel="stylesheet"
      href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css"
    />
  </body>
</html>