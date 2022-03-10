<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Mobil</title>
    
</head>
<body>  

    <h1 style="text-align: center;">Cetak Data Mobil</h1>
    <table style="width: 100%; text-align: center;" >
		<tr> 
			<th>Merk</th>
			<th>Plat</th>
            <th>Tanggal</th>
            <th>Waktu</th>
		</tr>
		
        <tr>
            <td>- - - - - - - - - - -</td>
            <td>- - - - - - - - - - -</td>
            <td>- - - - - - - - - - -</td>
            <td>- - - - - - - - - - -</td>
  
        </tr>
        <?php
        
        $id = $_GET['id'];
		$sql = mysqli_query($conn, "SELECT * FROM tb_mobil_masuk WHERE id=$id");
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

    <p style="text-align: center;margin-top:200px;color:gray">Terimakasih :)</p>

    <script>
	    window.print();
	</script>
</body>
</html>