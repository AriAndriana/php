<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $alamat = $_POST['alamat'];
    $jenkel = $_POST['jenkel'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];
    $ortu = $_POST['ortu'];
    $ijazah = $_POST['ijazah'];
    $email = $_POST['email'];

    echo "<pre>";
    echo "Nama                        : <b>$nama</b></br>";
    echo "Nis                         : <b>$nis</b></br>";
    echo "Alamat                      : <b>$alamat</b></br>";
    echo "Jenis Kelamin               : <b>$jenkel</b> <br>";
    echo "Agama                       : <b>$agama</b><br>";
    echo "Asal Sekolah                : <b>$sekolah</b><br>";
    echo "Nama Orang Tua/Wali         : <b>$ortu</b><br>";
    echo "Mata Pelajaran yang disukai : ";
    if (isset($_POST['MTK'])) {
        echo "<b>". $_POST['MTK'] ."</b>";
    }
    if (isset($_POST['IPA'])) {
        echo ", <b>". $_POST['IPA'] ."</b>";
    }
    if (isset($_POST['IPS'])) {
        echo ", <b>". $_POST['IPS'] ."</b>";
    }
    if (isset($_POST['BI'])) {
        echo ", <b>". $_POST['BI'] ."</b>";
    }
    if (isset($_POST['PAI'])) {
        echo ", <b>". $_POST['PAI'] ."</b><br>";
    }
    echo "Total Nilai Ijazah SMK      : <b>$ijazah</b><br>";
    echo "Email                       : <b>$email</b><br>";
    if($ijazah > 23){
        echo "Selamat, Anda Lulus";
    }else{
        echo "Maaf, Anda Tidak Lulus";
    }
    echo "</pre>";
}

?>