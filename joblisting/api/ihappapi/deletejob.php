<?php
if (isset($_POST['deletejob'])) {
	$jobs_id = trim(htmlspecialchars($_POST['jobs_id']));

    try
    {
        $stmt = $auth_user->runQuery("DELETE FROM `jobs` WHERE `jobs_id`= '$jobs_id' ");
        $stmt->bindparam(":jobs_id", $jobs_id);
        $stmt->execute();
        return $stmt;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}

?>