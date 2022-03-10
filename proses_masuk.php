<?php 

include 'config.php';

if(isset($_POST['kirim'])){

    date_default_timezone_set('Asia/Jakarta');
    $plat = $_POST['plat'];
    $merk = $_POST['merk'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $waktu_masuk = date("h:i:s");

    $sql = "INSERT INTO tb_mobil_masuk (merk, plat, tanggal_masuk, waktu_masuk) VALUE ('$merk', '$plat', '$tanggal_masuk', '$waktu_masuk') ";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die ("Server Galat !");
}

?>