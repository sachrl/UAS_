<?php
require 'function.php';

if (isset($_POST['kode_barang'])) {
    $kodebarang = $_POST['kode_barang'];

    $query = "DELETE FROM barangmasuk WHERE kode_barang = '$kodebarang'";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Barang berhasil dihapus!');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus barang!');window.location='index.php';</script>";
    }
}
?>
