<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header();?>

	<div id="primary" class="submit-content-area content-area">
		<main id="main" class="site-main" role="main">
			 <div class="quote-form">
					<h2 class="heading">Submit a Quote</h2>
					<?php if (is_user_logged_in()) { ?>
					<form>
						<p>
							<label for = "name">Author of Quote<span class="required"></span></label><br>
                            <input class = "quote-author"  type = "text" name = "name" value-size = "40" required><br>
						</p>
						<p>
							<label for = "message">Quote<span class="required"></span></label><br>
                            <textarea class = "quote-quote" type = "text" name = "message" cols = "40" rows="10" required></textarea>
						</p>
						<p>
							<label for = "email">Where did you find this quote?(e.g. book name)<span class="required"></span></label><br>
                            <input class = "quote-source" type = "text" name = "email" value-size = "40"><br>
						</p>
						<p>
							<label for = "subject">Provide the URL of the quote source, if available<span class="required"></span></label><br>
                            <input class = "quote-proof" type = "text" name = "subject" value-size = "40"><br>
						</p>
							<input type = "submit" value="Submit Quote" id = "submit">
        			</form>
				</div>
				<?php } else { // not logged in ?>

				<p class="sorry">Sorry, you must be logged in to submit a quote!</p>
				<a href="<?php echo esc_url( home_url( '/wp-login.php' ) );?>">Click here to login.</a>
				<?php }?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
