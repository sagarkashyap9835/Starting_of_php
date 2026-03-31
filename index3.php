</p><pre><code class="language-html">
<!DOCTYPE html>
<html>

<head>
    <title>Download PDF using PHP from HTML Link</title>
</head>

<body>
    <center>
        <h2 style="color:green;">Welcome To GFG</h2>
        <p><b>Click below to download PDF</b>
        </p>
        <a href="downloadpdf.php?file=gfgpdf">Download PDF Now</a>
    </center>
</body>

</html>
</code></pre><p></p><h3 style="text-align:left"><b><strong>


<?php

header("Content-Type: application/octet-stream");

$file = $_GET["file"]  . ".pdf";

header("Content-Disposition: attachment; filename=" . urlencode($file));   
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));

flush(); // This doesn't really matter.

$fp = fopen($file, "r");
while (!feof($fp)) {
    echo fread($fp, 65536);
    flush(); // This is essential for large downloads
} 

fclose($fp); 
?>
