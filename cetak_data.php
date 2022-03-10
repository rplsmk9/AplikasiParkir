<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  

    <h1 style="text-align: center;">Cetak Data</h1>
    <table border="1" border="1" cellspacing="0" cellpadding="5" style="width: 100%; text-align: center;">
		<tr>
			<th>Merk</th>
            <th>Plat Nomor</th>
            <th>Tanggal</th>
            <th>Waktu</th>
		</tr>
		
        <?php

		$sql = mysqli_query($conn, "SELECT * FROM tb_mobil_masuk");
		while($mobil = mysqli_fetch_array($sql)){
                echo "<tr>";
                echo "<td>" . $mobil['merk'] . "</td>";
                echo "<td>" . $mobil['plat'] . "</td>";
                echo "<td>" . date('d F Y') . "</td>";
                echo "<td>" . $mobil['waktu_masuk'] . " WIB</td>";
                echo "</tr>";
            }
		?>

	</table>

    <script>
	    window.print();
	</script>
</body>
</html>