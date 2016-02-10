<footer class="footer">
	<div class="container">
		<div class="hr">
			&nbsp;
		</div>
	</div>
	<div class="container">
		<div class="footer-header">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>
		<div class="container">
			<div class="footer-left">

			</div>
			<div class="footer-right">
				<div class="footer-made-in-oregon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ladyhops-oregon-hop.png" alt="<?php bloginfo('name'); ?> - Grown in Oregon">
					<p class="made-in-oregon">Grown in Oregon</p>
					<p><span style="color:grey">Ladyhops is a proud membor of</span><br>
						Central Oregon Hop Growers Association<br>
						Pink Boot Society</p>
				</div>

			</div>
		</div>
		<div class="footer-copyright">
		<div class="hr"></div>
		<p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <a href="<?php echo home_url(); ?>/terms-and-conditions">Terms and Conditions</a></p>
	</div>
	</div>
</footer>



		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
