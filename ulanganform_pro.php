<html>
    <head>
        <title>Ulangan Form</title>
    </head>
    <body>
        <h2 align="center">ASSALAAM BOOK STORE</h2>
        <fieldset>
        <?php
            if (isset($_POST['submit'])) {
                $jml = $_POST['jml'];
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $jenkel = $_POST['jenkel'];
                $tanggal = $_POST['tanggal'];    
                for ($i = 0; $i < $jml; $i++) {
        ?>
        <form action="ulanganform_pro2.php" method="post">
            <table>
                <tr>
                    <td>Judul Buku</td>
                    <td><input type="text" name="judul[]" require></td>
                </tr>
                <tr>
                    <td>Kode Buku</td>
                    <td><input type="text" name="kode[]" require></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td><input type="text" nama="pengarang[]" require></td>
                </tr>
                <tr>
                    <td>Jenis Buku</td>
                    <td><select name="jenis" id="">
                    <option value="Novel">Novel</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Komik">Komik</option>
                    <option value="Cerita Bergambar">Cerita Bergambar</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="number" name="harga[]"></td>
                </tr>
                
            
            <?php } ?>
        <input type="hidden" name="nama" value="<?php echo $nama;?>">
        <input type="hidden" name="alamat" value="<?php echo $alamat; ?>">
        <input type="hidden" name="jenkel" value="<?php echo $jenkel; ?>">
        <input type="hidden" name="tanggal" value="<?php echo $tanggal;?>">
        <input type="hidden" name="jml" value="<?php echo $jml;?>">
                <tr>
                    <td><input type="submit" name="submit2" value="Submit"></td>
                    <td><input type="reset" name="reset"></td>
                </tr>
                </form>  
            </table> 
            <?php }?>
        </fieldset>
    </body>
</html>