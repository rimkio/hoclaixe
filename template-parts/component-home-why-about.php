<div class="hlx-home-why-about">
    <div class="container">
        <h2 class="hlx-home-why-about__heading"><?= __get_field('why_about_heading') ?></h2>
        <?php if (have_rows('why_about_list')) :
            $i = 1;
        ?>
            <div class="hlx-home-why-about__list">
                <?php while (have_rows('why_about_list')) : the_row(); ?>
                    <div class="hlx-home-why-about__list-item">
                        <span class="hlx-home-why-about__list-index"><?= $i ?></span>
                        <h3><?= get_sub_field('title') ?></h3>
                        <p><?= get_sub_field('desc') ?></p>
                    </div>
                <?php
                    $i++;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>