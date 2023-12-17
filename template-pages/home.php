<?php /* Template Name: Home Template */ ?>

<?php get_header() ?>

<div class="site-main">
    <?php get_template_part('template-parts/component', 'homehero'); ?>
    <?php get_template_part('template-parts/component', 'why-about'); ?>
    <?php get_template_part('template-parts/component', 'news'); ?>
    <?php get_template_part('template-parts/component', 'gallery'); ?>
</div>

<?php get_footer() ?>