<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/b03a987b-4baa-49d1-bc79-80ba330dfb0b.js"></script>
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <?php wp_head(); ?>  
</head>
<body <?php body_class(); ?>>
  <header class="header" role="banner">
    <div class="container">
      <div class="header-logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ladyhops-cropped.png" width="137" height="153" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
        </a>
      </div>
      <div class="header-story">
        <a class="nav-story" href="<?php echo home_url(); ?>/story">Story</a>
      </div>
      <div class="header-shop">
        <a class="nav-shop" href="<?php echo home_url(); ?>/shop">Shop</a>
      </div>
      <div class="header-contact">
        <a class="nav-contact" href="<?php echo home_url(); ?>/contact">Contact</a>
      </div>
      <div class="header-cart">
        <div class="header-social">
          <a class="nav-facebook" href="<?php echo home_url(); ?>/shop">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-icon-facebook.png" width="30" height="30" alt="Find <?php bloginfo('name'); ?> on Facebook">
          </a>
          <a class="nav-instagram" href="<?php echo home_url(); ?>/shop">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-icon-instagram.png" width="30" height="30" alt="Find <?php bloginfo('name'); ?> on Instagram">
          </a>
        </div>
        <a class="nav-account" href="<?php echo home_url(); ?>/shop">My Account</a>
        <a class="nav-bag" href="<?php echo home_url(); ?>/shop">Bag</a>
      </div>
    </div>
  </header>
  <div class="main-container">