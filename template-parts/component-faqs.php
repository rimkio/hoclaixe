<div class="hlx-page-faqs">
    <div class="container">
        <?php
        $list_faqs = get_field('list_faqs');
        if ($list_faqs) {
            $col = 0 ;
            if (count($list_faqs) % 2 == 0) {
                $col = count($list_faqs) / 2;
            } else {
                $col = round(count($list_faqs) / 2);
            }
        }
        ?>
        <div class="row">
            <div class="col-md-6">
                <?php if ($list_faqs) { ?>
                    <div class="hlx-page-faqs__list">
                        <?php foreach ($list_faqs as $k => $item) {
                            if ($k == $col) break;
                        ?>
                            <div class="hlx-page-faqs__list-item">
                                <h5 class="hlx-page-faqs__list-question"><?= $item['question']; ?></h5>
                                <div class="hlx-page-faqs__list-anwser"><?= $item['anwser']; ?></div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <?php if ($list_faqs) { ?>
                    <div class="hlx-page-faqs__list">
                        <?php foreach ($list_faqs as $k => $item) {
                            if ($k >= $col) { ?>
                                <div class="hlx-page-faqs__list-item">
                                    <h5 class="hlx-page-faqs__list-question"><?= $item['question']; ?></h5>
                                    <div class="hlx-page-faqs__list-anwser"><?= $item['anwser']; ?></div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
</div>