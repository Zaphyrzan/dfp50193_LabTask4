<?php
$term = $_GET['term'];
$myfile = fopen("Files/$term", "r") or die("Unable to open file!");
$data = fread($myfile, filesize("Files/$term"));
fclose($myfile);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <form method="post" action="save.php" name="Form">
        <table>
            <tr>
                <tr><label for="name">Content</label></tr>
                <td>
                    <textarea id="term" type="text" step="any" name="term" required><?php echo $data; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
</body>

</html>