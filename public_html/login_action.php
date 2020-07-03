<?php
include("include/db.php");
//user signup here
if(isset($_POST['registration']))
{
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$pass = $_POST['password'];
$number = $_POST['number'];
$unqid = ("GW-CU-" . mt_rand());

$insert_user= "INSERT INTO `user`(`name`, `email`, `pass`, `number`, `status`,`role`, `unique_id`) VALUES ('$name','$email','$pass','$number',1,1,'$unqid')";
$user_sql = mysqli_query($conn,$insert_user);
if($user_sql)
{
	echo "<script>alert('Thank you for registering for our Website,You can Login Now and post your Homework!')</script>";
	   echo "<script>window.open('index.php','_self')</script>";
}
}


//login here....

if(isset($_POST['user_log']))
{
	$user_email = $_POST['user_email'];
	$user_pass = $_POST['pass'];
	
	
	$sel_user = "SELECT * FROM `user` WHERE email='$user_email' AND pass='$user_pass'";
	$use_sql = mysqli_query($conn,$sel_user);
	$check = mysqli_num_rows($use_sql);
	
	if($check==0)
	{
		   echo "<script>alert('Wrong Email And Password!')</script>";
	   echo "<script>window.open('index.php','_self')</script>";
	}
	
	else
	{
		$fetch_user = $use_sql->fetch_array(MYSQLI_ASSOC);
		$status = $fetch_user['status'];
		if($status==1)
		{
		session_start();
		$_SESSION['email']=$user_email;
		echo "<script>alert('success')</script>";
	   
	   echo "<script>window.open('index.php','_self')</script>";
		}
		
		else{
			  echo "<script>alert('Your Account Is Not Active Yet,Please Wait For Admin Approval!')</script>";
	   echo "<script>window.open('index.php','_self')</script>";
		}
	}
	
	
}

// Gnome Registration here..
if(isset($_POST['Gnome_regis']))
{
	$name=$_POST['gnome_name'];
	$email = $_POST['gnome_email'];
	$pass = $_POST['gnome_pass'];
	$phone = $_POST['gnome_tel'];
	$unqid = ("GW-GN-" . mt_rand());
	
	$insert_gnome = "INSERT INTO `user`(`name`, `email`, `pass`, `number`, `status`, `role`, `unique_id`) VALUES ('$name','$email','$pass','$phone',1,2,'$unqid')";
	$gnome_sql = mysqli_query($conn,$insert_gnome);
	
	if($gnome_sql)
	{
		echo "<script>alert('Thank you for registering for our Website,You can Login Now and post your Homework!')</script>";
	   echo "<script>window.open('index.php','_self')</script>";
	}
}



?>