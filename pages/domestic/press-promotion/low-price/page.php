<div class="container">
  <div class="intro mb-25">
    <p class="intro-main mb-10">
      파격적인 가격!<br>
      언론홍보 비용부담을 확 줄인 <span class="fc-red">초저가 언론홍보!</span><br>
      언론사 <span class="fc-main">4곳 40만원!</span> 언론사 <span class="fc-main">8곳 70만원!</span>
    </p>
    <p class="intro-description">
      N포탈 / D포탈 / G포탈 등 주요포탈에 모두 노출됩니다.
    </p>
  </div>
  <div class="table-container col-2 mb-45">
    <div class="navigation navigation--left">
      <img src="/assets/arrow-right.svg" alt="">
    </div>
    <div class="navigation navigation--right">
      <img src="/assets/arrow-right.svg" alt="">
    </div>
    <table>
      <thead>
        <tr>
          <th class="sticky-col">서비스명</th>
          <th>초저가</th>
          <th>초저가 플러스</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="sticky-col">보도자료<br/>작성</td>
          <td colspan="2">현직 기자가 작성</td>
        </tr>
        <tr>
          <td class="sticky-col">보도자료<br/>배포</td>
          <td colspan="2">170개 언론매체 및 3,000명 이상의<br/>기자에게 보도자료 배포</td>
        </tr>
        <tr>
          <td class="sticky-col" rowspan="2">서비스 조건</td>
          <td>언론사 4곳 보장</td>
          <td>언론사 8곳 보장</td>
        </tr>
        <tr>
          <td>초저가 4곳</td>
          <td>초저가 8곳<br/>초저가 플러스 4곳</td>
        </tr>
        <tr>
          <td class="sticky-col">언론사 그룹</td>
          <td>인터넷 언론사 초특가 그룹<br/>-종합, IT, 경제, 연예</td>
          <td>인터넷 언론사 플러스 그룹<br/>-종합, IT, 경제</td>
        </tr>
        <tr>
          <td class="sticky-col">핵심 키워드<br/>삽입</td>
          <td>5개 핵심 키워드</td>
          <td>5개 핵심 키워드</td>
        </tr>
        <tr>
          <td class="sticky-col">모바일<br/>기사노출</td>
          <td>모바일 노출 4곳</td>
          <td>모바일 노출 8곳</td>
        </tr>
        <tr>
          <td class="sticky-col">기사노출<br/>기능포탈</td>
          <td colspan="2"> <?php
            include_with_variable('/common/component/portal-logos.php'); ?>
          </td>
        </tr>
        <tr>
          <td class="sticky-col">결과보고서</td>
          <td>제공</td>
          <td>제공</td>
        </tr>
        <tr>
          <td class="sticky-col">서비스 비용</td>
          <td>40만원</td>
          <td>70만원</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="ad-component ad-component--banner mb-40">
    <div class="ad-title ad-title--logo">
      <div class="logo">
        <img src="/assets/icon-document-1.png" alt="">
      </div>
      <h1>언론홍보란?</h1>
    </div>
    <div class="content">
      <div class="row">
        <p class="wide-p">
          언론홍보란 기업의 PR이슈를 보도자료로 작성해<br>
          언론사에 배포하고, 포탈사이트에서 검색 시 뉴스 영역에<br>
          노출될 수 있도록 하는 서비스입니다.<br>
          언론홍보는 <span class="fc-main">기업브랜드 및 제품, 서비스 인지도 향상</span>에<br>
          가장 효과적인 마케팅 방법입니다.
        </p>
        <div class="blue-label">
          <div class="title">
            <div class="left">진행사례</div>
            <div class="right">컬투(cultwo)</div>
          </div>
          <div class="sub-description">
            <div class="left">배경</div>
            <div class="right">
              컬투 콘서트 관련 정보를 포탈사이트 뉴스영역에 노출시켜<br/>
              티켓 구매를 유도해 내고자 함.
            </div>
          </div>
        </div>
        <div class="img-container">
          <div class="labels">
            <span>&#60;PC&#62;</span>
            <span>&#60;모바일&#62;</span>
          </div>
          <img src="/assets/low-price-1.png" alt="">
        </div>
      </div>
    </div>
  </div> <?php
  $process = [
    [
      'todo' => '서비스 신청,<br/>결제',
      'customer-todo' => true,
    ],
    [
      'todo' => '기초자료<br/>제공',
      'customer-todo' => true,
    ],
    [
      'todo' => '보도자료<br/>작성',
      'customer-todo' => true,
    ],
    [
      'todo' => '보도자료<br/>확정',
      'customer-todo' => true,
    ],
    [
      'todo' => '보도자료<br/>배포',
      'customer-todo' => true,
    ],
    [
      'todo' => '뉴스기사<br/>언론보도',
      'customer-todo' => true,
    ],
    [
      'todo' => '결과보고서<br/>제출',
      'customer-todo' => true,
    ],
  ];
  include_with_variable(
    "/common/component/service-process.php",
    array( 
      'process' => $process,
      'no_ref' => true
    )
  ); ?>
</div>