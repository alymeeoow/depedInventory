document.querySelectorAll('.input-group input').forEach(input => {
    input.addEventListener('input', () => {
      if (input.value.trim() !== '') {
        input.classList.add('filled');
      } else {
        input.classList.remove('filled');
      }
    });
  });

  const forgotForm = document.getElementById("forgotForm");
  const sendButton = forgotForm.querySelector("button");

  forgotForm.addEventListener("submit", function(e) {
    e.preventDefault();


    sendButton.disabled = true;
    sendButton.textContent = "Sending...";

    const email = document.getElementById("email").value;


    setTimeout(() => {
      Swal.fire({
        icon: 'success',
        title: 'Request Sent',
        text: 'If this email is registered, a password reset link will be sent.',
        backdrop: 'rgba(0,0,0,0.4)',
        allowOutsideClick: false
      }).then(() => {
        window.location.href = "/login";
      });
    }, 800);
  });