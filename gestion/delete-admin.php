<?php 

require_once "../db/db.php";
require_once './session.php';

if(isset($_GET['admin'])){

    $del_id = $_GET['admin'];

    echo $del_id;
    $del_sql = "DELETE FROM gestion WHERE id LIKE '$del_id'";
    $delete = $pdo->prepare($del_sql);
    $delete->execute();
    header("Location: ./admins.php");
    
}else{
    header("Location: ./admins.php");
}



?>
