<div class="container">
  <div class="overlay-intro mb-30">
    <img src="/assets/main.png" alt="">
    <div class="overlay">
      <p>
        기업 / 기관 / 정부지원<br/>
        마케팅 전문<br/>
        다이나믹 마케팅 대행사
      </p>
    </div>
  </div>
  <div class="best-3 mb-30">
    <h2>마케팅의 왕 BEST 3</h2>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="container">
            <div class="card-type-1">
              <div class="top">
                <img src="/assets/best3-1.png" alt="">
              </div>
              <div class="bottom bg-1">
                <h3>배너+페이스북 광고</h3>
                <p>
                  포탈사이트와 SNS를 동시에 타게팅 해 배너 및 동영상 등 컨텐츠를 노출시키고 홈페이지 유입을 유도하는 마케팅
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="container">
            <div class="card-type-1">
              <div class="top">
                <img src="/assets/best3-2.png" alt="">
              </div>
              <div class="bottom bg-2">
                <h3>마케팅풀패키지</h3>
                <p>
                  배너, 페이스북, 언론홍보, 블로그 마케팅 이 모든 마케팅을 한 번에 진행 할 수 있는 원스톱 마케팅 솔루션
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="container">
            <div class="card-type-1">
              <div class="top">
                <img src="/assets/best3-3.png" alt="">
              </div>
              <div class="bottom bg-3">
                <h3>유튜브 광고</h3>
                <p>
                  타겟팅 된 유튜브 사용자들에게 동영상, 배너를 노출시켜 클릭을 유도하고 브랜드 인지도를 향상시키는 마케팅
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <?php
  $services = [
    'domestic-marketing' => [
      'title' => '국내 마케팅',
      'list' => [
        [
          'logo' => 'icon-seo.png',
          'title' => 'SEO 마케팅',
          'content' => 'N포탈 검색 시 검색결과를 최적화해 긍정 이미지를 메이킹하는 마케팅',
          'link'  => ''
        ],
        [
          'logo' => 'icon-google.png',
          'title' => '배너 광고',
          'content' => '포털 사용자를 대상으로 타게팅을 통해 배너를 노출시키는 광고',
          'link'  => ''
        ],
        [
          'logo' => 'icon-playstore.png',
          'title' => '어플 광고',
          'content' => '적극적인 잠재고객을 타겟으로 빠른 광고 효과를 경험할 수 있는 마케팅',
          'link'  => ''
        ],
      ]
    ],
    'domestic-press-promotion' => [
      'title' => '국내 언론홍보',
      'list' => [
        [
          'logo' => 'icon-loudspeaker.png',
          'title' => '프리미엄 언론홍보',
          'content' => '홍보이슈를 보도자료로 작성해 메이저 언론사 및 N포탈에 노출',
          'link'  => ''
        ],
        [
          'logo' => 'icon-document-1.png',
          'title' => '초저가 언론홍보',
          'content' => '홍보이슈를 보도자료로 작성해 언론사 및 N포탈에 노출',
          'link'  => ''
        ],
        [
          'logo' => 'icon-document-2.png',
          'title' => 'PR 배너',
          'content' => '보도자료 하단에 광고배너를 노출시켜 전환 효과를 극대화 하는 마케팅',
          'link'  => ''
        ],
      ]
    ],
    'overseas-marketing' => [
      'title' => '해외 마케팅',
      'list' => [
        [
          'logo' => 'icon-video.png',
          'title' => '타임스퀘어 광고',
          'content' => '세계의 중심인 뉴욕타임스퀘어에 광고 이슈를 노출시키는 마케팅',
          'link'  => ''
        ],
        [
          'logo' => 'icon-facebook.png',
          'title' => '페이스북 광고',
          'content' => '타겟팅 된 소비자를 대상으로 전세계에 정보를 노출시키는 SNS 광고',
          'link'  => ''
        ],
        [
          'logo' => 'icon-google.png',
          'title' => '배너 광고',
          'content' => '타겟팅 된 소비자를 대상으로 전 세계에 정보를 노출시키는 배너 광고',
          'link'  => ''
        ],
      ]
    ],
    'overseas-press-promotion' => [
      'title' => '해외 언론홍보',
      'list' => [
        [
          'logo' => 'icon-asia.png',
          'title' => '아시아 홍보',
          'content' => '홍보이슈를 보도자료로 작성해 아시아 주요 언론사에 배포',
          'link'  => ''
        ],
        [
          'logo' => 'icon-america.png',
          'title' => '아메리카 홍보',
          'content' => '홍보이슈를 보도자료로 작성해 아메리카 주요 언론사에 배포',
          'link'  => ''
        ],
        [
          'logo' => 'icon-europe.png',
          'title' => '유럽홍보',
          'content' => '홍보이슈를 보도자료로 작성해 유럽 주요 언론사에 배포',
          'link'  => ''
        ],
      ]
    ],
  ];
  foreach ($services as $key => $service) { ?>
    <div class="service <?php echo $key; ?>">
      <h2><?php echo $service['title']; ?></h2>
      <div class="service-contents"> <?php
        for ($i = 0; $i < count($service['list']); $i++) {
          $li = $service['list'][$i]; ?>
          <a class="service-item" href="<?php echo $li['link']; ?>">
            <div class="left">
              <img src="../../assets/<?php echo $li['logo']; ?>" alt="">
            </div>
            <div class="right">
              <div class="content">
                <h3><?php echo $li['title']; ?></h3>
                <p><?php echo $li['content']; ?></p>
              </div>
              <div class="icon">
                <img src="../../assets/arrow-right.svg" alt="">
              </div>
            </div>
          </a> <?php
          if ($i < 2) { ?>
            <div class="divider mt-20 mb-20"></div> <?php
          }
        } ?>
      </div>
    </div> <?php
  } ?>
</div>

<div class="phone">
  <img src="/assets/icon-phone.svg" alt="">
</div>