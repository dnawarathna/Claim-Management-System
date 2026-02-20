<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

$sql = "INSERT INTO claims 
(claim_number, customer_name, vehicle_number, accident_date, claim_value, status)
VALUES 
('$data->claim_number', '$data->customer_name', '$data->vehicle_number',
'$data->accident_date', '$data->claim_value', 'Pending')";

if ($conn->query($sql)) {
    echo json_encode(["message" => "Claim Added"]);
}
?><?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

$sql = "INSERT INTO claims 
(claim_number, customer_name, vehicle_number, accident_date, claim_value, status)
VALUES 
('$data->claim_number', '$data->customer_name', '$data->vehicle_number',
'$data->accident_date', '$data->claim_value', 'Pending')";

if ($conn->query($sql)) {
    echo json_encode(["message" => "Claim Added"]);
}
?>