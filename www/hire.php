<?php 
session_start();
include("include/db.php");
if(!isset($_SESSION['email']))
{
echo '<script language="javascript">';
echo 'alert("To Hire Some One Or Request, You Need To Login Your Account First.");';
echo 'window.location.href="index.php";';
echo '</script>';
}
else
{
	$email = $_SESSION['email'];
	$gnoome_id = $_GET['gnome_id'];
	
	
	$select_client = "SELECT * FROM `user` WHERE email='$email'";
	$client_sql = mysqli_query($conn,$select_client);
	$client_fetch =$client_sql->fetch_array(MYSQLI_ASSOC); 
	$client_id = $client_fetch['id'];
	$client_name =$client_fetch['name']; 
	
	
	
	
	
	
    $sel_gnome ="SELECT * FROM `user` WHERE id='$gnoome_id'"; 
	$gnome_sql = mysqli_query($conn,$sel_gnome);
	$fetch_gnome = $gnome_sql->fetch_array(MYSQLI_ASSOC);
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
    <h1 class="well">Place Order</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="hire2.php" method="post" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Type of Service</label><br>
								<input type="radio" name="service_type"   value="writing" checked>Writing
                               <input type="radio" name="service_type"  value="editing">Editing
							</div>
							
							<div class="col-sm-6 form-group">
								<label>Deadline</label><br>
								<input type="date" name="deate" placeholder="" class="form-control">
								
							</div>
							
							
						</div>					
						
						<div class="row">
						<div class="col-sm-4 form-group">
								
								<label>Select Services</label><br>
								<select class="form-control" name="service">
								<option>--Select Services--</option>
								
								<?php
							$sel_services = "SELECT * FROM `services`";
                            $service_sql = mysqli_query($conn,$sel_services);
                            while($fetch_service =$service_sql->fetch_array(MYSQLI_ASSOC))	
							{								
								
								?>
								<option value="<?php echo $fetch_service['id'];?>"><?php echo $fetch_service['name'];?></option>
								
							<?php } ?>
								</select>
								
							
							</div>	
							<div class="col-sm-4 form-group">
							<label>Select Level</label><br>
								<select class="form-control" name="lavel">
								<option value="1">High School</option>
								<?php 
								$sel_level = "SELECT * FROM `lavel`";
								$SQL_lavel = mysqli_query($conn,$sel_level);
								while($lavel =$SQL_lavel->fetch_array(MYSQLI_ASSOC))
								{
								?>
									<option value="<?php echo $lavel['id'];?>"><?php echo $lavel['name'];?></option>
								<?php }?>	
								
								</select>
							</div>	
							
							<div class="col-sm-4 form-group">
								<label>Select Subject</label>
								<select class="form-control" name="subject">
					<option value="English">English</option>
					<option value="Business and Entrepreneurship">Business and Entrepreneurship</option>
					<option value="Nursing">Nursing</option>
					<option value="History">History</option>
					<option disabled="disabled">-------------------</option>
					<option value="African-American Studies">African-American Studies</option>
					<option value="Accounting">Accounting</option>
					<option value="Anthropology">Anthropology</option>
					<option value="Architecture">Architecture</option>
					<option value="Art, Theatre and Film">Art, Theatre and Film</option>
					<option value="Biology">Biology</option>
					<option value="Business and Entrepreneurship">Business and Entrepreneurship</option>
					<option value="Chemistry">Chemistry</option>
					<option value="Communication Strategies">Communication Strategies</option>
					<option value="Computer Science">Computer Science</option>
					<option value="Criminology">Criminology</option>
					<option value="Economics">Economics</option>
					<option value="Education">Education</option>
					<option value="English">English</option>
					<option value="Engineering">Engineering</option>
					<option value="Environmental Issues">Environmental Issues</option>
					<option value="Ethics">Ethics</option>
					<option value="Finance">Finance</option>
					<option value="Geography">Geography</option>
					<option value="Healthcare">Healthcare</option>
					<option value="History">History</option>
					<option value="International and Public Relations">International and Public Relations</option>
					<option value="Law and Legal Issues">Law and Legal Issues</option>
					<option value="Linguistics">Linguistics</option>
					<option value="Literature">Literature</option>
					<option value="Management">Management</option>
					<option value="Marketing">Marketing</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Music">Music</option>
					<option value="Nursing">Nursing</option>
					<option value="Nutrition">Nutrition</option>
					<option value="Other" selected="selected">Other</option>
					<option value="Philosophy">Philosophy</option>
					<option value="Physics">Physics</option>
					<option value="Political Science">Political Science</option>
					<option value="Psychology">Psychology</option>
					<option value="Religion and Theology">Religion and Theology</option>
					<option value="Sociology">Sociology</option>
					<option value="Sport">Sport</option>
					<option value="Technology">Technology</option>
					<option value="Tourism">Tourism</option>
					</select>
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Number Of Page</label>
								<input type="int" name="page" placeholder="Homw Many Pages Will Be There ?" class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Topic</label>
								<input type="text" name="topic" placeholder="What is your topic?" class="form-control">
							</div>	
							
							
						</div>						
					<div class="form-group">
						<label>Gnoome Name</label>
						<input type="text" name="gnome_name" value="<?php echo $fetch_gnome['name'];?>" placeholder="Enter Phone Number Here.." class="form-control">
					<input type="hidden" name="gnome_id" value="<?php echo $fetch_gnome['id'];?>">
                    <input type="hidden" name="client_id" value="<?php echo $client_id;?>">
					
<input type="hidden" name="client_name" value="<?php echo $client_name;?>">
                        </div>		
					
					<div class="form-group">
						<label>Drop files here</label>
						<input type="file" name="img" placeholder="" class="form-control">
					</div>

                <div class="form-group">
						<label>Paper instruction</label><br>
						<textarea rows="5" cols="80" name="instraction" placeholder="Any special requirements? Give us the main idea of the paper and other details (e.g. citation formatting)"></textarea>
				</div>	

               
					<input type="submit" name="send_order" value="Submit" class="btn btn-lg btn-info" style="background-color: darkred;border-color: #8b0000;">					
					</div>
				</form> 
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