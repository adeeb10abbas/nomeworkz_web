<?php
include("dbconfig/connect.php");

error_reporting(0);

if(isset($_GET['accept_id']))
{
	$id = $_GET['accept_id'];
	
	$sel_pro = "SELECT * FROM `complete_pro` WHERE id='$id'";
	$pro_sql = mysqli_query($con,$sel_pro);
	$fetch_pro =$pro_sql->fetch_array(MYSQLI_ASSOC);
    $pro_id = $fetch_pro['pro_id'];	
	
	
	$udate = "UPDATE `complete_pro` SET `approval`=1 WHERE id='$id'";
	$sql = mysqli_query($con,$udate);
	
	if($sql)
	{
		$update_pro = "UPDATE `hire` SET `staus`=6 WHERE id='$pro_id'";
		$pro_sql = mysqli_query($con,$update_pro);
		if($pro_sql)
		{
			header("location:admin_aproval.php");
		}
	}
	
	
	
	
	
}

//update nome here
if(isset($_GET['nome_id']))
{
	
	
	$nome_id = $_GET['nome_id'];
	$status = $_GET['status'];
	
	$update = "UPDATE `user` SET `status`='$status' WHERE id='$nome_id'";
	$sql = mysqli_query($con,$update);
	
	if($sql)
	{
		header("location:gnome_registration.php");
	}
	
	else
		{
		header("location:gnome_registration.php");
	}

	
}


//update password 
{
	if(isset($_POST['password_update']))
	{
		$email = $_POST['email'];
		$password =$_POST['password'];
		
		$update = "UPDATE `admin` SET `password`='$password' WHERE email='$email'";
		//var_dump($update);
		//exit();
		$query = mysqli_query($con,$update) or die(mysqli_error($con));
		if($query)
		{
			header("location:password.php?success=This Password Updated Successfully !");
		}
		
		else{
			header("location:password.php?error=This email id is not exits!");
		}
	}
}

?>