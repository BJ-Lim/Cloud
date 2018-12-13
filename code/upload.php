<?php
$option = $_POST["option"];

$file_name = basename($_FILES['upload_file']['name']);
$upload_dir = '/var/www/uploads/';
$upload_file = $upload_dir . $file_name;

move_uploaded_file($_FILES['upload_file']['tmp_name'], $upload_file);

print_r($_FILES);

$py_arg_path = '/home/ubuntu/fst/';
$py_file_path = $py_arg_path . 'fast-style-transfer-master/stylize_image.py';
$py_network_path = $py_arg_path . 'pretrained-networks/';

$var = "python {$py_file_path} ";
$var .= "--content {$upload_file} ";
$var .= "--network-path {$py_network_path}{$option} ";
$var .= "--output-path {$upload_dir}output_{$file_name} 2>&1";

passthru($var);

header("location: download.php?file_name={$file_name}");
