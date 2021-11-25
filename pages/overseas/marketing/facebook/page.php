<div class="container">
  <div class="intro mb-40">
    <p class="intro-main mb-10">
      페이스북 광고를 통해 해외에 있는 잠재고객에게<br>
      제품 및 서비스를 노출하고 구매전환을<br>
      이끌어내세요!
    </p>
    <p class="intro-description mb-5">
      타겟 국가 및 성별, 연령, 관심사를 설정할 수 있으며,<br>
      기획, 디자인, 번역(영어), 광고운영까지 마케팅의 왕이<br>
      광고 진행에 필요한 모든 것을 대행해드립니다.
    </p>
    <p class="notice">
      영어 외 언어로 진행 시, 별도의 번역비용이 부과될 수 있습니다.
    </p>
  </div>
  <div class="table-container col-4 mb-50">
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
          <th>C클래스</th>
          <th>B클래스</th>
          <th>A클래스</th>
          <th>S클래스</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="sticky-col">최소<br>방문자</td>
          <td>최소 1,000명 이상 보장</td>
          <td>최소 2,500명 이상 보장</td>
          <td>최소 5,000명 이상 보장</td>
          <td>최소 10,000명 이상 보장</td>
        </tr>
        <tr>
          <td class="sticky-col" rowspan="2">페이스북<br/>광고</td>
          <td>10만 이상 노출 보장</td>
          <td>30만 이상 노출 보장</td>
          <td>70만 이상 노출 보장</td>
          <td>150만 이상 노출 보장</td>
        </tr>
        <tr>
          <td>배너 기획·제작 / 1종</td>
          <td>배너 기획·제작 / 1종</td>
          <td>배너 기획·제작 / 2종</td>
          <td>배너 기획·제작 / 3종</td>
        </tr>
        <tr>
          <td class="sticky-col">결과보고서</td>
          <td>제공</td>
          <td>제공</td>
          <td>제공</td>
          <td>제공</td>
        </tr>
        <tr>
          <td class="sticky-col">서비스 비용</td>
          <td>100만원</td>
          <td>220만원</td>
          <td>400만원</td>
          <td>810만원</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="img-container mb-40">
    <img src="/assets/worldmap.png" alt="">
  </div>
  <div class="ad-component mb-50">
    <h1 class="ad-title">페이스북광고란?</h1>
    <div class="content">
      <div class="row mb-40">
        <p class="lh-30 mb-10">
          페이스북 광고는 정교하게 설정된 타게팅 그룹에 전략적으로<br>
          기획된 컨텐츠를 노출시켜 광고 효과를 극대화 하는<br>
          마케팅 기법입니다. 인스타그램과 동시에 진행됩니다.
        </p>
        <p class="notice lh-24 fs-14 ls-10 mb-15">
          페이스북 페이지 광고와는 다른 것으로 광고주님의 컨텐츠에 관심이<br>
          있을 만한 잠재 고객을 찾아가 광고를 노출시키는 보다 적극적인<br>
          마케팅 방법입니다.
        </p>
        <div class="img-container">
          <img src="/assets/facebook_instagram.png" alt="">
        </div>
      </div>
      <div class="row">
        <p class="wide-p mb-15">
          잠재 소비자의 타겟 국가 및 연령, 성별, 관심사 등을 설정하고,<br>
          해당 타겟의 페이스북 뉴스피드 및 인스타그램 피드에<br>
          광고 배넌 또는 동영상을 노출시켜 홈페이지로의 방문을<br>
          유도하는 마케팅
        </p>
        <div class="blue-label">
          <div class="title">
            <div class="left">진행사례</div>
            <div class="right">레오나 '룬랩'</div>
          </div>
          <div class="sub-description">
            <div class="left">목적</div>
            <div class="right">
              미국 여성의 소비자들 가운데 생리대, 생리컵 등 제품에 관심을<br>
              가질만한 잠재고객들에게 강점을 강조한 동영상을 노출시켜 브랜드 및<br>
              제품을 알리고 실질적인 구매를 이끌어내고자 함
            </div>
          </div>
        </div>
        <div class="img-container mb-30">
          <img src="/assets/overseas-facebook-1.png" alt="">
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
      'todo' => '리마케팅 태그 /<br/>페이스북 픽셀 전달',
      'customer-todo' => false,
    ],
    [
      'todo' => '기초자료 작성, 전달 /<br/>태그, 소스 삽입',
      'customer-todo' => true,
    ],
    [
      'todo' => '진행 기획안<br/>제공',
      'customer-todo' => false,
    ],
    [
      'todo' => '진행 기획안 컴펌 및<br/>수정 요청(1회)',
      'customer-todo' => true,
    ],
    [
      'todo' => '서비스<br/>진행',
      'customer-todo' => false,
    ],
    [
      'todo' => '결과보고서<br/>제공',
      'customer-todo' => false,
    ],
  ];
  include_with_variable(
    "/common/component/service-process.php",
    array(
      'process' => $process,
    )
  ); ?>
</div>