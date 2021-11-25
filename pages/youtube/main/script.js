tableCarousel('.table-container-1');
tableCarousel('.table-container-2');

const headerHeight = jQuery('#header')[0].offsetHeight;
jQuery('.goto-premium-campaign').on('click', function(){
  jQuery([document.documentElement, document.body]).animate({
    scrollTop: jQuery("#premium-campaign").offset().top - headerHeight
  }, 800);
});
jQuery('.goto-standard-campaign').on('click', function(){
  jQuery([document.documentElement, document.body]).animate({
    scrollTop: jQuery("#standard-campaign").offset().top - headerHeight
  }, 1200);
});