<?php
header('Content-Type: application/json; charset=utf-8');

$text = trim($_POST['text'] ?? '');
$dilemma_id = $_POST['dilemma_id'] ?? '';

// Banned words
$banned_words = ["bitch","slut","kill yourself","die","better you die","idiot","stupid"];
foreach($banned_words as $word){
    if(stripos($text, $word) !== false){
        echo json_encode(["success"=>false,"message"=>"Unethical words detected."]);
        exit;
    }
}

if(strlen($text) < 5){
    echo json_encode(["success"=>false,"message"=>"Suggestion too short."]);
    exit;
}

// Check dilemma exists in dilemmas.csv
$found = false;
if(($handle = fopen("dilemmas.csv","r")) !== false){
    $first = true;
    while(($data = fgetcsv($handle)) !== false){
        if($first){ $first=false; continue; }
        if($data[0] == $dilemma_id){
            $found = true;
            break;
        }
    }
    fclose($handle);
}

if(!$found){
    echo json_encode(["success"=>false,"message"=>"Dilemma not found."]);
    exit;
}

// Append suggestion
$file = 'suggestions.csv';
if(!file_exists($file)){
    // create file with header
    $fp = fopen($file,"w");
    fputcsv($fp, ["dilemma_id","text","date_submitted"]);
    fclose($fp);
}

$fp = fopen($file,"a");
fputcsv($fp, [$dilemma_id,$text,date('Y-m-d H:i:s')]);
fclose($fp);

echo json_encode(["success"=>true,"message"=>"Suggestion submitted respectfully 🌿"]);
?>
   