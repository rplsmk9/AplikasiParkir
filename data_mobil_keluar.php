<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Parkir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Parkir Mobil</h1>
    <button><a href="index.php">Dashbord</a></button>
    <button><a href="cetak_data.php" target="_blank">Cetak Semua Data</a></button>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Merk Mobil</th>
                <th>No. Polisi</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Tindakan</th>
            </tr>
        </thead>

        <tbody>
            <?php

            $sql = "SELECT * FROM tb_mobil_masuk";
            $query = mysqli_query($conn, $sql);
            $nomor = 0;

            while ($mobil = mysqli_fetch_array($query)) {
                $nomor++;
                echo "<tr>";
                echo "<td style='text-align:center'>" . $nomor . "</td>";
                echo "<td>" . $mobil['merk'] . "</td>";
                echo "<td>" . $mobil['plat'] . "</td>";
                echo "<td>" . date('d F Y') . "</td>";
                echo "<td>" . $mobil['waktu_masuk'] . " WIB</td>";
                echo "<td style='text-align:center;'>";
                echo "<button style='margin-right:5px;'><a href = 'form_delete.php?id=" . $mobil['id'] . "'>Hapus</a></button>";
                echo "</td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
    <br>
    <span>Total : <b><?php echo mysqli_num_rows($query)?> Mobil</b></span> 
</body>
</html>