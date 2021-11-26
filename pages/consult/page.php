<div class="container">
  <div class="intro mb-35">
    <p class="intro-main">
      마케팅의 왕이 궁금하신가요?<br/>
      서비스 문의, 건의, 제휴 제안 문의 모두<br/>
      환영합니다.
    </p>
  </div>
  <form name="apply_form" method="post" enctype="multipart/form-data" action="apply_process.php?">
    <div class="form-row">
      <label class="required mb-20">구분</label>
      <div class="form-field">
        <div class="field-container checkbox-container">
          <input id="customer-type--new" name="type" type="radio">
          <div class="checkbox"><img src="/assets/check.svg" alt=""></div>
          <label for="customer-type--new" class="fw-400">신규 고객</label>
        </div>
        <div class="field-container checkbox-container">
          <input id="customer-type--prolong" name="type" type="radio">
          <div class="checkbox"><img src="/assets/check.svg" alt=""></div>
          <label for="customer-type--prolong" class="fw-400">연장 고객</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <label for="company" class="required">회사명</label>
      <div class="form-field">
        <input id="company" type="text" name="company" placeholder="회사명을 입력해 주세요.">
      </div>
    </div>
    <div class="form-row">
      <label for="url">홈페이지 주소</label>
      <div class="form-field">
        <input id="url" name="homepage" type="text" placeholder="url을 입력해 주세요.">
      </div>
    </div>
    <div class="form-row">
      <label for="customer-name" class="required">고객명</label>
      <div class="form-field">
        <input id="customer-name" name="name" type="text" placeholder="이름을 입력해 주세요.">
      </div>
    </div>
    <div class="form-row">
      <label for="position">직급 / 직책</label>
      <div class="form-field">
        <input id="position" name="position" type="text" placeholder="직함을 입력해 주세요">
      </div>
    </div>
    <div class="form-row">
      <label for="tel" class="required">연락처</label>
      <div class="form-field">
        <input id="tel" name="tel" type="text" placeholder="연락처를 입력해 주세요.(-없이 숫자만 입력)" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
      </div>
    </div>
    <div class="form-row">
      <label for="email1" class="required">이메일</label>
      <div class="form-field form-field--email input-highlight" tabindex="1">
        <input id="email1" name="email1" type="text"/><span>@</span><input id="email2" name="email2" type="text" disabled value="naver.com">
        <ul class="emails box-shadow-1">
          <li rel="self">직접입력</li>
          <li rel="naver.com">naver.com</li>
          <li rel="kakao.com">kakao.com</li>
          <li rel="gmail.com">gmail.com</li>
          <li rel="hanmail.net">hanmail.net</li>
          <li rel="nate.com">nate.com</li>
        </ul>
        <div class="arrow-down" tabindex="2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 12 8" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3778 0.774584C11.7073 1.1407 11.7073 1.7343 11.3778 2.10041L6.59662 7.41287C6.26712 7.779 5.73288 7.779 5.40338 7.41287L0.622126 2.10041C0.292625 1.7343 0.292625 1.1407 0.622126 0.774584C0.951627 0.408472 1.48587 0.408472 1.81537 0.774584L6 5.42417L10.1847 0.774584C10.5142 0.408472 11.0483 0.408472 11.3778 0.774584Z" fill="#24292E"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="form-row">
      <label for="position" class="d-block mb-20">상담구분</label>
      <div class="form-field">
        <div class="row d-flex">
          <div class="field-container checkbox-container">
            <input id="consult-type-1" class="d-none" name="sec1[]" type="checkbox">
            <div class="checkbox"><img src="/assets/check.svg" alt=""></div>
            <label for="consult-type-1">국내 마케팅</label>
          </div>
          <div class="field-container checkbox-container">
            <input id="consult-type-2" class="d-none" name="sec1[]" type="checkbox">
            <div class="checkbox"><img src="/assets/check.svg" alt=""></div>
            <label for="consult-type-2">해외 마케팅</label>
          </div>
        </div>
        <div class="row d-flex">
          <div class="field-container checkbox-container">
            <input id="consult-type-3" class="d-none" name="sec1[]" type="checkbox">
            <div class="checkbox"><img src="/assets/check.svg" alt=""></div>
            <label for="consult-type-3">국내 언론홍보</label>
          </div>
          <div class="field-container checkbox-container">
            <input id="consult-type-4" class="d-none" name="sec1[]" type="checkbox">
            <div class="checkbox"><img src="/assets/check.svg" alt=""></div>
            <label for="consult-type-4">해외 언론홍보</label>
          </div>
          <div class="field-container checkbox-container">
            <input id="consult-type-5" class="d-none" name="sec1[]" type="checkbox">
            <div class="checkbox"><img src="/assets/check.svg" alt=""></div>
            <label for="consult-type-5">기타</label>
          </div>
        </div>
      </div>
    </div>
    <div class="form-row mb-45">
      <label for="content" class="mb-20 required">문의내용</label>
      <textarea name="content" id="content" cols="30" rows="8" placeholder="문의하실 내용을 입력해주세요."></textarea>
    </div>
    <button type="submit">문의하기</button>
  </form>
</div>