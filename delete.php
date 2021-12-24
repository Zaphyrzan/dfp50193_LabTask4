<?php
$term = $_GET['term'];
if (unlink("Files/$term")) {
	echo 'The file ' . $term . ' was deleted successfully!';
    header('location: index.php');
} else {
	echo 'There was a error deleting the file ' . $term;
}
?>