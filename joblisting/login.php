<?php require_once 'app/sessionconfig/headersession.php'; ?>
<?php
if($auth_user->is_loggedin()!="")
{
    $auth_user->redirect('index');
}
?>
<?php require_once 'api/includer.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
  <nav class="navbar  navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <ul class="navbar-nav ml-auto" style="float:right;">
          <li class=" nav-item" style="float:left;">
            <a class="navbar-brand" href="index.php">
            LOGO </a>
          </li>
                 

        </ul>       
      </div>

    </div>

        <ul class="navbar-nav ml-auto" style="float:right;">
 
          
          
        </ul>    
  </nav>

  <div class="">
    <div class="profile-content" style="margin-top:-40px;">

      <div class="col-md-12">
        <div class="row">


          <div class="col-md-4" style="margin-right:auto;margin-left: auto;">
            <div class="card card-blog">
              <div class="card-image">
                
              </div>
              <div class="card-body">
                <h6 class="card-category text-info">Employer Login</h6>

          <div class=" card-login">
            <form class="form" method="post" >
              <p class="description text-center">Login here</p><br />
              <center><img src="a.jpeg" style="width:150px;" /></center>
              <div class="card-body">
                <div class="input-group  ">
                 
                  <input type="text" style="width:95%;margin:5px;" name="txt_uname_email" id="txt_uname_email" class="form-control" placeholder="Enter email">
                </div>

                <div class="input-group  ">
                  
                  <input type="password" name="txt_password" id="txt_password" class="form-control" style="width:95%;margin:5px;" placeholder="Password...">
                </div>
              </div>
              
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg" name="btnlogin" id="btnlogin">Employer Login</button>
              </div>
              <center>Dont have an account? <a href="register.php">Register here</a></center>
            </form>
          </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>

</html> 