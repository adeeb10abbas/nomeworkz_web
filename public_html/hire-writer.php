<?php 
include("include/db.php");
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


<body class="main-body-container ">
        
    <?php include("header.php");?>

    <section id="dashboard-overview">

  
        <div id="account-overview">
            <img class="account-picture" width="50" src="files/user.png">
            <h1 class="account-username">Username</h1>
            <div id="account-tasks">
                <div class="number-task">
                    <h1>0</h1>
                    <p>In Progress</p>
                </div>
                <div class="number-task">
                    <h1>0</h1>
                    <p>Completed</p>
                </div>
                <div class="number-task">
                    <h1>0</h1>
                    <p>Cancelled</p>
                </div>
            </div>
            <div class="account-links">
                <a id="hire-writer-a" href="dashboard.html">
                    <button>My account</button>
                </a>
                <br>
                <a id="account-orders-a" href="account-orders.php">
                    <button>My orders</button>
                </a>
            </div>
        </div>

        <div id="profile-details" class="hire-writer-form">
            <h1 class="background-card__title">Place Order</h1>
            <form id="left-first-form">
                <label>
                    Type of Service<br>
                    <input type="radio" name="service" value="writing" checked>Writing
                    <input type="radio" name="service" value="editing">Editing
                </label>
                <br>
                <label>
                    Deadline<br>
                    <input type="date" name="final-date">
                    <input type="time" name="final-time">
                </label>
                <br>
                <label>
                    Number of pages<br>
                    <input type="number" name="page-number">
                </label>
                <br>
                <label>
                    Select your subject <br>
                    <select style="margin-bottom: 15px;" id="order_product_subject" name="order[product][subject]" data-atest="atest_order_create_form_subject" js_default_value="88" js_field_code="foc_o_subject" class="b-form-group__select js_without_styler"><option value="35">English</option><option value="92">Business and Entrepreneurship</option><option value="63">Nursing</option><option value="37">History</option><option disabled="disabled">-------------------</option><option value="38">African-American Studies</option><option value="20">Accounting</option><option value="69">Anthropology</option><option value="2">Architecture</option><option value="90">Art, Theatre and Film</option><option value="10">Biology</option><option value="92">Business and Entrepreneurship</option><option value="12">Chemistry</option><option value="15">Communication Strategies</option><option value="83">Computer Science</option><option value="48">Criminology</option><option value="19">Economics</option><option value="29">Education</option><option value="35">English</option><option value="34">Engineering</option><option value="71">Environmental Issues</option><option value="36">Ethics</option><option value="24">Finance</option><option value="72">Geography</option><option value="62">Healthcare</option><option value="37">History</option><option value="91">International and Public Relations</option><option value="93">Law and Legal Issues</option><option value="50">Linguistics</option><option value="51">Literature</option><option value="57">Management</option><option value="58">Marketing</option><option value="59">Mathematics</option><option value="7">Music</option><option value="63">Nursing</option><option value="64">Nutrition</option><option value="88" selected="selected">Other</option><option value="74">Philosophy</option><option value="75">Physics</option><option value="76">Political Science</option><option value="77">Psychology</option><option value="78">Religion and Theology</option><option value="79">Sociology</option><option value="66">Sport</option><option value="80">Technology</option><option value="87">Tourism</option></select>
                </label>
                <br>
                <label>
                    What is your topic?<br>
                    <input type="text" name="topic">
                </label>
                <br>
            </form>
            <form id="right-first-form">
                <label>
                    Paper instructions<br>
                    <textarea id="paper-instructions" name="instructions" placeholder="Any special requirements? Give us the main idea of the paper and other details (e.g. citation formatting)"></textarea>
                </label>
                <br>
                <div id="drop-files">
                    Drop files here
                </div>
            </form>
            <form style="margin-top: 20px;">
                <label>
                    Let us pick the best writer for your order for additional payment $6.99
                    <input type="checkbox" name="pick-writer" value="yes" checked>
                </label>
            </form>
            <h1 style="margin-top: 20px;" class="background-card__title">Choose your Writer</h1>
            <p style="color: #333;">Find the best writer for your form below.</p>
            <br>
            <h2 id="project-req-writers">Writers who best meet your project requirements.</h2>


