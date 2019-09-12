<html>
    <head>
        <title>Form Array</title>
    </head>
    <body>
        <h2 align="center">Form Array</h2>
        <fieldset>
            <legend><h4>Form Array</h4></legend>
            <form action="" method="get" name="input">
                Masukan Angka <input type="number" name="angka" min="1" max="10">
                <button name="submit">Submit</button>
                <hr>
            </form>
                <?php
                    if(isset($_GET['submit'])) {
                        $angka = $_GET['angka'];
                        for($i = 0; $i < $angka; $i++){
                            ?>
                            <form action="formarraypro.php" method="post" name="Input">
                            <table>
                                <tr>    
                                    <td><label for=>Nama</label> <input type="text" name="nama[]" required></td>
                                    <td><label for=>Kelas</label> <input type="text" name="kelas[]" required></td>
                                </tr>
                            </table>    
                    <?php        
                        }
                    ?>
                        <tr>
                            <td><button type="submit" name="input">Submit</button></td>
                            <td><button type="reset" name="reset">Reset</button></td>
                        </tr>
                <?php
                    }
                ?>
            </form>
        </fieldset>
    </body>
</html>