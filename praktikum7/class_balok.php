<?php 
/* Buatlah class balok yang meiliki:
    1. Property panjang, lebar, dan tinggi
    2. Method __construct, getLuas, getKeliling, dan getVolume */

    class Balok{
        public $panjang;
        public $lebar;
        public $tinggi;

        public function __construct($p, $l, $t){
            $this->panjang = $p;
            $this->lebar = $l;
            $this->tinggi = $t;
        }

        public function getLuas(){
            return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
        }

        public function getKeliling(){
            return 4 * ($this->panjang + $this->lebar + $this->tinggi);
        }

        public function getVolume(){
            return $this->panjang * $this->lebar * $this->tinggi;
        }
    }

    $balok1 = new Balok(5, 10, 15);
    echo "Luas balok 1 = " . $balok1->getLuas();
    echo "<br> Keliling balok 1 = " . $balok1->getKeliling();
    echo "<br> Volume balok 1 = " . $balok1->getVolume();
    echo "<hr>";

    $balok2 = new Balok(15, 15, 20);
    echo "Luas balok 2 = " . $balok2->getLuas();
    echo "<br> Keliling balok 2 = " . $balok2->getKeliling();
    echo "<br> Volume balok 2 = " . $balok2->getVolume();
    echo "<hr>";


?>