<?php

/**
 * Template tags
 */

if ( ! function_exists( 'hoclaixe_template_news_hero_header' ) ) {
	function hoclaixe_template_news_hero_header() {

		$page_for_posts_id = get_option( 'page_for_posts' );
		$blog_link         = get_permalink( $page_for_posts_id );

		$title = 'Tin tức và tài nguyên';

		if (is_category()) {
			$category = get_queried_object();
			$title = $category->name;
		}
		if (is_tag()) {
			$tag = get_queried_object();
			$title = $tag->name;
		}

		$s = get_search_query();
		if (is_search()) {
			$title = 'Kết quả tìm kiếm: '.  $s;
		}

		ob_start(); ?>
        <div class="hlx-page-hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-content">
						<?php
						if (function_exists('yoast_breadcrumb')) {
							yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
						}
						?>
                        <h1 class="h2"><?= $title ?></h1>
                        <p>Cập nhật những thông tin và những bài viết chia sẽ kinh nghiệm để học lái xe tốt hơn.</p>
                    </div>
                    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center">
                        <img src="<?= get_template_directory_uri().'/resources/assets/images/hero-graphic.png' ?>" alt="">
                    </div>
                </div>

            </div>
        </div>

		<?php
		return ob_get_clean();
	}
}
