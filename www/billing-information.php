<?php 
session_start();
include("include/db.php");
 if(!isset($_SESSION['email']))
 {
	 	  echo "<script>alert('To Buy The Subscription, You Need To Login First!')</script>";
	   echo "<script>window.open('index.php','_self')</script>";
		

 }
 
 else{
	 $email = $_SESSION['email'];
$sel_user = "SELECT * FROM `user` WHERE email='$email'";
$user_sql = mysqli_query($conn,$sel_user);
$fetch_user =$user_sql->fetch_array(MYSQLI_ASSOC); 
$role =$fetch_user['role']; 
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

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />

    <title>Case Study Help | Online Writing Service - Best Writers - NomeWorkz.com</title>
    <meta name="description" content="Get an expert case study writing help from real professionals ✅ NomeWorkz case study writing service offers fast and affordable assistance from experienced writers. ★" />
    <meta property="og:url" content="https://nomeworkz.com/billing-information" />
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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> </head>

<script src="https://js.stripe.com/v2/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--payment Gateway-->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="payment.js"></script>

<!------ Include the above in your HEAD tag ---------->

      <style>
	  .page-header.sticky:not(.header_in) {
    -webkit-animation: fadeInDown .6s;
    animation: fadeInDown .6s;
    background-color: white;
    margin-top: 0px !important;
}
		.formBox{
	margin-top: 90px;
	padding:21px;
}
.formBox  h1{
	margin: 0;
	padding: 0;
	text-align: center;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-size: 48px;
}
.inputBox{
	position: relative;
	box-sizing: border-box;
	margin-bottom: 18px;
}
.inputBox .inputText{
	position: absolute;
    font-size: 24px;
    line-height: 50px;
    transition: .5s;
    opacity: .5;
}
.inputBox .input{
	position: relative;
	width: 100%;
	height: 26px;
	background: white;
	font-size: 13px;
    border-bottom: 1px solid rgba(0,0,0,.5);

}
.focus .inputText{
	transform: translateY(-30px);
	font-size: 18px;
	opacity: 1;
	color: #00bcd4;

}
textarea{
	height: 100px !important;
}
.button{
	width: 100%;
    height: 50px;
    border: none;
    outline: none;
    background: #03A9F4;
    color: #fff;
}
	
.page-header {
    padding-bottom: 0px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #111;
}

#dashboard-overview {
    padding: 170px 50px;
    background-color: #111;
}
	
</style>

