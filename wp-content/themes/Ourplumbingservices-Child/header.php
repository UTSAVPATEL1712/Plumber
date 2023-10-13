<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	 <title><?php wp_title(' | ', 'echo', 'right'); ?></title>
	<!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--==============================
      Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <!--==============================
        All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PD8WS93W');</script>
	<!-- End Google Tag Manager -->
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11267865697"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-11267865697');
	</script>
	<script>
	  gtag('config', 'AW-11267865697/fYI6CIaA4b4YEOH49_wp', {
		'phone_conversion_number': '0466 925 443'
	  });
	</script>
	<?php if(is_page('78')){?> 
	<!-- Event snippet for Submit Website Form conversion page -->
	<script>
	  gtag('event', 'conversion', {'send_to': 'AW-11267865697/oAdQCM_v4L4YEOH49_wp'});
	</script>
	<?php } ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PD8WS93W"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="themeholy-menu-wrapper">
        <div class="themeholy-menu-area text-center">
            <button class="themeholy-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo site_url();?>"><img src="<?php echo site_url();?>/wp-content/uploads/2023/07/logo-main.png" alt="Plumer"></a>
            </div>
            <div class="themeholy-mobile-menu">
                <?php
                    wp_nav_menu( array(
                                        'theme_location' => 'primary',
                                        'add_li_class'  => 'dropdown menu-item1',
                                         'container' => '',
                    ) );
                    ?>
            </div>
        </div>
    </div>
      <!--==============================
    Header Area
==============================-->
    <header class="themeholy-header header-layout1 header-layout2 header-layout3">
        <div class="position-relative">
            <div class="container themeholy-container">
                <div class="row align-items-center justify-content-between res-logo">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo site_url();?>"><img src="<?php echo site_url();?>/wp-content/uploads/2023/07/logo-latest.svg" alt="Plumer"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="menu-top">
                            <div class="row gx-0 justify-content-between align-items-center">
                                <div class="col-auto d-none d-lg-block">
                                    <div class="header-info">
                                        <div class="icon-btn">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="header-info_label">Call Us 24/7:</span>
                                            <a href="tel:0466 925 443" class="header-info_link">0466 925 443</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <div class="header-info">
                                        <div class="icon-btn">
                                            <i class="fas fa-messages"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="header-info_label">Email Us: </span>
                                            <a href="mailto:yourplumbingservicemelbourne@gmail.com" class="header-info_link">yourplumbingservicemelbourne@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <div class="header-info">
                                        <div class="icon-btn">
                                            <i class="fas fa-location-dot"></i>
                                        </div>
                                        <div class="media-body">
                                            <span class="header-info_label">Servicing: </span>
                                            <span class="header-info_link">Melbourne</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto d-none d-xxl-block">
									<a href="javascript:void(0);" class="pop-up-btn themeholy-btn style4" data-toggle="modal" data-target="#getQuoteModal">Get a Quote</a>
                                </div>
                                <div class="col-auto d-lg-none d-block ms-auto">
                                    <button type="button" class="themeholy-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
        <div class="sticky-wrapper1 sticky1">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container themeholy-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                 <?php
                                            wp_nav_menu( array(
                                                'theme_location' => 'primary',
                                                'add_li_class'  => 'dropdown menu-item1',
                                                'container' => '',
                                             ) );
                                            ?>
                            </nav>

                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <div class="social-links text-center">
									<span class="text-white">Work Time: Mon - Fri 09 AM - 6 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>