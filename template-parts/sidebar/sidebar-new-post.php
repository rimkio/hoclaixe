<div class="post-our-news">

	<div class="sidebar-wrap-posts">

		<h3>Bài viết mới nhất</h3>

		<?php

		$args = array(

			"post_type" => "post",

			"posts_per_page" => 6,

			"post_status"=> "publish",

		);

		$the_query = new WP_Query($args); ?>

		<?php if ($the_query->have_posts()) : ?>

			<div>

				<?php

				$i = 0;

				while ($the_query->have_posts()) :

					$the_query->the_post();

					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), array(80, 80));

					$duration = ($i * 300) + 500;

					$words_limit = 9;

					$title = get_the_title();

					$title = wp_trim_words($title, $words_limit, '');

					?>

					<div class="home-our-news__card" data-aos="fade-up" data-aos-duration="<?= $duration ?>">

						<div class="home-our-news__card-image">

							<?php if ($featured_img_url) { ?>

								<a href="<?= get_permalink() ?>">

									<img src="<?= $featured_img_url ?>" alt="<?= get_the_title() ?>">

								</a>

							<?php } ?>

						</div>

						<div class="home-our-news__card-content">

							<div class="home-our-news__card-content_author">

								<span><?= get_the_date('d/m/Y') ?></span>

<!--								<span>--><?//= get_the_author() ?><!--</span>-->

							</div>

							<h6 class="home-our-news__card-content_title"><a href="<?= get_permalink() ?>"><?php echo $title ?>...</a></h6>

						</div>

					</div>

					<?php

					$i++;

				endwhile; ?>

				<?php wp_reset_postdata(); ?>

			</div>

		<?php else : ?>

			<p style="text-align: center;margin-top: 50px"><?php esc_html_e('Xin lỗi, không có bài phù hợp tiêu chí của bạn.'); ?></p>

		<?php endif; ?>



	</div>

</div>