<?php
$file_name = $_GET["file_name"];

$upload_dir = "/var/www/uploads/";
$file_path = $upload_dir . "output_" . $file_name;
$file_type = filetype($file_path);
$file_size = filesize($file_path);
$file_name = "output_" . $file_name;

header("Pragma: public");
header("Expires: 0");
header("Content-Type: " . $file_type);
header("Content-Disposition: attachment; filename='$file_name'");
header("Content-Transfer-Encoding: binary");
header("Content-Length: $file_size");

ob_clean();
flush();
readfile($file_path);
