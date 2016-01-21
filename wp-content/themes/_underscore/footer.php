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
            <?php
          		$args = array(
          			'post_type' => 'product',
          			'posts_per_page' => 3,
                'orderby' => 'rand'
        			);
          		$loop = new WP_Query( $args );
          		if ( $loop->have_posts() ) {
          			while ( $loop->have_posts() ) : $loop->the_post();
        				wc_get_template_part( 'content', 'product' );
          			endwhile;
        		    } else {
        			       echo __( 'No products found' );
          		}
          		wp_reset_postdata();
          	?>
            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
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
        <p class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.</p>
      </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </div>
  </body>
</html>
