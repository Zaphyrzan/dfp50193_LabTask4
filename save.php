<?php
$data = $_GET['data'];
$term = $data;
$myfile = fopen("Files/$data", "w") or die("Unable to open file!");
fwrite($myfile, $term);
fclose($myfile);
header('location: index.php');
?>