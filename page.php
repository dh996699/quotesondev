<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="about-page-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="about-entry-header">
						<?php the_title( '<h1 class="about-entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="about-entry-content">
						<p><?php the_content(); ?></p>
						<?php
						wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
						) );
						?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
