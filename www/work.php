<style>
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style>
.page-header {
    padding-bottom: 9px;
    margin: 18px 0 20px;
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
			<?php 
			if(isset($_GET['success']))
			{
				$success = $_GET['success'];
				echo "<h2 id='project-req-writers' style='color:green;'>".$success."</h2>";
			}
			else if(isset($_GET['error']))
			{
				$error = $_GET['error'];
				echo "<h2 id='project-req-writers' style='color:red;'>".$error."</h2>";
			}
			
			else
			{
				echo "<h2 id='project-req-writers'>Requests which best meet your project requirements.</h2>";
			}
			
			?>
			
			
            

            <div class="slideshow-container">

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
				<?php 
                $sel_pro = "SELECT * FROM `hire` WHERE emp_id='$emp_id' And staus=1";
	    $pro_sql = mysqli_query($conn,$sel_pro);
		$count = mysqli_num_rows($pro_sql);
	while($fetch_pro = $pro_sql->fetch_array(MYSQLI_ASSOC))
	{
		
			?>
           
				
				<div class="mySlides mySlides-gnome">
				
                    <div class="req-writers">
                        <div class="req-writers-side">
                            <p class="gnome-work-title">Biography: <?php echo $fetch_pro['topic'];?></p>
                            <p class="gnome-work-subject"><?php echo $fetch_pro['subjects'];?></p>
                            <p class="req-writers-price"><?php echo $fetch_pro['pages'];?> pages</p>
                            <p class="req-writers-name"><?php echo $fetch_pro['client_name'];?></p>
                            <a href="#" class="req-writers-profile">Learn more</a>
                        </div>
                        <div class="req-writers-buttons">
                            <a href="update_project.php?pro_id=<?php echo $fetch_pro['id'];?>& value=1"><button class="req-writers-chat">REJECT</button></a>
                           
 <button class="modalLink req-writers-accept"  data-toggle="modal" data-target="#product_view" data-id="<?php echo $fetch_pro["id"]; ?>">ACCEPT</button>
							
	<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
      <div class="modal-content">

        </div>  
    </div>
</div>
							
							
                        </div>
                    </div>
                  
                </div>
				
				
				 <h1 style="margin-top: 30px;" class="background-card__title">Review The Project</h1>
            <div id="review-order">
                <iframe src="images/documents/<?php echo $fetch_pro['file'];?>" style="width:600px; height:500px;" frameborder="0"></iframe>
				   
				   
                
                
            </div>
                
        </div>
				
				<script>
$('.modalLink').click(function(){
    var famID=$(this).attr('data-id');
   

    $.ajax({url:"model.php?famID="+famID,cache:false,success:function(result){
        $(".modal-content").html(result);
    }});
});
</script>
                
	<?php }?>
                
                
            </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
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