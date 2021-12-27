<?php
$filename = $_GET['filename'];
if (unlink("Files/$filename")) {
	echo 'The file ' . $filename . ' was deleted successfully!';
    header('location: index.php');
} else {
	echo 'There was a error deleting the file ' . $filename;
}
?>