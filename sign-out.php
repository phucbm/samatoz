<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
	unset($_SESSION['level']); // xóa session login
}

header("location: index.php");
?>