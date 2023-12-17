global.$ = global.jQuery = require('jquery');
import $ from 'jquery'
import 'slick-carousel'

window.jQuery = window.$ = $;

(function ($) {
    "use strict";

    const Accordion = () => {
        $(document).on("click", ".hlx-page-faqs__list-question", function () {
            $(this).parent().find('.hlx-page-faqs__list-anwser').slideToggle();
            $(this).parent().toggleClass('active');
        });
    }

    const Gallery = () => {
        if (!$('.hlx-home-gallery__wrap-item').length) return;

        if ($(window).width() < 767) {
            $(".hlx-home-gallery__wrap-mobile").slick({
                infinite: false,
                arrows: true,
                dots: true,
                appendArrows: ".gallery-slick",
                appendDots: '.gallery-slick',
            });
        } else {
            $(".hlx-home-gallery__wrap").slick({
                infinite: false,
                arrows: true,
                dots: true,
                appendArrows: ".gallery-slick",
                appendDots: '.gallery-slick',
            });
        }
    }

    const News = () => {
        if (!$('.item-news-wrap__item').length) return;
        if ($(window).width() < 767) {
            $(".hlx-home-news__wrap-mb").slick({
                infinite: false,
                arrows: true,
                dots: true,
                appendArrows: ".news-slick",
                appendDots: '.news-slick',
            });
        }else{
            $(".hlx-home-news__wrap-dk").slick({
                infinite: false,
                arrows: true,
                dots: true,
                appendArrows: ".news-slick",
                appendDots: '.news-slick',
            });
        }
        
    }

    $(window).on("load", function () {
        Accordion();
    });

    $(document).ready(function () {
        Gallery();
        News();

    })
})(jQuery); 