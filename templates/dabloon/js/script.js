$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
            responsive: [{
            breakpoint: 768,
            settings: {
                arrows : false
            }
        }, ]
});