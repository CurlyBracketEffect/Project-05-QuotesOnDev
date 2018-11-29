<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="quote-area">
			<?php
				$args= array(
					'posts_per_page' => '1',
					'orderby' => 'rand',
				);

				$firstPost = new WP_Query($args);

				while($firstPost-> have_posts()) : $firstPost -> the_post();
				?>
				<div class="quote"><?php the_content(); ?></div>
			
			<p class="author"><?php the_title(); ?><p class = "source"></p></p>
				<?php
					// $firstAuthor = the_title();
					// $firstQuote = the_content();
			
			endwhile;	?>
			
			

			<!-- <p class="quote"><?php// echo $firstQuote?></p>
			
			<p class="author"><?php// echo $firstAuthor?></p> -->

			<!-- <p class="quote">There are two ways to write error-free programs; only the third one works.</p>
			
			<p class="author">Jorrin Bruns<p class = "source"></p> -->
			<button class="new-quote">Show Me Another!</button>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
