<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<p>Brought to you by <a href="https://redacademy.com/toronto/">Red Academy</a></p>
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
</div><!-- .page-contatiner -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<?php wp_footer(); ?>
	</body>
</html>
