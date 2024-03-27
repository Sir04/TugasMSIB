<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <form action="from.php" method="POST">
            <h1 class="text-center">Silahkan Belanja</h1>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-8">
                    <input id="nama" name="nama" placeholder="Isi nama pelanggan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="produk" class="col-sm-4 col-form-label">Produk Pilihan</label>
                <div class="col-sm-8">
                    <select id="produk" name="produk" class="custom-select">
                        <option value="">-- Pilih produk --</option>
                        <option value="keyboard">Keyboard</option>
                        <option value="mouse">Mouse</option>
                        <option value="usb">USB</option>
                        <option value="stick">Stick Game</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah Beli</label>
                <div class="col-sm-8">
                    <input id="jumlah" name="jumlah" placeholder="Masukkan jumlah beli" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-4 col-sm-8">
                    <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                    <button name="proses" type="reset" class="btn btn-success">Batal</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>


<?php
error_reporting(0); //cara menghilangkan pesan eror
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$proses = $_POST['proses'];

//switch
switch ($produk) {
    case "keyboard":
        $satuan = 1500000;
        break;
    case "mouse":
        $satuan = 50000;
        break;
    case "usb":
        $satuan = 100000;
        break;
    case "stick":
        $satuan = 40000;
        break;
    default:
        echo "";
}

//total belanja
$totalBelanja = $jumlah * $satuan;

//diskon
$diskon = $totalBelanja * 0.2;

//PPN
$ppn = 0.1 * ($totalBelanja - $diskon);

//harga bersih
$hargaBersih = ($totalBelanja - $diskon) + $ppn;

if (isset($proses)) {

?>
    <div class="output">
        <h3>Nama Pelanggan : <?= $nama ?></h3>
        <h3>Jenis Produk : <?= $produk ?></h3>
        <h3>Jumlah : <?= $jumlah ?></h3>
        <h3>Harga Satuan : <?= $satuan ?></h3>
        <h3>Total Belanja : <?= $totalBelanja ?></h3>
        <h3>Diskon : <?= $diskon ?></h3>
        <h3>PPN : <?= $ppn ?></h3>
        <h3>Harga Bersih : <?= $hargaBersih ?></h3>

    <?php } ?>