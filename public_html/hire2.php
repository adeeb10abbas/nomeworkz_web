<?php 
session_start();
include("include/db.php");

if(isset($_SESSION['email']))
{
	$email = $_SESSION['email'];
}
if(isset($_POST['send_order']))
{
 $gnoom_id = $_POST['gnome_id'];
 $client_id = $_POST['client_id'];
 $client_name = $_POST['client_name'];
 
 $type_service = $_POST['service_type'];
 
 $date = $_POST['deate'];
 $now = time(); // or your date as well
$your_date = strtotime($date);
$datediff =  $your_date-$now;

$deadline = round($datediff / (60 * 60 * 24));

if($deadline<=1)
{
	$time =1;
}

else if($deadline<=2)
{
	$time =2;
}

else if($deadline>=3 AND $deadline<=6)
{
	$time =3;
}

else 
{
	$time =4;
}


 

 
 $services = $_POST['service'];
 
 // service name 
 $sel_service = "SELECT * FROM `services` WHERE id='$services'";
 $service_sql = mysqli_query($conn,$sel_service); 
 $fetch_ser = $service_sql->fetch_array(MYSQLI_ASSOC);
 $service_name =$fetch_ser['name'];
 
 
 $level = $_POST['lavel'];
 
 $sel_level = "SELECT * FROM `lavel` WHERE id='$level'";
 $level_sql = mysqli_query($conn,$sel_level); 
 $fetch_level = $level_sql->fetch_array(MYSQLI_ASSOC);
 $level_name =$fetch_level['name'];
// find the price for per page 

$sel_price = "SELECT * FROM `discount` WHERE service_id	='$services' AND Lavel='$level' AND timeframe='$time'";
$sql_price = mysqli_query($conn,$sel_price);
$fetch_price =$sql_price->fetch_array(MYSQLI_ASSOC);
$price =$fetch_price['price']; 

//echo $price;
//exit();

 $subject = $_POST['subject'];
 $page = $_POST['page'];
 // calculate the cost according to pages 
 $total = $price * $page;
 
 
 $topic =$_POST['topic'];
 $gnoome_name = $_POST['gnome_name'];
 
  $instruction = $_POST['instraction'];
 $img = $_FILES['img']['name'];
	$tmp= $_FILES['img']['tmp_name'];
	$tmpp = explode('.',$img);
     $file_ext = end($tmpp);

  $uniquesavename = time().uniqid(rand());
   $image = "$uniquesavename.".$file_ext;
   
   move_uploaded_file($tmp,"images/documents/$image");
   
   
 

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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
<style>
#profile-details {
    margin-left: 15% !important;
    background-color: #888;
    display: inline-block;
    width: 65%;
    border-radius: 20px;
    padding: 30px 40px;
}

@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
</style>    

</head>


<body class="main-body-container ">
        
    <?php include("header.php");?>

    <section id="dashboard-overview">

  
       <div class="container">
    <h1 class="well">Review Order</h1>
	<div class="col-lg-12 well">
	<div class="row">
	
	   <!--REVIEW ORDER-->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">

                        </div>
                        <div class="panel-body">
						<form method="post" action="place_order.php">
						<input type="hidden" name="client_id" value="<?php echo $client_id;?>">
						<input type="hidden" name="gnome_id" value="<?php echo $gnoom_id;?>">
						<input type="hidden" name="client_name" value="<?php echo $client_name;?>">
						<input type="hidden" name="gnome_name" value="<?php echo $gnoome_name;?>">
						<input type="hidden" name="type_service" value="<?php echo $type_service;?>">
						<input type="hidden" name="date" value="<?php echo $date;?>">
						<input type="hidden" name="service_name" value="<?php echo $service_name;?>">
						<input type="hidden" name="level_name" value="<?php echo $level_name;?>">
						<input type="hidden" name="subject" value="<?php echo $subject;?>">
						<input type="hidden" name="page" value="<?php echo $page;?>">
						<input type="hidden" name="topic" value="<?php echo $topic;?>">
						<input type="hidden" name="instruction" value="<?php echo $instruction;?>">
						<input type="hidden" name="price" value="<?php echo $price;?>">
						<input type="hidden" name="total" value="<?php echo $total;?>">
						<input type="hidden" name="image" value="<?php echo $image;?>" >
						<div class="col-md-12">
                                    <strong>Services</strong>
									
                                    <div class="pull-right"><span><?php echo $service_name;?></span></div>
                                </div>
								<hr>
                                <div class="col-md-12">
								
                                    <strong>Pice (1page)</strong>
                                    <div class="pull-right"><span>$</span><span><?php echo $price;?></span></div>
                                <hr>
								</div>
								
                                <div class="col-md-12">
                                    <strong>pages</strong>
									
                                    <div class="pull-right"><span><?php echo $page;?></span></div>
                                <hr>
								</div>
								
                                <div class="col-md-12">
                                    <strong>Order Total</strong>
									
                                    <div class="pull-right"><span>$</span><span><?php echo $total;?></span></div>
                                  

								  <hr>
                                </div>
                                
                                <input type="submit" name="place_order" class="btn btn-danger btn-lg btn-block"  value="Confirm Order" style="background-color:#890000; border-color:#890000; ">
                                </form>
                        </div>
                        
                    </div>
                    <!--REVIEW ORDER END-->
			
    </div>
	</div>
	</div> 

        

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
    <script>
