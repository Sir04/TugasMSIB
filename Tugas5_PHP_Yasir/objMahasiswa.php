<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="formMahasiswa.php" method="POST">
            <h1 class="text-center">Form Nilai Ujian</h1>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nim</label>
                <div class="col-sm-8">
                    <input id="nim" name="nim" placeholder="Isi nim anda" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama </label>
                <div class="col-sm-8">
                    <input id="nama" name="nama" placeholder="Isi nama anda" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="kuliah" class="col-sm-4 col-form-label">Kuliah</label>
                <div class="col-sm-8">
                    <select id="kuliah" name="kuliah" class="custom-select">
                        <option value="">-- Pilih kampus --</option>
                        <option value="Universitas Indonesia">Universitas Metamedia</option>
                        <option value="Universitas Gajah Mada">Universitas Muhammadiyah</option>
                        <option value="Universitas Dumai">Universitas Negri Padang</option>
                        <option value="Universitas Pertamina">Universitas Andalas</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-sm-4 col-form-label">Mata Kuliah</label>
                <div class="col-sm-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="">-- Pilih Mata Kuliah --</option>
                        <option value="UIUX">UIUX</option>
                        <option value="HTML">HTML</option>
                        <option value="PHP">PHP</option>
                        <option value="LARAVEL">LARAVEL</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-sm-4 col-form-label">Nilai</label>
                <div class="col-sm-8">
                    <input id="nilai" name="nilai" placeholder="Masukkan nilai " type="number" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-4 col-sm-8">
                    <button name="proses" type="submit" value="submit" class="btn btn-primary">Simpan</button>
                    <button name="proses" type="reset" class="btn btn-success">Batal</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>