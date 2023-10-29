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
        <?php
        $session = session();
        $login = $session->getFlashdata('login');
        $username = $session->getFlashdata('username');
        $password = $session->getFlashdata('password');
        ?>
        <?php if ($username) { ?>
          <p style="color:red"><?php echo $username ?></p>
        <?php } ?>

        <?php if ($password) { ?>
          <p style="color:red"><?php echo $password ?></p>
        <?php } ?>

        <?php if ($login) { ?>
          <p style="color:green"><?php echo $login ?></p>
        <?php } ?>
        <div class="login-form">
          <form method="post" action="<?= base_url('auth/login') ?>">
            <input type="text" name="username" placeholder="Username"   class="input-username "  />
            <input type="password" name="password" placeholder="Password" class="input-password" />
            <button class="signin" type="submit" name="signin">Sign In</button>
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