// function loadImage(img) {
//   var imgShimmer = img.parentNode;

//   imgShimmer.className += imgShimmer.className ? ' loaded-shimmer' : 'loaded-shimmer';
// };

jQuery('img.shimmer-image').on('load', function() {
  $('.img-shimmer').addClass('loaded-image');
});


// $("img.news-image").load(function () {
//   if ($(this).height() > 100) {
//     $(this).addClass("bigImg");
//   }
// });
$(document).ready(function() {     
  $('.btn-modify-cms-page').hover(function(){     
      $('main').addClass('highlight-modify-cms-page');    
  },     
  function(){    
      $('main').removeClass('highlight-modify-cms-page');     
  });
});   