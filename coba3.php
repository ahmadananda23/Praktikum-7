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

    //menginput data pada tabel liga
    $sql = "INSERT INTO liga (kode, negara, champion)
    VALUES ('Jer', 'Jerman', '4')";
    if (mysqli_query($conn, $sql)){
        //jika berhasil makan muncul teks "New record created successfully"
        echo "New record created successfully";
    } else {
        //jika gagal makan muncul teks "Error" dan peringatan error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    //menutup koneksi
    mysqli_close($conn);
?> 