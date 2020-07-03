<?php
include ("dbconfig/connect.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nomeworkz- Admin</title>
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
  <style>
  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
  </style>
  
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
     <?php include("header.php")?>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
     <?php include("side.php")?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">All Prices</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                   
                   
                    
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Services</th>
                              <th>Level</th>
                               <th>Time</th>
                              <th>Price</th>
                              <th>Action</th>
                            </tr>
							
							<?php 
                      

                      $query = "SELECT * FROM `discount`";
                      $data = mysqli_query($con, $query);
                      $total = mysqli_num_rows($data);
                      if ($total != 0) 
                      {
						 while ($result = mysqli_fetch_assoc($data)) 
                              { 
                           $service_id =$result['service_id']; 
                           $level_id = 	$result['Lavel'];
                           $time_id  = $result['timeframe']; 
						   
                    ?>

                            <tr>
                                  <td>
								  <?php 
								  $sel_service = "SELECT * FROM `services` WHERE id='$service_id'";
								  $sql_service = mysqli_query($con,$sel_service);
								  $fetch_service =$sql_service->fetch_array(MYSQLI_ASSOC); 
								  echo "<span>".$fetch_service['name']."</span>";
								  ?>
								  </td>
                                   <td>
								  <?php 
								  $sel_level = "SELECT * FROM `lavel` WHERE id='$level_id'";
								  $sql_level = mysqli_query($con,$sel_level);
								  $fetch_level =$sql_level->fetch_array(MYSQLI_ASSOC); 
								  echo "<span>".$fetch_level['name']."</span>";
								  ?>
								  </td>
                                  <td>
								  <?php
                                     if($time_id==1)
									 {
								  echo "24hrs";
									 }
									 
									 else if ($time_id==2)
									 {
										 echo "48hrs";
									 }
									 
									 else if ($time_id==3)
									 {
										 echo "3 to 6 days";
									 }
									 
									 else 
									 {
										echo " 7+days";
									 }
								  
								  ?>
								  
								  </td>
                                  <td><?php echo $result['price'];?></td>
                                  <td><a href="#">Delete</a></td>
                                </tr>
					  <?php }}
					  else
					  {
					  ?>
                           <h4>Records not found</h4>
                            
					  <?php }?>
                          </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </section>
          <!-- Page Footer-->
		  
		  
     
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
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>