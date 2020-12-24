<?php require APPROOT . '/views/inc/header.php'; ?>
<!--
<div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <?php flash('register_success'); ?>
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo URLROOT; ?>/users/login" method="post">
          <div class="form-group">
              <label>Email:<sup>*</sup></label>
              <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Password:<sup>*</sup></label>
              <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-row">
            <div class="col">
              <input type="submit" class="btn btn-success btn-block" value="Login">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">No account? Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  --!>

  <div class="hold-transition login-page bg">
<div class="login-box">
  <div class="login-logo">

  </div>
  <!-- /.login-logo -->
<div class="card" style=" box-shadow: black; border: #001226 10px">
    <div class="card-body login-card-body">
        <center> <img  src="<?php echo URLROOT;?>/front/img/logo.png" class="w-50 h-50" ></center>


        <p>Please fill in your credentials to login.</p>
        <?php flash('register_success'); ?>

        <form action="<?php echo URLROOT; ?>/users/login" method="post">
            <div class="input-group mb-3">
                <input type="text" name="email" placeholder="Email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php if (isset($data['email'])) echo $data['email']; ?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>

            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" placeholder="Password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php if (isset($data['password'])) echo $data['password']; ?>">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>

            </div>
            <!-- /.col -->
            <div>
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
    </div>
    </form>

<div class="row">
    <div class="col-md-6">
        <a  data-toggle="modal" data-target="#modal-default" href="#" style="margin-left: 10px"><b>Forgot  password</b></a>

    </div>
    <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>/users/register" class="align-content-end " style="margin-left: 50px; color: #00cd5a"><b>Register </b></a>

    </div>
</div>
</div>
<!-- /.login-card-body -->
</div>
<footer class="main-footer" style="margin-left: 12px; background: #f2f2f2">
    <strong> &#169; 2020/21 <a href="<?php echo URLROOT;?>/pages/help">Help</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <a href="<?php echo URLROOT;?>/pages/about">   <b>about us</b> </a>
    </div>
</footer>
</div>




<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                You forgot your password? Here you can easily retrieve a new password.
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo URLROOT;?>/users/forgotepass" method="post">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">

                    <input type="submit" class="btn btn-primary btn-block" value="Request new password" />
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
