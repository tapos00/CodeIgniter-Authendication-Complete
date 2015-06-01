<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
        <?php echo form_open(current_url(), 'class="form-signin"');?>
        <h2 class="form-signin-heading">sign in now</h2>
        <?php if (! empty($message)) { ?>
        <div class="alert alert-block alert-danger fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <strong> <?php echo $message; ?></strong>
        </div>
        <?php } ?>
        <div class="login-wrap">
            <input type="text" name="login_identity" class="form-control" placeholder="Email or Username:" autofocus>
            <input type="password" name="login_password" class="form-control" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox" id="remember_me" name="remember_me" value="1"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" value="login_user" name="login_user" type="submit">Sign in</button>

            <div class="login-social-link">
                <?php
                # Below are 2 examples, the first shows how to implement 'reCaptcha' (By Google - http://www.google.com/recaptcha),
                # the second shows 'math_captcha' - a simple math question based captcha that is native to the flexi auth library.
                # This example is setup to use reCaptcha by default, if using math_captcha, ensure the 'auth' controller and 'demo_auth_model' are updated.

                # reCAPTCHA Example
                # To activate reCAPTCHA, ensure the 'if' statement immediately below is uncommented and then comment out the math captcha 'if' statement further below.
                # You will also need to enable the recaptcha examples in 'controllers/auth.php', and 'models/demo_auth_model.php'.
                #/*
//                if (isset($captcha))
//                {
//                    echo "<li>\n";
//                    echo $captcha;
//                    echo "</li>\n";
//                }
                #*/

                /* math_captcha Example
                # To activate math_captcha, ensure the 'if' statement immediately below is uncommented and then comment out the reCAPTCHA 'if' statement just above.
                # You will also need to enable the math_captcha examples in 'controllers/auth.php', and 'models/demo_auth_model.php'.
               */
                if (isset($captcha))
                {
                    echo "<li>\n";
                    echo "<label for=\"captcha\">Captcha Question:</label>\n";
                    echo $captcha.' = <input type="text" id="captcha" name="login_captcha" class="width_50"/>'."\n";
                    echo "</li>\n";
                }
                #*/
                ?>
            </div>
        </div>
        </form>
          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <?php echo form_open("auth/forgotten_password");?>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="forgot_password_identity" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" name="send_forgotten_password" value="Submit" type="submit">Submit</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
          <!-- modal -->



    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>


  </body>
</html>
