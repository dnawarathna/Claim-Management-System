<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include 'db.php';

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;

$conn->query("DELETE FROM claims WHERE id=$id");

echo json_encode(["message" => "Deleted"]);
?>
