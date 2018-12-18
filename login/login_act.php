<?php 
session_start();
include ("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'")or die(mysqli_error());
if(mysqli_num_rows($sql)==1){
	$_SESSION['username']=$username;
	header("location:../admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysqli_error());
	// mysql_error();
}
// echo $pas;
 ?>