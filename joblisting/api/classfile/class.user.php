<?php
error_reporting (0);
require_once('database/dbconfig.php');

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function register($user_name, $user_email, $user_pass)
	{
		try
		{
			$new_password = md5($user_pass);

			$stmt = $this->conn->prepare("INSERT INTO users(user_name, user_email, user_pass)VALUES(:user_name, :user_email, :user_pass)");

			$stmt->bindparam(":user_name", $user_name);
			$stmt->bindparam(":user_email", $user_email);
			$stmt->bindparam(":user_pass", $new_password);
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function make_job_post($jobtitle, $jobcategory, $jobdescription, $jobpages, $jobduration, $jobcost)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO jobs(jobtitle, jobcategory, jobdescription, jobpages, jobduration, jobcost)VALUES(:jobtitle, :jobcategory, :jobdescription, :jobpages, :jobduration, :jobcost)");

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
			//echo $e->getMessage();
		}
	}

	public function p_post($user_id, $firstname, $middlename, $lastname, $gender, $education, $pimage)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO profile(user_id, firstname, middlename, lastname, gender, education, pimage)VALUES(:user_id, :firstname, :middlename, :lastname, :gender, :education, :pimage)");


			$stmt->bindparam(":user_id", $user_id); 
			$stmt->bindparam(":firstname", $firstname); 
			$stmt->bindparam(":middlename", $middlename); 
			$stmt->bindparam(":lastname", $lastname); 
			$stmt->bindparam(":gender", $gender); 
			$stmt->bindparam(":education", $education); 
			$stmt->bindparam(":pimage", $pimage); 					
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}

	public function submitcv( $user_id, $jobs_id, $userdescription, $cv)
	{
		try
		{
			$stmt = $this->conn->prepare("INSERT INTO submited_cvs( user_id, jobs_id, userdescription, cv)VALUES( :user_id, :jobs_id, :userdescription, :cv)");

 
			$stmt->bindparam(":user_id", $user_id); 
			$stmt->bindparam(":jobs_id", $jobs_id); 
			$stmt->bindparam(":userdescription", $userdescription); 
			$stmt->bindparam(":cv", $cv);					
			$stmt->execute();

			return $stmt;
		}
		catch(PDOException $e)
		{
			//echo $e->getMessage();
		}
	}








	public function doLogin($uname,$umail,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_id, user_name, user_email, user_pass FROM users WHERE user_name=:uname OR user_email=:umail ");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(md5($upass) == $userRow['user_pass'])
				{
					$_SESSION['user_session'] = $userRow['user_id'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}


	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>
