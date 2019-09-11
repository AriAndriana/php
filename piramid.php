<html>
    <head>
        <title>Latihan Form 3</title>
    </head>
    <body>
        <form action="" method="post">
            Masukan Bilangan : <input type="number" name="bintang" require>
            <button name="submit">Submit</button>
        </form>
    </body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $bintang = $_POST['bintang'];
        for($i = 1; $i <= $bintang; $i++){
                for($z = $bintang; $z >= $i ; $z--){
                    echo "&nbsp;";
                    
                } 
                for ($k=1; $k <= $i; $k++) { 
                    echo " *";
                }
            echo "<br>";
        }
        echo "Total Bintang = $bintang";
    }
?>