jQuery(document).ready(function(){
  let $phone = $('.phone');
  const $window = $(window);
  $(document.body).on('touchmove', onScroll); // for mobile
  $window.on('scroll', onScroll); 
  // callback
  function onScroll(){
    if( $window.scrollTop() + window.innerHeight + 120 >= document.body.scrollHeight ) { 
      if (!$phone.hasClass('at-bottom')) {
        $phone.addClass('at-bottom');
      }
    } else {
      if ($phone.hasClass('at-bottom')) {
        $phone.removeClass('at-bottom');
      }
    }
  }
});