<?php get_header(); ?>
<div class="container">
	<main role="main">
		<section>
    <h1 class="title-page"><?php the_title(); ?></h1>
    <div class="hr"></div>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'underscoreblank' ); ?></h2>
			</article>
		<?php endif; ?>
		<?php if (is_page(contact)) { ?>
		<script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/ea1405769fd4db2a5e52a35ff3d22216f832ba3f.html" id="instansive_ea1405769f" name="instansive_ea1405769f"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
		<?php } ?>
		</section>
	</main>
<?php get_footer(); ?>
</div>
