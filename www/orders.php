

<style>

body {

  
  overflow-x: hidden;
}
.modal-backdrop.in{
	border-radius: 11px;
    height: 50px;
    left: 0;
    margin-top: -100px;
    padding-top: 15px;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 50%;
    width: 100%;
    z-index: 0;
}

.testimonial{
    margin: 10px 20px 40px;
    text-align: center;
}
.testimonial .testimonial-content{
    padding: 30px 0 0;
    margin-bottom: 3px;
    border-top: 2px solid #2e3a59;
    border-bottom: 2px solid #2e3a59;
    position: relative;
}
.testimonial .testimonial-content:before{
    content: "";
    border-top: 60px solid #2e3a59;
    border-right: 60px solid transparent;
    border-bottom: 60px solid transparent;
    position: absolute;
    top: 0;
    left: 0;
}
.testimonial .testimonial-content:after{
    content: "";
    border-bottom: 60px solid #2e3a59;
    border-top: 60px solid transparent;
    border-left: 60px solid transparent;
    position: absolute;
    bottom: 0;
    right: 0;
}
.testimonial .pic{
    display: inline-block;
    width: 100px;
    height: 100px;
    
    margin-bottom: 20px;
}
.testimonial .pic img{
    width: 100%;
    height: auto;
}
</style>

