<?php
header('Content-Type: application/json');
include 'config.php';

$id = intval($_GET['id']);

$sql = "DELETE FROM flores WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Flor eliminada exitosamente"]);
} else {
    echo json_encode(["message" => "Error: " . $conn->error]);
}

$conn->close();
?>
