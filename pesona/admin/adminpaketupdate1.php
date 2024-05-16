<?php

include '../koneksi.php';

if(isset($_GET['id'])) {
    $id_paket = $_GET['id'];

    if(isset($_POST['submit'])) {

        $id_paket = $_POST['id_paket'];
        $tujuan = $_POST['tujuan'];
        $harga = $_POST['harga'];
        $pax = $_POST['pax'];
        $rating = $_POST['rating'];

        $query = "UPDATE paket SET id_paket='$id_paket', tujuan='$tujuan', harga='$harga' , pax='$pax', rating='$rating' WHERE id_paket='$id_paket'";
        $result = mysqli_query($mysqli, $query);

        if($result) {
            header("Location: adminpaket.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    $query = "SELECT * FROM paket WHERE id_paket='$id_paket'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header("Location: adminpaket.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Paket</title>
    <link rel="stylesheet" href="../style1.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="title">Update Paket</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
        <input type="hidden" id="id_paket" name="id_paket" value="<?php echo $data['id_paket']; ?>"><br>

        <label for="tujuan">tujuan</label>
            <input type="text" id="tujuan" name="tujuan" value="<?php echo $data['tujuan']; ?>"><br>

        <label for="harga">harga</label>
            <input type="text" id="harga" name="harga" value="<?php echo $data['harga']; ?>"><br>

        <label for="pax">pax</label>
            <input type="text" id="pax" name="pax" value="<?php echo $data['pax']; ?>"><br>

        <label for="rating">rating</label>
            <input type="text" id="rating" name="rating" value="<?php echo $data['rating']; ?>"><br><br>
            <input type="submit" name="submit" value="Update" class="button">
        </form>
        </section>
    </div>

   
</body>
</html>