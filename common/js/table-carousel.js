function tableCarousel(tableContainer = '.table-container', marginLeft = 80, col = 2) {
  const $ = jQuery;
  const $tableContainer = $(tableContainer);
  const $table = $(tableContainer + ' table');
  const $arrow = $(tableContainer + ' .navigation');
  const $stickyCols = $(tableContainer + ' table .sticky-col');
  if (col == 2) {
    $arrow.on('click', function(){
      if ($arrow.hasClass('left')) {
        $table.css({'margin-left': '0px'});
        $tableContainer.css({'border-left': 'none'});
        setTimeout(() => {
          $stickyCols.css({'position': 'static'});
        }, 1000);
      } else {
        $stickyCols.css({'position': 'sticky'});
        $table.css({'margin-left': marginLeft});
        $tableContainer.css({'border-left': '1px solid black'})
      }
      $arrow.toggleClass('left');
    });
  } else if (col == 3) {
    let currentCol = 1;
    $arrow.on('click', function(){
      if ($arrow.hasClass('left')) {
        currentCol = 1;
        $table.css({'margin-left': '0px'});
        $tableContainer.css({'border-left': 'none'})
        $arrow.removeClass('left');
        setTimeout(() => {
          $stickyCols.css({'position': 'static'});
        }, 1000);
      } else {
        $stickyCols.css({'position': 'sticky'});
        $table.css({'margin-left': parseInt(marginLeft) * currentCol});
        $tableContainer.css({'border-left': '1px solid black'});
        currentCol += 1;
        if (currentCol == 3) {
          $arrow.addClass('left');
        }
      }
    });
  }
}