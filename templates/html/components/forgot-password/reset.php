<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
  <link rel="icon" href="../../../static/images/system/full-deped-logo.png" type="image/png">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="../../../../static/styles/components/login.css">
</head>

<body>
  <div class="login-wrapper">
    <div class="login-container">
      <img src="../../../../static/images/system/deped.png" alt="DepEd Logo" />
      <h2 class="deped-title">Reset Your Password</h2>

      <form id="resetForm">
        <div class="input-group">
          <input type="password" id="newPassword" required>
          <label for="newPassword">New Password</label>
        </div>

        <div class="input-group">
          <input type="password" id="confirmPassword" required>
          <label for="confirmPassword">Confirm Password</label>
        </div>

        <button type="submit">Reset Password</button>

        <div class="forgot-password">
          <a href="/login">Back to Login</a>
        </div>
      </form>
    </div>
  </div>

  <script src="../../../static/js/forgot-password/reset.js"></script>


</body>

</html>
