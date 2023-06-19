$('.it-carousel-landscape-abstract-four-cols .owl-carousel').owlCarousel({
  margin: 40,
  items: 4,
  responsiveClass: true,
  nav: true,
  stagePadding: 30,
  loop: true,
  responsive: {
    0: {
      items: 1,
    },
    550: {
      items: 2,
    },
    767: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1200: {
      items: 4,
    }
  }

});
$('.it-carousel-landscape-abstract-three-cols .owl-carousel').owlCarousel({
  margin: 40,
  items: 3,
  responsiveClass: true,
  stagePadding: 30,
  nav: true,
  loop: true,
  responsive: {
    0: {
      items: 1,
    },
    550: {
      items: 2,
    },
    767: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1200: {
      items: 3,
    }
  }

});

$('.it-carousel-landscape-abstract-two-cols .owl-carousel').owlCarousel({
  margin: 40,
  items: 2,
  responsiveClass: true,
  stagePadding: 30,
  nav: true,
  loop: true,
  responsive: {
    0: {
      items: 1,
    },
    550: {
      items: 2,
    },
    767: {
      items: 2,
    },
    992: {
      items: 2,
    },
    1200: {
      items: 2,
    }
  }

});

$('.it-carousel-landscape-abstract-one-cols .owl-carousel').owlCarousel({
  margin: 60,
  items: 1,
  responsiveClass: true,
  stagePadding: 30,
  nav: true,
  loop: true,
  responsive: {
    0: {
      items: 1,
    },
    550: {
      items: 1,
    },
    767: {
      items: 1,
    },
    992: {
      items: 1,
    },
    1200: {
      items: 1,
    }
  }

});

$('.owl-carousel-herobanner-design .owl-carousel').owlCarousel({
  margin: 0,
  items: 1,
  responsiveClass: true,
  stagePadding: 0,
  nav: true,
  loop: true,
  responsive: {
    0: {
      items: 1,
    },
    550: {
      items: 1,
    },
    767: {
      items: 1,
    },
    992: {
      items: 1,
    },
    1200: {
      items: 1,
    }
  }

});

$('.it-carousel-landscape-abstract.autoplay .owl-carousel').owlCarousel({
  autoplay: true,
  autoplayTimeout: 10000,
  items: 1,
  loop: true,
});

$(".owl-prev").html('<span class="mdi mdi-chevron-left"></span><span class="sr-only">Slider precedenti</span>');
$(".owl-next").html('<span class="mdi mdi-chevron-right"></span><span class="sr-only">Slider successive</span>');
$(".owl-dot").html('<span></span><span class="sr-only">Slide</span>');