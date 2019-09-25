<?php

function segitiga($alas, $tinggi){
    echo "<h1>Luas Segitiga</h1><br>";
    echo "Alas : $alas <br> Tinggi : $tinggi <br>";
    echo "Menghitung Luas Segitiga : ". $alas * $tinggi / 2 ." cm<hr>"; 
}
$a = 8;
$b = 2;
segitiga($a, $b);

function lingkaran($phi ,$diameter , $rad){
    echo "<h1>Luas Lingkaran</h1><br>Diameter : $diameter<br>    ";
    echo "Jari - Jari : $rad <br>";
    echo "Luas Lingkaran : ". $phi * $rad * $rad ." cm<hr>";
}
$phi = 3.14;
$rad = 4;
$diameter = $rad * 2;
lingkaran($phi ,$diameter , $rad);

function kel_lingkaran($phi, $diameter, $rad){
    echo "<h1>Keliling Lingkaran</h1><br>";
    echo "Diameter : $diameter <br>";    
    echo "Jari - Jari : $rad <br>";
    echo "Keliling LIngkaran : ". 2*$phi*$rad ." cm <hr>";
}
$p = 3.14;
$r = 6;
$diameter = $r*2;
kel_lingkaran($p, $diameter ,$r);
?>