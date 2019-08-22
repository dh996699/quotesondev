<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

$source = get_post_meta(get_the_ID(),'_qod_quote_source', true);
$source_url = get_post_meta(get_the_ID(),'_qod_quote_source_url', true);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archive-page-header">
				<?php
					the_archive_title( '<h1 class="archive-page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<article class="archive-entry-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="archive-entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

					<div class="archive-entry-meta">
						<?php  
						echo '<h2 class="archive-entry-title">';
						echo "―";
						the_title();
						echo '</h2>'; 
						?>

						<?php if ($source && $source_url): ?>
							<span class="archive-source">, 
							<a href="<?php echo $source_url;?>">
							<?php echo $source?></a>
							</span>

						<?php 
							elseif ($source): ?>
								<span class="archive-source">,
									<?php echo $source; ?>
								</span>
							<?php else: ?>
								<span class="archive-source"></span>
							<?php endif; ?>

					</div>  <!--entry meta-->
				</article><!-- #post-## -->


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
