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
    <h2>Menghitung Luas Persegi</h2>
    <form action="" method="post">
        Masukkan Sisi <input type="number" name="sisi">
        <br><input type="submit" name="submit" value="Submit">
        <button><a href="hal1.php">Back</a></button>
        <?php
            if (isset($_POST['submit'])) {
                $sisi = $_POST['sisi'];

                function persegi($sisi) {
                    echo "<h3>Luas Persegi</h3><br>";
                    $total = $sisi * $sisi;
                    echo "$sisi * $sisi = $total";
                }

                persegi($sisi);
            }
        ?>
    </form>
</body>
</html>
<?php
}
?>