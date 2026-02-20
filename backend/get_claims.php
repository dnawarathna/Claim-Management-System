<?php
header("Access-Control-Allow-Origin: *");
include 'db.php';

$result = $conn->query("SELECT * FROM claims");

$claims = [];

while($row = $result->fetch_assoc()){
    $claims[] = $row;
}

echo json_encode($claims);
?>