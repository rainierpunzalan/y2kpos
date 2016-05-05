<?php
session_start();
  if(!isset($_SESSION['y2kposuserid'])){
    header("location: login.php");
  }
  include '../utils/functions.php';
  require_once '../inc/constants.inc';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>POS</title>
    <meta name="description" content="POS"/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="../assets/plugins/vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="../assets/plugins/vendor/css/flat-ui.css" rel="stylesheet">
    <!-- <link href="docs/assets/css/demo.css" rel="stylesheet"> -->

    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- main css-->
     <link href="../assets/styles/main.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

    <div class="container">
    <div class="row demo-row">
        <div class="">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">Store Name |</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="#fakelink">Menu</a></li>
                <li><a href="#fakelink">Orders</a></li>
                <li><a href="#fakelink">Reports</a></li>
               </ul>
               <form class="navbar-right" action="#" role="search">
                    <div class="">
                        <a href="" class="btn btn-block btn-lg btn-danger"><span class="fui-power"></span>Log Out</a>
                    </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->

        </div>
        
    </div> <!-- /row -->

     

    </div>

    <div class="jumbotron">
        <h2 style="text-align:center;">Menu</h2>
        <table id="menu-table">
          <tr>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food1.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food2.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food3.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
          </tr>
          <tr>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food4.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food5.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food6.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
          </tr>
          <tr>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food1.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food2.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
            <td>
                <img style=" margin: 15px 15px 15px 15px;" src="../assets/images/food3.jpg" alt="example-image" class="img-rounded img-responsive" height="100px" width="300px">      
            </td>
          </tr>
        </table>
        
       
        <p>
          <a class="btn btn-lg btn-primary" href="" role="button">View More &raquo;</a>
        </p>
      </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assets/plugins/sbadmin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/plugins/sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assets/plugins/sbadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../assets/plugins/sbadmin/dist/js/sb-admin-2.js"></script>
    <script src="../assets/plugins/sortable/js/sortable.min.js"></script>
    <script src="../assets/plugins/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/vendor/jquery/video.js"></script>
    <script src="../assets/plugins/vendor/jquery/flat-ui.min.js"></script>
    <script>
      videojs.options.flash.swf = "../assets/plugins/vendor/jquery/video-js.swf";
    </script>
    <script>
        $.ajax({
          url: '../gateway/cashier.php?addCashier=1',
          type: 'post',
          data : {
            name: "rainier"
          },
          success: function(data){
            
          }
        });
    </script>


</body>

</html>
