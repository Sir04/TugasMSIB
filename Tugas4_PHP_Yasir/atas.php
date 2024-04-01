<?php
include_once 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YASIR</title>
    <link rel="stylesheet" href="css/biodatastyle.css">
</head>

<body>
    <h1 align="center">WEB Yasir</h1>
    <div style="text-align: center; background-color:khaki ; color : blue">
        <!-- Home | produk | pesan | galeri | gesbuk -->
        <?php
        foreach ($menu_atas as $key => $value) {
            // echo "$key $value  <br>";
            echo "<a href='indek.php?hal=$key'>$value</a> | ";
        }
        ?>
    </div>