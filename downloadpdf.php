<?php
$file = $_GET["file"] . ".pdf";

if(!file_exists($file)){
    die("File not found!");
}

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=" . urlencode($file));
header("Content-Length: " . filesize($file));
header("Content-Description: File Transfer");

flush();

$fp = fopen($file, "r");
while (!feof($fp)) {
    echo fread($fp, 65536);
    flush();
} 
fclose($fp);
?>