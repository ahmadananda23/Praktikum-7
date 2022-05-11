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

    //menghapus data pegawai yang dipilih
    $sql= "DELETE FROM pegawai WHERE ID_PEGAWAI='$_GET[id]'";
    if(mysqli_query($conn, $sql)){
        //jika berhasil maka muncul teks "Data berhasil dihapus"
        echo "Data berhasil dihapus";
        //kembali ke Tugas3.php
        echo "<meta HTTP-EQUIV='REFRESH' content='1; url=Tugas3.php'>";
    } else{
        //jika gagal maka muncul teks "Error: " serta peringatan error
        echo "Error: ". $sql ."<br>". mysqli_error($conn);
    }
    mysqli_close($conn); //menutup koneksi
?>