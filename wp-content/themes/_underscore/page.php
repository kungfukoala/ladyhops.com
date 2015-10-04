<?php get_header(); ?>
<div class="container">
	<main role="main">
		<section>
    <h1><?php the_title(); ?></h1>
    <hr>
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
	</main>
<?php get_footer(); ?>
</div>