<div class="slideshow-container">

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="mySlides">
      <div class="req-writers">
        <img class="req-writers-img" src="files/prof1.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Linda Mahoney</p>
            <p class="req-writers-num">289 finished papers</p>
            <p class="req-writers-price">$33</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    <div class="req-writers">
        <img class="req-writers-img" src="files/prof2.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Austin Williams</p>
            <p class="req-writers-num">322 finished papers</p>
            <p class="req-writers-price">$35</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    <div class="req-writers">
        <img class="req-writers-img" src="files/prof3.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Edward Smith</p>                   
            <p class="req-writers-num">297 finished papers</p>
            <p class="req-writers-price">$37</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    </div>
    
    <div class="mySlides">
      <div class="req-writers">
        <img class="req-writers-img" src="files/prof4.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Lindsay Jeffries</p>
            <p class="req-writers-num">301 finished papers</p>
            <p class="req-writers-price">$23</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    <div class="req-writers">
        <img class="req-writers-img" src="files/prof5.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Sarah Landau</p>
            <p class="req-writers-num">387 finished papers</p>
            <p class="req-writers-price">$46</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    <div class="req-writers">
        <img class="req-writers-img" src="files/prof6.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Josh Williams</p>                   
            <p class="req-writers-num">346 finished papers</p>
            <p class="req-writers-price">$41</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    </div>
    
    <div class="mySlides">
      <div class="req-writers">
        <img class="req-writers-img" src="files/prof7.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Bryan Driver</p>
            <p class="req-writers-num">315 finished papers</p>
            <p class="req-writers-price">$43</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    <div class="req-writers">
        <img class="req-writers-img" src="files/prof8.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Sophia Rodriguez</p>
            <p class="req-writers-num">289 finished papers</p>
            <p class="req-writers-price">$35</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    <div class="req-writers">
        <img class="req-writers-img" src="files/prof9.jpg">
        <div class="req-writers-side">
            <p class="req-writers-name">Owen Whittle</p>                   
            <p class="req-writers-num">324 finished papers</p>
            <p class="req-writers-price">$33</p>
            <a href="#" class="req-writers-profile">View profile</a>
        </div>
        <div class="req-writers-buttons">
            <button class="req-writers-chat">CHAT</button>
            <button class="req-writers-accept">ACCEPT</button>
        </div>
    </div>
    </div>    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

            <h1 style="margin-top: 30px;" class="background-card__title">Review your Order</h1>
            <div id="review-order">
                <p class="review-order-p">Topic:</p>
                <p class="review-order-row">Subject:</p>
                <p class="review-order-row">Pages:</p>
                <p class="review-order-row">Deadline:</p>
                <img style="width: 10%;margin-top: 30px" class="req-writers-img" src="files/prof3.jpg">
                <div class="req-writers-side" style="margin-top: 30px;">
                    <p class="req-writers-name">Edward Smith</p>                   
                    <p class="req-writers-num">297 finished papers</p>
                    <p class="req-writers-price">$37</p>
                    <a href="#" class="req-writers-profile">View profile</a>
                </div>
                <div class="additional-services">
                    <p style="margin-bottom: 10px;" class="add-ser-title"><b>Additional Services</b></p>
                    <label class="add-ser-label">
                        Progressive Delivery - $7.99
                        <input type="checkbox" name="progressive-delivery" value="progressive-delivery">
                    </label>
                    <label style="margin-left:20px;" class="add-ser-label label-right">
                        Essay Outline - $9.99
                        <input type="checkbox" name="outline" value="outline">
                    </label>
                    <br>
                    <label class="add-ser-label">
                        VIP Support - $9.99
                        <input type="checkbox" name="vip" value="vip">
                    </label>
                    <label style="margin-left:20px;" class="add-ser-label label-right">
                        One page abstract - $21.99
                        <input type="checkbox" name="abstract" value="abstract">
                    </label>
                </div>
                <p class="add-ser-title"><b>Order Summary</b></p>
                <div class="ord-sum-left">
                    <p class="ord-sum-p">Total price:</p>
                    <p class="ord-sum-p">Bonus balance:</p>
                    <p class="ord-sum-p">Add funds to balance:</p>
                </div>
                <div class="ord-sum-right">
                    <a href="billing-information.html"><button class="ord-sum-checkout">PROCEED TO CHECKOUT</button></a>
                    <p class="small-p">By proceeding to checkout you accept our Terms and Conditions</p>
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