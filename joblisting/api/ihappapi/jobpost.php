<?php
if (isset($_POST['jobpost'])) {
    $jobtitle = strip_tags($_POST['jobtitle']);
    $jobcategory = strip_tags($_POST['jobcategory']);
    $jobdescription = strip_tags($_POST['jobdescription']);
    $jobpages = strip_tags($_POST['jobpages']);
    $jobduration = strip_tags($_POST['jobduration']);
    $jobcost = strip_tags($_POST['jobcost']);
    try
    {
        if($auth_user->make_job_post($jobtitle, $jobcategory, $jobdescription, $jobpages, $jobduration, $jobcost))
        {

        }
    }catch(PDOException $e){
        $e->getMessage();
    }
}	
?>
 








