<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002</title>
</head>

<body>
    <form action="index2.php" method="POST">
        <table>
            <tr>
                <th>Sila isi nama anda</th>
            <tr><input type="text" class="form-control" name="nama"></tr>
            </tr>
        </table>
        <div class="form-group">
            <button id="btn" name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <br>
    <?php
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");
    echo nl2br(fread($myfile, filesize("text.txt")));
    fclose($myfile);
    ?>
</body>

</html>