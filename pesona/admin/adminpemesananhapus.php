<?php
include '../koneksi.php';
$id_pemesanan = $_GET['id']; 


$hapus = mysqli_query($mysqli, "DELETE FROM pemesanan WHERE id_pemesanan = '$id_pemesanan'") or die(mysqli_error($mysqli));

if($hapus) {
    header("Location: adminpemesanan.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>