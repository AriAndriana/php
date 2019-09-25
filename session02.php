<?php
/*
Halaman ini merupakan contoh halaman pemeriksaan session.
Pemeriksaan session biasanya dilakukan jika suatu halaman memiliki
akses terbatas. Misalkan harus login terlebih dahulu.
*/
session_start();

//pemeriksaan session
if (isset($_SESSION['login'])) { //jika anda sudah login
    //menampilkan isi session 
    echo "<h1> Selamat Datang ". $_SESSION['login'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika anda sudah login</h2>";
    echo "<h2>Klik <a href='session03.php'>di sini (session03.php)</a> untuk LOGOUT</h2>";
} else {
    //session belum ada artinya belum login 
    die("Anda Belum Login! Anda tidak berhak masuk ke halaman ini. 
     Silahkan Login <a href='session01.php'>di sini</a>");
}
?>