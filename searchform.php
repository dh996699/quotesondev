<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset class="fieldset-container">
		<div>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		</div>
		<div>
		<button class="search-submit">
			<?php echo '<i class="fa fa-search"></i>'?>
		</button>
		</div>
	</fieldset>
</form>
