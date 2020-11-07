<?php require_once 'app/sessionconfig/headersession.php'; ?>
<?php require_once 'app/sessionconfig/loginsession.php'; ?>
<?php require_once 'api/includer.php'; ?>
<?php
if ($userRow['type'] != 1) {
  echo '<script type="text/javascript">window.location = "logout.php?logout=true"</script>';
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
      
      </div>

    </div>

        <ul class="navbar-nav ml-auto" style="float:right;">
          <li class=" nav-item" style="float:left;">
            <a class="navbar-brand" href="dashboard.php">
            Dashboard </a>
          </li>
          <li class=" nav-item" style="float:right;">
            <a href="appliedjobs.php" class="nav-link" >
              <i class="material-"></i> Applications
            </a>

          </li>          
          <li class="nav-item" style="float:right;">
            <a class="nav-link" href="logout.php?logout=true" >
              <i class="material-icons"></i> Logout
            </a>
          </li>
          
        </ul>    
  </nav>

  <div class="">
    <div class="profile-content" style="margin-top:-40px;">


      <div class="col-md-12">
        <div class="row">


          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-image">
                
              </div>
              <div class="card-body">
                <center><h6 class="card-category text-info">Post new Job</h6></center>

          <div class=" card-login">
            <form class="form" method="post" >
              <div class="card-body">
                <div class="input-group  ">
                  <input type="text" style="width:95%;margin:5px;" name="jobtitle" id="jobtitle" class="form-control" placeholder="Enter job title">
                </div>

 <div class="input-group  ">
                  <select type="text" style="width:95%;margin:5px;" name="jobcategory" id="jobcategory" class="form-control" placeholder="Enter job category">
                  <option value="0">Job Category</option>
                  <option value="Accounting">Accounting</option>
                  <option value="Agriculture">Agriculture</option>
                  <option value="Adminstration">Adminstration</option>
                  <option value="Banking">Banking</option>
                  <option value="communication">communication</option>
                  <option value="driving">driving</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Graphic designer">Graphic designer</option>
                  <option value="hotel management">hotel management</option>
                  <option value="IT $ ICT">IT $ ICT</option>
                  <option value="Health care">Health care</option>

                  
                </select>
                </div>

 <div class="input-group  ">
                  <select type="text" style="width:95%;margin:5px;" name="joblocation" id="joblocation" class="form-control" placeholder="Enter job location">
                  <option value="0">Job location</option>
                  <option value="Nairobi">Nairobi</option>
                  <option value="Mombasa">Mombasa</option>
                  <option value="Kisumu">Kisumu</option>
                  <option value="Nakuru">Nakuru</option>
                  <option value="Eldoret">Eldoret</option>
                  

                  
                </select>
                </div>

                
                <div class="input-group  ">
                  <input type="text" style="width:95%;margin:5px;" name="jobdescription" id="jobdescription" class="form-control" placeholder="Enter job description">
                </div>
                <div class="input-group  ">
                  <select type="text" style="width:95%;margin:5px;" name="jobduration" id="jobduration" class="form-control" placeholder="Enter job description">
                  	<option value="Full-time">Full time</option>
                  	<option value="Part-time">part time</option>
                  	<option value="Internship">Internship</option>
                  </select>
                </div>
                <div class="input-group  ">
                  <input type="text" style="width:95%;margin:5px;" name="jobcost" id="jobcost" class="form-control" placeholder="Enter Salary">
                </div>

 
              </div>

              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg" name="jobpost" id="jobpost">POST JOB</button>
              </div>
            </form>
          </div>
                
              </div>
            </div>
          </div>

          <div class="col-md-8">
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
                  <?php echo $jobs->jobdescription; ?>
                </p>
                <style>ul{} ul li{display:inline-block;margin-right:5px;}</style>
                <ul>
                  <li style="margin-right:10px;"><i>Salary KES <?php echo number_format($jobs->jobcost, 2); ?> </i></li>
                  <li style="margin-right:10px;"><i>Category <?php echo $jobs->jobduration; ?> </i></li>
                  <li style="margin-right:10px;"><i>Time posted <?php echo $jobs->jobcategory; ?> </i></li>
                  <li style="margin-right:10px;">
                  	<form method="post">
                  		<input type="text" hidden name="jobs_id" id="jobs_id" value="<?php echo $jobs->jobs_id; ?>" />

                      <button class="btn btn-sm" name="editjob" id="editjob">EDIT</button>

                  		<button class="btn btn-sm" name="deletejob" id="deletejob">DELETE</button>
                  	</form>
                  </li>
                </ul>
              </div>
            </div>
            <?php
          }
          ?>


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