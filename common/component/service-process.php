<div class="service-process">
  <h2>서비스 절차</h2>
  <div class="steps"> <?php
    $has_check = false;
    for ($i = 0; $i < count($process); $i++) {
      $step = $process[$i];
      $customer_todo = $step['customer-todo'] == true ? 'customer-todo' : ''; ?>
      <div class="step mb-15 fs-14 fw-400 ls-5 <?php echo $customer_todo; ?>"> <?php
        echo $step['todo'];
        if (isset($step['check']) && $step['check'] == true) {
          $has_check = true; ?>
          <div class="check"><img src="/assets/icon-check.svg" alt=""></div> <?php
        } ?>
      </div> <?php
      if ($i < count($process) - 1) { ?>
        <div class="arrow mb-15">
          <img src="/assets/arrow-right-2.svg" alt="">
        </div> <?php
      }
    } ?>
  </div> <?php
  if ($no_ref === NULL || $no_ref === false): ?> 
    <div class="reference">
      <div class="left">
        <span class="circle"></span>
        <span>박스는 고객사가,</span>
      </div>
      <div class="right">
        <span class="circle"></span>
        <span>박스는 마케팅의 왕이 진행합니다.</span>
      </div>
    </div> <?php
  endif;
  if ($has_check) { ?>
    <div class="reference-2">
      <div class="check">
        <img src="/assets/icon-check.svg" alt="">
      </div>
      <span>상세기획안 제공과 영상 컨펌은 프리미엄 서비스에서만 제공됩니다.</span>
    </div> <?php
  } ?>
</div>