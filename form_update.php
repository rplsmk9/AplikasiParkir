<?php 

include 'config.php';

if(!isset($_GET['id'])){
    header('Location: list_mobil_parkir.php?');
}

$id = $_GET['id'];

$sql = "SELECT * FROM tb_mobil_masuk WHERE id = $id";
$query = mysqli_query($conn, $sql);
$data_baru = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data Tidak Ditemukan !");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil Masuk (Edit)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mobil Masuk</h1>
    
    <form action="proses_update.php" method="POST">
        <table>
            <input type="hidden" name="id" id="id" value="<?php echo $data_baru['id'] ?>" >
            <tr>
                <td>No. Polisi</td>
                <td>:</td>
                <td><input type="text" name="plat" id="plat" required value="<?php echo $data_baru['plat'] ?>" ></td>
            </tr>
            <tr>
                <td>Merk Mobil</td>
                <td>:</td>
                <td><input type="text" name="merk" id="merk" required value="<?php echo $data_baru['merk'] ?>" ></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal_masuk" id="tanggal_masuk" readonly value="<?php echo $data_baru['tanggal_masuk'] ?>" ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="hidden" name="waktu_masuk" id="waktu_masuk" value="<?php echo $data_baru['waktu_masuk'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><br><input type="submit" name="edit" value="Edit"> <input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>

</body>
</html>