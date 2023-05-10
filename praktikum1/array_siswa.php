<?php
$mhs1 = ['id' => 1, 'NIM' => 110222067, 'UTS' => 100, 'UAS' => 100, 'Tugas' => 100];
$mhs2 = ['id' => 2, 'NIM' => 110222077, 'UTS' => 90, 'UAS' => 95, 'Tugas' => 92];
$mhs3 = ['id' => 3, 'NIM' => 110222087, 'UTS' => 80, 'UAS' => 88, 'Tugas' => 84];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" class="css">
</head>
<body>
    <div class="container">
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
</body>
</html>