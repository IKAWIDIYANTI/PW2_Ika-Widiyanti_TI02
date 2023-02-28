<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

if($nilai_tugas > 55){
    $status = "lulus" ;
}
else{
    $status = "Mengulang semester depan";
}

if($nilai_uas > 55){
    $status = "lulus" ;
}
else{
    $status = "Mengulang semester depan";
}

if($nilai_uts > 55){
    $status = "lulus" ;
}
else{
    $status = "Mengulang semester depan";
}

if(!empty($proses)){
echo 'Proses :'.$proses;
echo '<br>';
echo 'Nama : '.$nama_siswa;
echo '<br>';
echo 'Mata Kuliah : '.$mata_kuliah;
echo '<br>';
echo 'Nilai UTS : '.$nilai_uts;
echo '<br>';
echo 'Nilai UAS : '.$nilai_uas;
echo '<br>';
echo 'Nilai Tugas : '.$nilai_tugas;
echo '<br>';
echo 'Nilai Total : '.$status;

}

?>