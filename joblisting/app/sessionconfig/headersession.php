<?php
	require_once 'api/classfile/class.user.php';
	require_once ("session.php");

	
	$auth_user = new USER();
	$user = new USER();

	
	
	@$user_id = $_SESSION['user_session'];
	@$user_email = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>