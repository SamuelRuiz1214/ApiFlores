<?php
header('Content-Type: application/json');
include 'config.php';

$id = intval($_GET['id']);
$data = json_decode(file_get_contents('php://input'), true);
$nombre = $data['nombre'];
$color = $data['color'];
$precio = $data['precio'];

$sql = "UPDATE flores SET nombre='$nombre', color='$color', precio=$precio WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Flor actualizada exitosamente"]);
} else {
    echo json_encode(["message" => "Error: " . $conn->error]);
}

$conn->close();
?>
