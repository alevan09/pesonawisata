<?php
include '../koneksi.php';

if(isset($_GET['id'])) {
    $id_pemesanan = $_GET['id'];

    if(isset($_POST['submit'])) {
        $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
        $jadwal_wisata = $_POST['jadwal_wisata'];

        $query = "UPDATE pemesanan SET tanggal_pemesanan='$tanggal_pemesanan', metode_pembayaran='$metode_pembayaran', jadwal_wisata='$jadwal_wisata' WHERE id_pemesanan='$id_pemesanan'";
        $result = mysqli_query($mysqli, $query);

        if($result) {
            header("Location: adminpemesanan.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    $query = "SELECT * FROM pemesanan WHERE id_pemesanan='$id_pemesanan'";
    $result = mysqli_query($mysqli, $query);

    // Periksa apakah ada hasil yang ditemukan
    if(mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data not found!";
        exit;
    }
} else {
    header("Location: adminpemesanan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pemesanan</title>
    <link rel="stylesheet" href="../style1.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="title">Update Pemesanan</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
            <input type="hidden" id="id_pemesanan" name="id_pemesanan" value="<?php echo $data['id_pemesanan']; ?>"><br>

            <label for="tanggal_pemesanan">tanggal pemesanan</label>
            <input type="text" id="tanggal_pemesanan" name="tanggal_pemesanan" value="<?php echo $data['tanggal_pemesanan']; ?>"><br>

            <label for="metode_pembayaran">metode pembayaran</label>
            <select id="metode_pembayaran" name="metode_pembayaran">
                <option value="Cash" <?php if($data['metode_pembayaran'] == 'Cash') echo 'selected'; ?>>Cash</option>
                <option value="Debit" <?php if($data['metode_pembayaran'] == 'Debit') echo 'selected'; ?>>Debit</option>
                <option value="Credit" <?php if($data['metode_pembayaran'] == 'Credit') echo 'selected'; ?>>Credit</option>
            </select><br>

            <label for="jadwal_wisata">jadwal wisata</label>
            <input type="text" id="jadwal_wisata" name="jadwal_wisata" value="<?php echo $data['jadwal_wisata']; ?>"><br><br>
                
            <input type="submit" name="submit" value="Update" class="button">
        </form>
        </section>
    </div>
   
</body>
</html>
