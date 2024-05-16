<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman data Paket Wisata</title>
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
    <h1 class="heading">Data Paket Pesona Wisata</h1>
    <br>
    <br>
    <br>
        <a href="adminpakettambah.php" class="btn">Tambah Paket</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>Nomer</th>
                <th>Id_Paket</th>
                <th>Tujuan</th>
                <th>Harga</th>   
                <th>Pax/Orang</th>
                <th>Rating</th>
                <th>Action</th>   
                <th>Action</th> 
            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM paket") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id_paket']; ?></td>
                <td><?php echo $data['tujuan']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td><?php echo $data['pax']; ?></td>
                <td><?php echo $data['rating']; ?></td>
                <td><a href="adminpakethapus.php?id=<?php echo $data['id_paket']; ?>" class="btn-hapus">Hapus</a></td>
                <td><a href="adminpaketupdate1.php?id=<?php echo $data['id_paket']; ?>" class="btn-update">Update</a></td>
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