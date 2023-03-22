<?php

require 'function.php';

if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0 ){
        echo "
    <script type='text/javascript'>
    alert('Register Berhasil!');
    window.location = 'login.php'
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
    alert('Register Gagal:(');
    window.location = 'login.php'
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
    <title>Halaman Register</title>
</head>
<body>
    <div class="box">
        <h2>Register</h2>
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

            <input type="hidden" name="roles" value="Customer">
            <br>
            <br>
            <button type="submit" name="submit">Register</button>
        </form>

    </div>
</body>
</html>