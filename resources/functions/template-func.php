<?php
function hoclaixe_post_item() {
	?>
    <div class="item-inner">
        <a href="<?= get_the_permalink(); ?>" class="img-wrap"
           title="<?= get_the_title(); ?>">
            <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), array(346, 196)) : ''; ?>" alt="<?= get_the_title(); ?>"/>
        </a>
        <div class="item-content">
            <div class="date-time"><?= get_the_date(); ?></div>
            <hr/>
            <h3 class="title">
                <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
            </h3>
            <div class="excerpt"><?= wp_trim_words( get_the_excerpt(), 20, '...' ); ?></div>
            <a class="btn-more" href="<?= get_the_permalink() ?>">Xem thêm <svg xmlns="http://www.w3.org/2000/svg" width="22" height="12" viewBox="0 0 22 12" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5689 0.339296C14.9338 -0.0752683 15.5657 -0.115527 15.9802 0.249377L21.6607 5.24938C21.8764 5.43922 22 5.71268 22 6.00001C22 6.28735 21.8764 6.5608 21.6607 6.75065L15.9802 11.7506C15.5657 12.1156 14.9338 12.0753 14.5689 11.6607C14.204 11.2462 14.2442 10.6143 14.6588 10.2494L18.3504 7.00001H1C0.447715 7.00001 0 6.5523 0 6.00001C0 5.44773 0.447715 5.00001 1 5.00001H18.3504L14.6588 1.75065C14.2442 1.38575 14.204 0.753861 14.5689 0.339296Z" fill="#11542B"/>
                </svg></a>
        </div>
    </div>
	<?php
}

function hoclaixe_news_related_post( $ID ) { ?>
    <div class="related-single">
        <div class="container">
            <?php
            $query = new WP_Query( array(
	            'post_type'      => 'post',
	            'post_status'    => 'publish',
	            'posts_per_page' => 3,
	            'category__in'   => wp_get_post_categories( $ID ),
	            'post__not_in'   => array( $ID )
            ) );
            ?>
            <h3 class="related-title"><?= __( 'RECENT ARTICLES' ); ?></h3>
            <div class="row">
                <?php
                if ( $query->have_posts() ) {
	                $i = 1;
	                while ( $query->have_posts() ) {
		                $query->the_post();
		                $anm = 'data-aos="fade-up" data-aos-duration="' . ( $i * 400 ) . '"';
		                ?>
                        <div class="col-lg-4 item" <?= $anm; ?>>
                            <div class="item-inner">
                                <a href="<?= get_the_permalink(); ?>" class="img-wrap"
                                   title="<?= get_the_title(); ?>"
                                   style="background-image: url('<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : ''; ?>')">
                                </a>
                                <div class="item-content">
                                    <div class="date-time"><?= get_the_date(); ?></div>
                                    <h3 class="title">
                                        <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                                    </h3>
                                </div>
                                <a class="btn-more" href="<?= get_the_permalink() ?>">Xem thêm</a>
                            </div>
                        </div>
		                <?php
		                $i ++;
	                }
                }

                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
	<?php
}
