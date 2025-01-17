<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?= base_url() ?>/template/assets/img/logo_it.png" alt="logo" width="250">
            </div>
            <div class="card card-primary" style="border-top: 2px solid #27a53c;">
              <div class=" text-center">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <form method="post" action="<?= base_url('Auth'); ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color: #27a53c;" tabindex="4">
                      Login
                    </button>
                    <div class="float-right">
                      <a href="<?= base_url('auth/forgetpass') ?>" class="text-small">
                        Lupa Password?
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Kepegawaian IT
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url() ?>/template/dist/assets/modules/jquery.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/assets/modules/popper.js"></script>
  <script src="<?= base_url() ?>/template/dist/assets/modules/tooltip.js"></script>
  <script src="<?= base_url() ?>/template/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/assets/modules/moment.min.js"></script>
  <script src="<?= base_url() ?>/template/dist/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?= base_url() ?>/template/dist/assets/js/scripts.js"></script>
  <script src="<?= base_url() ?>/template/dist/assets/js/custom.js"></script>
</body>

</html>