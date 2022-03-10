<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'db_parkir';

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die ("Database belum terhubung !" . mysqli_connect_error());
}

?>