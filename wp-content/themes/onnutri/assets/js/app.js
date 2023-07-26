
console.log(`inicializado`);

const btnOpenMenu = document.querySelector('.open-menu');
const btnCloseMenu = document.querySelector('.close-menu');

if(btnCloseMenu) {
  btnCloseMenu.addEventListener('click', function (e) {
    e.preventDefault()

    btnCloseMenu.closest('.menu').classList.remove('open')
  });
}
if(btnOpenMenu) {
  btnOpenMenu.addEventListener('click', function (e) {
    e.preventDefault()

    btnOpenMenu.closest('.menu-mobile').querySelector('.menu').classList.add('open')
  });
}

(function( $ ){ 
  const slides  = document.querySelector('.slides-container .slides');

  if(slides) {
    var slidesSlick = $(".slides-container .slides").slick({
      infinite: true,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000
    });

    var parcSlick = $(".parc_list").slick({
      infinite: true,
      rows: 2,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 567,
          settings: {
            rows: 2,
            slidesToShow: 2,
            slidesToScroll: 3,
          }
        },
      ]
    });

    if (window.matchMedia("(max-width: 400px)").matches) {
      /* a viewport tem pelo menos 400 pixels de largura */
      var topBarSlick = $(".top_bar .container").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        autoplay: false,
        autoplaySpeed: 3000
      });
    }
  }

})(jQuery)
