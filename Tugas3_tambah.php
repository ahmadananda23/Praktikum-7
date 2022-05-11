<html>
<head>
</head>
<body> 
    <h1> Input Data Pegawai Baru </h1>
    <!-- membuat form data pegawai -->
    <form method="POST" action="#">
        <table width="400" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130"> ID Pegawai </td>
                <td><input type="text" name="id" required></td>
            </tr>
            <tr>
                <td width="130"> Nama </td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td width="130"> Alamat </td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td width="130"> Departemen </td>
                <td><input type="text" name="dept" required></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="submit" value="Kembali">
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

//button Simpan diklik
if(isset($_POST['simpan'])){

	//menambahkan data pada tabel pegawai
	$sql= "INSERT INTO pegawai (ID_PEGAWAI, NAMA, ALAMAT, ID_DEPT) VALUES ('$_POST[id]', '$_POST[nama]', '$_POST[alamat]', '$_POST[dept]')";
	if(mysqli_query($conn, $sql)){
        //jika berhasil muncul teks "New record created succesfully"
		echo "New record created succesfully";
		//kembali ke Tugas3.php
		echo "<meta HTTP-EQUIV='REFRESH' content='1; url=Tugas3.php'>";
	} else{
        //jika gagal muncul teks  "Error: " beserta peringatan error
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	mysqli_close($conn);//menutup koneksi
}

?>