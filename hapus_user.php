<?php

require 'function.php';

$id = $_GET["id"];

// Bikin kondisi kala misalkan berhasil atau gagal
if(hapusUser($id) > 0){
    echo "
        <script type='text/javascript'>
            alert ('Data Berhasil Dihapus');
            window.location = 'index.php'
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert ('Data Gagal Dihapus');
        window.location = 'index.php'
    </script>
";
}

?>