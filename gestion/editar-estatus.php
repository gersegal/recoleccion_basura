<?php 

require_once "../db/db.php";

if(isset($_GET['editar'])){

    $edit_id = $_GET['editar'];
    $estatus = $_GET['estatus'];

    echo $edit_id;
    echo $estatus;

    if($estatus == 'Completa'){
        $edit_sql = "UPDATE solicitudes_recoleccion SET estatus = 'En proceso' WHERE id LIKE '$edit_id'";
        $delete = $pdo->prepare($edit_sql);
        $delete->execute();
        header("Location: ./solicitudes-completas.php");

    }else{
        $edit_sql = "UPDATE solicitudes_recoleccion SET estatus = 'Completa' WHERE id LIKE '$edit_id'";
        $delete = $pdo->prepare($edit_sql);
        $delete->execute();
        header("Location: ./index.php");
    }
    
}else{
    header("Location: ./index.php");
}



?>