<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <nav>
        <a href="halaman1.php">Halaman 1</a>|
        <a href="hal2.php">Halaman 2</a>|
        <a href="hal3.php">Halaman 3</a>|
        <a href="logout.php">Logout</a>|
    </nav>
    Halo <?php echo $_SESSION['akseslogin']; ?>
    <form action="" method="post">
        Email <input type="email" name="email" required>
        <br> Password <input type="password" name="pass" required>
        <br> <input type="submit" value="Login" name="Akses">
    </form>
</body>
</html>
<?php
if (isset($_POST['Akses'])) {
    $a = $_POST['email'];
    $b = $_POST['pass'];
    if ($a == "admin@gmail.com" && $b == "admin") {
        $_SESSION['akseslogin'] = 'Admin';
        header("location:hal1.php");
    } else {
        echo "Login Gagal";
    }
} elseif($_SESSION['akseslogin']) {
        echo "<script> alert('Silahkan Login Terlebih dahulu');"
         . "window.location.href='hal1.php'</script>";
}
?>