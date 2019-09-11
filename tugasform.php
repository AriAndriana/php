<html>
    <head>
        <title>Tugas</title>
    </head>
    <body>
        <legend><center><h1>Tugas</h1></center></legend>
            <form action="tugaspro.php" method="post" name="input">
                <table>
                    <tr>
                        <td>Nama</td> 
                        <td><input type="text" name="nama" require></td>
                    </tr>
                    <tr>
                        <td>Nis</td>
                        <td><input type="number" name="nis" require></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" id="" cols="30"rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jenkel"
                        value="Laki - Laki" checked>Laki - Laki</td>
                        <td><input type="radio" name="jenkel" value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td><select name="agama" id="">
                            <option value="Islam">Islam</option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Hindu">Hindu</option> 
                            <option value="Buddha">Buddha</option>
                        </select></td>
                    </tr>
                    <tr>    
                        <td>Asal Sekolah</td>
                        <td><input type="text" name="sekolah" require></td>
                    </tr>
                    <tr>
                        <td>Nama Orang Tua/Wali</td>
                        <td><input type="text" name="ortu" require></td>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran Yang Disukai</td>
                        <td><input type="checkbox" name="MTK" value="MTK" checked>Matematika</td>
                        <td><input type="checkbox" name="IPA" value="IPA">Ilmu Pengetahuan Alam</td>
                        <td><input type="checkbox" name="IPS" value="IPS">Ilmu Pengetahuan Sosial</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" name="BI" value="BI">Bahasa Indonesia</td>
                        <td><input type="checkbox" name="PAI" value="PAI">Pendidikan Agama Islam</td>
                    </tr>
                    <tr>
                        <td>Total Nilai Ijazah SMK</td>
                        <td><input type="number" name="ijazah" require></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" require></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button name="simpan">Input</button></td>
                        <td><button type="reset">Reset</button></td>
                    </tr>
            </table> 
        </form>
    </body>
</html>