<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman data Pemesanan Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <ul class="navbar">
            <li><a href="adminuser.php">User</a></li>
            <li><a href="adminpaket.php">Paket</a></li>
            <li><a href="adminpemesanan.php">Pemesanan</a></li>
        </ul>

    </header>
    <section class="user">
    <h1 class="heading">Data Pemesanan Pesona Wisata</h1>
    <br>
    <br>
    <br>
        <a href="adminpemesanantambah.php" class="btn">Tambah Pememsanan</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>Nomer</th>
                <th>Id_Pemesanan</th>
                <th>Id_Paket</th>
                <th>Id_User</th>
                <th>Tanggal_Pemesanan</th>   
                <th>Metode_Pembayaran</th>
                <th>Jadwal_Wisata</th>   
                <th>Action</th>   
                <th>Action</th> 
            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM pemesanan") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id_pemesanan']; ?></td>
                <td><?php echo $data['id_user']; ?></td>
                <td><?php echo $data['id_paket']; ?></td>
                <td><?php echo $data['tanggal_pemesanan']; ?></td>
                <td><?php echo $data['metode_pembayaran']; ?></td>
                <td><?php echo $data['jadwal_wisata']; ?></td>
                <td><a href="adminpemesananhapus.php?id=<?php echo $data['id_pemesanan']; ?>" class="btn-hapus">Hapus</a></td>
                <td><a href="adminpemesananuptade.php?id=<?php echo $data['id_pemesanan']; ?>" class="btn-update">Update</a></td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <br>
    <a href="../index.php" class="btn">Log Out</a>
    </section>
    

    <script src="main.js"></script>
</body>
</html>