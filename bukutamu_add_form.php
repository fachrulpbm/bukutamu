<html>
<html>
<head>    
    <title>Simpan Buku Tamu</title>    
</head>
<body>
    <h1>Simpan buku tamu MySQL</h1>
    <?php
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];
        $conn = new mysqli("localhost","root","","latihan");
        if ($conn->connect_error) {
            die("Koneksi DB gagal: ".$conn->connect_error);
        }else{            
            $sql = "INSERT INTO bukutamu (nama,email,komentar) VALUES('$nama','$email','$komentar')";
            $hasil = $conn->query($sql);            
            echo "Nama  : $nama<br>";
            echo "Email : $email<br>";
            echo "Komentar  : $komentar<br>";            
        }
    ?>
</body>
</html>


