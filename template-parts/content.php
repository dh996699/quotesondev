<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

$source = get_post_meta(get_the_ID(),'_qod_quote_source', true);
$source_url = get_post_meta(get_the_ID(),'_qod_quote_source_url', true);

?>
<section class="content-container">
<article class="entry-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>

	<div class="entry-content" id="quote-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="entry-meta">
	<?php 
		echo '<h2 class="entry-title">';
		echo "― ";
		the_title();
		echo '</h2>'; 
	?>
    
	<?php if($source && $source_url): ?>
    <span class="source">, 
		<a class="source-url" href="<?php echo $source_url;?>">
		<?php echo $source;?>
		</a>
	</span>

	<?php 
	elseif ($source): ?>
		<span class="source">,
			<?php echo $source; ?>
		</span>

	<?php else: ?>
		<span class="source"></span>
	<?php endif; ?>
	</div>  <!--entry meta-->
</article><!-- #post-## -->
</section>
<?php if (is_home() || is_single()):?>

	<button class="show-me-another" type="button" id="new-quote-button"> Show Me Another!</button>

<?php endif; ?>
