<?php
$loop = 20;
$num = 1;
for ($i=1; $i <= $loop ; $i++) { 
    if ($i == 1) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan mendali Emas<br>";        
    }elseif ($i == 2) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan mendali perak<br>";
    }elseif ($i == 3) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan mendali perunggu<br>";
    }elseif ($i >= 4 && $i <= 6) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan tas laptop<br>";
    }elseif ($i >= 7 && $i <= 9) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan tas karung<br>";
    }elseif ($i >= 10) {
        echo "Aku Data ke - ". $num++." Dan tidak mendapatkan apapun<br>";
    }
}
?>