<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('css/style-register.css') ?>">
</head>

<body>
  <div class="parent clearfix">
    <div class="bg-illustration ">
      <div class="burger-btn"></div>
    </div>

    <div class="login">
      <div class="container">
        <h1 class="judul">Sign Up</h1>

        <div class="login-form">
                        <?php
                        $session = session();
                        $error = $session->getFlashdata('error');
                        ?>
                        <h5 class=" text-center">Register</h5>
                        <?php if ($error) { ?>
                            <p style="color:red">Terjadi Kesalahan:
                            <ul>
                                <?php foreach ($error as $e) { ?>
                                    <li><?php echo $e ?></li>
                                <?php } ?>
                            </ul>
                            </p>
                        <?php } ?>
                        <form method="post" action="<?= base_url('auth/register') ?>">
                          <input type="text" name="nik" placeholder="nik" required class="input-nik" />
                          <input type="text" name="username" placeholder="Username" required class="input-username" />
                          <input type="text" name="telepon" placeholder="+62" required class="input-telepon" />
                          <input type="password" name="password" placeholder="Password" required class="input-password" />
                          <input type="password" name="confirm" placeholder="confirm Password" required class="input-confirm-password" />
                          <!-- <p>Don't have an account?<a href="#"> Sign Up </a> </p> -->
                          <!-- <a h class="signin" type="submit">Sign Up</a> -->
                          <button type="submit" name="register" class="btn btn-primary btn-block mb-4">Register</button>
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