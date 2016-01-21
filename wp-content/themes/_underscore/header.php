<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<script type="text/javascript" src="https://fast.fonts.net/jsapi/b03a987b-4baa-49d1-bc79-80ba330dfb0b.js"></script>
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link rel="canonical" href="<?php echo get_permalink(); ?>"> <!-- Double Check Permalink -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" rel="apple-touch-icon-precomposed">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:url" content="<?php echo get_permalink(); ?>"> <!-- Double Check Permalink -->
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php get_template_part( 'navigation' ); ?>
  <div class="main-container">
