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
        setTimeout(() => {
          $phone.css('display', 'none');
        }, 320);
      }
    } else {
      if ($phone.hasClass('at-bottom')) {
        $phone.css('display', 'block');
        setTimeout(() => {
          $phone.removeClass('at-bottom');
        }, 10);
      }
    }
  }
});