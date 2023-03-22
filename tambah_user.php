<?php

require 'function.php';

if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0 ){
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
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah User</title>
</head>
<body>
    <div class="box">
        <h2>Tambah Data</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama Lengkap</label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap"><br>
            <br>
            
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username"><br>
            <br>
            
            <label for="password">Password</label><br>
            <input type="text" name="password" id="password"><br>
            <br>

            <label for="foto">Foto</label><br>
            <input type="file" name="foto" id="foto">

            <input type="hidden" name="roles" value="Customer">
            <br>
            <br>
            <button type="submit" name="submit">Tambah</button>
        </form>

    </div>
</body>
</html>