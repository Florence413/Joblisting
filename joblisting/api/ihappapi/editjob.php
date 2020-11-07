<?php
if (isset($_POST['cardelete'])) {
	$jobs_id = trim(htmlspecialchars($_POST['jobs_id']));
    $jobtitle = strip_tags($_POST['jobtitle']);
    $jobcategory = strip_tags($_POST['jobcategory']);
    $jobdescription = strip_tags($_POST['jobdescription']);
    $jobpages = strip_tags($_POST['jobpages']);
    $jobduration = strip_tags($_POST['jobduration']);
    $jobcost = strip_tags($_POST['jobcost']);    

    try
    {
        $stmt = $auth_user->runQuery("UPDATE `jobs` SET `jobtitle`=:jobtitle, `jobcategory`=:jobcategory, `jobdescription`=:jobdescription, `jobpages`=:jobpages, `jobduration`=:jobduration, `jobcost`=:jobcost WHERE `jobs_id`= '$jobs_id' ");
        $stmt->bindparam(":jobs_id", $jobs_id);
        $stmt->bindparam(":jobtitle", $jobtitle);
        $stmt->bindparam(":jobcategory", $jobcategory);
        $stmt->bindparam(":jobdescription", $jobdescription);
        $stmt->bindparam(":jobpages", $jobpages);
        $stmt->bindparam(":jobduration", $jobduration);
        $stmt->bindparam(":jobcost", $jobcost);        
        $stmt->execute();
        return $stmt;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}

?>
