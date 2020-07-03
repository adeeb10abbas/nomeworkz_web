 <?php
include("include/db.php");
 if(isset($_SESSION['email']))
 {
$email = $_SESSION['email'];
$sel_user = "SELECT * FROM `user` WHERE email='$email'";
$user_sql = mysqli_query($conn,$sel_user);
$fetch_user =$user_sql->fetch_array(MYSQLI_ASSOC); 
$role =$fetch_user['role']; 
 }
 ?> 
  
  <div id="popup_login" style="display:none;">
        <div class="uk-modal-dialog">
            <div class="modal-content">
                <div class="uk-modal-header">
                    <span>Log in</span>
                    <p class="uk-modal-header__description js_popup_login_custom_text"></p>
                    <a aria-label="Close" data-dismiss="modal" class="uk-modal-close sm-round"></a>
                </div>
                <div class="uk-form">
                    <span class="js_login_form_container">
                        <form method="post"  action="login_action.php" class="login_form js_pre_login_form" >
                            <p class="modal-info-title">
                                Log in to get instant access to chat with writers
                            </p>

                            <div class="line js_login_sub_action_line" style="display:none;">
                                You need to Log in 
                                <span class="js_login_sub_action_text"></span>
                            </div>
                            
                            <div class="line">
                                <input type="email" id="_pre_login_username" name="user_email" data-atest="atest_login_form_email" placeholder="Your email" />
                            </div>
                            <div class="line">
                                <input type="password" id="_pre_login_password" name="pass" data-atest="atest_login_form_password" class="" placeholder="Your password" />
                            </div>
                            <div class="line js_social_auth_error_block" style="display: none;">
                                <div class="errorText js_social_auth_error_text js_login_loading_hide" data-atest="atest_login_elem_error_text"></div>
                            </div>
                                <div class="js_login_loading_hide line" >
                                   <input type="submit" value="Continue" name="user_log" class="btn btn-danger" data-atest="atest_login_elem_error_text" style="background:darkred;color:#fff;">
                                </div>
                               
                            <div class="uk-clearfix"></div>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>
	
    <div id="popup_login-gnome" style="display:none;">
        <div class="uk-modal-dialog">
            <div class="modal-content">
                <div class="uk-modal-header">
                    <span>nome Log in</span>
                    <p class="uk-modal-header__description js_popup_login_custom_text"></p>
                    <a aria-label="Close" data-dismiss="modal" class="uk-modal-close sm-round"></a>
                </div>
                <div class="uk-form">
                    <span class="js_login_form_container">
                        <form method="post"  action="dashboard.html" class="login_form js_pre_login_form" >
                            <p class="modal-info-title">
                                Log in to get instant access to assignments and your dashboard
                            </p>
                            
                            <div class="line js_login_sub_action_line" style="display:none;">
                                You need to Log in 
                                <span class="js_login_sub_action_text"></span>
                            </div>
                            
                            <div class="line">
                                <input type="email" id="_pre_login_username" name="_pre_login_username" data-atest="atest_login_form_email" placeholder="Your email" />
                            </div>
                            <div class="line">
                                <input type="password" id="_pre_login_password" name="_pre_login_password" data-atest="atest_login_form_password" class="" placeholder="Your password" />
                            </div>
                            <div class="line js_social_auth_error_block" style="display: none;">
                                <div class="errorText js_social_auth_error_text js_login_loading_hide" data-atest=atest_login_elem_error_text></div>
                            </div>
                            <div class="js_login_loading_hide line" >
                                <a class="gnome-button uk-button" href="dashboard-gnome.html">Continue</a>
                            </div>
                            <div class="uk-clearfix"></div>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>
	
    <div id="popup_signup" style="display:none;">
        <div class="uk-modal-dialog" >
            <div class="modal-content" >
                <div class="uk-modal-header">
                    <span>Sign Up</span>
                    <p class="uk-modal-header__description js_popup_login_custom_text"></p>
                    <a aria-label="Close" data-dismiss="modal" class="uk-modal-close sm-round"></a>
                </div>
                <div class="uk-form">
                    <span class="js_login_form_container">
                        <p class="modal-info-title">
                            Sign up to place an order and get an essay in as little as 3 days!
                        </p>
                        <form method="post"  action="login_action.php" class="login_form js_pre_login_form" >
                            <div class="line">
                                <input type="text" id="_pre_signup_name" name="user_name" data-atest="atest_signup_form_name" placeholder="First and last name" />
                            </div>
                            <div class="line js_login_sub_action_line" style="display:none;">
                                You need to Sign Up 
                                <span class="js_login_sub_action_text"></span>
                            </div>
                            <div class="line">
                                <input type="email" id="_pre_signup_username" name="user_email" data-atest="atest_signup_form_email" placeholder="Your email" />
                            </div>
                            <div class="line">
                                <input type="password" id="_pre_signup_password" name="password" data-atest="atest_signup_form_password" placeholder="Your password" />
                            </div>
                            <div class="line">
                                <input type="tel" id="_pre_signup_phone" name="number" data-atest="atest_signup_form_phone" placeholder="Your phone number" />
                            </div>
                            <div class="line js_social_auth_error_block" style="display: none;">
                                <div class="errorText js_social_auth_error_text js_login_loading_hide" data-atest="atest_login_elem_error_text"></div>
                            </div>
                                <div class="js_login_loading_hide line" >
                                    <input type="Submit" value="Continue" Name="registration" class="btn btn-danger" data-atest="atest_login_elem_error_text" style="background:#8b0000; color:#fff;">
                                </div>
                                <center>
                                    <a href="#" data-dismiss="modal" style="text-decoration: underline;" class="small-p" data-popup-target="popup_signup-gnome"  data-popup-data='[]' data-popup-click="" data-atest=atest_login_elem_popup_open>Want to become a nome? Sign up here!</a>
                                </center>
                            <div class="uk-clearfix"></div>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>
	
    <div id="popup_signup-gnome" style="display:none;">
        <div class="uk-modal-dialog" >
            <div class="modal-content" >
                <div class="uk-modal-header">
                    <span>nome Sign Up</span>
                    <p class="uk-modal-header__description js_popup_login_custom_text"></p>
                    <a aria-label="Close" data-dismiss="modal" class="uk-modal-close sm-round"></a>
                </div>
                <div class="uk-form">
                    <span class="js_login_form_container">
                        <p class="modal-info-title">
                            Sign up to use your writing skills for the best!
                        </p>
                        <form method="post"  action="login_action.php" class="login_form js_pre_login_form" >
                            <div class="line">
                                <input type="text" id="_pre_signup_name" name="gnome_name" data-atest="atest_signup_form_name" placeholder="First and last name" />
                            </div>
                            <div class="line js_login_sub_action_line" style="display:none;">
                                You need to Sign Up 
                                <span class="js_login_sub_action_text"></span>
                            </div>
                            <div class="line">
                                <input type="email" id="_pre_signup_username" name="gnome_email" data-atest="atest_signup_form_email" placeholder="Your email" />
                            </div>
                            <div class="line">
                                <input type="password" id="_pre_signup_password" name="gnome_pass" data-atest="atest_signup_form_password" placeholder="Your password" />
                            </div>
                            <div class="line">
                                <input type="tel" id="_pre_signup_phone" name="gnome_tel" data-atest="atest_signup_form_phone" placeholder="Your phone number" />
                            </div>
                            <div class="line js_social_auth_error_block" style="display: none;">
                                <div class="errorText js_social_auth_error_text js_login_loading_hide" data-atest=atest_login_elem_error_text></div>
                            </div>
                                <div class="js_login_loading_hide line" >
                                    <input type="Submit" value="Continue" Name="Gnome_regis" class="btn btn-danger" data-atest="atest_login_elem_error_text" style="background:#8b0000; color:#fff;">
                                </div>
                            <div class="uk-clearfix"></div>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>                                             
    <div id="popup_cant_register" style="display:none;">
        <div class="uk-modal-dialog">
            <div class="modal-content">
                <div class="uk-modal-header">
                    Log in / Sign up                                
                    <a aria-label="Close" data-dismiss="modal" class="uk-modal-close sm-round"></a>
                </div>
                <div class="uk-form">
                    <p>Thank you for your interest in our company.</p>
                    <p>Unfortunately, we are not hiring writers now due to low season.</p>
                    <p>We will be glad to review your application in the future.</p>
                </div>
            </div>
        </div>
    </div>                    
    <div id="popup_forgot_password" style="display:none;">
        <div class="uk-modal-dialog">
            <div class="modal-content">
                <div class="uk-modal-header">
                    Forgot password                                                
                    <a aria-label="Close" data-dismiss="modal" class="uk-modal-close sm-round"></a>
                </div>
                <div class="uk-form">
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            $.ajax({
                                url: "js/asset_subdomain/230c0f9.js",
                                dataType: "script",
                                cache: true,
                            }).done(() => {
                                new Security.ForgotPassword.ForgotPasswordForm();
                            });
                        });
                    </script>
                    <span class="js_forgot_password_content_1">
                        <form class="forgot_password_form js_forgot_password_form" action="index.php" method="post">
                            <div class="line">
                                <label class="primary-label" for="user_email">Your email</label>
                                <input type="email" id="user_email" name="user[email]" data-atest="atest_forgot_pass_form_email" class="js_forgot_password_email" placeholder="Enter your email address" />
                                <div class="errorText js_forgot_pass_error" style="display: none;" data-atest=atest_forgot_pass_elem_error_text>
                                    This is an obligatory field.
                                </div>
                            </div>
                            <div class="line">
                                <span class="restore-info">
                                    You will receive an email that will help you to change your password.
                                </span>
                            </div>
                            <div class="line uk-text-center">
                                <button class="uk-button"  type="submit" data-atest="atest_forgot_pass_form_submit">Submit</button>
                            </div>
                            <input type="hidden" name="send_forgot_email" value="1">
                            <input type="hidden" id="user__token" name="user[_token]" data-js-token-id="user" value="b834cf3c728da328599fd6be8ca817e4__27a470cc7f47b12fd6d0b98480b1dd96" />
                            <div class="uk-clearfix">

                            </div>
                        </form>
                    </span>
                    <span class="js_forgot_password_content_2" style="display:none;" data-atest="atest_forgot_pass_elem_success_text">
                        We have just sent temporary password to your email.
                        <br>
                        Use these details to login.
                    </span>
                </div>
            </div>
        </div>
    </div>    
    <header class="page-header js_header__wrapper ">
        <div class="page-header__inner">
            <div class="row row_p_s">
                <div class="page-header__content js_header__container">
                    <div class="page-header__logo">
                        <a href="index.php">
                            <img src="files/logo.png">
                        </a>
                    </div>
                    <div class="main-menu-v2" data-heading="Browse categories">
                        <menu class="main-menu-v2__controls">
                            <li class="main-menu-v2__prev"></li>
                        </menu>
						  <div class="main-menu-v2__item main-menu-v2__item_expandable">
                            <div class="main-menu-v2__title main-menu-v2__title_slim" >
                                <span>
                                     
                                    <a href="#about">Home</a>
                                </span>
                            </div>
							</div>
                      
                      
                        <div class="main-menu-v2__item main-menu-v2__item_expandable">
                            <div class="main-menu-v2__title main-menu-v2__title_slim" >
                                <span>
                                     
                                    <a href="#about">About Us</a>
                                </span>
                            </div>
                            <div class="main-dropdown-v2 js_main-dropdown-v2">
                                <div class="main-dropdown-v2__left-side ">
                                    <div class="main-dropdown-v2__header ">
                                        <div class="main-dropdown-v2__title">About Nomeworkz</div>
                                    </div>
                                    <div class="main-dropdown-v2__list">
                                        <a class="main-dropdown-v2__item  " href="#about">What Is Nomeworkz?</a>
                                        <a class="main-dropdown-v2__item  " href="#about" data-id=1>How It Works</a>
                                        <a class="main-dropdown-v2__item  " href="#about">Our Team</a>
                                        <a class="main-dropdown-v2__item  " href="#about" data-id=2>TOP Writers</a>
                                        <a class="main-dropdown-v2__item desktop-only " href="#about" data-id=3>Blog</a>
                                        <a class="main-dropdown-v2__item  " href="#contact" data-id=4>Contact Support</a>
                                    </div>
                                </div>
                                <div class="main-dropdown-v2__right-side">
                                    <div class="main-dropdown-v2__section" data-id="1">
                                        <div class="main-dropdown-v2__header main-dropdown-v2__header_text">
                                            <div class="main-dropdown-v2__title">How It Works</div>
                                        </div>
                                        <div class="main-dropdown-v2__text">Place your order, choose your writer, provide instructions, and get results on-time!</div>
                                    </div>
                                    <div class="main-dropdown-v2__section" data-id="2">
                                        <div class="main-dropdown-v2__header main-dropdown-v2__header_text">
                                            <div class="main-dropdown-v2__title">TOP Writers</div>
                                        </div>
                                        <div class="main-dropdown-v2__text">NomeWorkz uses top quality writers with years of higher-level writing experience on a variety of subjects.</div>
                                    </div>
                                    <div class="main-dropdown-v2__section" data-id="3">
                                        <div class="main-dropdown-v2__header main-dropdown-v2__header_text">
                                            <div class="main-dropdown-v2__title">Blog</div>
                                        </div>
                                        <div class="main-dropdown-v2__text">Essay writing & student tips.</div>
                                    </div>
                                    <div class="main-dropdown-v2__section" data-id="4">
                                        <div class="main-dropdown-v2__header main-dropdown-v2__header_text">
                                            <div class="main-dropdown-v2__title">Contacts</div>
                                        </div>
                                        <div class="main-dropdown-v2__text">Our support staff is available 24/7 to assist you throughout the entire process.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php 
						 if(isset($_SESSION['email']))
 {
$email = $_SESSION['email'];
$sel_user = "SELECT * FROM `user` WHERE email='$email'";
$user_sql = mysqli_query($conn,$sel_user);
$fetch_user =$user_sql->fetch_array(MYSQLI_ASSOC); 
$role =$fetch_user['role']; 
						if($role==2)
						{
							echo " <div class='main-menu-v2__item main-menu-v2__item_expandable'>
                            <div class='main-menu-v2__title main-menu-v2__title_slim'>
                               <a href='dashboard-gnome.php' style='color:#fff;'> <span>
                                     
                                    Account
                                </span></a>
                            </div>
                         
                        </div>";
						}
						
						else
						{
							echo " <div class='main-menu-v2__item main-menu-v2__item_expandable'>
                            <div class='main-menu-v2__title main-menu-v2__title_slim'>
                               <a href='dashboard.php' style='color:#fff;'> <span>
                                     
                                    Account
                                </span></a>
                            </div>
                         
                        </div>";
						}
 }
						
						?>
                         
                         
						
                        
                    </div>
                    <div class="shadow-v2"></div>
                    <script>
                        $(function () {
                            mainDropdownV4.init('', {"toggleActiveLeftSide":true,"highlightCurrentLink":true,"breakpoint":1176,"mobileOnDesktopIfLogged":true,"removeCloseBtn":true,"defaultMenuPosition":"afterLogo"});
                        });
                    </script>
                    <script>
                        $(document).ready(function() {
                            if (typeof $zopim === 'undefined') {
                                $('.js_menu-btn-support').hide();
                                $('.js_menu-btn-phone').addClass('main-menu-v2__title_mt_m');
                            }
                        });
                    </script>
                    <div class="page-header__user-controllers">
					
					<?php
					if(!isset($_SESSION['email']))
					{
						echo "<button type='button' class='page-header__login-btn btn btn_second btn_slim'  data-popup-target='popup_login'  data-popup-data='[]' data-popup-click='' data-atest=atest_login_elem_popup_open>Log in</button>";
					}
					
					else{
						echo "<a href='logout.php'><button type='button' class='page-header__login-btn btn btn_second btn_slim' data-atest=atest_login_elem_popup_open>Log Out</button></a>";
					}
					
					?>
					
					
					
					
					
                        
                        
						
						<button type="button" class="page-header__login-btn btn btn_second btn_slim"  data-popup-target="popup_signup" data-popup-data='[]' data-popup-click="" data-atest=atest_login_elem_popup_open>Sign up</button>           
                        <script>
                            $(function()
                            {
                                $('.js_button_order_ga').on('click',function()
                                {
                                    ga('send','event','CTA','click','Header - Hire Writer Button');
                                });
                            });
                        </script>
                        <button class="page-header__hamburger js_hamburger-menu-v4">
                            <span class="page-header__hamburger-text">Menu</span>
                            <i class="page-header__hamburger-ico"><span></span></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>