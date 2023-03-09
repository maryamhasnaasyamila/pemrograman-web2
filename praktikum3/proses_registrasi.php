<?php 
$domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi"];

$prodi = [
    "TI" => "Teknik Informatika",
    "SI"=> "Sistem Informasi",
    "BD" => "Bisnis Digital",
];

$skills = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];

if(isset($_POST['submit'])){
    $score = 0;

    if(isset($_POST['skill'])){
      foreach($_POST['skill'] as $dipilih){
        $score += $skills[$dipilih];
      }
    }

    if ($score == 0){
        $ket = "Tidak memadai";
        
    } elseif ($score > 0 && $score <= 40){
        $ket = "Kurang";
        
    } elseif ($score > 40 && $score <= 60){
        $ket = "Cukup";
        
    } elseif ($score > 60 && $score <= 100){
        $ket = "Baik";
        
    } else {
      $ket = "Sangat Baik";
    }
  }

?>