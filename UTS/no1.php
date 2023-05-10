<?php
// no. 1 = output: 1 2 3 4 5 6 7 8 9
for ($x = 1; $x < 10; $x++) {
    echo $x." ";
  }

// no. 3 = output: Ocha
$nama = array("Faiz", "Aulia", "Alissa","Ocha"); 
echo $nama[3];

// no. 34 = output: 1
$x = 1;
do {
  echo $x." ";
  $x++;
} while ($x > 2);

// no. 40 = tidak menghasilkan output
$x = 20;
$y = 12;
if($y >= $x){
    echo $y;
}
?>