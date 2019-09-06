<?php
$arrNilai = array("Ajeng" => 90, "Mamat" => 87,
 "Ucup" => 87, "Aang" => 95, "Syahrul" => 75);

foreach($arrNilai as $nama => $val){
    if($val > 80){
        echo "Nama : $nama, Nilai : $val, Grade A <hr>";
    }
    elseif($val > 75){
        echo "Nama : $nama, Nilai : $val, Grade B<hr>";
    }
    elseif($val > 65){
        echo "Nama : $nama, Nilai : $val, Grade C<hr>";
    }
}
?>