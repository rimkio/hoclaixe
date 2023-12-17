<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package hoclaixe
 */

get_header();
?>
    <main id="primary" class="site-main container lib-filter-wrap">
        <!--Start news hero header-->
        <?= hoclaixe_template_news_hero_header(); ?>
        <!--End news hero header-->
        <?php
        if ( have_posts() ) :
		?>
        <div class="wrap__blog">
            <div class="wrap-content__blog">
				<?php
	        get_template_part( 'template-parts/content-loop', get_post_type() );
	        echo '<div class="nav-filter-wrap">';
	        hoclaixe_the_posts_navigation( [
		        'prev_text' => hoclaixe_svg_icon( 'arrow_prev' ) . __( 'Prev' ),
		        'next_text' => __( 'Next' ) . hoclaixe_svg_icon( 'arrow_next' ),
	        ] );
	        echo '</div>';
				?>
            </div>
            <div class="wrap-sidebar-blog">
				<?php get_template_part('template-parts/sidebar/sidebar','form-search'); ?>
				<?php get_template_part('template-parts/sidebar/sidebar','new-post'); ?>
<!--				--><?php //get_template_part('template-parts/sidebar/sidebar','category'); ?>
				<?php get_template_part('template-parts/sidebar/sidebar','tags'); ?>
            </div>
        </div>
		<?php
        else :
	        get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
	</main><!-- #main -->
<?php
get_footer();
