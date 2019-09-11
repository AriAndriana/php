<?php
if (isset($_POST['Pilih'])) {
    $film = $_POST['kartun'];
    echo "Film Kartun Favorit Anda Adalah : 
    <font><b>$film</b></font>";
}
?>