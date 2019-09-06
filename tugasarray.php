<?php
$arr = [
    ['Nama' => 'Ujang', 'Kelas' => 'XI RPL', 'Alamat' => 'TCI'],
    ['Nama' => 'Mahmud', 'Kelas' => 'XI RPL', 'Alamat' => 'TCI 2'],
    ['Nama' => 'Ucok', 'Kelas' => 'XI RPL', 'Alamat' => 'TCI 3'],
];

echo "<pre>";
print_r($arr);
echo "</pre>";

$mode = current($arr[2]);
echo $mode."<br>";
reset($arr);
$mode = current($arr[1]);
echo $mode."<br>";
next($arr);
$mode = key($arr);
echo "$mode <br>";
reset($arr);

?>