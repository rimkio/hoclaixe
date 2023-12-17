global.$ = global.jQuery = require('jquery');

(function ($) {
    "use strict";

    const Accordion = () => {
        $(document).on("click",".hlx-page-faqs__list-question",function() {
            $(this).parent().find('.hlx-page-faqs__list-anwser').slideToggle();
            $(this).parent().toggleClass('active');
        });
    }

    $(window).on("load", function () {
        Accordion();
    });

    $(document).ready(function () {

        
    })
})(jQuery); 