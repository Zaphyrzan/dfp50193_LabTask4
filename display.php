<?php
$filename = $_GET['filename'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
    <?php
    $myfile = fopen("Files/$filename", "r") or die("Unable to open file!");
    echo nl2br(fread($myfile, filesize("Files/$filename")));
    fclose($myfile);
    ?>
    <p></p>
    <a href="update.php?filename=<?php echo $filename;?>">Update Files</a>
    <p></p>
    <a href="delete.php?filename=<?php echo $filename;?>" onclick="return confirm('Are you sure you want to delete this file?')">Delete Files</a>
</body>
</html>