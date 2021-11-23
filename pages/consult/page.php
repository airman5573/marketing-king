<div class="container">
  <div class="intro mb-30">
    <p class="intro-main">
      마케팅의 왕이 궁금하신가요?<br/>
      서비스 문의, 건의, 제휴 제안 문의 모두<br/>
      환영합니다.
    </p>
  </div>
  <form action="">
    <div class="form-row">
      <label class="required mb-15">구분</label>
      <div class="form-field">
        <div class="field-container mr-40">
          <input id="customer-type--new" name="type" type="radio" required>
          <label for="customer-type--new" class="fw-400">신규 고객</label>
        </div>
        <div class="field-container">
          <input id="customer-type--prolong" name="type" type="radio" required>
          <label for="customer-type--prolong" class="fw-400">연장 고객</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <label for="company" class="required">회사명</label>
      <div class="form-field">
        <input id="company" type="text" name="company" placeholder="회사명을 입력해 주세요." required>
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
        <input id="tel" name="tel" type="text" placeholder="연락처를 입력해 주세요.(-없이 숫자만 입력)">
      </div>
    </div>
    <div class="form-row">
      <label for="email1" class="required">이메일</label>
      <div class="form-field form-field--email input-highlight" tabindex="1">
        <input id="email1" name="email1" type="text" required/><span>@</span><input id="email2" name="email2" type="text" disabled value="naver.com">
        <select name="select-email" id="select-email">
          <option value="1">직접입력</option>
          <option value="naver.com" selected>naver.com</option>
          <option value="hanmail.net">hanmail.net</option>
          <option value="hotmail.com">hotmail.com</option>
          <option value="nate.com">nate.com</option>
          <option value="yahoo.co.kr">yahoo.co.kr</option>
          <option value="empas.com">empas.com</option>
          <option value="dreamwiz.com">dreamwiz.com</option>
          <option value="freechal.com">freechal.com</option>
          <option value="lycos.co.kr">lycos.co.kr</option>
          <option value="korea.com">korea.com</option>
          <option value="gmail.com">gmail.com</option>
          <option value="hanmir.com">hanmir.com</option>
          <option value="paran.com">paran.com</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <label for="position">상담구분</label>
      <div class="form-field">
        <div class="field-container">
          <input id="consult-type-1" name="sec1[]" type="checkbox">
          <label for="consult-type-1">국내 마케팅</label>
        </div>
        <div class="field-container">
          <input id="consult-type-2" name="sec1[]" type="checkbox">
          <label for="consult-type-2">해외 마케팅</label>
        </div>
        <div class="field-container">
          <input id="consult-type-3" name="sec1[]" type="checkbox">
          <label for="consult-type-3">국내 언론홍보</label>
        </div>
        <div class="field-container">
          <input id="consult-type-4" name="sec1[]" type="checkbox">
          <label for="consult-type-4">해외 언론홍보</label>
        </div>
        <div class="field-container">
          <input id="consult-type-5" name="sec1[]" type="checkbox">
          <label for="consult-type-5">기타</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <label for="content">문의내용</label>
      <textarea name="content" id="content" cols="30" rows="10" placeholder="문의하실 내용을 입력해주세요."></textarea>
    </div>
  </form>
</div>