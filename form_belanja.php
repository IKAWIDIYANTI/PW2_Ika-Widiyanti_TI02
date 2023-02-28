<?php

$customer=$_POST["customer"];
$produk=$_POST["produk"];
$jumlah=$_POST["jumlah"];


if($produk == "tv"){
    $harga = 4200000;
}
elseif($produk == "kulkas"){
    $harga = 3100000;
}
elseif($produk == "mesin cuci"){
    $harga = 3800000;
}
else{
    $harga = "Barang tidak tersedia";
}

$total=$jumlah*$harga;

echo "Customer: ".$customer."<br/>";
echo "Pilih Produk: ".$produk."<br/>";
echo "Jumlah: ".$jumlah."<br/>";
echo "Total Belanja: Rp.".$total;

?>