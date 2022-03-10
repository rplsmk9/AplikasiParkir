<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="index">
    <h1>PARKIR MOBIL BANG ANDRE</h1>
    <menu>
        <button><a href="form_mobil_masuk.php">Mobil Masuk</a></button>
        <button><a href="data_mobil_keluar.php">Mobil Keluar</a></button>
        <button><a href="list_mobil_parkir.php">Data Mobil</a></button>
    </menu>
    <script>
        <?php if(isset($_GET['status'])): ?>
            <?php 
            
            if($_GET['status'] == 'sukses'){
                echo "alert ('Sukses !')";
            } else {
                echo "alert ('Gagal !')";
            }
            
            ?>
        <?php endif ?>
    </script>
    <img src="img.png" alt="parkir" style="width: 200px;margin-top:60px">
   
    </div>
</body>
</html>