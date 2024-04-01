<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Gambar dengan PHP</title>
    <link rel="stylesheet" href="css/biodatastyle.css">
    <style>
        .gambar-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            /* membuat kolom grid dinamis */
            grid-gap: 10px;
            /* memberikan jarak antara gambar */
        }

        .gambar {
            width: 100%;
            /* agar gambar mengisi seluruh lebar kolom */
            height: auto;
            /* agar gambar mengikuti proporsi aslinya */
        }
    </style>
</head>

<body>

    <?php
    // Array yang berisi path gambar
    $gambar = array(
        "./img/itachi.jpeg",
        "./img/kaneki.jpeg",
        "./img/nezuko.jpeg",
        "./img/lufi.jpeg"
    );
    ?>

    <!-- Kontainer untuk gambar -->
    <div class="gambar-container">
        <?php
        // Loop untuk menampilkan gambar
        foreach ($gambar as $gbr) {
            echo '<img src="' . $gbr . '" alt="Gambar" class="gambar">';
        }
        ?>
    </div>

</body>

</html>