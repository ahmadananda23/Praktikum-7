<?php
    $servername = "localhost"; //nama server database
    $username = "root"; //username database
    $password = ""; //password database

    //membuat koneksi
    $conn = mysqli_connect($servername, $username, $password);

    //cek koneksi
    if (!$conn){
        //jika gagal maka akan muncul peringatan error
        die("Connection failed: " . mysqli_connect_error());
    }

    //membuat database buku_tamu
    $sql = "CREATE DATABASE buku_tamu";
    if (mysqli_query($conn, $sql)){
        //jika berhasil maka muncul teks "Database created successfully"
        echo "Database created successfully";
    } else {
        //jika gagal maka muncul teks "Error creating database: " beserta peringatan error
        echo "Error creating database: " . mysqli_error($conn);
    }
    //menutup koneksi
    mysqli_close($conn);
?>