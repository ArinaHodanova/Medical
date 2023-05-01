document.onscroll = function(evt) {
    evt.preventDefault();
  };
  
  
  //Sliders initialization
  function initSliders() {
    //перечень слайдеров 
    if (document.querySelector('.swiper-product_card')) {
      var swiper_product_card = new Swiper('.swiper-product_card', {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
      });
    }

    if (document.querySelector('.slider-news')) {
      var swiper_product_card = new Swiper('.slider-news', {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        navigation: {
          nextEl: '.slider-news__next',
          prevEl: '.slider-news__prev',
        },
        breakpoints: {// настройки для разных разрешений
          300: {
              slidesPerView: 1,
          },
          576: {
              slidesPerView: 2,
              spaceBetween: 10
          }
        },
        on: {
          init: function (swiper) {
            reviews(swiper);
          },
          slideChange: function (swiper) {
            reviews(swiper);
          }
        }
      });
    }

    function reviews(swiper) {
        const newsBlockImg = document.querySelector('.news__block-img img'),
              newsBlockTitle = document.querySelector('.news__block-title'),
              newsBlockData = document.querySelector('.news__block-data'),
              newsBlockDesk = document.querySelector('.news__block-desk'),
              newsBlockLink = document.querySelector('.news__block-link'),

              swiperSlideActive = swiper.slides[swiper.activeIndex],
              atrrHref = swiperSlideActive.children[4].getAttribute("href");
              atrrSrc = swiperSlideActive.children[0].querySelector('.slider-news__img img').getAttribute("src");

              newsBlockTitle.textContent = swiperSlideActive.children[2].innerText;
              newsBlockData.textContent = swiperSlideActive.children[1].innerText;
              newsBlockDesk.textContent = swiperSlideActive.children[3].innerText;

              newsBlockLink.setAttribute('href', atrrHref);//передаем ссылку
              newsBlockImg.setAttribute('src', atrrSrc);//передаем ссылку

    }

    if (document.querySelector('.swiper-product_card2')) {
      new Swiper('.swiper-product_card2', {
        //loop: true,
        spaceBetween: 10,
        slidesPerView: 1,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper_product_card,
        },
      });
    }
    
  
    if (document.querySelector('.main_prod')) {
      new Swiper('.main_prod', {
        spaceBetween: 30,
        navigation: {
          nextEl: ".main_prod-next",
          prevEl: ".main_prod-prev",
        },
        breakpoints: {
          300: {
              slidesPerView: 1,
          },
          650: {
              slidesPerView: 3,
              spaceBetween: 10
          },
          991: {
              slidesPerView: 3,
              spaceBetween: 20
          },
          1192: {
              slidesPerView: 4,
              spaceBetween: 20
          }
        }
      });
    }
  
    if (document.querySelector('.main_prod_bestoffer')) {
      new Swiper('.main_prod_bestoffer', {
        spaceBetween: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {// настройки для разных разрешений
          300: {
              slidesPerView: 1,
          },
          650: {
              slidesPerView: 3,
              spaceBetween: 10
          },
          991: {
              slidesPerView: 3,
              spaceBetween: 20
          },
          1192: {
              slidesPerView: 4,
              spaceBetween: 20
          }
        }
      });
    }
   
    if (document.querySelector('.main_slider')) {
      new Swiper('.main_slider', {
        spaceBetween: 0,
        slidesPerView: 1,
        pagination: {
          el: '.swiper-pagination',  
        },
        navigation: {
          nextEl: ".main_slider-next",
          prevEl: ".main_slider-prev ",
        },
      });
    }
  
    if (document.querySelector('.swiper-advantage')) {
      new Swiper('.swiper-advantage', {
        breakpoints: {// настройки для разных разрешений
          300: {
              slidesPerView: 1,
              spaceBetween: 20
          },
          650: {
              slidesPerView: 2,
              spaceBetween: 10
          },
          991: {
              slidesPerView: 3,
              spaceBetween: 20
          },
          1192: {
              slidesPerView: 4,
              spaceBetween: 20
          }
        }
      });
    } 

    if (document.querySelector('.related-prod__slider')) {
      new Swiper('.related-prod__slider', {
        spaceBetween: 30,
        navigation: {
          nextEl: ".related-prod__btn-next",
          prevEl: ".related-prod__btn-prev",
        },
        breakpoints: {
          300: {
              slidesPerView: 1,
          },
          650: {
              slidesPerView: 3,
              spaceBetween: 10
          },
          991: {
              slidesPerView: 3,
              spaceBetween: 20
          },
          1192: {
              slidesPerView: 4,
              spaceBetween: 20
          }
        }
      });
    }

    if (document.querySelector('.about_company-swip')) {
      new Swiper('.about_company-swip', {
        spaceBetween: 0,
        slidesPerView: 1,
        autoHeight: true,
        navigation: {
          nextEl: ".about_company-button-next",
          prevEl: ".about_company-button-prev",
        },
      });
    }

    if (document.querySelector('.news_swiper')) {
      new Swiper('.news_swiper', {
        spaceBetween: 0,
        slidesPerView: 3,
        autoHeight: true,
        spaceBetween: 30,
        navigation: {
          nextEl: ".news-button-next",
          prevEl: ".news-button-prev",
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
          },
          540: {
            slidesPerView: 1,
          },
          720: {
            slidesPerView: 2,
          },
          960: {
            slidesPerView: 3,
          },
        },
      });
    }
  
    if (document.querySelector('.review-swip')) {
      new Swiper('.review-swip', {
        spaceBetween: 10,
        slidesPerView: 3,
        navigation: {
          nextEl: ".review_prod-next",
          prevEl: ".review_prod-prev",
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
          },
          540: {
            slidesPerView: 1,
          },
          720: {
            slidesPerView: 2,
          },
          960: {
            slidesPerView: 3,
          },
        },
      });
    }

    if (document.querySelector('.blog-swip')) {
      new Swiper('.blog-swip', {
        spaceBetween: 30,
        slidesPerView: 2,
        navigation: {
          nextEl: ".blog_prod-next",
          prevEl: ".blog_prod-prev",
        },
        breakpoints: {
          300: {
            slidesPerView: 1,
          },
          540: {
            slidesPerView: 1,
          },
          720: {
            slidesPerView: 1,
          },
          960: {
            slidesPerView: 2,
          },
        },
      });
    }
    
  } 