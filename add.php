<?php
$term = $_POST['term'];

$myfile = fopen("Files/NewFiles.txt", "w") or die("Unable to open file!");
fwrite($myfile, $term);
fclose($myfile);
header('location: index.php');
?>