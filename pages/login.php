<?php
if(isset($_SESSION['y2kposuserid'])){
    header("location:index.php");
  }
  include '../utils/functions.php';
  require_once '../inc/constants.inc';


?>
<!DOCTYPE>
<html>
  <head>
    <title><?php print SITE_TITLE;?></title>
    <link rel="stylesheet" href="../assets/plugins/bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="../assets/styles/main.css" />
    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="../assets/plugins/vendor/css/flat-ui.css" rel="stylesheet">
    <!-- <link href="docs/assets/css/demo.css" rel="stylesheet"> -->

    <link rel="shortcut icon" href="../assets/images/favicon.ico">
  </head>
  <body>
    <div class="login-screen">
          <div class="login-icon">
            <img src="../assets/images/icons/svg/clipboard.svg" alt="Welcome to POS" />
            <h4>Welcome to <small>POS</small></h4>
          </div>
          
           <div class="alert alert-danger fade in" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> <span class="error_msg"></span>
          </div>
          <form class="login-form" id = "sign_in_form" name = "sign_in_form" method = "post" action="../gateway/auth.php">
            <div class="form-group">
              <input id="uname" type="text" class="form-control login-field" name="input-uname" value="" placeholder="Enter your username" required="required" />
              <label class="login-field-icon fui-user" for="input-email"></label>
            </div>

            <div class="form-group">
              <input id="pword" type="password" class="form-control login-field" name="input-pw" value="" placeholder="Password"  required="required" />
              <label class="login-field-icon fui-lock" for="input-password"></label>
            </div>

            <input for = "sign_ in_form" class="btn btn-primary btn-lg btn-block" type="submit" name="loginFlag"  value="Log in"  />
            <a class="login-link" href="#">Lost your password?</a>
          </form>
      </div>
    
         

    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.js"></script>
    <script src="../assets/scripts/script.js"></script>
    <script src="../assets/plugins/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/vendor/jquery/video.js"></script>
    <script src="../assets/plugins/vendor/jquery/flat-ui.min.js"></script>

    <script>
      videojs.options.flash.swf = "../assets/plugins/vendor/jquery/video-js.swf"
    </script>
    <script>
      $(document).ready(function(){
      });
    </script>
    <?php
      if(isset($_GET['loginFailed'])){
        if($_GET['loginFailed']=="1"){
          ?>
          <script>
           error_alert("Incorrect Username or Password!");
          </script>
          <?php
        }
      }
    ?>
  </body>
</html>
