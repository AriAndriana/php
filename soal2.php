<?php
$sewa = 375000;
$denda = 25000;
$total_bayar = 625000;
$a = $total_bayar - $sewa;
$x = $a / ($denda / 2);
echo "Denda = Rp. ".$a;
echo "<br>Kelebihan Jam = ".$x." Jam";
echo "<br>Total Waktu Jerry Menyewa Mobil Adalah ".($x + 24)." Jam"; 
?>