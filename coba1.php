<html>
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Demo Koneksi database MySQL</h1>
    <?php
        $con = mysqli_connect("localhost","root","root","my_db");
        
        //cek koneksi
        if (mysqli_connect_errno()){
            //jika belum teknoneksi maka akan muncul peringatan
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    ?>
</body>
</html> 