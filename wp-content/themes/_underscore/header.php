<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
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
  <div class="main-container">
  <header class="header" role="banner">
    <div class="container">
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ladyhops-cropped.png" width="137" height="153" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
        </a>
      </div>
      <nav class="utility-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'utility-navigation' ) ); ?>
      </nav>
    </div>
    <nav class="primary-navigation" role="navigation">
      <?php underscore_nav(); ?>
      <?php wp_nav_menu( array( 'theme_location' => 'social-navigation' ) ); ?>
    </nav>
  </header>