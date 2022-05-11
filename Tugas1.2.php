<?php
    $servername = "localhost"; //nama server database
    $username = "root"; //username database
    $password = ""; //password database
    $dbname = "buku_tamu"; //nama database

    //membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //cek koneksi
    if (!$conn){
        //jika gagal maka akan muncul peringatan error
        die("Connection failed: " . mysqli_connect_error());
    }

    //membuat tabel buku_tamu
    $sql = "CREATE TABLE buku_tamu (
        ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NAMA VARCHAR(200),
        EMAIL VARCHAR(50),
        ISI TEXT)";
    if (mysqli_query($conn, $sql)){
        //jika berhasil maka muncul teks "Table created successfully"
        echo "Table created successfully";
    } else {
        //jika gagal maka muncul teks "Error: " beserta peringatan error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //menutup koneksi
    mysqli_close($conn);
?>