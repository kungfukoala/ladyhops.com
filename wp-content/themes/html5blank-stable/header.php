<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="/favicon.ico" rel="shortcut icon">
    <link href="/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
		<link rel="canonical" href="<?php echo get_permalink(); ?>">
		<script type="text/javascript" src="https://fast.fonts.net/jsapi/b03a987b-4baa-49d1-bc79-80ba330dfb0b.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:url" content="<?php echo get_permalink(); ?>">
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<header class="header" role="banner">
				<div class="container">
		      <div class="header-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ladyhops-cropped.png" width="127" height="142" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"></a></div>
		      <div class="header-navigation">
		        <div class="header-story"><a class="nav-story" href="<?php echo home_url(); ?>/story">Story</a></div>
		        <div class="header-shop"><a class="nav-shop" href="<?php echo home_url(); ?>/shop">Shop</a></div>
		        <div class="header-contact"><a class="nav-contact" href="<?php echo home_url(); ?>/contact">Contact</a></div>
		        <div class="header-cart">
		          <div class="header-social">
		            <a class="nav-facebook" href="https://www.facebook.com/centraloregonladyhops">
		              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-icon-facebook.png" width="25" height="25" alt="Find <?php bloginfo('name'); ?> on Facebook">
		            </a>
		            <a class="nav-instagram" href="http://instagram.com/ladyhopsfarm/">
		              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-icon-instagram.png" width="25" height="25" alt="Find <?php bloginfo('name'); ?> on Instagram">
		            </a>
		          </div>
		          <a class="nav-account" href="<?php echo home_url(); ?>/my-account">My Account</a>
		          <a class="nav-bag" href="<?php echo home_url(); ?>/cart">Bag</a>
							<a class="nav-cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
								<?php echo sprintf (_n( '%d <br>item', ' %d <br>items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
							</a>
						</div>
		      </div>
		    </div>
			</header>
