<div class="container">
  <div class="intro mb-35">
    <p class="intro-main mb-10">
      사이트검색광고란, ‘키워드 광고’ 또는<br/>
      ‘파워링크 광고’라고 부르기도 하며,<br/>
      검색 사이트에서 특정 키워드를 검색했을 때<br/>
      검색 결과 화면에 광고주의 사이트가 노출되도록<br/>
      하는 광고를 말합니다.
    </p>
    <p class="intro-main">
      정확한 타겟팅으로 효과가 높은 광고이며,<br/>
      불특정 다수가 아닌 광고주가 원하는 키워드로<br/>
      검색 시 결과에 노출되므로 합리적이고 효율이<br/>
      높은 광고 입니다.
    </p>
  </div>
  <div class="blue-label blue-label--col-2 mb-50">
    <div class="blue-label">
      <div class="title mb-15">
        <div class="left">유형1</div>
        <div class="right">PC파워링크</div>
      </div>
      <div class="img-container">
        <img src="/assets/search-site-1.png" alt="">
      </div>
    </div>
    <div class="blue-label">
      <div class="title mb-15">
        <div class="left">유형2</div>
        <div class="right">모바일 파워링크</div>
      </div>
      <div class="img-container">
        <img src="/assets/search-site-2.png" alt="">
      </div>
    </div>
  </div>
  <div class="row mb-30">
    <h3 class="mb-10 fw-500 txt-align-center">왜, 네이버 사이트 검색광고를 진행해야 할까요?</h3>
    <div class="img-container pl-20 pr-20">
      <img src="/assets/search-site-3.png" alt="">
    </div>
  </div>
  <div class="row mb-45">
    <div class="box-shadow-1 pt-30 pb-30 pl-12 pr-12 vertical-center">
      <div class="row px-40 mb-15">
        <p class="bc-gray-3 py-10 px-10 txt-align-center fw-500">
          제품을 구매하기 전, 소비자의 <span class="fc-main">90%는<br>검색</span>을 이용합니다.
        </p>
      </div>
      <div class="row mb-25">
        <p class="fs-12 txt-align-center lh-20">
          제품 또는 서비스를 구매하기 전 소비자의 90%는 검색을 이용합니다.<br/>
          그리고 심리적으로 상단에 노출된 사이트를 가장 먼저 클릭합니다.<br/>
          키워드 검색광고는 귀사의 사업분야에 관심 있는 고객을<br/>
          가장 빠르게 유치할 수 있는 효과적인 광고입니다. 
        </p>
      </div>
      <div class="row px-50 mb-15">
        <p class="bc-gray-3 py-10 px-10 txt-align-center fw-500">
          네이버는 <span class="fc-main">국내 PC 검색점유율의<br/>70% 이상</span>을 차지합니다.
        </p>
      </div>
      <div class="row">
        <p class="fs-12 txt-align-center lh-20">
          국내 다수의 인터넷 이용자는 제품 및 서비스를 구매하기 전<br/>
          네이버에서 원하는 정보를 검색합니다.<br/>
          네이버 검색을 통해 하루 동안 검색되는 쿼리수만 1억 3천 만 개입니다.<br/>
          국내 소비자들에게 제품 및 서비스를 판매하고자 한다면<br/>
          네이버 사이트검색광고는 필수입니다.
        </p>
      </div>
    </div>
  </div> <?php
  $process = [
    [
      'todo' => '검색광고,<br/>의뢰',
      'customer-todo' => true,
    ],
    [
      'todo' => '광고 계정<br/>생성',
    ],
    [
      'todo' => '키워드<br/>제안',
    ],
    [
      'todo' => '키워드<br/>등록, 검수',
    ],
    [
      'todo' => '검색광고<br/>노출',
    ],
  ];
  include_with_variable(
    "/common/component/service-process.php",
    array(
      'process' => $process,
    )
  ); ?>
</div>