<body class="main-body-container ">

  <?php include("header.php");?>

    <section id="dashboard-overview">

       <?php include("header3.php");?>

        <div id="profile-details" class="hire-writer-form">
            <h1 class="background-card__title">Billing Information</h1>
      
           	<div class="formBox">
				<form action="process.php" method="POST" >
					<div class="row">
							<div class="col-sm-4">
								<div class="inputBox ">
									<label>First and Last name</label>
									<input type="text" name="custName"  class="input">
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="inputBox">
									<label>Email</label>
									<input type="text" name="custEmail" class="input">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="inputBox">
									<label>Phone Number</label>
									<input type="text" name="" class="input">
								</div>
							</div>
							
					</div>

						<div class="row">
							

							<div class="col-sm-12">
								<div class="inputBox">
									<label>Address</label>
									<input type="text" name="" class="input">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="inputBox">
									<label>City</label>
									<input type="text" name="" class="input">
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="inputBox">
									<label>State</label>
									<input type="text" name="" class="input">
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="inputBox">
									<label> Zip code</label>
									<input type="text" name="" class="input">
								</div>
							</div>
							
							
						</div>

						<div class="col-sm-12">
								<div class="inputBox">
									<label>Country</label>
									<select class="input">
									<option data-code2="af">please select your country</option>
									 <option value="2">Afghanistan</option>
                            <option value="3" >Aland Islands (Finland)</option>
                            <option value="4" >Albania</option>
                            <option value="5" >Algeria</option>
                            <option value="6" >American Samoa (USA)</option>
                            <option value="7" >Andorra</option>
                            <option value="8" >Angola</option>
                            <option value="9" >Anguilla (UK)</option>
                            <option value="10" >Antigua and Barbuda</option>
                            <option value="11" >Argentina</option>
                            <option value="12" >Armenia</option>
                            <option value="13" >Aruba</option>
                            <option value="14" >Australia</option>
                            <option value="15" >Austria</option>
                            <option value="16" >Azerbaijan</option>
                            <option value="17">Bahamas</option>
                            <option value="18" >Bahrain</option>
                            <option value="19" >Bangladesh</option>
                            <option value="20" >Barbados</option>
                            <option value="21" >Belarus</option>
                            <option value="22" >Belgium</option>
                            <option value="23" >Belize</option>
                            <option value="24" >Benin</option>
                            <option value="25" >Bermuda (UK)</option>
                            <option value="26" >Bhutan</option>
                            <option value="27" >Bolivia</option>
                            <option value="41" >Bonaire (Netherlands)</option>
                            <option value="28" >Bosnia and Herzegovina</option>
                            <option value="29" >Botswana</option>
                            <option value="30" >Brazil</option>
                            <option value="31" >British Virgin Islands (UK)</option>
                            <option value="32" >Brunei</option>
                            <option value="33" >Bulgaria</option>
                            <option value="34" >Burkina Faso</option>
                            <option value="36" >Burundi</option>
                            <option value="40" >Cabo Verde</option>
                            <option value="37" >Cambodia</option>
                            <option value="38" >Cameroon</option>
                            <option value="39" >Canada</option>
                            <option value="42" >Cayman Islands (UK)</option>
                            <option value="43" >Central African Republic</option>
                            <option value="44" >Chad</option>
                            <option value="45" >Chile</option>
                            <option value="46" >China</option>
                            <option value="47" >Christmas Island (Australia)</option>
                            <option value="48" >Cocos (Keeling) Islands (Australia)</option>
                            <option value="49" >Colombia</option>
                            <option value="50" >Comoros</option>
                            <option value="51" >Cook Islands</option>
                            <option value="52" >Costa Rica</option>
                            <option value="53" >Croatia</option>
                            <option value="54" >Cuba</option>
                            <option value="55" >Curacao</option>
                            <option value="56" >Cyprus</option>
                            <option value="57" >Czech Republic</option>
                            <option value="58" >Democratic Republic of the Congo</option>
                            <option value="59" >Denmark</option>
                            <option value="60" >Djibouti</option>
                            <option value="61" >Dominica</option>
                            <option value="62" >Dominican Republic</option>
                            <option value="220" >East Timor</option>
                            <option value="63" >Ecuador</option>
                            <option value="64" >Egypt</option>
                            <option value="65" >El Salvador</option>
                            <option value="66" >Equatorial Guinea</option>
                            <option value="67" >Eritrea</option>
                            <option value="68" >Estonia</option>
                            <option value="69" >Ethiopia</option>
                            <option value="70" >Falkland Islands (UK)</option>
                            <option value="71" >Faroe Islands</option>
                            <option value="73" >Fiji</option>
                            <option value="74" >Finland</option>
                            <option value="75" >France</option>
                            <option value="76" >French Guiana (France)</option>
                            <option value="77" >French Polynesia (France)</option>
                            <option value="78" >Gabon</option>
                            <option value="79" >Gambia</option>
                            <option value="80" >Georgia</option>
                            <option value="81" >Germany</option>
                            <option value="82" >Ghana</option>
                            <option value="83" >Gibraltar (UK)</option>
                            <option value="84" >Greece</option>
                            <option value="85" >Greenland</option>
                            <option value="86" >Grenada</option>
                            <option value="87" >Guadeloupe (France)</option>
                            <option value="88" >Guam (USA)</option>
                            <option value="89" >Guatemala</option>
                            <option value="90" >Guernsey (UK)</option>
                            <option value="91" >Guinea</option>
                            <option value="92" >Guinea-Bissau</option>
                            <option value="93" >Guyana</option>
                            <option value="94" >Haiti</option>
                            <option value="95" >Honduras</option>
                            <option value="96" >Hong Kong (China)</option>
                            <option value="97" >Hungary</option>
                            <option value="98" >Iceland</option>
                            <option value="99" >India</option>
                            <option value="100" >Indonesia</option>
                            <option value="101" ">Iran</option>
                            <option value="102" >Iraq</option>
                            <option value="103" >Ireland</option>
                            <option value="104" >Isle of Man (UK)</option>
                            <option value="105" >Israel</option>
                            <option value="106" >Italy</option>
                            <option value="107" >Ivory Coast</option>
                            <option value="108" >Jamaica</option>
                            <option value="109" >Japan</option>
                            <option value="110" >Jersey (UK)</option>
                            <option value="111" >Jordan</option>
                            <option value="112" >Kazakhstan</option>
                            <option value="113" >Kenya</option>
                            <option value="114" >Kiribati</option>
                            <option value="249" >Kosovo</option>
                            <option value="116" >Kuwait</option>
                            <option value="117" >Kyrgyzstan</option>
                            <option value="118" >Laos</option>
                            <option value="119" >Latvia</option>
                            <option value="120" >Lebanon</option>
                            <option value="121" >Lesotho</option>
                            <option value="122" >Liberia</option>
                            <option value="123" >Libya</option>
                            <option value="124" >Liechtenstein</option>
                            <option value="125" >Lithuania</option>
                            <option value="126" >Luxembourg</option>
                            <option value="127" >Macao (China)</option>
                            <option value="128" >Macedonia</option>
                            <option value="129" >Madagascar</option>
                            <option value="130" >Malawi</option>
                            <option value="131" >Malaysia</option>
                            <option value="132" >Maldives</option>
                            <option value="133">Mali</option>
                            <option value="134">Malta</option>
                            <option value="135">Marshall Islands</option>
                            <option value="136">Martinique (France)</option>
                            <option value="137">Mauritania</option>
                            <option value="138">Mauritius</option>
                            <option value="139">Mayotte (France)</option>
                            <option value="140">Mexico</option>
                            <option value="72">Micronesia</option>
                            <option value="141">Moldova</option>
                            <option value="142">Monaco</option>
                            <option value="143">Mongolia</option>
                            <option value="144">Montenegro</option>
                            <option value="145">Montserrat (UK)</option>
                            <option value="146">Morocco</option>
                            <option value="147">Mozambique</option>
                            <option value="35">Myanmar</option>
                            <option value="148">Namibia</option>
                            <option value="149">Nauru</option>
                            <option value="150">Nepal</option>
                            <option value="151">Netherlands</option>
                            <option value="152">New Caledonia (France)</option>
                            <option value="153">New Zealand</option>
                            <option value="154" >Nicaragua</option>
                            <option value="155">Niger</option>
                            <option value="156">Nigeria</option>
                            <option value="157">Niue</option>
                            <option value="158">Norfolk Island (Australia)</option>
                            <option value="159">North Korea</option>
                            <option value="161">Northern Mariana Islands (USA)</option>
                            <option value="162">Norway</option>
                            <option value="163">Oman</option>
                            <option value="164">Pakistan</option>
                            <option value="165">Palau</option>
                            <option value="166">Palestine</option>
                            <option value="167">Panama</option>
                            <option value="168">Papua New Guinea</option>
                            <option value="169">Paraguay</option>
                            <option value="170">Peru</option>
                            <option value="171">Philippines</option>
                            <option value="172" >Pitcairn Islands (UK)</option>
                            <option value="173" ">Poland</option>
                            <option value="174" data-code2="pt">Portugal</option>
                            <option value="175" data-code2="pr">Puerto Rico (USA)</option>
                            <option value="176" data-code2="qa">Qatar</option>
                            <option value="177" data-code2="cg">Republic of the Congo</option>
                            <option value="178" data-code2="re">Reunion (France)</option>
                            <option value="179" data-code2="ro">Romania</option>
                            <option value="180" data-code2="ru">Russia</option>
                            <option value="181" data-code2="rw">Rwanda</option>
                            <option value="182" data-code2="bl">Saint Barthelemy (France)</option>
                            <option value="183" data-code2="sh">Saint Helena</option>
                            <option value="184" data-code2="kn">Saint Kitts and Nevis</option>
                            <option value="185" data-code2="lc">Saint Lucia</option>
                            <option value="186" data-code2="mf">Saint Martin (France)</option>
                            <option value="187" data-code2="pm">Saint Pierre and Miquelon (France)</option>
                            <option value="188" data-code2="vc">Saint Vincent and the Grenadines</option>
                            <option value="189" data-code2="ws">Samoa</option>
                            <option value="190" data-code2="sm">San Marino</option>
                            <option value="191" data-code2="st">Sao Tome and Principe</option>
                            <option value="192" data-code2="sa">Saudi Arabia</option>
                            <option value="193" data-code2="sn">Senegal</option>
                            <option value="194" data-code2="rs">Serbia</option>
                            <option value="195" data-code2="sc">Seychelles</option>
                            <option value="196" data-code2="sl">Sierra Leone</option>
                            <option value="197" data-code2="sg">Singapore</option>
                            <option value="198" data-code2="sx">Sint Maarten</option>
                            <option value="199" data-code2="sk">Slovakia</option>
                            <option value="200" data-code2="si">Slovenia</option>
                            <option value="201" data-code2="sb">Solomon Islands</option>
                            <option value="202" data-code2="so">Somalia</option>
                            <option value="203" data-code2="za">South Africa</option>
                            <option value="248" data-code2="gs">South Georgia and the South Sandwich Islands</option>
                            <option value="204">South Korea</option>
                            <option value="206" >South Sudan</option>
                            <option value="207" >Spain</option>
                            <option value="208" >Sri Lanka</option>
                            <option value="209" >Sudan</option>
                            <option value="210" >Suriname</option>
                            <option value="211" >Svalbard and Jan Mayen (Norway)</option>
                            <option value="212" >Swaziland</option>
                            <option value="213">Sweden</option>
                            <option value="214" >Switzerland</option>
                            <option value="215">Syria</option>
                            <option value="216" >Taiwan</option>
                            <option value="217" >Tajikistan</option>
                            <option value="218" >Tanzania</option>
                            <option value="219" >Thailand</option>
                            <option value="221" >Togo</option>
                            <option value="222" >Tokelau (NZ)</option>
                            <option value="223" >Tonga</option>
                            <option value="225" >Trinidad and Tobago</option>
                            <option value="226" >Tunisia</option>
                            <option value="227" >Turkey</option>
                            <option value="228">Turkmenistan</option>
                            <option value="229" >Turks and Caicos Islands (UK)</option>
                            <option value="230" >Tuvalu</option>
                            <option value="231" >Uganda</option>
                            <option value="232">Ukraine</option>
                            <option value="233">United Arab Emirates</option>
                            <option value="234" >United Kingdom</option>
                            <option value="235">United States</option>
                            <option value="236" >United States Virgin Islands (USA)</option>
                            <option value="237">Uruguay</option>
                            <option value="238" >Uzbekistan</option>
                            <option value="239" >Vanuatu</option>
                            <option value="240">Vatican</option>
                            <option value="241" >Venezuela</option>
                            <option value="242" >Vietnam</option>
                            <option value="243" >Wallis and Futuna (France)</option>
                            <option value="244" >Western Sahara</option>
                            <option value="245" >Yemen</option>
                            <option value="246" >Zambia</option>
                            <option value="247" >Zimbabwe</option>
									</select>
								</div>
							</div>
							
							<div class="row">
							

							<div class="col-sm-12">
								<div class="inputBox">
									<label>Card Number</label>
									<input type="text" name="cardNumber" class="input">
								</div>
							</div>
						</div>
						
						<div class="row">
							

							<div class="col-sm-6">
								<div class="inputBox">
									<label>EXPIRY DATE</label>
									<input type="text" name="cardExpMonth" class="input" placeholder="MM">
									<input type="text" name="cardExpYear" class="input" placeholder="YYYY">
								</div>
							</div>
							
							
							<div class="col-sm-6">
								<div class="inputBox">
									<label>CVC</label>
									
									<input type="text" name="cardCVC" size="4" class="input" >
									
								</div>
							</div>
							
							
						</div>
							
						<div class="col-sm-12">
								<div class="inputBox">
									<input type="submit" name="submit" id="makePayment">
								</div>
							</div>	
							
							
				</form>
			</div>
           
        </div>

    </section>

    <div class="footer-wrapper  js_footer-wrapper">
        <footer class="footer">
            <div class="row">
                <div class="footer__wrap">
                    <div class="footer__col footer__col_about">
                        <div class="footer__section">
                            <h4 class="footer__title">ABOUT US:</h4>
                            <ul class="footer__section-content footer__text">
                                <li class="footer__section-item d-none-mobile">
                                    <a href="index.html">How it works?</a>
                                </li>
                                <li class="footer__section-item d-none-mobile">
                                    <a href="index.html">Contact Support</a>
                                </li>
                                <li class="footer__section-item">
                                    <a href="index.html">Blog</a>
                                </li>
                                <li class="footer__section-item">
                                    <a href="index.html">Write for NomeWorkz</a>
                                </li>
                                <li class="footer__section-item">
                                    <a href="index.html">Money Back Guarantee</a>
                                </li>
                                <li class="footer__section-item">
                                    <a href="index.html">Referral Program</a>
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
    <link rel="stylesheet" href="css/asset_subdomain/60865ce.css" type="text/css" media="none" onload="if(media!='all')media='all'" />
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/asset_subdomain/ec8cf34.js"></script>

    <script type="text/x-jquery-tmpl" id="popupSet">
        {%tmpl(this.data) $('#_default_popup_data').template()%} data-popup-click=""
    </script>

    <script type="text/x-jquery-tmpl" id="popupSetAutoOpen">
        {%tmpl(this.data) $('#_default_popup_data').template()%} data-popup-autoopen=""
    </script>

    <script type="text/x-jquery-tmpl" id="_default_popup_data">
        data-popup-target="${popup}" data-popup-data='${JSON.stringify(this.data)}'
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
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
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
        <img height="1" width="1" style="display:none" src="tr_id_827340874076871_ev_PageView_noscript_1.gif" />
    </noscript>

    <script src="js/asset_subdomain/3dfbab1.js"></script>

    <script>
        $(function() {
            var eventPushScrollOptions = [{
                percent: 25,
                event: function() {
                    window._fbq.push(['trackCustom', 'PageScroll_25', {}]);
                }
            }, {
                percent: 50,
                event: function() {
                    window._fbq.push(['trackCustom', 'PageScroll_50', {}]);
                }
            }, {
                percent: 75,
                event: function() {
                    window._fbq.push(['trackCustom', 'PageScroll_75', {}]);
                }
            }, {
                percent: 95,
                event: function() {
                    window._fbq.push(['trackCustom', 'PageScroll_95', {}]);
                }
            }, ];
            var eventPushDelayOptions = [{
                second: 5,
                event: function() {
                    window._fbq.push(['trackCustom', 'ViewContent_5sec', {}]);
                }
            }, {
                second: 15,
                event: function() {
                    window._fbq.push(['trackCustom', 'ViewContent_15sec', {}]);
                }
            }, {
                second: 30,
                event: function() {
                    window._fbq.push(['trackCustom', 'ViewContent_30sec', {}]);
                }
            }, ];
            var eventPushScroll = new EventPush.Scroll(eventPushScrollOptions);
            var eventPushDelay = new EventPush.Delay(eventPushDelayOptions);
            eventPushScroll.init();
            eventPushDelay.init();
        });
    </script>

    <script src="js/asset_subdomain/d570ab4.js"></script>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                // setTimeout fixed lazy script initialization because it was started before slick script started
                var sliderConfigs = [{
                    sliderClass: 'js_slider__our_writers'
                }, {
                    sliderClass: 'js_slider__our_writers_v3'
                }, {
                    sliderClass: 'js_customers-slider'
                }, {
                    sliderClass: 'js_customers-slider-v2'
                }];
                new Lazy.Slider.Starter(sliderConfigs);
            }, 0);
        });
        var readMore = new readMore();
        readMore.init();
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>