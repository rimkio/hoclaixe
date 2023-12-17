<?php

/**
 * Header template
 */

$classes = [
   'hoclaixe-header',
];
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
$phone_site = get_field("phone_site", "options");
?>
<header class="<?php echo implode(' ', $classes) ?>">
    <div class="container">
        <div class="hoclaixe-header-inner">
            <div class="hoclaixe-header-logo">
				<?php
				if (has_custom_logo()) {
					echo '<a href="/"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
				} else {
					echo '<h1>' . get_bloginfo('name') . '</h1>';
				}
				?>
            </div>

            <div class="hoclaixe-header-menu-wrap">
                <div class="hoclaixe-header-menu">
					<?php
					if (has_nav_menu('main-menu')) {
						wp_nav_menu([
							'theme_location' => 'main-menu',
							'menu_class' => 'main-menu',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'bootstrap' => false
						]);
					}
					?>
                </div>

            </div>
            <div class="wrapper_phone">
                <a href="tel:<?= $phone_site; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19.4401 13.0001C19.2201 13.0001 18.9901 12.9301 18.7701 12.8801C18.3246 12.7819 17.8868 12.6516 17.4601 12.4901C16.9962 12.3213 16.4862 12.3301 16.0284 12.5147C15.5706 12.6993 15.1972 13.0467 14.9801 13.4901L14.7601 13.9401C13.7861 13.3983 12.8911 12.7253 12.1001 11.9401C11.3149 11.1491 10.6419 10.2541 10.1001 9.28011L10.5201 9.00011C10.9635 8.78303 11.3109 8.40964 11.4955 7.9518C11.6801 7.49396 11.6889 6.98402 11.5201 6.52011C11.3613 6.09253 11.231 5.65491 11.1301 5.21011C11.0801 4.99011 11.0401 4.76011 11.0101 4.53011C10.8887 3.82573 10.5197 3.18785 9.96972 2.73135C9.41972 2.27485 8.7248 2.02972 8.0101 2.04011H5.0101C4.57913 2.03607 4.15235 2.12493 3.75881 2.30064C3.36527 2.47636 3.01421 2.73481 2.72953 3.05839C2.44485 3.38198 2.23324 3.76311 2.10909 4.17583C1.98494 4.58855 1.95118 5.02317 2.0101 5.45011C2.54284 9.63949 4.45613 13.532 7.44775 16.5127C10.4394 19.4935 14.3388 21.3926 18.5301 21.9101H18.9101C19.6475 21.9112 20.3595 21.6406 20.9101 21.1501C21.2265 20.8672 21.4792 20.5203 21.6516 20.1324C21.8239 19.7446 21.9121 19.3245 21.9101 18.9001V15.9001C21.8979 15.2055 21.6449 14.5367 21.1944 14.0078C20.744 13.4789 20.1239 13.1227 19.4401 13.0001ZM19.9401 19.0001C19.9399 19.1421 19.9095 19.2824 19.8509 19.4117C19.7923 19.5411 19.7068 19.6564 19.6001 19.7501C19.4887 19.8471 19.3581 19.9195 19.2168 19.9626C19.0755 20.0057 18.9267 20.0185 18.7801 20.0001C15.035 19.5199 11.5563 17.8066 8.89282 15.1304C6.2293 12.4542 4.53251 8.96745 4.0701 5.22011C4.05419 5.07363 4.06813 4.92544 4.1111 4.7845C4.15407 4.64356 4.22517 4.5128 4.3201 4.40011C4.41381 4.29344 4.52916 4.20795 4.65848 4.14933C4.7878 4.09071 4.92812 4.06029 5.0701 4.06011H8.0701C8.30265 4.05494 8.52972 4.13099 8.71224 4.27518C8.89476 4.41937 9.02131 4.62268 9.0701 4.85011C9.1101 5.12345 9.1601 5.39345 9.2201 5.66011C9.33562 6.18726 9.48936 6.70529 9.6801 7.21011L8.2801 7.86011C8.1604 7.91503 8.05272 7.99306 7.96326 8.08971C7.87379 8.18636 7.8043 8.29973 7.75877 8.42331C7.71324 8.54689 7.69257 8.67824 7.69795 8.80983C7.70332 8.94142 7.73464 9.07066 7.7901 9.19011C9.2293 12.2729 11.7073 14.7509 14.7901 16.1901C15.0336 16.2901 15.3066 16.2901 15.5501 16.1901C15.6748 16.1455 15.7894 16.0766 15.8873 15.9873C15.9851 15.898 16.0643 15.7902 16.1201 15.6701L16.7401 14.2701C17.2571 14.455 17.7847 14.6086 18.3201 14.7301C18.5868 14.7901 18.8568 14.8401 19.1301 14.8801C19.3575 14.9289 19.5608 15.0554 19.705 15.238C19.8492 15.4205 19.9253 15.6476 19.9201 15.8801L19.9401 19.0001Z" fill="white"/>
                    </svg> <span><?= $phone_site; ?></span>
                </a>
                <div id="hoclaixe-menu-open" class="d-md-none d-flex hoclaixe-actions hoclaixe-menu-open">
                    <span class="hoclaixe-actions__text">
                        <img src="<?= get_template_directory_uri().'/assets/images/codicon_menu.svg' ?>" alt="Icon Menu"/>
                        <img class="close" src="<?= get_template_directory_uri().'/assets/images/icon-close.svg' ?>" alt="Icon Close"/>
                    </span>
                </div>
            </div>

        </div>
    </div>
</header> <!-- #site-header -->