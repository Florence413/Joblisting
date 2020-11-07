<?php
if (isset($_POST['hirealert'])) {
	$user_id = trim(htmlspecialchars($_POST['user_id']));    

    try
    {
        $stmt = $auth_user->runQuery("UPDATE `submited_cvs` SET `hire`=1 WHERE `user_id`= '$user_id' ");
        $stmt->bindparam("1", $hire);       
        $stmt->execute();
        return $stmt;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}

?>