$(document).ready(function() {
///////
var startDate;
var endDate;
 $( "#date_picker1" ).datepicker({
dateFormat: 'dd-mm-yy'
})
///////
///////
 $( "#date_picker2" ).datepicker({
dateFormat: 'dd-mm-yy'
});
///////
$('#date_picker1').change(function() {
startDate = $(this).datepicker('getDate');
$("#date_picker2").datepicker("option", "minDate", startDate );
})

///////
$('#date_picker2').change(function() {
endDate = $(this).datepicker('getDate');
$("#date_picker1").datepicker("option", "maxDate", endDate );
////////////////
var t1=$('#date_picker1').val();
t1=t1.split('-');
dt_t1=new Date(t1[2],t1[1]-1,t1[0]); // YYYY,mm,dd format to create date object
dt_t1_tm=dt_t1.getTime(); // time in milliseconds for day 1
//alert(dt_t1_tm);
var t2=$('#date_picker2').val();
t2=t2.split('-');
dt_t2=new Date(t2[2],t2[1]-1,t2[0]); // YYYY,mm,dd format to create date object
dt_t2_tm=dt_t2.getTime(); // time in milliseconds for day 2
/////////////////
var one_day = 24*60*60*1000; // hours*minutes*seconds*milliseconds
var diff_days=Math.abs((dt_t2_tm-dt_t1_tm)/one_day) // difference in days
$("#result").html("Difference in Days " + diff_days + "");
$("#result").show();
})

////////////////
})
</script>
    <script type="text/x-jquery-tmpl" id="popupSet">
        {%tmpl(this.data) $('#_default_popup_data').template()%}
        data-popup-click=""
    </script>
    
    <script type="text/x-jquery-tmpl" id="popupSetAutoOpen">
        {%tmpl(this.data) $('#_default_popup_data').template()%}
        data-popup-autoopen=""
    </script>
    
    <script type="text/x-jquery-tmpl" id="_default_popup_data">
        data-popup-target="${popup}"
        data-popup-data='${JSON.stringify(this.data)}'
    </script>
    
    <script type="text/x-jquery-tmpl" id="_popup_tpl">
        <div class="modal uk-modal fade modal-allow-user js_popup_all" role="dialog" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content js_popup_content">
                    {%tmpl(popup_data) $(popup_id).template()%}
                </div>
            </div>
        </div>
    </script>
    
    <script>
        var notifyText = {
        mainText: 'We use cookies to give you the best experience possible. By continuing we’ll assume you board with our',
        linkText: 'cookie policy'
        };
        new Cookies.CookiesNotify("/privacy", notifyText);
    </script>                        
                                            
    <script src="js/asset_subdomain/1fd98f5.js"></script>
    <script src="js/asset_subdomain/ec9343b.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        new UserNotification.Core().init('user_security_pre_login');
        });
    </script>
    
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        
        fbq('init', '827340874076871');
        fbq('track', "PageView");
    </script>
    
    <noscript>            
        <img height="1" width="1" style="display:none" src="tr_id_827340874076871_ev_PageView_noscript_1.gif"/>
    </noscript>
     
    <script src="js/asset_subdomain/3dfbab1.js"></script>
    
    <script>
        $(function (){
            var eventPushScrollOptions = [{
                percent: 25,
                event: function(){
                    window._fbq.push(['trackCustom', 'PageScroll_25', {}]);
                }},
                {
                    percent: 50,
                    event: function(){
                        window._fbq.push(['trackCustom', 'PageScroll_50', {}]);
                    }
                },
                {
                    percent: 75,
                    event: function(){
                        window._fbq.push(['trackCustom', 'PageScroll_75', {}]);
                    }
                },
                {
                    percent: 95,
                    event: function(){
                        window._fbq.push(['trackCustom', 'PageScroll_95', {}]);
                    }
                },
            ];
            var eventPushDelayOptions = [{
                    second: 5,
                    event: function()
                    {
                        window._fbq.push(['trackCustom', 'ViewContent_5sec', {}]);
                    }
                },
                {
                    second: 15,
                    event: function()
                    {
                        window._fbq.push(['trackCustom', 'ViewContent_15sec', {}]);
                    }
                },
                {
                    second: 30,
                    event: function()
                    {
                        window._fbq.push(['trackCustom', 'ViewContent_30sec', {}]);
                    }
                },
            ];
            var eventPushScroll = new EventPush.Scroll(eventPushScrollOptions);
            var eventPushDelay = new EventPush.Delay(eventPushDelayOptions);
            eventPushScroll.init();
            eventPushDelay.init();
        });
    </script>
    
    <script src="js/asset_subdomain/d570ab4.js"></script>
    
    <script>
        $(document).ready(function () {
            setTimeout(function() {
                // setTimeout fixed lazy script initialization because it was started before slick script started
                var sliderConfigs = [
                    { sliderClass: 'js_slider__our_writers' },
                    { sliderClass: 'js_slider__our_writers_v3' },
                    { sliderClass: 'js_customers-slider' },
                    { sliderClass: 'js_customers-slider-v2' }
                ];
                new Lazy.Slider.Starter(sliderConfigs);
            },0);
        });
        var readMore = new readMore();
        readMore.init();
    </script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active-dot", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active-dot";
        }
        </script>

</body>
    </html>
	
	