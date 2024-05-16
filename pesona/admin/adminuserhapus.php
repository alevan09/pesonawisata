<?php
include '../koneksi.php';
$id_user = $_GET['id']; 


$hapus = mysqli_query ($mysqli, "DELETE FROM user WHERE id_user = $id_user") or die(mysqli_error($mysqli));

if($hapus) {
    header("Location: adminuser.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>