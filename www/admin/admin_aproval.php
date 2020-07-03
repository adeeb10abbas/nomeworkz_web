<?php 
include("dbconfig/connect.php");
error_reporting(0);

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  
  <style>
  
  nav.side-navbar ul li a {
    font-size: 17px !important;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
    font-weight: 300;
    border-left: 4px solid transparent;
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
          
       

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Gnome profile Table</h3>
                    </div>

                   

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Client Name</th>
                              <th>Employee Name</th>
                              <th>Services</th>
                              
                              <th>Subject</th>
                              <th>Topic</th>
							   <th>Pages</th>
                              <th>Final Date</th>
                             <th>Charges</th>
							 <th>Approval</th>
                              <th>Action</th>
                            </tr>
 <?php
                      
                      
                      $query = "SELECT * FROM `complete_pro` ";
                      $data = mysqli_query($con, $query);
                      $total = mysqli_num_rows($data);
                      if ($total != 0) 
                      {
						   while($result =$data->fetch_array(MYSQLI_ASSOC)) 
                              {
								  $approval = $result['approval'];
								  $pro_id =$result['pro_id']; 
						
						$sel_pro = "SELECT * FROM `hire` WHERE id='$pro_id'";
						$pro_sql = mysqli_query($con,$sel_pro);
						while($fetch_pro =$pro_sql->fetch_array(MYSQLI_ASSOC))
						{
						
                    ?>
                             
                                <tr>
                                  <td><?php echo $fetch_pro['client_name'];?></td>
                                  <td><?php echo $fetch_pro['emp_name'];?></td>
                                  <td><?php echo $fetch_pro['services'];?></td>
								  
                                  <td><?php echo $fetch_pro['subjects'];?></td>
                                  
                                  <td><?php echo $fetch_pro['topic'];?></td>
								  <td><?php echo $fetch_pro['pages'];?></td>
								  
                                  <td><?php echo $fetch_pro['final_date'];?></td>
                                   <td><span class="glyphicon glyphicon-usd" style="font-size:14px;"></span> <?php echo $fetch_pro['price'];?></td>
								   
								   <td>
								   
								   <?php 
								   if($approval==0)
								   {
									   echo "<span style='background-image: linear-gradient(-100deg, rgba(255, 255, 255, 0), yellow 85%, rgba(255, 255, 255, 0)'>pending</span>";
								   }
								   
								   else{
									   echo "<span style='background-image: linear-gradient(-100deg, rgba(255, 255, 255, 0), yellow 85%, rgba(255, 255, 255, 0)'>Approved</span>";
								   }
								   
								   ?>
								   </td>
								   
								   
								   
								   
								   
                                  <td><a href="complet_order_detail.php?order_id=<?php echo $result['id'];?>" >Details</a></td>
                                </tr>
						<?php   }} 
                            }
                            else
                            {
                              echo "Records not found";
                            }
                          ?>
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
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Home Work &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Powered by <a href="https://bootstrapious.com/p/admin-template" class="external">Home work</a></p>
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
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>