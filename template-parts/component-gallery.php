<div class="hlx-home-gallery">
    <div class="container">
        <h2 class="hlx-heading">Hình Ảnh</h2>
        <?php
        $gallery = get_field('home_gallery', get_the_ID());
        if ($gallery) : ?>
            <?php $gallery_dk = array_chunk($gallery, 6) ?>
            <?php $gallery_mobile = array_chunk($gallery, 2) ?>
            <div class="d-none d-md-block hlx-home-gallery__wrap">
                <?php foreach ($gallery_dk as $item) : ?>
                    <div class="hlx-home-gallery__wrap-item">
                        <div class="gallery__wrap">
                            <?php foreach ($item as $img) : ?>
                                <a href="<?= $img['url'] ?>"><img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="d-block d-md-none hlx-home-gallery__wrap-mobile">
                <?php foreach ($gallery_mobile as $item) : ?>
                    <div class="hlx-home-gallery__wrap-item">
                        <div class="gallery__wrap">
                            <?php foreach ($item as $img) : ?>
                                <a href="<?= $img['url'] ?>"><img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="gallery-slick-wrap">
            <div class="gallery-slick"> </div>
        </div>
    </div>
</div>