<?php
    $conn = new mysqli("localhost","root","","latihan");
    if ($conn->connect_error) {
        die("Koneksi DB gagal: ".$conn->connect_error);
    }else{        
        $sql = "SELECT * FROM bukutamu";
        $result = $conn->query($sql);
        $jumlah = $result->num_rows;
        echo "<center>Daftar Pengunjung</center>";
        echo "Jumlah pengunjung: $jumlah";
        echo "<hr>";

        $urutan = 1;
        while($row = $result->fetch_array()){
            echo "$urutan<br>";
            echo "Nama: $row[0] <br>";
            echo "Email: $row[1] <br>";
            echo "Komentar: $row[2] <br><br>";
            $urutan++;
        }
    }
?>