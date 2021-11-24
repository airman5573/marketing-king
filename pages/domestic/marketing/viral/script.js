tableCarousel('.table-container', 3);
const headerHeight = jQuery('#header')[0].offsetHeight;
jQuery('.goto-exp-team').on('click', function(){
  jQuery([document.documentElement, document.body]).animate({
    scrollTop: jQuery("#exp-team").offset().top - headerHeight
  }, 800);
});
jQuery('.goto-rank').on('click', function(){
  jQuery([document.documentElement, document.body]).animate({
    scrollTop: jQuery("#rank").offset().top - headerHeight
  }, 1500);
});