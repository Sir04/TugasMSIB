<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: white;
            /* Mengubah warna font menjadi putih */
        }

        form {
            background-color: #333;
            /* Warna latar belakang formulir */
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <h2>Formulir Pemesanan</h2>

    <form action="proses_pemesanan.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="telepon">Telepon:</label><br>
        <input type="text" id="telepon" name="telepon"><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br>

        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan"></textarea><br>

        <input type="submit" value="Kirim Pesanan">
    </form>

</body>

</html>
<?php
include_once 'bawah.php'
?>