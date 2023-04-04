<?php 

class Fruit{
    // membuat property
    public $name;
    public $color;
    public $shape;

    // membuat method
    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

    public function getShape(){
        return $this->shape;
    }

    public function getInfo(){
        return "Nama buah: " . $this->name . "<br>" . "Warna buah: " . $this->color . "<br>" . "Bentuk buah: " . $this->shape;
    }
}

// Instance (membuat objek 1)
$fruit1 =  new Fruit();
$fruit1->name = "Apel";
$fruit1->color = "Merah";
$fruit1->shape = "Bulat";

// Instance (membuat objek 2)
$fruit2 =  new Fruit();
$fruit2->name = "Anggur";
$fruit2->color = "Ungu";
$fruit2->shape = "Bulat";

// echo "Memanggil 1 data dengan 1 method <br>";
echo "Nama buah: " . $fruit1->getName() . "<br>";
echo "Warna buah: " . $fruit1->getColor() . "<br>";
echo "Bentuk buah: " . $fruit1->getShape() . "<br>";
echo "<hr>";

// echo "Memanggil semua data dengan 1 method <br>";
echo $fruit1->getInfo();
echo "<hr>";
echo $fruit2->getInfo();

?>