<div id="footer">
  <ul class="links">
    <li><a href="http://teraplanet.co.kr/kr/teraplanet.php">회사소개</a></li>
    <li><a href="http://www.marketingking.co.kr/customer/provision.php">개인정보 취급방침</a></li>
    <li><a href="http://www.marketingking.co.kr/popup/pers_pop2.html">찾아오시는 길</a></li>
  </ul>
  <div class="family-site">
    <span>Family site</span> <img src="/assets/arrow-down.svg" alt="">
    <ul>
      <li><a href="http://www.teraplanet.co.kr" target="_blank">테라플래닛</a></li>
      <li><a href="http://marketingking.co.kr/timessquare.php" target="_blank">타임스퀘어 마케팅센터</a></li>
      <li><a href="http://www.newsstart.co.kr" target="_blank">뉴스스타트</a></li>
      <li><a href="http://prwire.co.kr" target="_blank">피알와이어</a></li>
      <li><a href="http://www.teraplace.co.kr" target="_blank">테라플레이스</a></li>
    </ul>
  </div>
  <div class="logo">
    <img src="/assets/teraplanet-logo.svg" alt="">
  </div>
  <ul class="company-info">
    <li class="address">서울특별시 성동구 상원1길 26, 서울숲 A타워 405호~7호</li>
    <li class="tel">Tel. 02 - 466 - 6402</li>
    <li class="fax">Fax. 02 - 6442 - 6234</li>
  </ul>
  <div class="all-rights">ⓒ Since 2011 TERAPLANET Corp. All Rights Reserved.</div>
</div>

<a href="tel:02-466-6402" class="phone">
  <img src="/assets/icon-phone.svg" alt="">
</a>

<?php

include_with_variable('/common/component/bottom-tab.php', array('current_path' => $current_path)); ?>
</div> <!-- page-wrapper --> <?php
include_with_variable('/common/component/menu.php', array('current_path' => $current_path)); ?>
</div> <!-- page -->

<script src="/common/js/menu.js"></script>
<script src="/common/js/table-carousel.js"></script>
<script src="/common/js/phone.js"></script>
<script src="/common/js/family-site.js"></script>
</body>
<?php
  // 파일 존재 여부 검사할때는 앞의 /를 빼고 검사한다
  if (file_exists(substr($js_path, 1))) { ?>
    <script src="<?php echo $js_path; ?>"></script> <?php
  }
?>
</html>