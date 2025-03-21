import './bootstrap';
import Swiper from 'swiper';
import { Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';

window.addEventListener("load", (event) => {
    document.getElementsByClassName('preload')[0].classList.remove("preload");
});

const swiper = new Swiper('.swiper-main', {
  a11y: {
    prevSlideMessage: 'Predchádzajúci obrázok',
    nextSlideMessage: 'Nasledujúci obrázok',
  },
  loop: true,
  slidesPerView: 2,
  modules: [Pagination, Autoplay],

  breakpoints: {
    1023: {
      slidesPerView: 3,
    },
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  autoplay: {
    delay: 5000,
  },
});