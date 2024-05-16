<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Pemesanan</title>
    <link rel="stylesheet" href="../style1.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Pemesanan</h1><br>
        <form class="form" action="adminpemesanantambah.php" method="post">
            <label for="id_user">username:</label>
            <select name="id_user" id="id_user">
                <option value="3">epan</option>
                <option value="5">depa</option>
                <option value="6">dea</option>
            </select>

            <label for="id_paket">paket:</label>
            <select name="id_paket" id="id_paket">
                <option value="11">Indonesia, Bali</option>
                <option value="13">Indonesia, Papua Barat</option>
                <option value="14">Indonesia, Yogyakarta</option>
            </select>

          
            <input type="text" name="tanggal_pemesanan" placeholder="tanggal_pemesanan">

            <label for="metode_pembayaran">metode pembayaran:</label>
            <select name="metode_pembayaran" id="metode_pembayaran">
                <option value="cash">cash</option>
                <option value="debit">debit</option>
                <option value="transfer">transfer</option>
            </select>

            <input type="text" name="jadwal_wisata" placeholder="jadwal_wisata">
            <button class="button" name="sumbit" type="submit">Tambah Pemesanan</button>
            <?php
            if(isset($_POST['sumbit'])){
                $id_paket= $_POST['id_paket'];
                $id_user= $_POST['id_user'];
                $tanggal_pemesanan= $_POST['tanggal_pemesanan'];
                $metode_pembayaran= $_POST['metode_pembayaran'];
                $jadwal_wisata= $_POST['jadwal_wisata'];
                include_once("../koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO pemesanan(id_paket,id_user,tanggal_pemesanan,metode_pembayaran,jadwal_wisata) VALUES ('$id_paket','$id_user','$tanggal_pemesanan','$metode_pembayaran','$jadwal_wisata')");

                header("location:adminpemesanan.php");
            }
            ?>
        </form>
    </div>
</body>
</html>