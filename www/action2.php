<?php
include("include/db.php");
if(isset($_GET['except_id']))
{
	$id = $_GET['except_id'];
	
	$update_hire="UPDATE `hire` SET `staus`=2 WHERE id='$id'";
	$sql = mysqli_query($conn,$update_hire);
	if($sql)
	{
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}
	
}



// decline ..

if(isset($_GET['decline_id']))
{
	$id = $_GET['decline_id'];
	{
		$decline_hire = "UPDATE `hire` SET `staus`=1 WHERE id='$id'";
		$hire_sql = mysqli_query($conn,$decline_hire);
		if($hire_sql)
	{
		header("Location: {$_SERVER['HTTP_REFERER']}");
	}
		
	}
}

?>