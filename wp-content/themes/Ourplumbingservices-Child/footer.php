<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<style>
.quote_float_btn {
    display: block !important;
}
.quote_float_btn {
    font-size: 20px;
    line-height: 40px !important;
    transform: rotate(270deg);
    position: fixed;
    bottom: 50%;
    text-transform: uppercase;
    width: 170px;
    height: 40px;
    right: -65px;
    margin: 0 auto;
    background: #5E057E;
    color: #fff;
    text-align: center;
    z-index: 99;
    /*outline: 2px solid #fff !important;*/
    outline-offset: -2px;
	font-weight:400;
	border-radius:50px;
}
#zoomBtn i {
    position: absolute;
    right: 0px;
    width: 40px;
    height: 40px;
    background: #000;
    text-align: center;
    line-height: 40px;
}
.fa-hand-o-left:before {
    content: "\f0a5";
}
.quote_float_btn:hover, .quote_float_btn:active, .quote_float_btn:focus {
    color: #fff;
    text-decoration: none;
}
div#getQuoteModal {
    background: rgba(0,0,0,0.5);
	z-index:11111;
}
div#getQuoteModal .modal-header {
    background: #5e057e;
    display: block;
    width: 100%;
    border: none;
    padding: 10px 10px;
    text-align: center;
    position: relative;
    border-radius: 5px 5px 0 0;
}

div#getQuoteModal .modal-header button span {
    display: block;
    width: 100%;
    text-align: center;
}

div#getQuoteModal .modal-header h4, div#getQuoteModal .modal-header button {
    color: #fff;
    opacity: 1;
    width: 100%;
}
div#getQuoteModal .modal-header h6, div#getQuoteModal .modal-header h6 a {
    color: #fff;
}
div#getQuoteModal .modal-header h6 a {
    text-decoration: underline;
}
div#getQuoteModal .modal-header button {
    background: #fff;
    width: 35px;
    height: 35px;
    text-align: center;
    border-radius: 50px;
    line-height: 0;
    border: none;
    position: absolute;
    top: 13px;
    right: 8px;
    font-size: 30px;
}
div#getQuoteModal .modal-content {
    box-shadow: none;
    border: none;
    margin-top: 50px;
    border-radius: 5px;
        }

div#getQuoteModal form h2 {
    display: none;
}
div#getQuoteModal .modal-body {
   padding-top: 30px;
}

div#getQuoteModal.modal.fade.in {
    opacity: 1;
}
.modal-header .close{
    margin:0px !important;
    padding:5px !important;
    text-shadow:none !important;
    font-weight:100 !important;
    outline: none !important;
    padding-top: 4px !important;
}
.modal-title{
    color:#fff !important;
	font-size:26px;
}
.modal-open[style] {
    padding-right: 0px !important;
}
.modal-header .btn-close{
    outline: none !important;
}
.modal-open {
    overflow: hidden !important;
    position:fix !important;
}
.modal-body .thm-btn{
    margin:0 auto;
    display:block;
}
.modal-body{
    padding-bottom:0px !important;
}
body.modal-body{
    line-height:0px;
}
div#getQuoteModal .modal-header button span{
	color: #5E057E;
	font-weight: 600;
	margin-top: 0px;
}
	.fix-call-button a {
    position: fixed;
    bottom: 0;
    width: 100%;
    background: #5E057E;
    color: #fff;
    padding: 10px;
    font-size: 22px;
    text-align: center;
    border-radius: 20px 20px 0 0;
    z-index: 1111;
}
.fix-call-button i {
    background: #7E3697;
    border: 1px solid;
    width: 42px;
    height: 42px;
    line-height: 42px;
    display: inline-block;
    border-radius: 100px;
    font-size: 14px;
    margin-right: 8px;
    vertical-align: 2px;
}
.quote_float_btn:hover{
	background: #7E3697;
		/*outline: 2px solid #fff !important;*/
	}
	.quote_float_btn{
		display:none;
	}
	..late-dsply{
		display:none;
	}
@media (min-width: 576px){
.modal-dialog {
    max-width: 650px !important;
}
	}
	@media (max-width: 768px){
.zoom-call {
    background-color: #09367d;
    right: 30px;
    position: fixed;
    bottom: 150px;
    z-index: 99999;
}
.add-m-btn i.fa.fa-phone {
    position: absolute !important;
    right: 0px !important;
    width: 50px !important;
    height: 50px !important;
    background: #201b6f !important;
    text-align: center !important;
    line-height: 50px !important;
    border-radius: 50px !important;
}
}
@media (min-width: 768px){
	.fix-call-button a{
    display: none;
}
}
	
