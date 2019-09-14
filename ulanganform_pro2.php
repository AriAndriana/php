<?php
    if (isset($_POST['submit2'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenkel = $_POST['jenkel'];
        $tanggal = $_POST['tanggal'];
        $jml = $_POST['jml'];
        $judul = $_POST['judul'];
        $kode = $_POST['kode'];
        $pengarang = $_POST['pengarang'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
    ?>
        <html>
            <head>
                <title>Ulangan Form</title>
            </head>
            <body>
                <h2 align="center">ASSALAAM BOOK STORE</h2>
                <fieldset>
                    <table cellspacing="2">
                        <tr>
                            <td>Nama</td>
                            <td></td>
                            <td>:</td>
                            <td></td>               
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><?php echo $alamat ;?></td>
                        </tr>
                        <tr>
                            <td>Jenis x xx  m Kelamin</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><?php echo $jenkel; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pembelian</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><?php echo $tanggal; ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pembelian</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><?php echo $jml ." Buku"; ?></td>
                        </tr>

                    </table>
                     <?php
                        // for ($i = 0; $i < count($judul); $i++){
                        //     echo "<pre>";
                        //     echo "Judul Buku  : $judul[$i]";
                        //     echo "Kode Buku   : $kode[$i]";
                        //     echo "</pre>";
                        // } 
                    ?>
                </fieldset>
            </body>
        </html>
    <?php
    }   
?>