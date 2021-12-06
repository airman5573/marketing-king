let emailField = $('.form-field--email');
emailField.focusin(() => {
  emailField.toggleClass('active');
});
emailField.focusout(() => {
  emailField.toggleClass('active');
});

let emails = $('ul.emails');
let arrowDown = $('.arrow-down');
arrowDown.focusin(() => {
  emails.toggleClass('show');
  arrowDown.toggleClass('active');
});
arrowDown.focusout(() => {
  emails.toggleClass('show');
  arrowDown.toggleClass('active');
});
let email2 = $('#email2');
$('ul.emails li').on('mousedown', function() {
  const self = $(this);
  const email = self.attr('rel');
  if (email == 'self') {
    email2.val('');
  } else {
    email2.val(email);
  }
});

$('form').on('submit', function() {
  if (!($('input#customer-type--new').prop('checked') || $('input#customer-type--prolong').prop('checked'))) {
    alert("구분을 선택해주세요");
    return false;
  }

  if ($('input[name=company]').val().length < 1) {
    alert("회사명을 입력해주세요");
    return false;
  }

  if ($('input[name=name]').val().length < 1) {
    alert("고객명을 입력해주세요");
    return false;
  }

  if ($('input[name=tel]').val().length < 1) {
    alert("전화번호를 입력해주세요");
    return false;
  }

  if ($('input[name=email1]').val().length < 1 || $('input[name=email2]').val().length < 1) {
    alert("이메일을 입력해주세요");
    return false;
  }

  if ($('textarea[name=content]').val().length < 1) {
    alert("문의내용을 입력해주세요");
    return false;
  }

  return true;
});

function validatePhoneNumber(phoneNumber) {
  var patternPhone = /01[016789][0-9]{4}[0-9]{4}/;
  if (!patternPhone.test(phoneNumber)) return false;
  return true;
}