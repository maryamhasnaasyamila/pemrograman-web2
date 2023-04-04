<?php 

class Lingkaran{
    // membuat property
    public $jari_jari;
    public const PHI = 3.14;

    /* public function getLuas($r){
        $this->jari_jari = $r;
        return self::PHI * $this->jari_jari ** 2;
    }

    public function getKeliling($r){
        $this->jari_jari = $r;
        return 2 * self::PHI * $this->jari_jari;
    }

    public function getInfo($r){
        $this->jari_jari = $r;
        return "Luas lingkaran: " . self::PHI * $this->jari_jari ** 2 . "<br> Keliling lingkaran: " . 2 * self::PHI * $this->jari_jari;
    } */

    // membuat method
    public function __construct($r){
        $this->jari_jari = $r;
    }

    public function getLuas(){
        return self::PHI * $this->jari_jari ** 2;
    }

    public function getKeliling(){
        return 2 * self::PHI * $this->jari_jari;
    }
}

// Instance (membuat objek 1)
/* $lingkaran1 = new Lingkaran();

// echo "Memanggil 1 data dengan 1 method <br>";
echo "Luas lingkaran: " . $lingkaran1->getLuas(10);
echo "<br> Keliling lingkaran: " . $lingkaran1->getKeliling(10);
echo "<hr>";

// echo "Memanggil semua data dengan 1 method <br>";
echo $lingkaran1->getInfo(10); */

$lingkaran1 = new Lingkaran(10);
echo "Luas lingkaran (1): " . $lingkaran1->getLuas();
echo "<br> Keliling lingkaran (1): " . $lingkaran1->getKeliling();
echo "<hr>";

// Instance (membuat onjek 2)
$lingkaran2 = new Lingkaran(20);
echo "Luas lingkaran (2): " . $lingkaran2->getLuas();
echo "<br> Keliling lingkaran (2): " . $lingkaran2->getKeliling();
echo "<hr>";

?>