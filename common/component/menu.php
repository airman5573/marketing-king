<?php
$menu = [
  [
    'title' => '국내 마케팅',
    'children' => [
      ['title' => '마케팅 풀패키지', 'link' => 'package/full_package'],
      ['title' => 'SEO 마케팅', 'link' => 'package/seo'],
      ['title' => '배너 + 페이스북 광고', 'link' => 'package/banner_facebook'],
      ['title' => '배너 광고', 'link' => 'package/banner'],
      ['title' => '페이스북 광고', 'link' => 'package/facebook'],
      ['title' => '어플 광고', 'link' => 'package/application'],
      ['title' => '동영상 광고', 'link' => 'package/image_motion01'],
      ['title' => '바이럴 마케팅', 'link' => 'package/viral'],
    ]
  ],
  [
    'title' => '해외 마케팅',
    'children' => [
      ['title' => '뉴욕 타임스퀘어 광고', 'link' => 'business/timessquare'],
      ['title' => '배너 광고', 'link' => 'business/worldbanner'],
      ['title' => '페이스북 광고', 'link' => 'business/worldfb'],
    ]
  ],
  [
    'title' => '국내 언론홍보',
    'children' => [
      ['title' => '초저가 언론홍보', 'link' => 'viral/cost'],
      ['title' => '프리미엄 언론홍보', 'link' => 'viral/naver'],
      ['title' => '병원 언론홍보', 'link' => 'viral/hospital'],
      ['title' => '부동산 언론홍보', 'link' => 'viral/realestate'],
      ['title' => 'PR배너 서비스', 'link' => 'viral/prbanner'],
    ]
  ],
  [
    'title' => '해외 언론홍보',
    'children' => [
      ['title' => '해외통합 언론홍보', 'link' => 'online/world'],
      ['title' => '아메리카 홍보', 'link' => 'online/world02'],
      ['title' => '아시아 홍보', 'link' => 'online/world03'],
      ['title' => '유럽 홍보', 'link' => 'online/world04'],
      ['title' => '중동 & 아프리카 홍보', 'link' => 'online/world05'],
    ]
  ],
  [
    'title' => '유튜브 마케팅',
    'children' => [
      ['title' => '유튜브 마케팅', 'link' => 'youtube/youreview'],
      ['title' => '유튜브 동영상 광고', 'link' => 'youtube/youvideo'],
      ['title' => '유튜브 배너 광고', 'link' => 'youtube/youbanner'],
      ['title' => '유튜브 바이럴 마케팅', 'link' => 'youtube/youviral'],
    ]
  ],
  [
    'title' => '검색 광고',
    'children' => [
      ['title' => '사이트 검색 광고', 'link' => 'search/sitesearch'],
      ['title' => '브랜드 검색', 'link' => 'search/brandsearch'],
    ]
  ],
  [
    'title' => '상담신청',
    'link' => 'customer/apply'
  ],
]; ?>

<div class="menu-overlay"></div>

<nav role="navigation" id="menu">
  <div class="menu-close-btn-container">
    <img src="/assets/icon-close.svg" alt="">
  </div>
  <ul class="mt-30"> <?php
    foreach($menu as $li) { 
      $active = '';
      if (isset($li['link'])) {
        if ($li['link'] == $current_path) {
          $active = 'active';
        }
      } else {
        foreach($li['children'] as $submenu) {
          if ($submenu['link'] == $current_path) {
            $active = 'active';
          }
        }
      }
      $has_child = (count($li['children']) > 0) ? 'has-child' : '';
      ?>
      <li class="mb-26 <?php echo $active . ' ' . $has_child; ?>"> <?php
        if (isset($li['link'])) :
          echo '<a class="fs-22 lh-22 ls-5 fw-700" href="' . '/' . $li['link'] . '">' . $li['title'] . '</a>';
        else:
          echo '<span class="fs-22 lh-22 ls-5 fw-700">' . $li['title'] . '</span>';
        endif;
        if (count($li['children']) > 0): ?>
          <ul> <?php
            foreach($li['children'] as $submenu) { 
              $active = $submenu['link'] == $current_path ? 'active' : ''; ?>
              <li class="fs-14 lh-14 fw-500 mb-20 <?php echo $active; ?>"> <?php
                echo '<a href="' . '/' . $submenu['link'] . '">' . $submenu['title'] . '</a>'; ?>
              </li> <?php
            } ?>
          </ul> <?php
        endif; ?>
      </li> <?php
    } ?>
  </ul>
</nav>