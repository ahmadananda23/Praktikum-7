<?php
    $servername = "localhost"; //nama server database
    $username = "root"; //username database
    $password = ""; //password database
    $dbname = "data_pegawai"; //nama database

    //membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //cek koneksi
    if(!$conn){
        //jika gagal maka akan muncul peringatan error
        die("Connection failed: ". mysqli_connect_error());
    }

    //mengambil data pegawai sesuai id yang dipilih
    $sql= "SELECT * FROM pegawai WHERE ID_PEGAWAI=$_GET[id]";
    $result= mysqli_query($conn, $sql);
    $row= mysqli_fetch_array($result);
?>
<html>
<head>
</head>
<body>
    <h1> Edit Data </h1>
    <!-- membuat form untuk mengubah data -->
    <form method="POST" action="#">
        <table width="400" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130"> ID Pegawai </td>
                <td><input type="text" name="id" value="<?php echo $row['ID_PEGAWAI'] ?>" required></td>
            </tr>
            <tr>
                <td width="130"> Nama </td>
                <td><input type="text" name="nama" value="<?php echo $row['NAMA'] ?>" required></td>
            </tr>
            <tr>
                <td width="130"> Alamat </td>
                <td><input type="text" name="alamat" value="<?php echo $row['ALAMAT']?>" required></td>
            </tr>
            <tr>
                <td width="130"> Departemen </td>
                <td><input type="text" name="dept" value="<?php echo $row['ID_DEPT']?>" required></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="ubah" value="Ubah">
                    <input type="submit" value="Kembali" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>	
<?php
    $servername = "localhost"; //nama server database
    $username = "root"; //username database
    $password = ""; //password database
    $dbname = "data_pegawai"; //nama database

    //memuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //cek koneksi
    if(!$conn){
        //jika gagal maka akan muncul peringatan error
        die("Connection failed: ". mysqli_connect_error());
    }

    //button Ubah diklik
    if(isset($_POST['ubah'])){
        //memperbarui data sesuai id yang dipilih
        $sql= "UPDATE pegawai SET ID_PEGAWAI='$_POST[id]', NAMA='$_POST[nama]', ALAMAT='$_POST[alamat]', ID_DEPT='$_POST[dept]' WHERE ID_PEGAWAI='$_GET[id]'";
        if(mysqli_query($conn, $sql)){
            //jika berhasil muncul teks "Data berhasil diubah"
            echo "Data berhasil diubah";
            //kembali ke Tugas3.php
            echo "<meta HTTP-EQUIV='REFRESH' content='1; url=Tugas3.php'>";
        } else{
            //jika berhasil muncul teks "Error: " serta peringatan error
            echo "Error: ". $sql ."<br>". mysqli_error($conn);
        }
        mysqli_close($conn);//menutup koneksi
    }
?>