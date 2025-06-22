<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DepED Inventory Login</title>
  <link rel="icon" href="../../../static/images/full-deped-logo.png" type="image/png">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  
  <link rel="preload" href="../../../static/images/image.png" as="image" type="image/png" fetchpriority="high">

  <meta http-equiv="Cache-Control" content="public, max-age=31536000">

  <style>
  
  </style>

  <link rel="stylesheet" href="../../../static/styles/components/index.css">
</head>
<body>

  <img src="../../../static/images/image.png" alt="" style="display:none" />

  <div class="login-wrapper">
    <div class="login-container">
      <img src="../../../static/images/deped.png" alt="DepEd Logo" />
      <h2 class="deped-title">
        <span class="dep">Dep</span><span class="ed">ED</span> Inventory Login
      </h2>
      <form id="loginForm">
        <div class="input-group">
          <input type="text" id="username" required>
          <label for="username">Username</label>
        </div>
        <div class="input-group">
          <input type="password" id="password" required>
          <label for="password">Password</label>
        </div>
        <button  type="submit">Login</button>
      </form>
    </div>
  </div>

  <script>
    document.querySelectorAll('.input-group input').forEach(input => {
      input.addEventListener('input', () => {
        if (input.value.trim() !== '') {
          input.classList.add('filled');
        } else {
          input.classList.remove('filled');
        }
      });
    });

    document.getElementById("loginForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const username = document.getElementById("username").value;
      const password = document.getElementById("password").value;

      const correctUsername = "admin";
      const correctPassword = "adminpass";

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
      }
    });
  </script>
</body>
</html>
