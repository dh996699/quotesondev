<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="submit-container">
				<header class="submit-header">
					<h1 class="submit-title"> <?php the_title(); ?></h1>
				</header>
			
			<?php if ( is_user_logged_in() &&  current_user_can('edit_posts')):  ?>
					<div class="quote-submission-wrapper">
						<form name="quoteform" id="quote-submission-form">

						<div>
							<label for="quote-author"> Author of Quote </label>
							<input type="text" name="quote_author" id="quote-author" required>
						</div>

						<div>
							<label for="quote-content"> Quote </label>
							<textarea name="quote-name" id="quote-content" cols="20" row="3" required> </textarea>

						</div>

						<div>
							<label for="quote-source-url"> Where did you find this quote?   </label>
							<input type="url" name="quote-source-url" id="quote-source-url"> </input>

						</div>

						<input type="submit" value="Submit Quote">

						</form>
			
					</div>

			<?php endif; ?>
				<p> Sorry, you must be logged in to submit a quote </p>

				<p>

					<a href="<?php echo wp_login_url(); ?> ">
					click here to login
					</a>
				</p>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
