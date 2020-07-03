<?php 
session_start();
include("include/db.php");

if(isset($_SESSION['email']))
{
	$email= $_SESSION['email'];
	
	$sel_user = "SELECT * FROM `user` WHERE email='$email'";
	$user_sql = mysqli_query($conn,$sel_user);
	$fetch_user =$user_sql->fetch_array(MYSQLI_ASSOC); 
	$user_id = $fetch_user['id'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="manifest" href="manifest.js">       
        
    <link rel="icon" type="image/png" href="files/favicon.png">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title>High Quality Custom Essay Writing Service - NomeWorkz</title>
    <meta name="Description" content="Essay shmessay. Place an order at NomeWorkz for free and choose a professional writer do the rest. Simple as that."/>
    <meta property="og:url" content="https://nomeworkz.com/" />
    <meta property="og:title" content="High Quality Custom Essay Writing Service - NomeWorkz" />
    <meta property="og:description" content="Essay shmessay. Place an order at NomeWorkz for free and choose a professional writer do the rest. Simple as that." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="files/logo.png" />
    <meta property="og:image:width" content="968" />
    <meta property="og:image:height" content="504" />
    <meta property="og:image:type" content="image/png" />
                            
    <script src="js/asset_subdomain/76332f5.js"></script>
    <script src="js/asset_subdomain/2e72241.js"></script>
    <link rel="stylesheet" href="css/asset_subdomain/735de05.css" type="text/css"/>

    </head>


<body class="main-body-container ">
  <?php include("header.php");?>

        <div class="front-page-wrapper ">
            <section class="top-background top-background_front right-bird">
                <div class="guy-block">
                    
                        <img class="big_b scale-up-top"  src="files/logo.png">
                        <div class="mini-row">
                            <h1 class="h3 h3_fz_s slide-left">
                                The professional essay writing service for students who can't even.
                            </h1>
                            <p class="h1 h1_fz_xxs h1_mob_fz_18 slide-right">
                                Get your essay written starting at just $18.00 a page
                            </p>
                            <div class="top-form__form">
                                <div class="top-form__form-wrapper slide-top">
                                    <a href="#profile" class="btn btn_main">write my paper</a>
                                    <a href="#" class="top-form__note" onclick="ga('send','event','CTA','click','microtext not charged yet');">You won’t be charged yet</a>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </section>
             

<section class="feature-video-block">

    <video class="feature-video" width="80%" controls>
        <source src="files/feature-video.mp4" type="video/mp4">
    </video>

</section>



<section class="our-team our-team_v4" id="profile">
    <div class="row row_indent_none">
        <h2 class="h1 h1_capitalize">Choose your writer <span class="d-none-desktop-tablet">from your phone</span></h2>
                <div data-aos="zoom-in" class="team-slider writers_slider_wrapper slick-slider-preinit js_slider__our_writers js_customers-slider2"
             style="display: none">
			 
			 
			<?php 
			
			$sel_profile = "SELECT * FROM `profile`";
			$sql_profile = mysqli_query($conn,$sel_profile);
			while($fetch_profile=$sql_profile->fetch_array(MYSQLI_ASSOC))
			{
			?> 
			 
        <div class="team-slider__item team-slider__item_v2 ">
            <div class="item">
                <div class="item_top">
                    <div class="writer-pic">
                        <a href="index.html" class="hired-before " title="View writer’s profile">
                            <img alt="Writer avatar" data-src="images/profile/<?php echo $fetch_profile['image'];?>" class="js_lazy_slider_img" style="width:75px; height:75px;">
                        </a>
                    </div>
                    <div class="writer_main">
                        <p class="name" title="View Perfect Scholar profile">
                            <a href="index.html">
                                <?php echo $fetch_profile['fname'];?> <?php echo $fetch_profile['lname'];?>
                            </a>
                        </p>
                        <p class="status">&numero;20 In global rating</p>
                        <div class="star-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                            <div style="width:98%;"></div>
                        </div>
                    </div>
                </div>
                <div class="item_middle">
                    <div class="info" title="# of successful papers">
                                                    <p class="number">294</p>
                            <p class="description">finished papers</p>
                                            </div>
                    <a href="index.html"
                       class="info"
                       title="All reviews are unedited and published as is.">
                        <p class="number">216</p>
                        <p class="description">customer reviews</p>
                    </a>
                </div>
                <div class="item_bottom">
                    <div class="success" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                        <p class="number">98%</p>
                        <p class="text">success rate</p>
                    </div>
                    <div class="button_hire">
<a href="hire.php?gnome_id=<?php echo $fetch_profile['user_id'];?>"><button class="js_hw_button btn btn_second btn_without-shadow btn_thin" data-js-hire-writer-id="1603125" data-js-hire-writer-url="/customer/hire-writer/1603125?hw_p_hire_source=hire+writer+in+carousel&amp;hw_p_clear_custom_top_writers=1"
                    >
        Hire    </button></a>
    <script>
        $(function()
{
    setTimeout(function() // small asynchrony, because in some pleases/pages require elements initialization before setting their selectors in js script
    {
        new hireWriterButtonRun();
    }, 0);
});
var hireWriterButtonRun = function()
{
    var self =
    {
        el_button: '.js_hw_button',
        can_choose_order: !!0,
        init: function()
        {
            if (self.can_choose_order)
            {
                new hireWriterPopupRun();
            }
            else
            {
                $(document).on('click', self.el_button, self.redirectOrderForm);
            }
        },
        redirectOrderForm: function()
        {
            ga('send','event','CTA','click','hire writer in carousel');
        }
    };
    if (!window.hire_writer_popup_run_inited) // exclude double init after ajax
    {
        window.hire_writer_popup_run_inited = 1;
        self.init();
    }
};
var hireWriterPopupRun = function()
{
    var self =
    {
        el_popup_wrapper: '.js_popup_hire_writer',
        el_button: '.js_hw_button',
        el_container: '.js_hw_co_container',
        el_new_order: '.js_hw_co_new_order',
        el_old_order: '.js_hw_co_old_order',
        el_order_dropdown: '.js_hw_co_order_dropdown',
        $el_container: null,
        url_choose_order_content: '\x2Fcustomer\x2Fhire\x2Dwriter\x2Dchoose\x2Dorder',
        loading_content: null,
        init: function()
        {
            $(document).on('click', self.el_button, self.openPopup);
            self.$el_container = $(self.el_container);
            self.loading_content = self.$el_container.html();
        },
        openPopup: function()
        {
            self.showLoading();
            PopupMaker.show('popup_choose_order_for_hire_writer');
            var hire_button = $(this);
            var writer_id = hire_button.attr('data-js-hire-writer-id');
            var url_for_hire = hire_button.attr('data-js-hire-writer-url');
            var url = self.url_choose_order_content + '/' + writer_id;
            $.get(url, function(response)
            {
                self.$el_container.html(response);
                $(self.el_new_order).on('click', function()
                {
                    self.runHireWriter(url_for_hire);
                });
                $(self.el_old_order).on('click', function()
                {
                    var $parentEl = $(this).parents(self.el_popup_wrapper);
                    url_for_hire = self.getUrlForHireWithOrderId(url_for_hire, $parentEl);
                    self.runHireWriter(url_for_hire);
                });
            });
        },
        showLoading: function()
        {
            self.$el_container.html(self.loading_content);
        },
        getUrlForHireWithOrderId: function(initial_url_for_hire, $parentEl)
        {
            var order_id;
            if (typeof $parentEl === "object")
            {
                order_id = $parentEl.find(self.el_order_dropdown).val();
            }
            else
            {
                order_id = $(self.el_order_dropdown).val();
            }
            if (order_id)
            {
                return MyUrlEditor.updateParameter('order_id', order_id, initial_url_for_hire);
            }
            return initial_url_for_hire;
        },
        runHireWriter: function(url_for_hire)
        {
        }
    };
    self.init();
};
    </script>
                    </div>
                </div>
            </div>
        </div>
	
       <?php } ?>
                  </div>
                    <div class="our-team__show-link">
                <a href="index.html"  onclick="ga('send','event','CTA','click','ShowAllWriters');" >Show All Professional Essay Writers</a>
            </div>
            </div>
</section>

        <section class="section-v2 section-v2_cost">
            <div class="row">
                <div class="section-v2__content">
                    <div class="get-price">
    <div class="get-price__content">
        <div class="get-price__title ">
            Find the cost of your essay
        </div>
                    <div class="payment">
    <div class="payment__item">
        <img data-src="files/amex.svg"
             class="lazy"
             width="31px"
             height="30px">
    </div>
    <div class="payment__item">
        <img data-src="files/mc.svg"
             class="lazy"
             width="38px"
             height="30px">
    </div>
    <div class="payment__item">
        <img data-src="files/visa.svg"
             class="lazy"
             width="45px"
             height="30px">
    </div>
    <div class="payment__item">
        <img data-src="files/discover.svg"
             class="lazy"
             width="46px"
             height="30px">
    </div>
</div>            </div>
    <div class="get-price__button">
        <a class="btn btn_main btn_wrappable"
            href="index.html"             onclick="ga('send','event','CTA','click','GetOffersFrom200');">
            <span class="d-none-mobile">
                See prices from 450+ writers
            </span>
            <span class="d-none-desktop-tablet">
                See prices from your phone
            </span>
        </a>
    </div>
</div>                </div>
            </div>
    </section>

<!--price -->
<section class="our-team our-team_v4">
    <div class="row row_indent_none">
        <h2 class="h1 h1_capitalize" style="color:#fff;">Buy The Subscription <span class="d-none-desktop-tablet">from your phone</span></h2>
                <div data-aos="zoom-in" class="team-slider writers_slider_wrapper slick-slider-preinit js_slider__our_writers js_customers-slider2"
             style="display: none">
			 
			 
			<?php 
			
			$sel_subscription = "SELECT * FROM `subscription`";
			$sql_subscription = mysqli_query($conn,$sel_subscription);
			while($fetch_subscription=$sql_subscription->fetch_array(MYSQLI_ASSOC))
			{
			?> 
			 
        <div class="team-slider__item team-slider__item_v2 ">
            <div class="item">
                <div class="item_top">
                   
                    <div class="writer_main">
                        <p class="name" title="View Perfect Scholar profile">
                            <a href="index.html">
                                <?php echo $fetch_subscription['name']; ?>
                            </a>
                        </p>
                        <p class="status">$<?php echo $fetch_subscription['price']; ?></p>
                        <div class="star-rate" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                            <div style="width:98%;"></div>
                        </div>
                    </div>
                </div>
                <div class="item_middle">
                    <div class="info" title="# of successful papers" style="width: 100%;">
                                                    <p class="number"> $<?php echo $fetch_subscription['discount'];?> Discount/off per page</p>
                            
                          </div>
                  
                </div>
                <div class="item_bottom">
                    <div class="success" title="Success rate takes into account student reviews, student retention, paper quality and timely delivery.">
                        <p class="number">98%</p>
                        <p class="text">success rate</p>
                    </div>
                    <div class="button_hire">
<form method="post" action="billing-information.php">

<input type="hidden" name="id" value="<?php echo $fetch_subscription['id'];?>">
<input type="hidden" name="price" value="<?php echo $fetch_subscription['price'];?>">
<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
<input type="hidden" name="user_name" value="<?php echo $fetch_user['name'];?>">
<input type="hidden" name="user_email" value="<?php echo $fetch_user['email'];?>">
<input type="hidden" name="user_num" value="<?php echo $fetch_user['number'];?>">
<input type="submit" name="Buy" value="Buy" class="js_hw_button btn btn_second btn_without-shadow btn_thin" data-js-hire-writer-id="1603125" data-js-hire-writer-url="/customer/hire-writer/1603125?hw_p_hire_source=hire+writer+in+carousel&amp;hw_p_clear_custom_top_writers=1"
                    >
           
   </form>
                    </div>
                </div>
            </div>
        </div>
	
       <?php } ?>
                  </div>
                    <div class="our-team__show-link">
                <a href="index.html"  onclick="ga('send','event','CTA','click','ShowAllWriters');" >Show All Professional Essay Writers</a>
            </div>
            </div>
</section>
<!--end price -->



    <section class="section-v2 section-v2_pv_50 section-v2_bg_light">
        <div class="row">
            <div class="section-v2__heading">
                <h2 class="section-v2__title section-v2__title_fz_35">What’s included?</h2>
                <p class="section-v2__subtitle">
                    Check out our custom essay writing service features. We guarantee that your custom essay will
                    not only be delivered on time but will also be of the highest quality.
                </p>
            </div>
            <div class="section-v2__content">
                <div class="advantages">
                    <div class="advantages__item">
                        <div class="advantages__img_div">
                            <img src="files/thumbs-up.png" class="advantages__img lazy">
                        </div>
                        <h3 class="advantages__title">Customer Satisfaction Guaranteed</h3>
                        <p class="advantages__description">Only pay after getting the perfect paper. No revision limits.</p>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__img_div">
                            <img src="files/clock.png" class="advantages__img lazy">
                        </div>
                        <h3 class="advantages__title">Get Quick Results</h3>
                        <p class="advantages__description">We have over 450 dedicated essay writers who will happily write your essay even with 3 hrs. deadline.</p>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__img_div">
                            <img src="files/headphones.png" class="advantages__img lazy">
                        </div>
                        <h3 class="advantages__title">Unlimited Support 24/7</h3>
                        <p class="advantages__description">We can proudly say that our response time to a customer request is less than a minute.</p>
                    </div>
                    <div class="advantages__item">
                        <div class="advantages__img_div">
                            <img src="files/approval.png" class="advantages__img lazy">
                        </div>
                        <h3 class="advantages__title">All papers double-checked</h3>
                        <p class="advantages__description">First we check the web. Secondly, we check our own database of completed orders so you know you’ll have original work every time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-v2 section-v2_types no-hr">
        <div class="row">
            <div class="section-v2__heading">
                <div class="section-v2__title">
                    We handle all writing assignments
                    <br> for any type of paper, <strong>including:</strong>
                </div>
            </div>
            <div class="section-v2__content">
                <div class="types">
                    <ul class="types__list">
                        <li class="types__list-item">
                            <a href="index.html"  >Essay (Any Type)</a>
                        </li>
                        <li class="types__list-item">
                            <a href="index.html"  >Assignment</a>
                        </li>
                        <li class="types__list-item">
                            <a href="research-papers-writing-services.html"  >Research Paper</a>
                        </li>
                        <li class="types__list-item">
                            <a href="index.html"  >Argumentative Essay</a>
                        </li>
                        <li class="types__list-item">
                            <a href="index.html"  >Book/Movie Review</a>
                        </li>
                    </ul>
                    <ul class="types__list">
                        <li class="types__list-item">
                            <a href="scholarship-essay-writing-service.html"  >Scholarship Essay</a>
                        </li>
                        <li class="types__list-item">
                            <a href="college-application-essay-writing.html"  >Admission Essay</a>
                        </li>
                        <li class="types__list-item">
                            <a href="case-study-writing-service.html"  >Case Study</a>
                        </li>
                        <li class="types__list-item">
                            <a href="coursework-writing.html"  >Coursework</a>
                        </li>
                        <li class="types__list-item">
                            <a href="index.html"  >Presentation</a>
                        </li>
                    </ul>
                    <ul class="types__list">
                        <li class="types__list-item">
                            <a href="term-papers-writing-services.html"  >Term Paper</a>
                        </li>
                        <li class="types__list-item">
                            <a href="index.html"  >Research Proposal</a>
                        </li>
                        <li class="types__list-item">
                            <a href="index.html"  >Speech</a>
                        </li>
                        <li class="types__list-item">
                            <a href="index.html"  >Capstone Project</a>
                        </li>
                        <li class="types__list-item">
                            <a href="index.html"  >Annotated Bibliography</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        
        <section class="block__read_more" id="about">
            <div class="row read_more_text_wrapper">
                <div class="read_more_text_visible">
                    <h1 class="h1">NOMEWORKZ: THE ESSAY WRITING SERVICE YOU CAN TRUST</h1>
                    <span class="lines"></span>
                    <p>Sometimes things just don't go as planned. You miss deadlines, spend much time for research,
                        cannot come up with an interesting topic or have no time to properly edit the text before submission.
                        Nomeworkz online essay writing service was created to eliminate such issues and help students with
                        their academic performance! We have gathered only the most skilled essay writers who provide original,
                        custom papers for any educational level. Experienced proofreaders team will ensure the essay is plagiarism free.
                    </p>
                    <div class="link_read_more js_link_read_more"> <a>Read More</a></div>
                </div>
                <div class="read_more_text_hidden">
                    <div class="columns">
                        <h2 class="sub-heading">Types of Essays We Do</h2>
                        <p>Professional team of experts in various subjects can handle any academic essay including, but not limited to analytical,
                            compare & contrast, narrative, expository, argumentative, persuasive, descriptive and so on. On top of that, there are
                            professionals who’ll gladly work on law case study, nursing report or history presentation.</p>
                        <p>Do not hesitate over requesting help as we have writers for a variety of subjects who are prepared to work on your essay
                            for Geography, International Law, Sociology, Philosophy, Culture, Ethics, and other classes.</p>
                        <h2 class="sub-heading">Who Will Write Your Essay</h2>
                        <p>Basically, anyone can apply for a position to become a writer in our custom essay writing service, but  first of all,
                            they should pass all hiring steps which help prove their knowledge and skills. Most editors are native speakers,
                            who hold Masters and Ph.D. degrees from American universities. They all were students at some point in their life and
                            understand all struggles of keeping up with a schedule. Being experts in different subjects, they create only free from
                            plagiarism content and are aware of relevant academic rules.</p>
                        <p>Nomeworkz is aimed at keeping the bar of excellence high and stand by acquired standards. To achieve it, we hire writers who possess the following qualities:</p>
                        <ul>
                            <li>Excellent written & spoken English</li>
                            <li>Punctuality & discipline</li>
                            <li>Ability to follow guidelines to the dot</li>
                            <li>Good interpersonal communication skills</li>
                            <li>Experienced in academic writing, editing, formatting</li>
                        </ul>
                        <p>Our best paper writing service provides every client with a unique opportunity to choose a preferred writer. All of them have their
                            own profiles with description of their skills, education, number of completed orders and client’s feedback. Another peculiarity is
                            communication with writer directly, as we believe cooperation helps in achieving better results.</p>
                        <h2 class="sub-heading">How To Place An Order</h2>
                        <p>Nomeworkz is a professional essay writing service that cares about quality of each paper delivered to our clients. If you strive for
                            excellent results, provide as much information about paper as possible in order to receive the best writing services. Tell us paper
                            title, number of pages, deadline, formatting style and number of sources for citation. Be attentive, attach full requirements from
                            college professor or copy and paste them into the order form. Preferably, send your scoring rubric, lecture notes or presentations,
                            textbooks or any other useful materials. On this stage, a lot depends on you, as well as cooperation with your personal writing assistant.
                            Don’t hesitate over sending guidelines after order was placed, better late than never!</p>
                        <h2 class="sub-heading">Writing Process in a Nutshell</h2>
                        <p>Writers at Nomeworkz are devoted to what they do and have an inbuilt process of completing any order.
                            Here’s how writing process is usually organized:</p>
                        <ol>
                            <li>After accepting your project, writer checks all instructions, ensures nothing valuable was missed.</li>
                            <li>They get familiar with topic - do research on the Internet, find scholarly sources from credible databases, read them thoroughly and makes notes.</li>
                            <li>Writers create an outline along with thesis for themselves, so that final paper is organized, smooth and has a flow.</li>
                            <li>Next step is drafting paper from scratch, implementing sources, incorporating evidence. You may ask for a draft by messaging an expert, checking it or providing some comments for improvement.</li>
                            <li>At the end, writer produces final variant, cites all used sources, proofreads, also edits the text before delivering it. If for some reason you are not satisfied with an assignment, there is an opportunity to request free unlimited revisions or ask another editor for improvements. Alternatively, in accordance with our customer satisfaction policy, you may request a refund, if you think that instructions were not followed.</li>
                        </ol>
                        <h2 class="sub-heading">Affordable Prices</h2>
                        <p>In comparison with other essay writing services, our company cares about its clients and provides top services that’ll fit any budget.
                            We know how it may be difficult for a student to earn or save money, so prices start at only $18 per page. That is why we have many
                            repeat customers who use our help constantly. Nomeworkz' mission is to make online essay service affordable.</p>
                        <h2 class="sub-heading">How We Achieve Quality</h2>
                        <p>Customer’s satisfaction is our priority, and we work each day on improvement of custom essay writing. We guarantee that only the most
                            suitable and experienced writer will work on your order. Your instructions will be followed to the letter, all details included.
                            Editors will proofread every sentence, fix typos, correct grammar or lexical mistakes.</p>
                        <p>Have no doubts as only most high-tech tools are used to scan all texts for plagiarism to ensure 100% originality of each assignment.
                            We utilize only credible scholarly materials for supporting arguments in paper. In addition, in-house experts double-check paper’s
                            compliance with initial guidelines, formatting, along with in-text citations. Every order is under strict control of our professional
                            essay writing team. </p>
                        <h2 class="sub-heading">Short Answers to Common Questions</h2>
                        <h3>Can you find an expert for any essay subjects?</h3>
                        <p>Of course! We worked very hard to find the best essay writers experienced in any subject, even the most complicated like Physics, Engineering or Informational Technologies.</p>
                        <h3>Is your writing service legal?</h3>
                        <p>Our service is legal and is used by hundreds of students day by day. You can read reviews about our custom essay writing service.</p>
                        <h3>Is buying essays online safe?</h3>
                        <p>You should not worry about safety as all payments are protected. We are MasterCard, Visa, American Express, Discovery verified. Nomeworkz essay service has no access to
                            your personal data. In addition, there is a money-back guarantee.</p>
                        <h3>How fast your service can complete an essay?</h3>
                        <p>Writers need at least 3 hours to complete a short essay. If you need help with a more complicated lengthy paper, contact us beforehand. Your writing assistant will have more time
                            for analysis and will produce an excellent piece.</p>
                        <div class="columns__btn-wrap">
                            <a class="link_read_close js_link_read_close">Hide</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-v2 section-v2_pv_m section-v2_bg_dark-blue no-hr">
            <div class="row">
                <div class="section-v2__heading">
                    <h2 class="section-v2__title">How it works</h2>
                </div>
                <div class="section-v2__content">
<div class="lp-how">
    <div class="lp-how__content">
                    <div class="lp-how-item lp-how-item_lp1">
                <div class="lp-how-item__image">
                    <img class="lazy"
                         data-src="files/1.svg"
                         alt="">
                </div>
                <div class="lp-how-item__content lp-how-item__content_font-larger">
                    Tell us about your essay: Instructions, requirements and deadline.
                </div>
            </div>
                    <div class="lp-how-item lp-how-item_lp1">
                <div class="lp-how-item__image">
                    <img class="lazy"
                         data-src="files/2.svg"
                         alt="">
                </div>
                <div class="lp-how-item__content lp-how-item__content_font-larger">
                    Chat with professional writers out of 450+ and pick the best one for you.
                </div>
            </div>
                    <div class="lp-how-item lp-how-item_lp1">
                <div class="lp-how-item__image">
                    <img class="lazy"
                         data-src="files/3.svg"
                         alt="">
                </div>
                <div class="lp-how-item__content lp-how-item__content_font-larger">
                    Make a deposit and your essay writer will start working on your paper.
                </div>
            </div>
                    <div class="lp-how-item lp-how-item_lp1">
                <div class="lp-how-item__image">
                    <img class="lazy"
                         data-src="files/4.svg"
                         alt="">
                </div>
                <div class="lp-how-item__content lp-how-item__content_font-larger">
                    Release money to the writer ONLY if you’re satisfied with the outcome
                </div>
            </div>
            </div>
</div>                </div>
            </div>
        </section>
<section class="section-v2 section-v2_tips">
    <div class="row">
        <div class="section-v2__heading">
            <h2 class="section-v2__title">Essay writing & student tips</h2>
        </div>
        <div class="section-v2__content">
            <div class="tips-table">
                <div class="tips-table__item">
                    <a class="tip tip_main" href="index.html" rel="nofollow">
                        <span class="tip__title">Essay Writing Guides</span>
                    </a>
                    <a href="index.html" class="tip tip_highlighted">
                        <span class="tip__title">Essay Format Tips from an English Teacher</span>
                    </a>
                    <a href="index.html" class="tip ">
                        <span class="tip__title">Excellent Analytical Essay Writing Guide</span>
                    </a>
                    <a href="index.html" class="tip ">
                        <span class="tip__title">Nail Your Narrative Essay Outline With Expert Help</span>
                    </a>
                    <a href="index.html" class="tip ">
                        <span class="tip__title">How to Start an Essay with a Quote: Recommendations, Examples, Pros & Cons</span>
                    </a>
                </div>
                <div class="tips-table__item">
                    <a class="tip tip_main" href="index.html" rel="nofollow">
                        <span class="tip__title">Student Tips</span>
                    </a>
                    <a href="index.html" class="tip tip_highlighted">
                        <span class="tip__title">Benefits of Homework & Curious Facts</span>
                    </a>
                    <a href="index.html" class="tip ">
                        <span class="tip__title">Reasons to Go to College Explained by Professionals</span>
                    </a>
                    <a href="index.html" class="tip ">
                        <span class="tip__title">Book Report Outline: Writing Steps, Key Elements, Templates</span>
                    </a>
                </div>
                <div class="tips-table__item">
                    <a class="tip tip_main" href="index.html" rel="nofollow">
                        <span class="tip__title">Citation Guide</span>
                    </a>
                    <a href="index.html" class="tip tip_highlighted">
                        <span class="tip__title">Quote vs Paraphrase vs Summary: Which is Better?</span>
                    </a>
                    <a href="index.html" class="tip ">
                        <span class="tip__title">Guidelines and Examples on How to Cite a Paraphrase in MLA and APA</span>
                    </a>
                    <a href="index.html" class="tip ">
                        <span class="tip__title">Differences between APA vs MLA: What Format to Use?</span>
                    </a>
                    <a href="index.html" class="tip ">
                        <span class="tip__title">The Best Manual Guide For AMA Citation Style</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
        
<div class="bottom-form-wrapper sd-8 flex-order-6">
    <div class="bottom-form bottom-form_smaller bottom-form_indent_top_none lazy-bg">
        
        <div class="mini-row">
            <h2 class="h1 h1_capitalize h1_indent_top_smaller">
                Place Your Order Now!
            </h2>
            <span class="lines lines_indent_top_negative"></span>
            <p>
                                    No matter what type of essay you need, we’ll get it written,
                    <br>so let’s get started.
                            </p>
            <div class="bottom-form__form ">
<div class="pre-order-login-form ">
    <form action="index.html" id="pre-order-form" method="post" class=""
    onsubmit="ga('send','event','CTA','send','bottom form');">
                    <div class="pre-order-login-form__form-group pre-order-login-form__form-group_first">
                                <select id="pre_order_pre_order_product_paper_type" name="pre_order[pre_order_product][paper_type]" class="pre-order-login-form__select js_pre-order-login-form__select"><option value="2">Admission Essay</option><option value="3">Annotated Bibliography</option><option value="42">Application Essay</option><option value="4">Argumentative Essay</option><option value="18">Article (Any Type)</option><option value="5">Article Review</option><option value="28">Assignment</option><option value="6">Book/Movie Review</option><option value="7">Business Plan</option><option value="21">Capstone Project</option><option value="8">Case Study</option><option value="19">Content (Any Type)</option><option value="9">Coursework</option><option value="10">Creative Writing</option><option value="11">Critical Thinking</option><option value="22">Dissertation</option><option value="29">Dissertation chapter</option><option value="1" selected="selected">Essay (Any Type)</option><option value="23">Lab Report</option><option value="25">Math Problem</option><option value="12">Presentation or Speech</option><option value="20">Q&A</option><option value="13">Research Paper</option><option value="14">Research Proposal</option><option value="27">Research Summary</option><option value="24">Scholarship Essay</option><option value="30">Speech</option><option value="26">Statistic Project</option><option value="15">Term Paper</option><option value="16">Thesis</option><option value="17">Other</option></select>
            </div>
                <div class="pre-order-login-form__form-group pre-order-login-form__form-group_second">
                        <input type="email" id="pre_order_customer_email" name="pre_order[customer][email]" placeholder="Enter email to signup" class="pre-order-login-form__input" />
        </div>
        <div class="pre-order-login-form__form-group pre-order-login-form__form-group_third" style="text-align: center">
            <button class="pre-order-login-form__button btn btn-first js_button_order js_pre_order_login_form_button " type="submit"  >
                Proceed
            </button>
            <div class="site_loading js-pre-order-login-form-loader js_order_loading_img d-none-desktop-tablet d-none-mobile"></div>
                    </div>
        <span style="display:none;"><input type="hidden" id="pre_order_foc_o_subject" name="pre_order[foc_o_subject]" class="js_pre_order_field_foc_o_subject" /><input type="hidden" id="pre_order_foc_o_service" name="pre_order[foc_o_service]" class="js_pre_order_field_foc_o_service" /><input type="hidden" id="pre_order__token" name="pre_order[_token]" data-js-token-id="pre_order" value="71c4f73311e212f0966c420547c81a1d__94e37b23ccb253420d8c4a45a2a1fb17" /></span>
    </form>
            <b class="gdpr-notification ">
    By clicking “Proceed”, you agree to our <a href="terms.html"  rel="nofollow" >terms of service</a> and <a href="privacy.html"  rel="nofollow" >privacy policy</a>. We’ll occasionally send you promo and account related emails.</b>
    </div>
                            </div>
            
        </div>
    </div>
</div>
</div>

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
                  
                <div class="footer__col footer__col_mb_20 footer__col_contact" id="contact">
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
    AOS.init();
  </script>      
 </body>
</html>
