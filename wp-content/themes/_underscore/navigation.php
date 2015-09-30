  <header class="header" role="banner">
    <div class="container">
      <div class="header-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ladyhops-cropped.png" width="127" height="142" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"></a></div>
      <div class="header-navigation">
        <div class="header-story"><a class="nav-story" href="<?php echo home_url(); ?>/story">Story</a></div>
        <div class="header-shop"><a class="nav-shop" href="<?php echo home_url(); ?>/shop">Shop</a></div>
        <div class="header-contact"><a class="nav-contact" href="<?php echo home_url(); ?>/contact">Contact</a></div>
        <div class="header-cart">
          <div class="header-social">
            <a class="nav-facebook" href="<?php echo home_url(); ?>/shop">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-icon-facebook.png" width="25" height="25" alt="Find <?php bloginfo('name'); ?> on Facebook">
            </a>
            <a class="nav-instagram" href="<?php echo home_url(); ?>/shop">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social-icon-instagram.png" width="25" height="25" alt="Find <?php bloginfo('name'); ?> on Instagram">
            </a>
          </div>
          <a class="nav-account" href="<?php echo home_url(); ?>/my-account">My Account</a>
          <a class="nav-bag" href="<?php echo home_url(); ?>/cart">Bag</a>
        </div>
      </div>
    </div>
  </header>