<?php
$upload_dir = '/var/www/uploads/';
$upload_file = $upload_dir . basename($_FILES['upload_file']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $upload_file)) {
    //
} else {
    // error
}

print_r($_FILES);

print "</pre>";

// tf 명령어

$file_path = $upload_file;
$file_type = $_FILES['upload_file']['type'];
$file_size = $_FILES['upload_file']['size'];
$file_name = basename($_FILES['upload_file']['name']);

header("Pragma: public");
header("Expires: 0");
header("Content-Type: " . $file_type);
header("Content-Disposition: attachment; filename='$file_name'");
header("Content-Transfer-Encoding: binary");
header("Content-Length: $file_size");

ob_clean();
flush();
readfile($file_path);