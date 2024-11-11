<?php 

require_once "../db/db.php";
require_once './session.php';

if(isset($_GET['solicitudid'])){

    $del_id = $_GET['solicitudid'];

    echo $del_id;
    $del_sql = "DELETE FROM solicitudes_recoleccion WHERE id LIKE '$del_id'";
    $delete = $pdo->prepare($del_sql);
    $delete->execute();
    header("Location: ./index.php");
    
}else{
    header("Location: ./index.php");
}



?>
