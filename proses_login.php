<?php
session_start();
include 'function.php';

// menangkap data yang dikirim dari login 
$username = $_POST['user'];
$password = $_POST['pass'];

// menyeleksi data dan dicocokan pada table admin xampp
$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek_data = mysqli_num_rows($data);

if ($cek_data > 0){
    $_SESSION['username']=$username;
    $_SESSION['status']='login';
    header("location:index.php");
}else{
    header("location:index.php?pesan=gagal");
}

$login = mysqli_fetch_assoc($data);

	// cek jika user login sebagai admin
	if($login['roles']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['roles'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");

	// cek jika user login sebagai pegawai
	}else if($login['roles']=="customer"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['roles'] = "customer";
		// alihkan ke halaman dashboard pegawai
		header("location:customer/index.php");
    }else{
        header("location:index.php?pesan=gagal");
    }

?>