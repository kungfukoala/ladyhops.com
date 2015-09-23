    <footer class="footer">
      <div class="container">
        <div class="border-horizontal">
          &nbsp;
        </div>
      </div>
      <div class="container">
      	<div class="footer-left">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
      	</div>
      	<div class="footer-right">
      		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
        	<div class="footer-made-in-oregon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ladyhops-oregon-hop.png" alt="<?php bloginfo('name'); ?> - Grown in Oregon">
            <p class="made-in-oregon">Made in Oregon</p>
            <p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.</p>
        	</div>
      	</div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </div>
  </body>
</html>
