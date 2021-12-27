<?php
$filename = $_POST['filename'];
$term = $_POST['term'];

$myfile = fopen("Files/$filename.txt", "w") or die("Unable to open file!");
fwrite($myfile, $term);
fclose($myfile);
header('location: index.php');
?>