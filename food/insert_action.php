<?php
session_start();
require_once("con.php");
if(isset($_POST['btn'])=="Insert"){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$valu="'$id','$name','$price'";
	$insertQry="insert into food_info VALUES($valu)";
	$runQry=mysqli_query($dbcon,$insertQry);
	if($runQry){

		$_SESSION['msg']="Insert Succesfully";
	}else{
	$_SESSION['msg']="Error";
	}
	header("Location:".BASE);
}


?>