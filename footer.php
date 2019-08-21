<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-site-info">

				<nav id="footer-site-navigation" class="footer-main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<p class="footer-copy-right"> Brought to you by <a href="#"> David Huynh </a> </p>
		
				</nav><!-- #site-navigation -->

				</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div><!-- #page -->

		<?php wp_footer(); ?>
	</div> <!-- page-container -->
	</body>
</html>
