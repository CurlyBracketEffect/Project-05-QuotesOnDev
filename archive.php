<?php
/**
 * The template for displaying archive pages.
 * Template Name: Archive
 * 
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main archive-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header>
			<!-- .page-header -->
			
		


		<div class="archive-content">
				<div class="quote-authors">
					<h2>Quote Authors</h2>
					<ul class= "author-list">
					<?php

					$posts = get_posts();
					echo wp_list_authors(); 
					foreach($posts as $post){
						// $authorLink = $post
											}
					?>
				
				</div><!-- authors -->

				<div class="categories">
						<h2>Categories</h2>
						<ul class="category-list">
						<?php
					$categories = get_categories( array(
						'orderby' => 'name',
						'order' => 'ASC',
					));
								
					foreach( $categories as $category ) {
						$categorylink = home_url('/') . $category->taxonomy . '/' . $category->name;
				?>
					<!-- DO  -->							
						
						<li><a href = <?php echo "$categorylink" ?> class = "category-link"><?php echo $category->name ?></a></li>
					
					<?php } ?>
					</ul>
				</div>	<!-- categories -->

				<div class="tags">
					<h2>Tags</h2>
					<ul class="tags-list">
						<?php
					$tags = get_tags( array(
						'orderby' => 'name',
						'order' => 'ASC',
					));
								
					foreach( $tags as $tag ) {
						$taglink = home_url('/') . $tag->taxonomy . '/' . $tag->name;
				?>
					<!-- DO  -->							
						
						<li><a href = <?php echo "$taglink" ?> class = "tag-link"><?php echo $tag->name ?></a></li>
					
					<?php } ?>
					</ul>
				</div><!-- tags -->
		</div><!-- archive-content -->
				
				<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
