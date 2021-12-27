<?php
$filename = $_POST['filename'];
$term = $_POST['term'];

$myfile = fopen("Files/$filename", "w") or die("Unable to open file!");
fwrite($myfile, $term);
fclose($myfile);
header('location: index.php');
?>