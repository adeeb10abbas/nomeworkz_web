<?php 
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemNumber = "PN12345"; 
$itemPrice = 25; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'Your_API_Secret_key'); 
define('STRIPE_PUBLISHABLE_KEY', 'Your_API_Publishable_key'); 
  
// Database configuration  
define('DB_HOST', 'MySQL_Database_Host'); 
define('DB_USERNAME', 'MySQL_Database_Username'); 
define('DB_PASSWORD', 'MySQL_Database_Password'); 
define('DB_NAME', 'MySQL_Database_Name');