<?php 
include("dbconfig/connect.php");
error_reporting(0);

$order_id = $_GET['order_id'];
//complete order detail
$select_order = "SELECT * FROM `complete_pro` WHERE  id='$order_id'";
$order_sql = mysqli_query($con,$select_order);
$fetch_sql = $order_sql->fetch_array(MYSQLI_ASSOC);
$approval =$fetch_sql['approval'];

$pro_id = $fetch_sql['pro_id'];

// project detail
$sel_project = "SELECT * FROM `hire` WHERE id='$pro_id'";
$pro_sql = mysqli_query($con,$sel_project);
$fetch_project =$pro_sql->fetch_array(MYSQLI_ASSOC); 
$emp_id =$fetch_project['emp_id'];
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <?php include("header.php");?>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
       <?php include("side.php")?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title" style="font-size: 13px;"><span>Client Name</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number" style="font-size: 15px;"><strong><?php echo $fetch_project['client_name'];?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title" style="font-size: 13px;"><span>Employee Name</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number" style="font-size: 15px;"><strong><?php echo $fetch_project['emp_name'];?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title" style="font-size: 13px;"><span>Work</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number" style="font-size: 15px;"><strong><?php echo $fetch_project['services'];?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title" style="font-size: 13px;"><span>Final Date</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number" style="font-size: 15px;"><strong><?php echo $fetch_project['final_date'];?> <?php echo $fetch_sql['final_time'];?></strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                    <div class="text"><strong>Subject</strong><br><small><?php echo $fetch_project['subjects'];?></small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                    <div class="text"><strong>Topic</strong><br><small><?php echo $fetch_project['topic'];?></small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                    <div class="text"><strong>Pages</strong><br><small><?php echo $fetch_project['pages'];?></small></div>
                  </div>
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-6 col-12">
                  <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <iframe src="../images/documents/<?php echo $fetch_project['file'];?>" style="width:600px; height:300px;" frameborder="0"></iframe>
				
                  </div>
                </div>
                <div class="chart col-lg-3 col-12">
                  <!-- Bar Chart   -->
				  <h3>Employee Info</h3>
				  <?php
				  $sel_emp = "SELECT * FROM `profile` WHERE user_id='$emp_id'";
				  $emp_sql = mysqli_query($con,$sel_emp);
				  $fetch_emp = $emp_sql->fetch_array(MYSQLI_ASSOC);
				  
				  ?>
                  <div class="bar-chart has-shadow bg-white">
                    <div class="title"><strong class="text-violet"><?php echo $fetch_emp['fname'];?> <?php echo $fetch_emp['lname'];?></strong><br><small><?php echo $fetch_emp['number'];?></small></div>
                    <img src="../images/profile/<?php echo $fetch_emp['image'];?>" style="width:150px; height:150px">
                  </div>
                  <!-- Numbers-->
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
                    <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
		  <hr>
		  <hr>
		  <section class="dashboard-header">
		  <h3 style="margin-left: 30%;">Employee'S Project</h3>
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                    <div class="text" style="font-size: 17px;"><strong>Completed Date</strong><br><small><?php echo $fetch_project['subjects'];?></small></div>
                  </div>
                 
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-9 col-12">
                  <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <iframe src="../images/complete/<?php echo $fetch_sql['file'];?>" style="width:600px; height:300px;" frameborder="0"></iframe>
				
                  </div>
                </div>
              
              </div>
			  <?php 
			  if($approval==0)
			  {
			  
			  ?>
			  
			  
			  <a href="update.php?accept_id=<?php echo $fetch_sql['id'];?>" class="btn btn-info">Approve</a>
			  <a href="" class="btn btn-danger">Decline</a>
			  
			  <?php }?>
            </div>
          </section>
        
     
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>