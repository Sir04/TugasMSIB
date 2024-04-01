<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            /* Mengubah warna font menjadi putih */
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
        }

        th,
        td {
            border: 1px solid white;
            padding: 15px;
            text-align: left;
        }

        thead {
            background-color: aqua;
            text-align: center;
        }

        tfoot {
            background-color: aqua;
            text-align: center;
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

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <table border="1" align="center" cellpadding="15">
            <thead>
                <tr>
                    <th colspan="2">Form Pelanggan</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
                    <th colspan="2">
                        <input type="submit" name="submit" value="kirim">&nbsp; &nbsp;
                        <input type="reset" value="batal">
                    </th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td width="25%">
                        <label for="nama">Masukkan Nama :</label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="isi form ini" size="50">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Masukkan Email :</label>
                    </td>
                    <td>
                        <input type="Text" name="email" id="email" placeholder="Masukkan Alamat Gmail" size="50">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="l" />Laki-Laki &nbsp;
                        <input type="radio" name="gender" value="p">perempuan
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="hobby">Hobby</label>
                    </td>
                    <td>
                        <input type="checkbox" name="hobby[]" id="membaca" value="membaca">membaca<br>
                        <input type="checkbox" name="hobby[]" id="menulis" value="menulis">menulis<br>
                        <input type="checkbox" name="hobby[]" id="olahraga" value="olahraga">olahraga<br>
                        <input type="checkbox" name="hobby[]" id="tidur" value="tidur">tidur<br>
                        <input type="checkbox" name="hobby[]" id="makan" value="makan" checked>makan<br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pendidikan">Pendidikan</label>
                    </td>
                    <td>
                        <select name="pendidikan" id="pendidikan">
                            <option value="">--pilih pendidikkan--</option>
                            <option value="SMA">SMA</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat</label>
                    </td>
                    <td>
                        <textarea name="alamat" id="alamat" cols="50" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="disable">Disable</label>
                    </td>
                    <td>
                        <input type="text" name="disable" id="disable" disabled>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <?php
    include_once 'bawah.php';
    ?>
</body>

</html>