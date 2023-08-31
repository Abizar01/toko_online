<?php 
    include "koneksi.php";
    $id_pelanggan = $_GET['id_pelanggan'];


    $sql = "DELETE FROM pelanggan WHERE id_pelanggan= '$id_pelanggan'";
    $result = mysqli_query($koneksi, $sql);

    if($result){
        echo "<script>alert('Sukses hapus buku');location.href='tampil_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus buku');location.href='tambah_pelanggan.php';</script>";
    }
    
?>