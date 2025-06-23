<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verify Code - DepED Inventory</title>
  <link rel="icon" href="../../../static/images/system/full-deped-logo.png" type="image/png">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="../../../../static/styles/components/login.css">
  <link rel="stylesheet" href="../../../../static/styles/components/code.css">


</head>

<body>

  <div class="login-wrapper">
    <div class="login-container">
      <img src="../../../../static/images/system/deped.png" alt="DepEd Logo" />
      <h2 class="deped-title">
       </span> Code Verification
      </h2>

      <form id="codeForm">
        <p style="font-size: 14px; color: #555; margin-bottom: 15px;">
          Enter the 6-digit code sent to your email.
        </p>

        <div class="code-input-group">
          <input type="text" maxlength="1" inputmode="numeric">
          <input type="text" maxlength="1" inputmode="numeric">
          <input type="text" maxlength="1" inputmode="numeric">
          <input type="text" maxlength="1" inputmode="numeric">
          <input type="text" maxlength="1" inputmode="numeric">
          <input type="text" maxlength="1" inputmode="numeric">
        </div>

        <button type="submit">Verify Code</button>

        <div class="forgot-password">
          <a href="/login">Back to Login</a>
        </div>
      </form>
    </div>
  </div>


  <script src="../../../static/js/forgot-password/code.js"></script>



</body>

</html>
