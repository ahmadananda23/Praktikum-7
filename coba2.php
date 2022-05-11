<?php
    $servername = "localhost"; //nama server database
    $username = "root"; //username database
    $password = ""; //password database

    //membuat koneksi
    $conn = mysqli_connect($servername, $username, $password);

    //cek koneksi
    if (!$conn){
        //jika gagal terkoneksi maka akan muncul pesan peringatan
        die("Connection failed: " . mysqli_connect_error());
    }
    
    //membuat database
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn, $sql)){
        //jika berhasil maka muncul teks "Database created successfully"
        echo "Database created successfully";
    } else {
        //jika gagal maka muncul teks "Error creating database"
        echo "Error creating database: " . mysqli_error($conn);
    }
    mysqli_close($conn); //menutup koneksi
?>