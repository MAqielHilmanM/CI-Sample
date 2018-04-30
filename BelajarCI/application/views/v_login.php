<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin SMK Negeri 4 Bandung | LOGIN</title>
    <meta content='width=device-width, intial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Boostrap 3.3.2 -->
    <link rel="stylesheet" href="<?php echo base_url("media") ?>/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url("media") ?>/plugins/font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url("media") ?>/dist/css/AdminLTE.min.css" type="text/css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url("media") ?>/plugins/iCheck/square/blue.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if It IE 9] >
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/Respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>Opat</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <!-- FeedBack -->
        <?php if(!empty($success)){ ?>
          <div class="alert alert-success">
            <?php echo $success ?>
          </div>
        <?php } ?>

        <?php if(!empty($error)) { ?>
          <div class="alert alert-danger">
            <?php echo $error ?>
          </div>
        <?php } ?>
        <!-- End Of FeedBack -->
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?php echo site_url("login/do_login") ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!--/.cols-->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- JQuery 2.1.3 -->
    <script type="text/javascript" src="<?php echo site_url("media") ?>/plugins/jquery/jquery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.2.2 JS -->
    <script type="text/javascript" src="<?php echo site_url("media") ?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script type="text/javascript" src="<?php echo site_url("media") ?>/plugins/iCheck/iCheck.min.js"></script>
    <script type="text/javascript">
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
