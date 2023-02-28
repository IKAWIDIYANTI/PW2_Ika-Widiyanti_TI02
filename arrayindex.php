<?php
$ibu_kota=["Jakarta","Kuala Lumpur","Tokyo","Seoul","Moscow","Pyongyang"];

#Menambahkan data
$ibu_kota[]="Nusantara";
$ibu_kota[]="Beijing";

#Mengubah data
$ibu_kota[3]="Busan";
$ibu_kota[6]="Roma";

#menghapus data
unset($ibu_kota[0]);

#mencetak seluruh data
foreach($ibu_kota as $kota){
    echo $kota."<br/>";
}

#mencetak satu data
echo $ibu_kota[3];




?>