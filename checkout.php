<?php
// header('location:../../login.php');
include '../../config/whatsapp.php';

session_start();

include '../../config/database.php';
include '../../utils/rupiah.php';
$id_new = date("hisdmY");






function item(){
    include('../../config/koneksi.php');

    $items = array("%0A"); 
    $data = mysqli_query($koneksi, "select * from produk_keranjang 
    INNER JOIN produk ON produk_keranjang.produk_id=produk.id_produk where user_id ='" . $_SESSION['id_users'] . "'");
    while ($d = mysqli_fetch_array($data)) {
    array_push($items, "Produk = " . $d['nama_produk'] . "%0A" , 
                "Harga = "  . rupiah($d['harga_produk']) . "%0A " .
                "jumlah = "  . $d['jumlah'] . "%0A " . 
                "Total Harga = "  . rupiah($d['total_harga']). "%0A " . 
                "Warna Harga = "  . $d['warna']. "%0A " . 
                "Ukuran = ". $d['ukuran'] ." %0A %0A" );
    }
    

    return  implode($items);
}
$text_wa =  "Halo Admin, Saya akan memesan barang berikut :". item()  ."%0A"  ."Metode Pembayaran =  ". $_POST['metode_pembayaran'] ." %0A %0A"  ;
$text = "location:https://wa.me/". nomor(). "?text=". $text_wa;

$userp =  $_SESSION['id_users'];
$data = mysqli_query($koneksi, "select * from produk_keranjang 
INNER JOIN produk ON produk_keranjang.produk_id=produk.id_produk where user_id ='" . $_SESSION['id_users'] . "'");
$datas = mysqli_query($koneksi, "select * from produk_keranjang 
INNER JOIN produk ON produk_keranjang.produk_id=produk.id_produk where user_id ='" . $_SESSION['id_users'] . "'");
$sql_add_checkout = "INSERT INTO `checkout` (`id_checkout`,`id_user`, `status`) VALUES ('$id_new','$userp', 'sedang di proses');";

mysqli_query($koneksi, $sql_add_checkout);

while ($d = mysqli_fetch_array($data)) {
    $sql_ubah_keranjang_checkout = "INSERT INTO produk_checkout (id_checkout, produk_id , user_id, warna, ukuran, jumlah, total_harga) values ('$id_new', '" .$d['produk_id']. "' ,'" .$d['user_id']. "' ,'" .$d['warna']. "' ,'" .$d['ukuran'].  "' ,'" .$d['jumlah']. "' ,'" .$d['total_harga']. "')";

    mysqli_query($koneksi, $sql_ubah_keranjang_checkout);

}

while ($as = mysqli_fetch_array($datas)) {
    mysqli_query($koneksi, "DELETE FROM produk_keranjang WHERE id_keranjang ='" .$as['id_keranjang']. "'");
 }


header($text);



?>