<?php 
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>

<?php
$mhs1 = ['id' => 1, 'NIM' => 110222067, 'UTS' => 100, 'UAS' => 100, 'Tugas' => 100];
$mhs2 = ['id' => 2, 'NIM' => 110222077, 'UTS' => 90, 'UAS' => 95, 'Tugas' => 92];
$mhs3 = ['id' => 3, 'NIM' => 110222087, 'UTS' => 80, 'UAS' => 88, 'Tugas' => 84];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<div class="container" style="margin-top: 3vw">
    <h2>Data Mahasiswa STT-NF</h2>
    <table class="table table-striped text-center">
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
        <?php foreach($ar_nilai as $nilai){ 
            $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['Tugas']) / 3;
        ?>
        <tr>
            <td><?= $nilai['id']; ?></td>
            <!--tanda "="  adalah pengganti "php echo" untuk memanggil php di dalam tag html-->
            <td><?= $nilai['NIM']; ?></td>
            <td><?= $nilai['UTS']; ?></td>
            <td><?= $nilai['UAS']; ?></td>
            <td><?= $nilai['Tugas']; ?></td>
            <td><?= number_format($nilai_akhir, 1, '.', ','); ?></td>        
        </tr>
        <?php } ?>

    </table>
</div>

<?php require_once "layouts/footer.php" ?> 