<?php 
session_start();
include("include/db.php");
if(isset($_SESSION['email']))
{
	$email = $_SESSION['email'];
	$sel_emp = "SELECT * FROM `user` WHERE email='$email'";
	$emp_sql = mysqli_query($conn,$sel_emp);
	$fetch_emp = $emp_sql->fetch_array(MYSQLI_ASSOC);
	$emp_id = $fetch_emp['id'];
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="manifest" href="manifest.js">

    <link rel="icon" type="image/png" href="files/favicon.png">

    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="theme-color" content="#ffffff"/>

    <title>Case Study Help | Online Writing Service - Best Writers - NomeWorkz.com</title>
    <meta name="description" content="Get an expert case study writing help from real professionals ✅ NomeWorkz case study writing service offers fast and affordable assistance from experienced writers. ★" />
    <meta property="og:url" content="https://nomeworkz.com/hire-writer" />
    <meta property="og:title" content="Case Study Help | Online Writing Service - Best Writers" />
    <meta property="og:description" content="Get an expert case study writing help from real professionals ✅ NomeWorkz case study writing service offers fast and affordable assistance from experienced writers. ★" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="files/logo.png" />
    <meta property="og:image:width" content="968" />
    <meta property="og:image:height" content="504" />
    <meta property="og:image:type" content="image/png" />
                            
    <script src="js/asset_subdomain/76332f5.js"></script>
    <script src="js/asset_subdomain/2e72241.js"></script>
    <link rel="stylesheet" href="css/asset_subdomain/735de05.css" type="text/css">


<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">     </head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style>
.page-header {
    padding-bottom: 9px;
    margin: 1px 0 20px;
    border-bottom: 1px solid #111;
}

</style>
<body class="main-body-container ">
        
   <?php include("header.php");?>

    <section id="dashboard-overview">

  
       <?php include("gnome_header.php")?>

        <div id="profile-details" class="hire-writer-form">          
            <h1 style="margin-top: 20px;" class="background-card__title">Find work</h1>
            <p style="color: #333;">Find the best assignment for your expertise.</p>
            <br>
			
			<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div id="testimonial-slider" class="owl-carousel">
			
			<?php 
			$sel = "SELECT * FROM `hire` WHERE emp_id='$emp_id' AND staus=2";
			$sql = mysqli_query($conn,$sel);
			while($fetch =$sql->fetch_array(MYSQLI_ASSOC))
			{
			
			
			?>
			
			 <div class="testimonial">
                    <div class="testimonial-content">
                        <div class="pic">
  
  <a class="orders-file" href="images/document/<?php echo $fetch['file'];?>" target="_blank" download><img src="https://image.shutterstock.com/image-vector/download-vector-icon-install-symbol-260nw-584449294.jpg" ></a>
						
                        </div>
                        <p class="description pull-left" style="padding-top:2%;">
						
                
				<a href="#" style="color:black; border:1px solid grey" >Work-  <?php echo $fetch['pick_writer']?></a><br>
				<a href="#" style="color:black; border:1px solid grey" >Subject-  <?php echo $fetch['subjects']?></a><br>
				<a href="#" style="color:black; border:1px solid grey" >Services-  <?php echo $fetch['services']?></a><br>
				<a href="#" style="color:black; border:1px solid grey" >Lavel-  <?php echo $fetch['lavel']?></a><br>
				<a href="#" style="color:black; border:1px solid grey" >Topic-  <?php echo $fetch['topic']?></a><br>
                        </p>
						
						
						<p class="description pull-right" style="padding-top:2%;">
						<a href="#" style="color:black; border:1px solid grey" >Deadline-  <?php echo $fetch['final_date']?></a><br>
                <a href="#" style="color:black; border:1px solid grey" >Client- <?php echo $fetch['client_name']?></a><br>
				<a href="#" style="color:black; border:1px solid grey" >Amount- $ <?php echo $fetch['final_price']?></a><br>
				<a href="#" style="color:black; border:1px solid grey" >page-  <?php echo $fetch['pages']?></a><br>
                        </p>
                    </div>
                    <div class="content" style="margin-top:5%;">
                       
                        <span class="post"><?php echo $fetch['instruction']?></span>
						<br>
						<br>
						<a href="work_submit.php?order_id=<?php echo $fetch['id']?>" class="btn btn-lg ord-sum-checkout">Submit Project</a>
                    </div>
                </div>
				
			<?php }?>
				
            </div>
        </div>
    </div>
</div>
			
            

           
				

                

                
                
            </div>
    <br>
    


                

    </section>

    

    <div class= "footer-wrapper  js_footer-wrapper">
        <footer class="footer">
            <div class="row">
                <div class="footer__wrap">
                    <div class="footer__col footer__col_about">
                        <div class="footer__section">
                            <h4 class="footer__title">ABOUT US:</h4>
                            <ul class="footer__section-content footer__text">
                                <li class="footer__section-item d-none-mobile">
                                    <a href="index.html"  >How it works?</a>
                                </li> 
                                <li class="footer__section-item d-none-mobile">
                                    <a href="index.html"  >Contact Support</a>
                                </li> 
                                <li class="footer__section-item">
                                    <a href="index.html"  >Blog</a>
                                </li>
                                <li class="footer__section-item">
                                    <a href="index.html"  >Write for NomeWorkz</a>
                                </li>
                                <li class="footer__section-item">
                                    <a href="index.html"  >Money Back Guarantee</a>
                                </li>
                                <li class="footer__section-item">
                                    <a href="index.html"  >Referral Program</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                     
                    <div class="footer__col footer__col_mb_20 footer__col_contact">
                    <div class="footer__section footer__section_fb_85">
                        <h4 style="text-align: right;" class="footer__title">Contact us:</h4>
                        <ul style="text-align:right;" class="footer__section-content footer__text">
                            <li class="footer__section-item footer__section-item_contact footer__section-item_message">
                                <a href="mailto:support@nomeworkz.com">support@nomeworkz.com</a>
                            </li>
                            <li class="footer__section-item footer__section-item_contact footer__section-item_phone">
                                <a href="tel:+18888888888">+1 (888) 888 8888</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__section footer__section_fb_85 footer__section_mob-hidden">
                        <h4 style="text-align: right;" class="footer__title">Follow us:</h4>
                        <ul style="float: right;" class="footer__section-content footer__section-content_socials">
                            <li class="footer__social-item">
                                <a href="#" target="_blank">
                                    <img src="files/facebook.png">
                                </a>
                            </li>
                            <li class="footer__social-item">
                                <a href="#" target="_blank">
                                    <img src="files/twitter.png">
                                </a>
                            </li>
                            <li class="footer__social-item">
                                <a href="#" target="_blank">
                                    <img src="files/linkedin.png">
                                </a>
                            </li>
                            <li class="footer__social-item">
                                <a href="#" target="_blank">
                                    <img src="files/instagram.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                     
                    
                    
                </div>
            </div>
            <div class="footer__bottom footer__bottom_timely">
                <div class="row">
                    <div class="footer__bottom-wrap">
                        <p class="footer__rights footer__text">
                            <span>2020 © nomeworkz.com. All rights reserved</span>
                        </p>
                          
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <link rel="stylesheet" href="css/asset_subdomain/60865ce.css" type="text/css" media="none" onload="if(media!='all')media='all'"/>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/asset_subdomain/ec8cf34.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script>
	$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        transitionStyle:"backSlide",
        autoPlay:true
    });
});
	</script>
	
    
    

</body>
    </html>