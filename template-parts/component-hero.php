<div class="hlx-page-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-content">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
                }
                ?>
                <h1 class="h2"><?= get_the_title() ?></h1>
                <p><?= get_the_content() ?></p>
            </div>
            <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center">
                <img src="<?= get_template_directory_uri().'/resources/assets/images/hero-graphic.png' ?>" alt="">
            </div>
        </div>

    </div>
</div>