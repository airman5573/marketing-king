(function($){
  const $overlay = $('.menu-overlay');
  const $nav = $('#menu');
  $('.menu-open-btn').on('click', () => {
    $overlay.fadeTo('fast', 0.6);
    $nav.addClass('open');
  });
  const handleCloseBtn = () => {
    $overlay.fadeTo('fast', 0, () => {
      $overlay.css('display', 'none');
    });
    $nav.removeClass('open');
  }
  $('.menu-close-btn-container img').on('click', handleCloseBtn);
  $overlay.on('click', handleCloseBtn);

  $('li.has-child').on('click', function(){
    $('li.has-child').removeClass('active'); // active가 있으면 display: block이됨
    $(this).addClass('active');
  });
})(jQuery);