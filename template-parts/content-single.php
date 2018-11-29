<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
	</header><!-- .entry-header -->

	<div class="quote-area">
			
			<p class="quote"><?php the_content(); ?></p>
			
			<p class="author"><?php the_title(); ?><p class = "source"></p></p>
			<button class="new-quote">Show Me Another!</button>

	</div>

	<div class="entry-content">
		<?php //the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
