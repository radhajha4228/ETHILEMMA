<?php
header('Content-Type: application/json; charset=utf-8');

$conn = new mysqli("localhost","your_db_username","your_db_password","ethilemma");
if($conn->connect_error){
    echo json_encode(["success"=>false,"message"=>"DB connection failed"]);
    exit;
}

$result = $conn->query("SELECT id, text FROM dilemmas ORDER BY date_submitted DESC");

$dilemmas = [];
while($row = $result->fetch_assoc()){
    $dilemmas[] = $row;
}

echo json_encode(["success"=>true,"dilemmas"=>$dilemmas]);
$conn->close();
?>