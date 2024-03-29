<?php
$b1 = ['nim' => '211101', 'nama' => 'Andri', 'nilai' => 50];
$b2 = ['nim' => '211102', 'nama' => 'Badri', 'nilai' => 80];
$b3 = ['nim' => '211103', 'nama' => 'Yasir', 'nilai' => 70];
$b4 = ['nim' => '211104', 'nama' => 'Habib', 'nilai' => 55];
$b5 = ['nim' => '211105', 'nama' => 'Junita', 'nilai' => 75];
$b6 = ['nim' => '211106', 'nama' => 'Farhan', 'nilai' => 90];
$b7 = ['nim' => '211107', 'nama' => 'Azura', 'nilai' => 86];
$b8 = ['nim' => '211108', 'nama' => 'Citra', 'nilai' => 45];
$b9 = ['nim' => '211109', 'nama' => 'Rahmad', 'nilai' => 55];
$b10 = ['nim' => '211110', 'nama' => 'Riski', 'nilai' => 70];

$ar_mahasiswa = [$b1, $b2, $b3, $b4, $b5, $b6, $b7, $b8, $b9, $b10];

$ar_judul = ['No', 'Nim', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Prediket'];

//fungsi agregat di array
$nilai_mahasiswa = array_column($ar_mahasiswa, 'nilai');
$nilai_tertinggi = max($nilai_mahasiswa);
$nilai_terendah = min($nilai_mahasiswa);
$jumlah_mahasiswa = count($nilai_mahasiswa);
$total_nilai = array_sum($nilai_mahasiswa);
$nilai_rata2 = $total_nilai / $jumlah_mahasiswa;

$keterangan = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $total_nilai
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Mahasiswa</title>
</head>

<body>
    <h1 align="center">Data Nilai Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr bgcolor="orange" align="center">
                <?php foreach ($ar_judul as $judul) { ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($ar_mahasiswa as $mahasiswa) {
                //ternary
                $ket = ($mahasiswa['nilai'] >= 65) ? "Lulus" : "Gagal";

                //if / else
                if ($mahasiswa['nilai'] >= 85 && $mahasiswa['nilai'] <= 100) $grade = "A";
                elseif ($mahasiswa['nilai'] >= 75 && $mahasiswa['nilai'] < 85) $grade = "B";
                elseif ($mahasiswa['nilai'] >= 65 && $mahasiswa['nilai'] < 75) $grade = "C";
                elseif ($mahasiswa['nilai'] >= 40 && $mahasiswa['nilai'] < 65) $grade = "D";
                elseif ($mahasiswa['nilai'] >= 10 && $mahasiswa['nilai'] < 40) $grade = "E";
                else $grade = "";

                //switch
                switch ($grade) {
                    case "A":
                        $prediket = "Sangat Memuaskan";
                        break;
                    case "B":
                        $prediket = " Memuaskan";
                        break;
                    case "C":
                        $prediket = " Cukup";
                        break;
                    case "D":
                        $prediket = " Kurang";
                        break;
                    case "E":
                        $prediket = "Sangat Kurang";
                        break;
                    default:
                        $prediket = "ngawur";
                }

            ?>
                <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $mahasiswa['nim'] ?></td>
                    <td><?= $mahasiswa['nama'] ?></td>
                    <td><?= $mahasiswa['nilai'] ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $prediket ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach ($keterangan as $ketera => $hasil) {
            ?>
                <tr>
                    <th colspan="3" bgcolor="yellow" align="right"><?= $ketera ?></th>
                    <th colspan="4"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>

</html>