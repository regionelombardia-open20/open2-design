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

/* ATTIVAZIONE TOOLTIP E POPOVER */
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle-second="tooltip"]').tooltip();
})
$(function () {
  $('[data-toggle="popover"]').popover();
})
$('.popover-dismiss').popover({
  trigger: 'focus'
})


/* EFFETTO SHRINK HEADER */
$(document).on("scroll", function () {
  var headerHeight = $('#headerContent').outerHeight();
  if
    ($(document).scrollTop() > 200) {
    $("body").addClass("shrink");
    $('#mainContent > #sidebarLeftRedattore > .sidebar-nav.affix-top').css('top', Number(headerHeight) + (Number(20)));
  }
  else {
    $("body").removeClass("shrink");
  }
});

/* DATE PICKER */
$(document).ready(function () {
  $('.it-date-datepicker').datepicker({
    inputFormat: ["dd/MM/yyyy"],
    outputFormat: 'dd/MM/yyyy',
  });
  $('.it-datepicker-narrow').datepicker({
    inputFormat: ["dd/MM/yyyy"],
    outputFormat: 'dd/MM/yyyy',
    weekDayFormat: 'narrow',
  });

  
    $('.it-date-datepicker').datepicker({
      inline: 'calendar'
    });
  


});


/* PUSH UP ASSISTANNCE */
$(document).on("scroll", function () {
  if
    ($(document).scrollTop() >= 99) {
    $(".bi-assistance").addClass("push-up");
  }
  else {
    $(".bi-assistance").removeClass("push-up");
  }
});

/**
 * Google Chrome fix autocomplete input field
 */
/*$(document).ready(function () {
  var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  if (isChrome) {
    var allInputInPage = $('input:not([type="hidden"]):not([type="checkbox"])');
    var classFakeRequiredInput = 'js-fake-not-readonly';
    var allInputsFakeRequired = $('.' + classFakeRequiredInput);
    allInputInPage.each(function () {
      $(this).prop('readonly',true);
      $(this).addClass(classFakeRequiredInput);
      $(this).bind('focus', function() {
        $(this).removeClass(classFakeRequiredInput);
        $(this).prop('readonly',false);
      });
    });
  }
}); */

$(document).ready(function () {
  window.setTimeout( function(){
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    var isEdge = /Edg/.test(navigator.userAgent);
    if ((isChrome)||(isEdge)) {
      var allInputInPage = $('input:not([type="hidden"]):not([type="checkbox"])');
      $('input:-webkit-autofill').each(function () {
        $('label[for="' + $(this).attr('id') + '"').addClass('active');
      });
    }
  },1);
});


function toggleSidebar() {
  var element = document.getElementById("sidebarLeftRedattore");
  element.classList.toggle("sidebar-small");
}