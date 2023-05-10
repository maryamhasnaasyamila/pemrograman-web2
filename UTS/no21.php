<?php 
$mhs1 = new Mahasiswa("0422", "Ahmad Zaki");
$mhs1->ipk = 3.45;
$mhs1->setNamaWali("Budiman");
echo 'Predikat: '. $mhs1->predikat();
?>