document.querySelectorAll('.input-group input').forEach(input => {
    input.addEventListener('input', () => {
      if (input.value.trim() !== '') {
        input.classList.add('filled');
      } else {
        input.classList.remove('filled');
      }
    });
  });

  const loginForm = document.getElementById("loginForm");
  const loginButton = loginForm.querySelector("button");

  loginForm.addEventListener("submit", function(e) {
    e.preventDefault();


    loginButton.disabled = true;
    loginButton.textContent = "Logging in...";

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const correctUsername = "admin";
    const correctPassword = "adminpass";

    setTimeout(() => {
      if (username === correctUsername && password === correctPassword) {
        Swal.fire({
          icon: 'success',
          title: 'Login Successful',
          text: 'Welcome to the DepEd Inventory System!',
          backdrop: 'rgba(0,0,0,0.4)',
          allowOutsideClick: false
        }).then(() => {
          window.location.href = "dashboard.html";
        });
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Login Failed',
          text: 'Incorrect username or password',
          backdrop: 'rgba(0,0,0,0.4)',
          allowOutsideClick: false
        });

   
        loginButton.disabled = false;
        loginButton.textContent = "Login";
      }
    }, 600);
  });