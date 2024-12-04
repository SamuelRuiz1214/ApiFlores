<?php
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        include 'read.php';
        break;
    case 'POST':
        include 'create.php';
        break;
    case 'PUT':
        include 'update.php';
        break;
    case 'DELETE':
        include 'delete.php';
        break;
    default:
        echo json_encode(["message" => "Método no permitido"]);
        break;
}
?>
