<?php 
include("dbconfig/connect.php");
error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}
?>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="https://cdn2.iconfinder.com/data/icons/random-outline-3/48/random_14-512.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Admin</h1>
              <p>Dashwork</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="user_registration.php"> <i class="icon-grid"></i>User registration </a></li>
            <li><a href="gnome_registration.php"> <i class="fa fa-bar-chart"></i>Nome Registration </a></li>
            <li><a href="gnome_profile.php"> <i class="icon-padnote"></i>Nome Profile </a></li>
			
          </ul>
		  
		   <h3>Price<h3>
		     <ul class="list-unstyled">
            <li><a href="add_services.php"><i class="fa fa-500px"></i>Add Services</a></li>
            <li><a href="add_price.php"> <i class="icon-grid"></i>Add Price</a></li>
            <li><a href="all_prices.php"> <i class="fa fa-bar-chart"></i>All Prices</a></li>
			
			
          </ul>
		  
		  
		  <h3>Orders<h3>
		     <ul class="list-unstyled">
            <li><a href="order.php"><i class="fa fa-500px"></i>New Orders </a></li>
            <li><a href="price_assigned.php"> <i class="icon-grid"></i>Pending Approval</a></li>
            <li><a href="pending_order.php"> <i class="fa fa-bar-chart"></i>Pending Order</a></li>
			<li><a href="admin_aproval.php"> <i class="fa fa-bar-chart"></i>Admin Approval</a></li>
            <li><a href="gnome_profile.php"> <i class="icon-padnote"></i>Complete Order</a></li>
			
          </ul>
        </nav>