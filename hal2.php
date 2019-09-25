<?php
session_start();
if ($_SESSION['akseslogin']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="halaman1.php">Halaman 1</a>|
        <a href="hal2.php">Halaman 2</a>|
        <a href="hal3.php">Halaman 3</a>|
        <a href="logout.php">Logout</a>|
    </nav>
    Halo <?php echo $_SESSION['akseslogin']; ?>
    <h2>Menghitung Luas Lingkaran</h2>
    <form action="" method="post">
        Masukkan Jari-Jari Lingkaran <input type="number" name="jari"><br>
        <input type="submit" name="submit" value="Submit">
        <button><a href="hal1.php">Back</a></button>
        <?php
            if (isset($_POST['submit'])) {
                $jari = $_POST['jari'];
                $phi = 3.14;

                function lingkaran($jari, $phi){
                    echo "<h3>Luas Lingkaran</h3><br>";
                    $jml = $phi * $jari * $jari; 
                    echo "$phi * $jari * $jari = $jml";
                }
                lingkaran($jari, $phi);
            }
        ?>
    </form>
</body>
</html>
<?php    
}
?>