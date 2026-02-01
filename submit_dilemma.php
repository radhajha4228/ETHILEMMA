<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode([
        "success" => false,
        "message" => "Invalid request"
    ]);
    exit;
}

$text = trim($_POST["text"] ?? "");

if (strlen($text) < 20) {
    echo json_encode([
        "success" => false,
        "message" => "Dilemma too short"
    ]);
    exit;
}

$file = "dilemmas.csv";

// create file if not exists
if (!file_exists($file)) {
    file_put_contents($file, "id,dilemma,submitted_at\n");
}

// generate ID
$id = time();
$date = date("Y-m-d H:i:s");

// escape quotes for CSV
$text = str_replace('"', '""', $text);

// format CSV row
$row = "\"$id\",\"$text\",\"$date\"\n";

// write to file
file_put_contents($file, $row, FILE_APPEND | LOCK_EX);

echo json_encode([
    "success" => true,
    "message" => "Dilemma submitted successfully"
]);
