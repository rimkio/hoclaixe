<div class="hlx-home-news">
    <div class="container">
        <h2 class="hlx-heading">Tin Tức</h2>
        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 12
        ];
        if (get_posts($args)) { ?>
            <div class="d-none d-md-block hlx-home-news__wrap hlx-home-news__wrap-dk">
                <?php $chunks = array_chunk(get_posts($args),  3);
                foreach ($chunks as $key => $chunk) { ?>
                    <div class="hlx-home-news__wrap-item">
                        <div class="item-news-wrap">
                            <?php foreach ($chunk as $item) {
                                $featured_img_url = get_the_post_thumbnail_url($item->ID, 'full');
                            ?>
                                <div class="item-news-wrap__item">
                                    <a class="item-news-wrap__item-img" href="<?php the_permalink($item->ID) ?>">
                                        <?php if ($featured_img_url) { ?>
                                            <img src="<?= $featured_img_url ?>" alt="<?= $item->post_title ?>"/>
                                        <?php } ?>
                                    </a>
                                    <span class="item-news-wrap__item-date"><?= get_the_date('d-m-Y') ?></span>
                                    <h3><a href="<?php the_permalink($item->ID) ?>"><?= $item->post_title ?></a></h3>
                                    <div class="item-news-wrap__item-excerpt"><?php echo wp_trim_words($item->post_content, 20, '...'); ?></div>
                                    <a class="item-news-wrap__item-learmore" href="<?php the_permalink($item->ID) ?>">Xem thêm
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="12" viewBox="0 0 22 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5689 0.339296C14.9338 -0.0752683 15.5657 -0.115527 15.9802 0.249377L21.6607 5.24938C21.8764 5.43922 22 5.71268 22 6.00001C22 6.28735 21.8764 6.5608 21.6607 6.75065L15.9802 11.7506C15.5657 12.1156 14.9338 12.0753 14.5689 11.6607C14.204 11.2462 14.2442 10.6143 14.6588 10.2494L18.3504 7.00001H1C0.447715 7.00001 0 6.5523 0 6.00001C0 5.44773 0.447715 5.00001 1 5.00001H18.3504L14.6588 1.75065C14.2442 1.38575 14.204 0.753861 14.5689 0.339296Z" fill="#11542B" />
                                        </svg>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="d-block d-md-none hlx-home-news__wrap hlx-home-news__wrap-mb">
                <?php $chunks = array_chunk(get_posts($args),  1);
                foreach ($chunks as $key => $chunk) { ?>
                    <div class="hlx-home-news__wrap-item">
                        <div class="item-news-wrap">
                            <?php foreach ($chunk as $item) {
                                $featured_img_url = get_the_post_thumbnail_url($item->ID, 'full');
                            ?>
                                <div class="item-news-wrap__item">
                                    <a class="item-news-wrap__item-img" href="<?php the_permalink($item->ID) ?>">
                                        <?php if ($featured_img_url) { ?>
                                            <img src="<?= $featured_img_url ?>" alt="<?= $item->post_title ?>"/>
                                        <?php } ?>
                                    </a>
                                    <span class="item-news-wrap__item-date"><?= get_the_date('d-m-Y') ?></span>
                                    <h3><a href="<?php the_permalink($item->ID) ?>"><?= $item->post_title ?></a></h3>
                                    <div class="item-news-wrap__item-excerpt"><?php echo wp_trim_words($item->post_content, 20, '...'); ?></div>
                                    <a class="item-news-wrap__item-learmore" href="<?php the_permalink($item->ID) ?>">Xem thêm
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="12" viewBox="0 0 22 12" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5689 0.339296C14.9338 -0.0752683 15.5657 -0.115527 15.9802 0.249377L21.6607 5.24938C21.8764 5.43922 22 5.71268 22 6.00001C22 6.28735 21.8764 6.5608 21.6607 6.75065L15.9802 11.7506C15.5657 12.1156 14.9338 12.0753 14.5689 11.6607C14.204 11.2462 14.2442 10.6143 14.6588 10.2494L18.3504 7.00001H1C0.447715 7.00001 0 6.5523 0 6.00001C0 5.44773 0.447715 5.00001 1 5.00001H18.3504L14.6588 1.75065C14.2442 1.38575 14.204 0.753861 14.5689 0.339296Z" fill="#11542B" />
                                        </svg>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="news-slick-wrap"><div class="news-slick"></div></div>
        <?php
        }
        ?>
        <span class="border-section"></span>
    </div>
</div>