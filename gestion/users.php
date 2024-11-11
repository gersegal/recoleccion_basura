<?php 

require_once "../db/db.php";

require_once './session.php';


$records = 10;

//Get the page from url
if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}

//3. Check for page 1: If page its greater than one, have the records start from the record that corresponds (e.g. page 2 starts at record 11)
if($page > 1){
  //Our first record will be the number of pages multiplied by number or record minus number of records. So we have 10 records; if we are in page 3 that is 10 * 3 and then - 10, so our starting point is record 20.
  $start = ($page * $records) - $records;
}else{
  $start = 0;
}

$retrieve_sql = "SELECT * FROM usuarios ORDER BY usr_nombre ASC";
$retrieve_prod = $pdo->prepare($retrieve_sql);
$retrieve_prod->execute();


$totalResults = $retrieve_prod->rowCount();


$retrieve_prod->setFetchMode(PDO::FETCH_ASSOC);
$retrieve_prod = $retrieve_prod->fetchAll();

$total_pages = $totalResults/$records;

if($total_pages < 1){
    $total_pages = 1;
}

//Pagination
$prods_pag_sql = "SELECT * FROM usuarios ORDER BY usr_nombre ASC LIMIT $start, $records";
$prods_pag = $pdo->prepare($prods_pag_sql);
$prods_pag->execute();

$prods_pag->setFetchMode(PDO::FETCH_ASSOC);
$prods_pag = $prods_pag->fetchAll();

$no = $page > 1 ? $start+1 : 1;


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
    <title>Users</title>

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
              <div class="level-item"><h1 class="title">Usuarios</h1></div>
            </div>
          </div>
        </div>
      </section>

      <section class="section is-main-section">
        <?php include "./symbol/users_table.php" ?>
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
