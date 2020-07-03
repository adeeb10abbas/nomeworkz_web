<?php  
include("dbconfig/connect.php");
error_reporting(0);
if(isset($_POST['login']))
{
	$user_email = $_POST['email'];
	$user_pass = $_POST['password'];
	
	
	$sel_user = "SELECT * FROM `admin` WHERE email='$user_email' AND password='$user_pass'";
	//var_dump($sel_user);
	//exit();
	
	$use_sql = mysqli_query($con,$sel_user);
	$check = mysqli_num_rows($use_sql);
	
	if($check==0)
	{
		   echo "<script>alert('Wrong Email And Password!')</script>";
	   echo "<script>window.open('index.php','_self')</script>";
	}
	
	else
	{
		
		session_start();
		$_SESSION['email']=$user_email;
		echo "<script>alert('success')</script>";
	   
	   echo "<script>window.open('index.php','_self')</script>";
		
	}
}
?>