<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil Masuk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><center>Mobil Masuk</center></h1>
    
    <form action="proses_masuk.php" method="POST">
        <table align="center">
            <tr>
                <td>No. Polisi</td>
                <td>:</td>
                <td><input type="text" name="plat" id="plat" required></td>
            </tr>
            <tr>
                <td>Merk Mobil</td>
                <td>:</td>
                <td><input type="text" name="merk" id="merk" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal_masuk" id="tanggal_masuk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="hidden" name="waktu_masuk" id="waktu_masuk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><br><input type="submit" name="kirim" value="Kirim"> <input type="reset" value="Reset"> <button><a href="index.php">Kembali</a></button></td>
            </tr>
        </table>
    </form>

</body>
</html>