<?php 
include("dbconfig/connect.php");
error_reporting(0);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nomework</title>
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
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	form_main {
    width: 100%;
}

 select {
    text-transform: none;
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
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
          
          <!-- Breadcrumb-->
        

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">
					  <?php 
					  if(isset($_GET['sucess']))
					  {
						  $sucess = $_GET['sucess'];
						  
						  echo "<span style='color:green;'>".$sucess."</span>";
					  }
						 
                      else if($_GET['error']) 
					  {
						$error = $_GET['error'];
                         echo "<span style='color:red;'>".$error."</span>";						
					  }
                    else{
						echo "Please Fill All The Fields";
					}					  
					  
					  ?>
					  
					  </h3>
                    </div>

                   

                    <div class="card-body">
                      	<div class="form_main">
                
                <div class="form">
                <form action="action.php" method="post" id="contactFrm" name="contactFrm">
				
				<select class="txt" name="services" required>
				<option>Select Service</option>
				<?php 
				$sel_services = "SELECT * FROM `services`";
				$service_sql = mysqli_query($con,$sel_services);
				while($service =$service_sql->fetch_array(MYSQLI_ASSOC))
				{	
				?>
				<option value="<?php echo $service['id'];?>"><?php echo $service['name'];?></option>
				<?php }?>
				</select>
				
				<select class="txt" name="level" required>
				<option>Select Level</option>
				<?php 
				$sel_level = "SELECT * FROM `lavel`";
				$level_sql = mysqli_query($con,$sel_level);
				while($level =$level_sql->fetch_array(MYSQLI_ASSOC))
				{	
				?>
				<option value="<?php echo $level['id'];?>"><?php echo $level['name'];?></option>
				<?php }?>
				</select>
				
				<select class="txt" name="timeframe" required>
				<option>Select Timeframe</option>
				<option value="1">24hrs</option>
				<option value="2">48hrs</option>
				<option value="3">3 to 6 Days</option>
				<option value="4">7+days</option>
				</select>
                    
                    <input type="text" placeholder="Enter Price" name="price" class="txt" required>
                    
                	 <input type="submit" value="submit" name="add_price" class="txt2">
                </form>
            </div>
            </div>
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