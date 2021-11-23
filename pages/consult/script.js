let emailField = $('.form-field--email');
emailField.focusin(() => {
  emailField.toggleClass('active');
});
emailField.focusout(() => {
  emailField.toggleClass('active');
});