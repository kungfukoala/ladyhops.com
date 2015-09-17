<footer class="footer">
	<div class="footer-search">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>
	<div class="footer-nav">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
  <div class="footer-legal">
    <p class="copyright">
    	&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
    </p>
  </div>
</footer>
<?php wp_footer(); ?>