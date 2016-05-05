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

</head>

<body>

    
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
