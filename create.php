<?php
header('Content-Type: application/json');
include 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$nombre = $data['nombre'];
$color = $data['color'];
$precio = $data['precio'];

$sql = "INSERT INTO flores (nombre, color, precio) VALUES ('$nombre', '$color', $precio)";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Flor añadida exitosamente"]);
} else {
    echo json_encode(["message" => "Error: " . $conn->error]);
}

$conn->close();
?>
