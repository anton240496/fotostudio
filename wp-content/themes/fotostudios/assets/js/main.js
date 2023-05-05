$(function(){
  $('.client_li').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    // image: {
    //   tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    //   titleSrc: function(item) {
    //     return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
    //   }
    // }
  });

  // $('.fotoprimer_items-img').magnificPopup({
  //   delegate: 'a',
  //   type: 'image',
  //   tLoading: 'Loading image #%curr%...',
  //   mainClass: 'mfp-img-mobile',
  //   gallery: {
  //     enabled: true,
  //     navigateByImgClick: true,
  //     preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  //   },
  //   // image: {
  //   //   tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
  //   //   titleSrc: function(item) {
  //   //     return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
  //   //   }
  //   // }
  // });
  // if(  $(window).width() < 1300)({
    // $('.fotoprimer_items_inner').magnificPopup({
    // delegate: 'a',
    // type: 'image',
    // tLoading: 'Loading image #%curr%...',
    // mainClass: 'mfp-img-mobile',
    // gallery: {
    //   enabled: true,
    //   navigateByImgClick: true,
    //   preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    // },
    // image: {
    //   tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    //   titleSrc: function(item) {
    //     return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
    //   }
    // }
  // });
// });



$('.fotoprimer_items_slick').slick({
  prevArrow: '<button type="button" class="slick_btn1 slick-prev"></button>',
  nextArrow: '<button type="button" class="slick_btn2 slick-next"></button>',
  rows: 2,
 slidesToShow: 2,
 asNavFor: '.fotoprimer_items_innerb',
 responsive: [
   {
     breakpoint: 701,
     settings: {
         rows: 1,
       slidesToShow: 1
     }
   }
   ]
});
$('.fotoprimer_items_innerb').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: false,
 fade: true,
 asNavFor: '.fotoprimer_items_slick',
   focusOnSelect: true
});


  $('.client_inner').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    adaptiveHeight: true,
    prevArrow: false,
    nextArrow:false,
    responsive: [
      {
        breakpoint: 1301,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 701,
        settings: {
          slidesToShow: 1,
            slidesToScroll: 1,
        }
      },
    ]
   });

  $('.sety_btn').on('click', function(){
    $('.icon_list').toggleClass('icon_list-active');
  });
  $('.menu_btn').on('click', function(){
    $('#menu-menu_top').toggleClass('menu_list-active');
  });
  $('.recomandation_p_btn').on('click', function(){
    $('.recomandation_service').toggleClass('recomandation_service-active');
  });
});

function resizeScrenn(){
        if ($(window).width() <= 1300){
      		$('.fotoprimer_items_inner').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          // image: {
          //   tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          //   titleSrc: function(item) {
          //     return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
          //   }
          // }
        });

      	}
      }

      resizeScrenn();
      $(window).resize(function(){
      	resizeScrenn();
      });


      document.getElementById("mini").addEventListener("click", (e) => {
        if (e.target.closest("div")) {
          document.querySelector("#main div").src = e.target.closest("div").src;
          document.querySelector("#max div").alt = e.target.closest("div").alt;
        }
      });Listener('click', toggleNavigation);
