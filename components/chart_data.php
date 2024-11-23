<?php 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data
    $stmt = $pdo->query("SELECT kilos, value FROM solicitudes_recoleccion");
    $data = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }

    // Return JSON response
    echo json_encode($data);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>