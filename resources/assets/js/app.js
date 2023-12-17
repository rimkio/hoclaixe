import "@webcomponents/webcomponentsjs";
import AOS from 'aos';
import 'aos/dist/aos.css';
import './components/navigation'
import './components/function' 

AOS.init({
    duration: 1200,
    once: true,
    disable: 'mobile',
});

$(window).on("load", function () {
    AOS.refresh();
});



