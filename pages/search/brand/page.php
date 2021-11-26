<div class="container">
  <div class="intro mb-35">
    <p class="intro-main mb-10">
      브랜드검색이란 브랜드 연관 키워드를 사용자가<br/>
      검색할 경우, 통합검색 결과 상단에 브랜드와<br/>
      관련된 최신 컨텐츠를 텍스트, 이미지, 동영상<br/>
      등을 이용하여 노출하는 상품입니다.<br/>
      광고주와 직접적으로 연관이 있는 상호명,<br/>
      상품명 등의 브랜드 키워드에 한해 브랜드검색<br/>
      집행이 가능합니다.
    </p>
  </div>
  <div class="blue-label mb-15">
    <div class="title mb-10">
      <div class="left">유형1.</div>
      <div class="right">PC브랜드 검색</div>
    </div>
    <div class="img-container">
      <img src="/assets/search-brand-1.png" alt="">
    </div>
  </div>
  <div class="blue-label mb-45">
    <div class="title mb-10">
      <div class="left">유형2.</div>
      <div class="right">모바일 브랜드 검색</div>
    </div>
    <div class="img-container">
      <img src="/assets/search-brand-2.png" alt="">
    </div>
  </div>
  <div class="row mb-45">
    <div class="box-shadow-1 pt-30 pb-30 pl-12 pr-12 vertical-center">
      <div class="row mb-15">
        <p class="bc-gray-3 py-10 px-10 txt-align-center fw-500">
          어떤 <span class="fc-main">키워드</span>로 광고하나요?
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
      <div class="row mb-15">
        <p class="bc-gray-3 py-10 px-10 txt-align-center fw-500">
          <span class="fc-main">어디에 몇 개가</span> 노출되나요?
        </p>
      </div>
      <div class="row mb-25">
        <p class="fs-12 txt-align-center lh-20">
          네이버 통합검색 페이지 상단영역에 광고가 단독 노출됩니다.<br/>
          단, 사용자의 검색의도가 달라졌을 경우<br/>
          노출 위치가 달라질 수는 있습니다.
        </p>
      </div>
      <div class="row mb-15">
        <p class="bc-gray-3 py-10 px-10 txt-align-center fw-500">
          <span class="fc-main">광고비는</span> 어떻게 산정되나요?
        </p>
      </div>
      <div class="row">
        <p class="fs-12 txt-align-center lh-20">
          광고비는 상품 유형, 광고 노출 기간(최소 7일~최대 90일),<br/>
          광고 가능한 키워드의 기간 조회 수(최근 30일 조회수)<br/>
          합계에 따라 산정됩니다. 최소 광고비는 50만원입니다.
        </p>
      </div>
    </div>
  </div> <?php
  $process = [
    [
      'todo' => '브랜드 검색<br/>의뢰',
      'customer-todo' => true,
    ],
    [
      'todo' => '광고 계정<br/>생성',
    ],
    [
      'todo' => '컨텐츠<br/>제안',
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