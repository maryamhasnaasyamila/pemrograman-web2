<?php 
//  ini komentar 1 baris
 
/* ini komentar
   lebih dari satu baris
*/

echo "Hello World <br>";
print_r("Nama saya Hasna <br>"); // print_r jarang dipakai
var_dump("Kuliah di STT Terpadu Nurul Fikri"); // var_dump untuk debugging/nyari error, karena menampilkan tipe data nya

// Membuat variable user
$nama = "Maryam Hasnaa' Syamila";
$umur = 18;
$bb = 47.3;
$mahasiswa = true;

echo "Jenis-jenis Variable: String, Integer, Float, Boolean";
echo "<br><br> Nama saya $nama <br>";
echo "Umur saya $umur tahun <br>";
echo "Berat badan saya $bb kg <br>";
echo "Apakah saya mahasiswa? $mahasiswa <br><br>";

// Membuat variable sistem
echo "Variable Sistem:";
echo "Document Root: " . $_SERVER["DOCUMENT_ROOT"] . "<br>";
echo "Nama File: " . $_SERVER['PHP_SELF'] . "<br><br>";

// Membuat variable konstanta
define("PHI", 3.14);
$jari = 8;
$luas = PHI * $jari ** 2;
$keliling = 2 * PHI * $jari;

echo "Variable Konstanta: define";
echo "Luas lingkaran dengan jari-jari = $jari adalah $luas <br>";
echo "Keliling lingkaran adalah $keliling <br><br>";


// Membuat Array 
$programs = ["PHP", "JavaScript", "HTML", "CSS"];

echo "Variable Array: Array NuMerik (index nomor), Array Asosiatif (index ditentuin sendiri/id)<br>";
echo "Index ke-0 = " . $programs[0] . "<br>";
echo "Jumlah data = " . count($programs) . "<br>";
$programs[] = "MySQL" . "<br>";
echo "Tambah data ke-4 = " . $programs[4];
echo "Jumlah data setelah ditambah = " . count($programs) . "<br>";

/*
unset($programs[0]); 
    // unset = untuk menghapus 
echo "Index ke-0 = " . $programs[0] . "<br>";
*/

echo "<br> List Data Array:";
echo "<ol>";
foreach($programs as $program){
    echo "<li> $program </li>";
}
//foreach = untuk mengulang data array
echo "</ol>";

?>