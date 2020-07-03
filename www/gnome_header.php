<?php 

include("include/db.php");

if(isset($_SESSION['email']))
{
	$email = $_SESSION['email'];
	
	$sel_user = "SELECT * FROM `user` WHERE email='$email'";
	
	$user_sql = mysqli_query($conn,$sel_user);
	$fetch=$user_sql->fetch_array(MYSQLI_ASSOC);
	$user_id = $fetch['id'];
	
	
$sel_project = "SELECT * FROM `hire` WHERE emp_id='$user_id' AND staus=0";	
$project_sql = mysqli_query($conn,$sel_project);
$count1= mysqli_num_rows($project_sql);


$project = $sel_project = "SELECT * FROM `hire` WHERE emp_id='$user_id' AND staus=2";	
$proj_sql = mysqli_query($conn,$project);
$count2= mysqli_num_rows($proj_sql);

$project3 = $sel_project = "SELECT * FROM `hire` WHERE emp_id='$user_id' AND staus=3";	
$proj_sql3 = mysqli_query($conn,$project3);
$count3= mysqli_num_rows($proj_sql3);
	
}
?>

<div id="account-overview">
            <img class="account-picture" width="50" src="files/user.png">
            <h1 class="account-username"><?php echo $fetch['name']?></h1>
            <div id="account-tasks">
                <div class="number-task">
                    <h1>0</h1>
                    <p>In Progress</p>
                </div>
                <div class="number-task">
                    <h1>0</h1>
                    <p>Completed</p>
                </div>
                <div class="number-task">
                    <h1>0</h1>
                    <p>Cancelled</p>
                </div>
            </div>
            <div class="account-links">
                 <a id="hire-writer-a" href="dashboard-gnome.php">
                    <button>My account</button>
                </a>
				
				 <a id="hire-writer-a" href="find-work-gnome.php">
                    <button>New Order (<?php echo $count1;?>)</button>
                </a>
				
				
				
				
				
					<a id="hire-writer-a" href="orders.php">
                    <button>Orders In Process (<?php echo $count2;?>)</button>
                </a>
				
				<a id="hire-writer-a" href="pending_orders.php">
                    <button>Pending for approval(<?php echo $count3;?>)</button>
                </a>
				
			
				
                <br>
                <a id="account-orders-a" href="past-orders-gnome.php">
                    <button>Past orders</button>
                </a>
            </div>
        </div>