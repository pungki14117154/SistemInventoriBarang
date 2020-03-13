<?php 
session_start();
include 'connect.php';
$id=$_POST['id'];
$pw=$_POST['pw'];
// $pas=md5($pw);
$query=mysqli_query($koneksi, "select * from admin where username='$id' and password='$pw'")or die(mysqli_error());
$r=mysqli_num_rows($query);

if($r==1){

	$a=mysqli_fetch_assoc($query);

	if($a['role']=='owner'){
		$_SESSION['username']=$id;
		$_SESSION['status']="login";
		header("location:admin/owner_pelanggan.php");
	}
	else if($a['role']=="gudang"){
		$_SESSION['username']=$id;
		$_SESSION['status']="login";
		header("location:admin/owner_stok.php");
	}
	else if($a['role']=="kasir"){
		$_SESSION['username']=$id;
		$_SESSION['status']="login";
		header("location:admin/#");
	}
	else{
		echo "<script>alert('Id atau Password Salah');window.location='index.php'</script>";
	}
	
}else{
	echo "<script>alert('Id atau Password Salah');window.location='index.php'</script>";
	// header("location:index.php")or die(mysqli_error());
}
 
?>