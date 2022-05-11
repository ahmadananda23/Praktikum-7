<html>
<head>
</head>
<body>
    <?php
        $servername = "localhost"; //nama server database
        $username = "root"; //username database
        $password = ""; //password database
        $dbname = "myDB"; //nama database

        //membuat koneksi
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        //cek koneksi
        if (!$conn){
            //jika gagal terkoneksi maka akan muncul pesan peringatan
            die("Connection failed: " . mysqli_connect_error());
        }

        //mengambil data kode, negara, champion dari tabel liga
        $sql = "SELECT kode, negara, champion FROM liga";
        //menampilkan hasil 
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            //output data pada tiap row
            while($row = mysqli_fetch_assoc($result)){
                echo "kode: " . $row["kode"]. " - Negara: " .
                $row["negara"]. " " . $row["champion"]. "<br>";
            }
        } else {
            //jika tidak ada data akan menampilkan teks "0 results"
            echo "0 results";
        }
        //menutup koneksi
        mysqli_close($conn);
    ?>
</body>
</html>