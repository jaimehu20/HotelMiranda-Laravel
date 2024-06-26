const roomSwiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });

const featureSwiper = new Swiper('.swiper--mobile', {
  // Optional parameters
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

const menuSwiper = new Swiper('.swiper--menu', {
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const foodSwiper = new Swiper('.swiper--food', {
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

});

const aboutSwiper = new Swiper('.swiper--about', {
  // Optional parameters

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

});

const funfactsSwiper = new Swiper('.swiper--funfacts', {
});





