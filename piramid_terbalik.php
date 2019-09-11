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
        for($i = $bintang; $i >= 1; $i--){
                for($z = $bintang; $z >= $i ; $z--){
                    echo "&nbsp;";
                    
                } 
                for ($m=1; $m <= $i; $m++) { 
                    echo " *";
                }
            echo "<br>";
        }


        echo "Total Bintang = $bintang";
    }
?>