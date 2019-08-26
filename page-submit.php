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
							<input type="text" name="quote-author-input" id="quote-author" required></input>
						</div>

						<div>
							<label for="quote-content"> Quote </label>
							<textarea name="quote-name" id="quote-content" cols="10" row="3" required> </textarea>

						</div>

						<div>
                            <label for="quote-source">Where did you find this quote? (e.g. book name)</label>
                            <input type="text" name="quote-source" id="quote-source"></input>
                        </div>

						<div>
							<label for="quote-source-url"> Where did you find this quote? (URL to the quote e.g. http://www.google.com)</label>
							<input type="url" name="quote-source-url" id="quote-source-url"></input>

						</div>

						<input id="submit-quote-button" type="submit" value="Submit Quote"></input>
						
						</form>
						
					</div>

					<?php else: ?>
					<p> Sorry, you must be logged in to submit a quote </p>
					<a href="<?php echo wp_login_url(); ?> ">
					click here to login
					</a>

			<?php endif; ?>

			<div class="success-message" id="success-message">
			</div>
				
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
