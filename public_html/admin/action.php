<?php
include("dbconfig/connect.php");
// add price here..//

if(isset($_POST['add_services']))
{
	$name = $_POST['services'];
	
  $insert_services = "INSERT INTO `services`(`name`) VALUES ('$name')";	
 
 $sql_services = mysqli_query($con,$insert_services) or die(mysqli_error($conn));
 
 if($sql_services)
 {
	 header("location:add_services.php?sucess=This Service Added Sccessfully !");
 }
 
 else 
 {
	 header("location:add_services.php?error=There Are Some Error!");
 }
 
 
	
}


// add prices here ..

if(isset($_POST['add_price']))
{
	$service = $_POST['services'];
	$lavel = $_POST['level'];
	$time = $_POST['timeframe'];
	$price = $_POST['price'];
	
$insert_price = "INSERT INTO `discount`(`service_id`, `Lavel`, `timeframe`, `price`) VALUES ('$service','$lavel','$time','$price')";
$sql_price = mysqli_query($con,$insert_price);
if($sql_price)
	 {
	 header("location:add_price.php?sucess=This Price Added Sccessfully !");
 }
 
 else 
 {
	 header("location:add_price.php?error=There Are Some Error!");
 }
	
}
?>