</style>

<!--==============================
    Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                     <div class="col-md-6 col-lg-5">
                        <div class="widget footer-widget">
                            <div class="about-logo">
                                <a href="#"><img src="<?php echo site_url();?>/wp-content/uploads/2023/07/footer-new-logo.svg" alt="Plumer"></a>
                            </div>
                            <div class="themeholy-widget-schedule">
                                <p class="schedule-info">Hassle-Free Emergency Plumbing Services You Can Count On</p>
								<p>We offer long-term, cost-effective repair solutions that help maintain plumbing systems. When you call us for a job, we get straight to work without wasting time or causing disturbance to your home or business schedule.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="<?php echo site_url();?>">Home</a></li>
                                    <li><a href="/#about-sec">About Us</a></li>
                                    <li><a href="/#service-sec">Our Services</a></li>
									<li><a href="/#why-choose">Why Choose Us</a></li>
                                    <li><a href="/#contact-sec">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget newsletter-widget footer-widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="themeholy-widget-contact">
                                        <div class="info-box">
                                            <div class="info-box_icon">
                                                <i class="fas fa-location-dot"></i>
                                            </div>
                                            <p class="info-box_text">Melbourne</p>
                                        </div>
                                        <div class="info-box">
                                            <div class="info-box_icon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <p class="info-box_text">
                                                <a href="tel:0466 925 443" class="info-box_link">0466 925 443</a>
                                            </p>
                                        </div>
                                        <div class="info-box">
                                            <div class="info-box_icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <p class="info-box_text">
                                                <a href="mailto:yourplumbingservicemelbourne@gmail.com" class="info-box_link">yourplumbingservicemelbourne@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-12 text-center">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="#">Your Plumbing Service</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php /* <div class="shape-mockup" data-top="0%" data-left="0%"><img src="<?php bloginfo('template_directory'); ?>/assets/img/shape/footer_shape_1.png" alt="shape"></div>
        <div class="shape-mockup" data-bottom="0%" data-right="0%"><img src="<?php bloginfo('template_directory'); ?>/assets/img/shape/footer_shape_2.png" alt="shape"></div> */ ?>
    </footer>

    <!--********************************
            Code End  Here 
    ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
<a href="javascript:void(0);" data-toggle="modal" data-target="#getQuoteModal" title="Get Quote" class="zoom-fab zoom-message zoom-btn-large quote_float_btn" id="zoomBtn" style="">Get A Quote </a>
<?php /* <a href="tel:0391021448" class="zoom-fab zoom-call zoom-btn-large d-block d-sm-none add-m-btn" id="zoomBtn"><i class="fa fa-phone"></i></a>*/ ?>
    
<div class="modal fade custom-form-style-1" id="getQuoteModal" tabindex="-1" role="dialog" aria-labelledby="getQuoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="getQuoteModalLabel">Book A Plumber</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"><?php echo do_shortcode('[contact-form-7 id="40" title="Contact form"]'); ?></div>
    </div>
</div>
</div>
<div class="fix-call-button"><a href="tel:0466 925 443" class="white-bg primary-color"><span class="call-icon"><i class="fas fa-phone"></i></span><span>0466 925 443</span></a></div>
<!-- Jquery -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/isotope.pkgd.min.js"></script>

    <!-- Main Js File -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script>
jQuery( document ).ready(function($) {
		jQuery('.quote_float_btn').on('click', function() {
    	jQuery('#getQuoteModal').modal('show');
		});
		jQuery('.close').on('click', function() {
   	    jQuery('#getQuoteModal').modal('hide');
	    });
	    jQuery('.pop-up-btn').on('click', function() {
    	jQuery('#getQuoteModal').modal('show');
		});
		jQuery('.themeholy-mobile-menu ul li').click(function(){
  		jQuery('.themeholy-menu-wrapper').hide();
		jQuery('.themeholy-menu-toggle').click(function(){
    	jQuery('.themeholy-menu-wrapper.themeholy-body-visible').show();
		});
		
});
});
</script>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://www.yourplumbingservice.com.au/thank-you/';
}, false );
</script>
<script>
jQuery('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top -100
        }, 1000);
    }
});
</script>
<?php wp_footer(); ?>

</body>
</html>
