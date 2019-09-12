<?php
if(isset($_POST['input'])) {
    $angka = $_POST['bil'];
    $pangkat = $_POST['pangkat'];
    $number = 0;
    $number2 = 0;
    var_dump($angka);
    foreach ($angka as $data => $a) {
        echo "$data";
        for($i = 0; $i < $a; $i++) {
            echo "x$data";
        }
        echo " : ". pow($data, $a) . " ";
        $x = pow($data, $a);
        if ($a % 2 == 0) {
            echo "Bilangan Genap";
        }
        else{
            echo "Bilangan Ganjil";
        }
    }
}

?>