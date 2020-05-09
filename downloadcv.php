<?php 
  
/*header("Content-Type: application/octet-stream"); 
  
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
  
fclose($fp);*/

$file_url = "https://abbas007-ops.github.io/mysite/Abbas'sResume(2).pdf";
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
readfile($file_url);   
?> 