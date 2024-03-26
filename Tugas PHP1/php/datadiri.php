<?php
//data biodata
$nama = "Yasir M. Khatami";
$umur = 21;
$status = 'Mahasiswa';
$alamat = "Jln,Muaro P. Karam";
$noHp = '082385751656';
$email = 'yasirmkhatami81@gmail.com';
$asalkampus = 'UNIVERSITAS METAMEDIA';
$semester = 6;
$tentang = 'Saya Yasir M. Khatami anak ke-4 dari 4 bersaudara(anak Bungsu) 
saya sangat suka hal-hal baru dan sangat gemar bermain alat musik gitar motivasi terbesar saya adalah 
jangan takut gagal tapi takutlah jika kamu tidak mencoba'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Data Saya</title>
    <link rel="stylesheet" href="../css/biodatastyle.css">

</head>

<body>
    <div class="container">
        <h1>Biodata Diri</h1>
        <div class="info">
            <img src="../img/private.jpg" alt="Deskripsi Gambar" class="fotoDiri">
            <label>Nama :</label> <?= $nama ?> <br>
            <label>Umur :</label> <?= $umur ?> <br>
            <label>Status :</label> <?= $status ?> <br>
            <label>Alamat :</label> <?= $alamat ?> <br>
            <label>No. Telepon :</label> <?= $noHp ?> <br>
            <label>Email :</label> <?= $email ?> <br>
            <label>Asal Kampus :</label> <?= $asalkampus ?> <br>
            <label>Semester :</label> <?= $semester ?> <br>
            <label>Tentang :</label> <?= $tentang ?> <br>
        </div>
    </div>

</body>

</html>