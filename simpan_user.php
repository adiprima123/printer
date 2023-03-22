<?php

require 'function.php';

// deklarasi data yg mau di input
$nama_lengkap = $_POST["nama_lengkap"];
$username = $_POST["username"];
$password = $_POST["password"];
$roles = $_POST["roles"];

// bikin sql query
$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password', '$roles')");

// bikin kondisi kalo misal berhasil
if($query){
    echo "
    <script type='text/javascript'>
    alert('Data Berhasil Ditambah');
    window.location = 'index.php'
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
    alert('Data Gagal Ditambah');
    window.location = 'index.php'
    </script>
    ";
}
?>