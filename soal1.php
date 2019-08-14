<?php
$hrg_jmb = 15000;
$dus = 6;
$weight = 5;
$hrg_dus = 2000;
$jambu = ($hrg_jmb * $dus) * $weight;
$jmlh = $dus * $hrg_dus;
$total = $jambu + $jmlh;

echo "Harga seluruh jambu adalah : Rp. ".($hrg_jmb * $dus) * $weight;
echo "<br>Harga seluruh dus setelah dijual adalah :Rp. ".$dus * $hrg_dus;
echo "<br>Total Penjualan seluruh Jambu dan Dus adalah : Rp. ". $total;
?>