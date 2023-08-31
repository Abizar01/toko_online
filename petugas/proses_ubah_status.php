<?php
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $status = $_POST['status'];
        include "koneksi.php";
            $update=mysqli_query($koneksi,"update transaksi set status = '".$status."' where id_transaksi = '".$id_transaksi."'") or die(mysqli_error($koneksi));
            if($update){
                echo "<script>alert('Sukses update transaksi');location.href='histori_pembelian.php';</script>";
            } else {
                echo "<script>alert('Gagal update transaksi');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
        }
    } 
?>