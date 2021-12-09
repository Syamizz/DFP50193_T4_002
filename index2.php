<?php
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $myfile = fopen("text.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $nama."\n");
    fclose($myfile);
    header("location:index.php");
}