<?php
if($_GET){
    include "koneksi.php";
    $id_transaksi=$_GET['id'];
        $update=mysqli_query($koneksi,"update transaksi set status='Produk berhasil di Kirim' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($koneksi));
        echo "<script>alert('Sukses update status');location.href='histori_pembelian.php';</script>";
    }
?>