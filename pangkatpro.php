<?php
if(isset($_POST['input'])) {
    $angka = $_POST['bil'];
    $pangkat = $_POST['pangkat'];
    $number = 0;
    $number2 = 0;
    var_dump($angka);
    for($x = 0; $x < count($angka); $x++ ) {
        for($i = 1; $i <= $pangkat[$x]; $i++) {
            echo $angka[$x];
            if ($z < $pangkat[$x]) {
                echo "x";
            }
        }
        $hasil = pow($angka[$x], $pangkat[$x]);
        echo " = ". $hasil ." -> ";
        if ($hasil % 2 == 0) {
            echo "Bilangan Ganjil";
        } else {
            echo "Bilangan Genap";
        }
        echo "<hr>";
    }
}

?>