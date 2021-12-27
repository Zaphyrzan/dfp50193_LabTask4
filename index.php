<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 4</title>
</head>

<body>
    <?php
    $dir = "Files";
    $Files = scandir($dir);

    foreach ($Files as $key => $value) {
        if ('.' !== $value && '..' !== $value) {
            echo "<li><a href='display.php?filename=" . $value . "'>" . $value . "</a></li>";
        }
    }
    ?>
    <p></p>
    <a href="create.php">Create New Files</a>
</body>

</html>