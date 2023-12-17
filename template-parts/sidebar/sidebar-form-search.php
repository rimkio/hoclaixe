<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

	<div class="hoclaixe-wrapper-form">

		<div class="search-fields">

			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Tìm kiếm bài viết...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Tìm kiếm bài viết', 'label') ?>" />

		</div>


		<div class="submit-button-search">

			<div class="btn-submit-search">

				<input type="image" class="image-submit" alt="Search" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-submit.svg" />

			</div>

		</div>

	</div>

</form>