<?php
header('Content-Type: application/json; charset=utf-8');

$file = 'dilemmas.csv';
if(!file_exists($file)){
    echo json_encode(["success"=>false,"message"=>"Dilemma file not found."]);
    exit;
}

$dilemmas = [];
if(($handle = fopen($file,"r")) !== false){
    $first = true;
    while(($data = fgetcsv($handle)) !== false){
        if($first){ $first = false; continue; } // skip header
        $dilemmas[] = ["id"=>$data[0],"text"=>$data[1]];
    }
    fclose($handle);
}

echo json_encode(["success"=>true,"dilemmas"=>$dilemmas]);
?>