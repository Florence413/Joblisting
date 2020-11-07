<?php require_once 'app/sessionconfig/headersession.php'; ?>
<?php require_once 'app/sessionconfig/loginsession.php'; ?>
<?php require_once 'api/includer.php'; ?>
<?php
if ($userRow['type'] == 1) {
  echo '<script type="text/javascript">window.location = "dashboard.php"</script>';
}
?>
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
<?php
if (isset($_GET['jobid'])) {
  $jobid = $_GET['jobid'];
?>
<?php
$stmt = $auth_user->runQuery("SELECT * FROM jobs WHERE `jobs_id`='$jobid' ");
$stmt->execute(array());
$jobs=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($jobs as $jobs) {
?>   
<body class="profile-page sidebar-collapse">
  <nav class="navbar  navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">

        <ul class="navbar-nav ml-auto" style="width:100%;">
          <li class=" nav-item" style="float:left;">
            <a class="navbar-brand" href="index.php">
            LOGO </a>
          </li>
          <li class=" nav-item" style="float:left;">
            <a class="navbar-brand" href="profile.php">
            Profile </a>
          </li>
          <li class=" nav-item" style="float:left;">
            <a class="navbar-brand" href="home.php">
            Home </a>
          </li>
     
          
        </ul>       
      </div>
<form method="get" >  
<div class="row ">
<div class="col-sm-12">

                <a class="btn btn-sm" href="logout.php?logout=true">Logout </a>

</div>
</div>

</form>
    </div>
  </nav>

  <div class="">
    <div class="profile-content" style="margin-top:-40px;">

















      <div class="col-md-12">
        <div class="row">

          <div class="col-md-12">

            <div class="card card-blog" style="margin-bottom:0px;">
              <div class="card-body" style="width:70%;margin-left:auto;margin-right:auto;">
                <h5 class="card-title">
                  <center><a href="#pablo"><?php echo $jobs->jobtitle; ?></a></center>
                </h5>
                <p>
                  <?php echo $jobs->jobdescription; ?>
                </p>
                <hr>
                <div class="card-footer">
                  <div class="author">

                  <style>ul{} ul li{display:inline-block;margin-right:5px;}</style>
                <ul>
                  <li style="margin-right:10px;"><i>Salary KES <?php echo number_format($jobs->jobcost, 2); ?> </i></li>
                  <li style="margin-right:10px;"><i>Category <?php echo $jobs->jobduration; ?> </i></li>
                  <li style="margin-right:10px;"><i>Time posted <?php echo $jobs->jobcategory; ?> </i></li>
                 
                </ul>


                  </div>
                </div>
                <hr>
                <div class="card-footer">
                  <div class="author">

<div class="card-body">
                <h5 class="card-title">
                                  <center><h4>SEND CV TO APPLY FOR JOB</h4></center>

                  
                </h5>

                <hr>
                <div class="card-footer ">

<form method="post" enctype="multipart/form-data">  
      <div class="row ">
        <div class="col-sm-12">
          <div class="form-group bmd-form-group is-filled" style="width:100%;">
            <input type="text" hidden name="user_id" id="user_id" value="<?php echo $userRow['user_id']; ?>" class="form-control">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group bmd-form-group is-filled" style="width:100%;">
            <input type="text" hidden name="jobs_id" id="jobs_id" value="<?php echo $jobs->jobs_id; ?>" class="form-control">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group bmd-form-group" style="width:100%;">
            <input type="text" placeholder="Provide brief description" name="userdescription" id="userdescription" class="form-control">
          </div>
        </div><br />
       
        <div class="col-sm-12">
          <div class=" " style="width:100%;">
            <input type="file" placeholder="cvdoc" name="cv" id="cv" >
          </div>
        </div>

    </div>
    <br />   
      <button class="btn btn-round btn-primary" name="submitcvforjob" id="submitcvforjob" type="submit">Send CV</button>
    <div class="stats">
    </div>
</form>             
                </div>
              </div>                

                    
                  </div>
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
<?php  
}}
?>
</html>