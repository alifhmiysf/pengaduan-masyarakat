<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
  <div class="parent clearfix">
    <div class="bg-illustration">
      <div class="burger-btn"></div>
    </div>

    <div class="login">
      <div class="container">
        <h1 class="judul">Sign In</h1>

        <div class="login-form">
          <form action="">
            <input type="text" placeholder="Username" class="input-username" />
            <input type="password" placeholder="Password" class="input-password" />
            <button class="signin" type="submit">Sign In</button>
            <p>Don't have an account?<a href="<?= base_url('auth/register') ?>"> Sign Up </a> </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Jquery dan Bootsrap JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>