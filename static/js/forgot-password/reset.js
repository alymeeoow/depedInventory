
 document.querySelectorAll('.input-group input').forEach(input => {
    input.addEventListener('input', () => {
      if (input.value.trim() !== '') {
        input.classList.add('filled');
      } else {
        input.classList.remove('filled');
      }
    });
  });


  document.getElementById("resetForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const newPassword = document.getElementById("newPassword").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    if (newPassword !== confirmPassword) {
      Swal.fire({
        icon: 'error',
        title: 'Password Mismatch',
        text: 'Passwords do not match. Please try again.',
        backdrop: 'rgba(0,0,0,0.4)'
      });
      return;
    }


    Swal.fire({
      icon: 'success',
      title: 'Password Reset Successful',
      text: 'You can now log in with your new password.',
      backdrop: 'rgba(0,0,0,0.4)'
    }).then(() => {
      window.location.href = "/login";
    });
  });