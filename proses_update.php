<?php 

include 'config.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $plat = $_POST['plat'];
    $merk = $_POST['merk'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $waktu_masuk = $_POST['waktu_masuk'];

    $sql = "UPDATE tb_mobil_masuk SET plat='$plat', merk='$merk', tanggal_masuk='$tanggal_masuk', waktu_masuk='$waktu_masuk' WHERE id = '$id' ";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location:list_mobil_parkir.php');
    } else {
        echo "Gagal Update !";
    } 

} else {
    die ("Server Galat !");
}

?>