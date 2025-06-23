
  const codeInputs = document.querySelectorAll('.code-input-group input');

  codeInputs.forEach((input, index) => {
    input.addEventListener('input', () => {
      if (input.value.length === 1 && index < codeInputs.length - 1) {
        codeInputs[index + 1].focus();
      }
    });

    input.addEventListener('keydown', (e) => {
      if (e.key === 'Backspace' && input.value === '' && index > 0) {
        codeInputs[index - 1].focus();
      }
    });
  });

  document.getElementById("codeForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const code = Array.from(codeInputs).map(input => input.value).join('');
    if (code.length === 6) {
      Swal.fire({
        icon: 'success',
        title: 'Code Verified',
        text: 'You may now reset your password.',
        backdrop: 'rgba(0,0,0,0.4)',
        allowOutsideClick: false
      }).then(() => {
        window.location.href = "/reset-password";
      });
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Invalid Code',
        text: 'Please enter the full 6-digit code.',
        backdrop: 'rgba(0,0,0,0.4)',
        allowOutsideClick: false
      });
    }
  });


  window.addEventListener('DOMContentLoaded', () => {
    codeInputs[0].focus();
  });