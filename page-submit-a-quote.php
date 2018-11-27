<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header();?>

	<div id="primary" class="submit-content-area content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'submit' ); ?>

            <?php endwhile; // End of the loop. ?>
            
            <div class="quote-form">
					<h2 class="heading">Submit a Quote</h2>
					<form>
						<p class="name">
							<label for = "name">Author of Quote<span class="required"></span></label><br>
                            <input type = "text" name = "name" value-size = "40" required><br>
						</p>
						<p class="quote">
							<label for = "message">Quote<span class="required"></span></label><br>
                            <textarea type = "text" name = "message" cols = "40" rows="10" required></textarea>
						</p>
						<p class="source">
							<label for = "email">Where did you find this quote?(e.g. book name)<span class="required"></span></label><br>
                            <input type = "text" name = "email" value-size = "40" required><br>
						</p>
						<p class="proof">
							<label for = "subject">Provide the URL of the quote source, if available<span class="required"></span></label><br>
                            <input type = "text" name = "subject" value-size = "40" required><br>
						</p>
							<input type = "submit" value="submit" id = "submit">
        
                    </form>
                </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
