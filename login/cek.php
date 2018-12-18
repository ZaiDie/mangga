<?php 
if(!isset($_SESSION['username'])){
	header("location:../admin/index.php");
}
?>