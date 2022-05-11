<html>
<head>
</head>
<body>
    <h1>Data Pegawai</h1>
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

        //mengambil data dari tabel pegawai
        $sql= "SELECT * FROM pegawai";
        $result= mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<br>";
                //menampilkan output setiap row
                echo "ID Pegawai : " . $row["ID_PEGAWAI"] . "<br>Nama : " . $row["NAMA"] . "<br>Alamat : "
                . $row["ALAMAT"] . "<br>ID Departemen : " . $row["ID_DEPT"];
                //membuat link Edit yang mengarahkan ke Tugas3_edit.php dan Hapus yang mengarahkan ke Tugas3_hapus.php
                echo "<br><tr>
                <td><a href='Tugas3_edit.php?id=$row[ID_PEGAWAI]'>Edit</a></td>&emsp;
                <td><a href='Tugas3_hapus.php?id=$row[ID_PEGAWAI]'>Hapus</a></td>&emsp;
		    </tr><br>";}
        } else{
            //jika tidak ada data maka muncul teks "Tidak Ada Data"
	        echo "Tidak Ada Data";}

        //membuat tombol untuk menambahkan data pegawai
        echo"<br><br><form action='Tugas3_tambah.php'><input type='submit' name='Tambah' value='Tambahkan Data'></form>";

        mysqli_close($conn); //menutup koneksi
    ?>
</body>
</html>