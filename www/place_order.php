<?php
session_start();
include("include/db.php");

if(isset($_POST['place_order']))
	{
		
		
	$client_id = $_POST['client_id'];	
	$gnoom_id = $_POST['gnome_id'];	
	$client_name = $_POST['client_name'];
	$gnoome_name = $_POST['gnome_name'];
	$type_service= $_POST['type_service'];	
	$date = $_POST['date'];
	$service_name = $_POST['service_name'];
	$level_name = $_POST['level_name'];
	$subject = $_POST['subject'];
	$page = $_POST['page'];
	$topic = $_POST['topic'];
	$image = $_POST['image'];
	
	
	$instruction = $_POST['instruction'];
    $price = $_POST['price'];	
	$total = $_POST['total'];	
		
	
$insert_hire = "INSERT INTO `hire`(`clint_id`, `emp_id`, `client_name`, `emp_name`, `pick_writer`, `final_date`, `services`, `lavel`, `subjects`, `pages`, `topic`, `file`, `instruction`, `price`, `discount`, `date`, `final_price`, `staus`, `payment`) 
VALUES ('$client_id','$gnoom_id','$client_name','$gnoome_name','$type_service','$date','$service_name','$level_name','$subject','$page','$topic','$image','$instruction','$price',0,NOW(),'$total',0,0)";

//var_dump($insert_hire);
//exit();
$hire_sql = mysqli_query($conn,$insert_hire);

if($hire_sql)
{
echo '<script language="javascript">';
echo 'alert("Thank You. Your Project Submitted Successfully,You will Get Notification After Groome Approval!");';
echo 'window.location.href="index.php";';
echo '</script>';
}

else{
	echo '<script language="javascript">';
echo 'alert("Sorry There Are Some Problem, Please Try After Some Time");';
echo 'window.location.href="index.php";';
echo '</script>';
}

	
}
?>