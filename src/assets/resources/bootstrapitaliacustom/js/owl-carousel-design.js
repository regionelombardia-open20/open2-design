/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\design
 * @author    Aria S.p.A. <protocollo@pec.ariaspa.it>
 * @license   GNU General Public License v3.0 <https://www.gnu.org/licenses/gpl-3.0.html>
 * @link      https://www.ariaspa.it/
 *
 * This file is part of OPEN 2.0.
 *
 * OPEN 2.0 is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OPEN 2.0 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OPEN 2.0. If not, see <https://www.gnu.org/licenses/>.
 */

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