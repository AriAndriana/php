<?php
session_start();
if($_SESSION['akseslogin']){
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
    <h2>Menghitung Luas Segitiga</h2>
    <form action="" method="post">
        Masukkan Alas <input type="number" name="sisi" required><br>
        Masukkan Tinggi <input type="number" name="tinggi" required><br>
        <input type="submit" name="submit" value="Submit">
        <button><a href="hal1.php">Back</a></button>
    </form>
    <?php
        if (isset($_POST[submit])) {
            $a = $_POST['sisi'];
            $b = $_POST['tinggi'];

            function segitiga($a, $b) {
                echo "<h1>Luas Segitiga</h1><br>";
                $c = $a * $b / 2;
                echo "$a * $b / 2 = $c";
            }
            segitiga($a, $b);
        }
    ?>
</body>
</html>
<?php
} else {
    echo "<script> alert('Anda Sudah Login');"
         . "window.location.href='hal1.php'</script>";
}
?>