jQuery(document).ready(function($) {

    _handleScroll();

    _showHideMenu();


    //Show/Hide Menu Mobile
    function _showHideMenu() {
        $('header #hoclaixe-menu-open').click(function () {
            $(this).toggleClass('show');
            $('.popup-menu').toggleClass('active');
            $('body').toggleClass('show-menu');

        });

    }

    function _handleScroll() {

        $(window).scroll(function() {

            var scroll = $(window).scrollTop();

            if (scroll > 1) {

                $('header.hoclaixe-header').addClass('header-fixed');

            } else {

                $('header.hoclaixe-header').removeClass('header-fixed');

            }

        });

    }

});

