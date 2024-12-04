<?php
header('Content-Type: application/json');
include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM flores WHERE id=$id";
    $result = $conn->query($sql);
    echo json_encode($result->fetch_assoc());
} else {
    $sql = "SELECT * FROM flores";
    $result = $conn->query($sql);
    $flores = [];
    while($row = $result->fetch_assoc()) {
        $flores[] = $row;
    }
    echo json_encode($flores);
}

$conn->close();
?>
