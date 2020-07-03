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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <style>
  form_main {
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
.txt[type="text"],select {
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
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container">
	<div class="row">
    <div class="col-md-6">
		<div class="form_main">
                <h4 class="heading">
				<?php 
				if(isset($_GET['success']))
				{
					$seccess = $_GET['success'];
					echo "<strong style='color:green;'>".$seccess."</strong>";
				}
				
				else if(isset($_GET['error']))
				{
					$error = $_GET['error'];
					echo "<strong style='color:red;'>".$error."</strong>";
				}
				
				else{
					echo "<strong>Add </strong> Price <span></span>";
				}
				
				?>
				
				
				
				</h4>
                <div class="form">
                <form action="action.php" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Enter Service Name" value="" name="name" class="txt">
                   <select name="lavel" class="txt">
				   <option readonly><--Select The Level--></option>
				   <option value="1">High School</option>
				   <option value="2">Undergraduate</option>
				   <option value="3">Graduate</option>
				   <option value="4">PHD</option>
				   </select>
                    <input type="text" required="" placeholder="Price For 24hrs"  name="price1" class="txt">
                    <input type="text" required="" placeholder="Price For 48hrs"  name="price2" class="txt">
                	 <input type="text" required="" placeholder="price for 3 to 6 days"  name="price3" class="txt">
                     <input type="text" required="" placeholder="Price For 7+Days"  name="price4" class="txt">
					 <input type="submit" value="submit" name="add_price" class="txt2">
                </form>
            </div>
            </div>
            </div>
			
			
			
			<!--add lavel -->
			
	</div>
	
	
</div>
          </section>
          <!-- Dashboard Header Section    -->
                                                        
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
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>