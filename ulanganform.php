<html>
    <head>
        <title>Ulangan Materi Form PHP</title>
    </head>
    <body>
        <h2 align="center">ASSALAAM BOOK STORE</h2>
        <fieldset>
            <legend>Form Pembelian Buku</legend>
            <form action="ulanganform_pro.php" method="post" name="inputget">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" ></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" id="" cols="30" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jenkel" value="Laki - Laki" checked>Laki - Laki</td>
                        <td><input type="radio" name="jenkel" value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Tanggal Beli</td>
                        <td><input type="date" name="tanggal"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pembelian Buku</td>
                        <td><input type="number" name="jml" require></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit"></td>
                        <td><input type="reset" name="reset"></td>
                    </tr>
                    
                </table>
            </form>
        </fieldset>
    </body>
</html>