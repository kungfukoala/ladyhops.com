<?php get_header(); ?>
		<section role="main">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home1.2.png"> -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="introduction">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'underscoreblank' ); ?></h2>
			</article>
		<?php endif; ?>
		</section>
  <?php get_footer(); ?>
