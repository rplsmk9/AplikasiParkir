<?php 

include 'config.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_mobil_masuk WHERE id = $id";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: list_mobil_parkir.php');
    } else {
        echo "Gagal Update !";
    }

} else{

    die("Server Galat !");
}



?>