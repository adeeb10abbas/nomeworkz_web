<?php 
include("include/db.php");
session_start();
if(isset($_SESSION['email']))
{
$email = $_SESSION['email'];
$sel_user = "SELECT * FROM `user` WHERE email='$email'";
$user_sql = mysqli_query($conn,$sel_user);
$fetch_user =$user_sql->fetch_array(MYSQLI_ASSOC); 
$user_id =$fetch_user['id']; 
}




//save general information here..
if(isset($_POST['Save']))
{
	$client_id =$_POST['client_id'];
	$client_name = $_POST['client_name'];
	$user_id = $_POST['user_id'];
	$user_name = $_POST['username'];
	$fname = $_POST['first-name'];
	$lname = $_POST['last-name'];
	$phone = $_POST['phone_number'];
	$status = $_POST['availability'];
	$professionals = $_POST['professionals'];
	$education = $_POST['education'];
	$img = $_FILES['img']['name'];
	$tmp_img = $_FILES['img']['tmp_name'];
	$tmpp = explode('.',$img);
	$file_ext = end($tmpp);
	$uniqname = time().uniqid(rand());
	$image ="$uniqname.".$file_ext;
	move_uploaded_file($tmp_img,"images/profile/$image");
	
	$insert_profile = "INSERT INTO `profile`(`user_id`, `User Name`, `fname`, `lname`, `number`, `Professional`, `Availability`, `Education`, `image`)
	VALUES ('$user_id','$user_name','$fname','$lname','$phone','$professionals','$status','$education','$image')";
	$profile_sql = mysqli_query($conn,$insert_profile);
	if($profile_sql)
	{
		header("location:dashboard-gnome.php?success=Your Profile Updated Successfully!");
	}
	
	else
	{
		header("location:dashboard-gnome.php?error=There Are Some Error!");
		
	}
	
	
}


// Hire for a project  here..


// send complete project to admin

if(isset($_POST['submit_pro']))
{
	$order_id = $_POST['order_id'];
	$file = $_FILES['project']['name'];
	$tmp_file = $_FILES['project']['tmp_name'];
	$explode = explode('.',$file);
	$file_extend = end($explode);
	$uniq_name = time().uniqid(rand());
	$pro_file ="$uniq_name.".$file_extend;
	move_uploaded_file($tmp_file,"images/complete/$pro_file");
	
  $insert_project = "INSERT INTO `complete_pro`(`pro_id`, `file`, `approval`, `Date`, `new_date`, `complete_date`)
  VALUES ('$order_id','$pro_file','0',NOW(),0,0)";	
  $pro_sql = mysqli_query($conn,$insert_project);
 
  
  if($pro_sql)
  {
	  $update_pro = "UPDATE `hire` SET `staus`=3 WHERE id='$order_id'";
	  $update_sql = mysqli_query($conn,$update_pro);
	  
	  echo "<script>alert('Your project Submitted Successfully,After Admin Approval You Will Get Notification!')</script>";
		echo "<script>window.open('dashboard-gnome.php','_self')</script>";
	  
  
  }
  
  else{
	  header("location:work_submit.php?error=There Are Some Error");
  }
 
}

//subscription

if(isset($_POST['Buy']))
{
$id = $_POST['id'];
$user_id = $_POST['user_id'];
$price = $_POST['price'];
$insert_sub = "INSERT INTO `discount`(`user_id`, `coupon_id`, `price`, `date`) VALUES ('$user_id','$id','$price',NOW())";
$sub_sql = mysqli_query($conn,$insert_sub);
if($sub_sql)
{
	echo "<script>alert('Thank You, Successfully Buyed The Subscription!')</script>";
   echo "<script>window.open('index.php','_self')</script>";
}

}




// except new project 

if(isset($_GET['excep_id']))
{
	$excep_id = $_GET['excep_id'];
	
	$update = "UPDATE `hire` SET `staus`='2' WHERE id='$excep_id'";
	$SQL = mysqli_query($conn,$update);
	if($SQL)
	{
		header("location:find-work-gnome.php");
	}
}

// decline new project 
if(isset($_GET['decline_id']))
{
	$decline_id = $_GET['decline_id'];
	$update = "UPDATE `hire` SET `staus`=1 WHERE id='$decline_id'";
	$SQL = mysqli_query($conn,$update);
	if($SQL)
	{
		header("location:find-work-gnome.php");
	}
}
?>