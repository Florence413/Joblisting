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
          
     
          
        </ul>      
      </div>
<form method="get" >  
<div class="row ">
<div class="col-sm-12">
  <div class="form-group bmd-form-group is-filled">
    <input type="text" name="search" id="search" placeholder="SEARCH..."  class="form-control">
  </div>
    <button class="btn btn-sm" type="submit" name="postsearch" id="postsearch">Search</button>
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


          <div class="col-md-3">
            <div class="card card-blog">
              <div class="card-image">

<?php
$stmt = $auth_user->runQuery("SELECT * FROM submited_cvs LEFT JOIN jobs ON `submited_cvs`.`jobs_id`=`jobs`.`jobs_id` WHERE user_id='$user_id' ");
$stmt->execute(array());
$submited_cvs=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($submited_cvs as $submited_cvs) {
  ?>
                <div class="card-footer ">
                  <div class="author">
                    <a href="book">
                      <center>
                        <p><?php echo $submited_cvs->jobtitle; ?>
                      <?php echo $submited_cvs->userdescription; ?>
                      <?php echo $submited_cvs->jobcategory; ?>
                      <?php echo $submited_cvs->jobcost; ?></p>

                      <h4 style="color:green;">An email will be sent to you if your application is successful</h4>
                      </center>
<center>
  <?php
if ($submited_cvs->hire == 0) {
  ?><center><b><?php echo "PENDING"; ?></b></center><?php
}else{
  ?><center><b><?php echo "APPROVED"; ?></b></center><?php
}
?>
</center>
                    </a>
                  </div>
                </div><hr />

  <?php
}
?>                    
              </div>  
            </div>
          </div>


          <div class="col-md-6">
<?php
if (isset($_GET['category'])) {
  $category = $_GET['category'];
  ?>
  <?php
$stmt = $auth_user->runQuery("SELECT * FROM jobs where `jobcategory`='$category' ");
$stmt->execute(array());
$jobs=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($jobs as $jobs) {
?>      
            <div class="card card-blog" style="margin-bottom:0px;">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#pablo"><?php echo $jobs->jobtitle; ?></a>
                </h5>
                <p>
                  <?php echo $jobs->jobdescription; ?> <a href="job.php?jobid=<?php echo $jobs->jobs_id; ?>"><button class="btn btn-sm pull-right" style="background:green;">View job</button></a>
                </p>
                <style>ul{} ul li{display:inline-block;margin-right:5px;}</style>
                <ul>
                  <li style="margin-right:10px;"><i>Salary KES <?php echo number_format($jobs->jobcost, 2); ?> </i></li>
                  <li style="margin-right:10px;"><i>Category <?php echo $jobs->jobduration; ?> </i></li>
                  <li style="margin-right:10px;"><i> <?php echo $jobs->jobcategory; ?> </i></li>
                 
                </ul>
              </div>
            </div>
            <?php
          }
          ?>

  <?php
}else{
  ?>
  <?php
if (isset($_GET['search'])) {
  $search = $_GET['search'];
?>

<?php
$stmt = $auth_user->runQuery("SELECT * FROM jobs where `jobcategory`='$search' ");
$stmt->execute(array());
$jobs=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($jobs as $jobs) {
?>      
            <div class="card card-blog" style="margin-bottom:0px;">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#pablo"><?php echo $jobs->jobtitle; ?></a>
                </h5>
                <p>
                  <?php echo $jobs->jobdescription; ?> <a href="job.php?jobid=<?php echo $jobs->jobs_id; ?>"><button class="btn btn-sm pull-right" style="background:green;">View job</button></a>
                </p>
                <style>ul{} ul li{display:inline-block;margin-right:5px;}</style>
                <ul>
                  <li style="margin-right:10px;"><i>Salary KES <?php echo number_format($jobs->jobcost, 2); ?> </i></li>
                  <li style="margin-right:10px;"><i>Category <?php echo $jobs->jobduration; ?> </i></li>
                  <li style="margin-right:10px;"><i> <?php echo $jobs->jobcategory; ?> </i></li>
                 
                </ul>
              </div>
            </div>
            <?php
          }
          ?>
<?php
}else{
?>

<?php
$stmt = $auth_user->runQuery("SELECT * FROM jobs ");
$stmt->execute(array());
$jobs=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($jobs as $jobs) {
?>      
            <div class="card card-blog" style="margin-bottom:0px;">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="#pablo"><?php echo $jobs->jobtitle; ?></a>
                </h5>
                <p>
                  <?php echo $jobs->jobdescription; ?> <a href="job.php?jobid=<?php echo $jobs->jobs_id; ?>"><button class="btn btn-sm pull-right" style="background:green;">View job</button></a>
                </p>
                <style>ul{} ul li{display:inline-block;margin-right:5px;}</style>
                <ul>
                  <li style="margin-right:10px;"><i>Salary KES <?php echo number_format($jobs->jobcost, 2); ?> </i></li>
                  <li style="margin-right:10px;"><i>Category <?php echo $jobs->jobduration; ?> </i></li>
                  <li style="margin-right:10px;"><i> <?php echo $jobs->jobcategory; ?> </i></li>
                 
                </ul>
              </div>
            </div>
            <?php
          }
          ?>
<?php
}
?>
  <?php
}
?>

<hr />





          </div>










          <div class="col-md-3">
            <div class="card card-blog">
              <div class="">

<?php
$stmt = $auth_user->runQuery("SELECT * FROM jobs GROUP BY jobcategory ");
$stmt->execute(array());
$jobs=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($jobs as $jobs) {
  ?>
                <div class="card-footer ">
                  <div class="author">
                    <a href="home.php?category=<?php echo urldecode($jobs->jobcategory); ?>">
                        <p><?php echo $jobs->jobcategory; ?>
                    </a>
                  </div>
                </div><hr />

  <?php
}
?>
              <center><h4><a href="home.php">View all</a>   </h4></center>                 
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