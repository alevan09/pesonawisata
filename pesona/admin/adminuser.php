<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman data USER</title>
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
    <h1 class="heading">Data User Pesona Wisata</h1>
    <br>
    <br>
    <br>
        <a href="../register.php" class="btn">Tambah User</a>
        <br>
        <br>
        <table border="1" class="table">
            <tr>
                <th>Nomer</th>
                <th>Id_User</th>
                <th>Username</th>
                <th>Password</th>   
                <th>Email</th>
                <th>Level</th>
                <th>Action</th> 
                <th>Action</th> 
            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['id_user']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['level']; ?></td>
                <td><a href="adminuserhapus.php?id=<?php echo $data['id_user']; ?>" class="btn-hapus">Hapus</a></td>
                <td><a href="adminuserupdate1.php?id=<?php echo $data['id_user']; ?>" class="btn-update">Update</a> <!-- Tombol update --></td>
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