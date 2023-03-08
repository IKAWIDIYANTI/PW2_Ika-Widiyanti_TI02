<?php
$nilai1 = 90;
$nilai2 = 60;
$nilai3 = 80;


function lulus($uts =0,$uas=0,$tugas=0){

if(($uts+$uas+$tugas)/3 >= 75){
    $keterangan = "lulus";
}else {
    $keterangan = "tidak lulus";
}
return $keterangan;
}
echo lulus($nilai1,$nilai2);

?>

