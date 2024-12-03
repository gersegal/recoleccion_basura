<?php
header('Content-Type: application/json');
require_once '../db/db.php';
try {

    $stmt = $pdo->query("SELECT usr_email, kilos FROM solicitudes_recoleccion WHERE estatus LIKE 'Completa' LIMIT 10");
    $data = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }

    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>