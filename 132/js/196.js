 $(document).ready(function () {
 var swiper = new Swiper('.swiper-container', {
      slidesPerView: 6,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
                      320: {
                        slidesPerView: 5,
                        spaceBetween: 20
                        
                      },
                   
                      480: {
                        slidesPerView: 4,
                        spaceBetween: 30
                      },
                    960: {
                      slidesPerView: 3,
                      spaceBetween: 30,
                    },
                    480: {
                      slidesPerView: 6,
                      spaceBetween: 20,
                    },

                  } 
    });
     });