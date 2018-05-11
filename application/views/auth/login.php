<body class="login-page">

  <div class="login-box">

      <div class="login-logo">
        <a href="<?php echo site_url();?>"><b>Creative</b>designs</a>
      </div><!-- /.login-logo -->

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <div id="infoMessage" class="text-danger"><?php echo $message;?></div>

            <?php echo form_open("auth/login");?>

              <div class="form-group has-feedback">
                <?php echo form_input($identity);?>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <?php echo form_input($password);?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>

              <div class="row">

                <div class="col-xs-8">    
                  <div class="checkbox icheck">
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>  <?php echo lang('login_remember_label', 'remember');?>
                  </div>                        
                </div><!-- /.col -->

                <div class="col-xs-4">
                  <?php $data = array('type'  =>'submit',
                                      'class' =>'btn btn-primary btn-block btn-flat',
                                  'content'   => "<i class='glyphicon glyphicon-log-in'></i> ".lang('login_submit_btn'))?>
                   
                  <?php echo form_button($data);?>
                </div><!-- /.col -->

              </div><!-- /.row -->

            <?php echo form_close();?>

            <a href="forgot_password"><?php echo lang('login_forgot_password');?></a><br>
            <a href="<?php echo site_url('auth/create_user');?>" class="text-center">Register a new membership</a>

          </div><!-- /.login-box-body -->

  </div><!-- /.login-box -->
   

</body>