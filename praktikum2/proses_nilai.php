<?php 
$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];
$total_nilai = ($tugas + $uts + $uas) /3;

if($total_nilai > 75){
    $keterangan = "LULUS";
}else {
    $keterangan = "TIDAK LULUS";
}

?>