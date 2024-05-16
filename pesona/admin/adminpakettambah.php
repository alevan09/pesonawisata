<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Paket</title>
    <link rel="icon" type="image/png" href="logotitle.png">
    <link rel="stylesheet" href="../style1.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Paket</h1><br>
        <form class="form" action="adminpakettambah.php" method="post">
            <input type="text" name="tujuan" placeholder="tujuan"> 
            <input type="text" name="harga" placeholder="harga">
            <input type="text" name="pax" placeholder="pax">
            <input type="text" name="rating" placeholder="rating">
            <button class="button" name="sumbit" type="submit">Tambah Paket</button>
            <?php
            if(isset($_POST['sumbit'])){
                $tujuan= $_POST['tujuan'];
                $harga= $_POST['harga'];
                $pax= $_POST['pax'];
                $rating= $_POST['rating'];
                include_once("../koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO paket(tujuan,harga,pax,rating) VALUES ('$tujuan','$harga','$pax','$rating')");

                header("location:adminpaket.php");
            }
            ?>
        </form>
    </div>
</body>
</html>