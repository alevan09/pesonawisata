<?php
include '../koneksi.php';
$id_paket = $_GET['id']; 


$hapus = mysqli_query($mysqli, "DELETE FROM paket WHERE id_paket = '$id_paket'") or die(mysqli_error($mysqli));

if($hapus) {
    header("Location: adminpaket.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>