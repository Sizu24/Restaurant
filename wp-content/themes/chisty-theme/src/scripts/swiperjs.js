// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/scss';
import 'swiper/scss/navigation';
import 'swiper/scss/pagination';

function swiperJS() {
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 400,
    parallax: true,
    spaceBetween: 100,
    slidesPerView: 2.4,
    initialSlide: 1,
    spaceBetween: 15,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
}

export default swiperJS;