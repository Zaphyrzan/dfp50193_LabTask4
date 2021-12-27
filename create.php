<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New File</title>
</head>

<body>
    <form method="post" action="add.php" name="Form">
        <table>
            <tr>
            <tr><label for="content">File Name</label></tr>
            <td>
                <input type="text" id="filename" name="filename">
            </td>
            </tr>
            <tr>
            <tr><label for="content">Content</label></tr>
            <td>
                <textarea id="term" type="text" step="any" name="term"></textarea>
            </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>