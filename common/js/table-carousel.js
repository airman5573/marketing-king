function tableCarousel(tableContainer = '.table-container', section = 2) {
  const $ = jQuery;
  const $tableContainer = $(tableContainer);
  const $table = $(tableContainer + ' table');
  const $stickyCols = $(tableContainer + ' table .sticky-col');
  const $navigationLeft = $(tableContainer + ' .navigation--left');
  const $navigationRight = $(tableContainer + ' .navigation--right');
  const stickyColWidth = $stickyCols.outerWidth(true);
  const duration = 300;
  const threadhold = 50;
  const MaxMarginLeft = -1 * ($table.outerWidth() - $tableContainer.outerWidth() + 1);
  const [SECTION_FIRST, SECTION_MIDDLE, SECTION_LAST] = [0, 1, -1];
  let sections = [];
  const ths = $(tableContainer + ' table thead tr th:not(.sticky-col)');
  if (section === 2) {
    if (ths.length === 4) {
      sections = [parseInt(ths[0].offsetWidth + ths[1].offsetWidth, 10), parseInt(ths[2].offsetWidth + ths[3].offsetWidth, 10)];
    } else {
      sections = [parseInt(ths[0].offsetWidth, 10), parseInt(ths[1].offsetWidth, 10)];
    }
  } else if (section === 3) {
    sections = [parseInt(ths[0].offsetWidth, 10), parseInt(ths[1].offsetWidth, 10), parseInt(($tableContainer.outerWidth() - stickyColWidth - ths[1].offsetWidth), 10)];
  }
  
  let startMarginLeft = 0;
  let startX = 0;
  let xDiff = 0;
  $table.on('touchstart', function(e){
    const touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] || e.touches[0];
    startX = touch.clientX;
    startMarginLeft = parseInt($table.css('margin-left'), 10);
    xDiff = 0;
  });

  $table.bind('touchmove', function(e){
    if (!startX) return;
    const touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] || e.touches[0];
    xDiff = touch.clientX - startX;
    startX = touch.clientX;
    const currentMarginLeft = parseInt($table.css('margin-left'), 10);
    const dist = currentMarginLeft + xDiff;
    if (dist > 0 || Math.abs(dist) >= Math.abs(MaxMarginLeft)) return;
    $table.css({'margin-left': parseInt(dist, 10)});
  });

  const navigationControl = (action) => {
    if (action == 'left') {
      $navigationLeft.css('opacity', 1);
      $navigationRight.css('opacity', 0);
    } else if (action == 'right') {
      $navigationLeft.css('opacity', 0);
      $navigationRight.css('opacity', 1);
    } else if (action == 'both') {
      $navigationLeft.css('opacity', 1);
      $navigationRight.css('opacity', 1);
    }
  };

  const move = (_section, ml) => {
    if (_section === SECTION_FIRST) navigationControl('right');
    if (_section === SECTION_MIDDLE) navigationControl('middle');
    if (_section === SECTION_LAST) navigationControl('left');
    $table.animate({
      'marginLeft': ml
    }, duration);
  };

  if (sections.length === 2) {
    const getCurrentSection = (startMarginLeft) => {
      const sm = Math.abs(startMarginLeft);
      if (sm === 0) return SECTION_FIRST;
      return SECTION_LAST;
    };
    $table.bind('touchend', function(e){
      const currentMarginLeft = parseInt($table.css('margin-left'), 10);
      const currentSection = getCurrentSection(startMarginLeft);

      if (currentSection === SECTION_FIRST) {
        if (Math.abs(startMarginLeft - currentMarginLeft) < threadhold) {
          move(SECTION_FIRST, 0);
        } else {
          move(SECTION_LAST, MaxMarginLeft);
        }
      } else {
        if (Math.abs(startMarginLeft - currentMarginLeft) < threadhold) {
          move(SECTION_LAST, startMarginLeft);
        } else {
          move(SECTION_FIRST, 0)
        }
      }
    });
  }
  if (sections.length === 3) {
    const getCurrentSection = (startMarginLeft, sectionWidth) => {
      const sm = Math.abs(startMarginLeft);
      if (sm === 0) return SECTION_FIRST;
      if (sm === sectionWidth) return SECTION_MIDDLE;
      return SECTION_LAST;
    };
    $table.bind('touchend', function(e){
      const currentMarginLeft = parseInt($table.css('margin-left'), 10);
      const currentSection = getCurrentSection(startMarginLeft, sections[0]);
      const dist = Math.abs(startMarginLeft - currentMarginLeft);

      if (currentSection === SECTION_FIRST) {
        if (dist < threadhold) {
          move(SECTION_FIRST, 0);
        } else {
          move(SECTION_MIDDLE, -1*sections[0]);
        }
      }
      else if (currentSection === SECTION_MIDDLE) {
        if (dist < threadhold) {
          move(SECTION_MIDDLE, -1*sections[0]);
        } else if (startMarginLeft < currentMarginLeft) {
          move(SECTION_FIRST, 0);
        } else {
          move(SECTION_LAST, MaxMarginLeft);
        }
      }
      else {
        if (Math.abs(startMarginLeft - currentMarginLeft) < threadhold) {
          move(SECTION_LAST, startMarginLeft);
        } else {
          move(SECTION_MIDDLE, -1*sections[0]);
        }
      }
    });
  }
}