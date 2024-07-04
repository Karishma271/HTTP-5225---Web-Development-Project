<?php
$connect = mysqli_connect('localhost', 'root', '', 'feel_dance');
if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>
