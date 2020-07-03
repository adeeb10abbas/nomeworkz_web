<?php
include("include/db.php");
if(isset($_GET['pro_id']))
{
	$pro_id = $_GET['pro_id'];
	$value=$_GET['value'];
	
	$reject_pro ="UPDATE `hire` SET `staus`=2 WHERE ID='$pro_id'";
	$PRO_SQL = mysqli_query($conn,$reject_pro);
	if($PRO_SQL)
	{
	
		header("location:dashboard-gnome.php");

	}
	
}
// send gnome price for a project to client
if(isset($_POST['accept']))
{
	$price = $_POST['price'];
	$pro_id = $_POST['pro_id'];
	
	$update_pro ="UPDATE `hire` SET `staus`=3,`price`='$price' WHERE id='$pro_id'";
	$sql_pro = mysqli_query($conn,$update_pro);
	if($sql_pro)
	{
		header("location:find-work-gnome.php?success=Your Quotation Sent To The Client Successfully, Please Wait For Client Approve");
	}
	else
	{
		header("localhost:find-work-gnome.php?error=There Are Some Error!");
	}
}

//update client exceptation here..

if($_GET['new_value'])
{
	$value = $_GET['new_value'];
	$id = $_GET['id'];
	
	$update = "UPDATE `hire` SET `staus`=4 WHERE id='$id'";
	$upd_sql = mysqli_query($conn,$update);
	if($upd_sql)
	{
		header("location:account-orders.php");
	}
	
}
?>