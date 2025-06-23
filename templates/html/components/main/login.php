<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DepED Inventory Login</title>
  <link rel="icon" href="../../../static/images/system/full-deped-logo.png" type="image/png">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="stylesheet" href="../../../static/styles/components/login.css">


</head>

<body>


  <div class="login-wrapper">
    <div class="login-container">
      <img src="../../../static/images/system/deped.png" alt="DepEd Logo" />
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
        <button type="submit">Login</button>

        <div class="forgot-password">
          <a href="/forgot-password">Forgot Password?</a>
        </div>
      </form>
    </div>
  </div>







<script src="../../../static/js/main/login.js"></script>
</body>

</html>