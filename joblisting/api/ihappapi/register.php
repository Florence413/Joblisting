<?php
if (isset($_POST['signup'])) {
$user_name = strip_tags($_POST['user_name']);
$user_email = strip_tags($_POST['user_email']);
$user_pass = strip_tags($_POST['user_pass']);
$confirm_user_pass = strip_tags($_POST['confirm_user_pass']);

    if($user_name=="")  {
      $error[] = "provide username !";  
    }
    else if($user_email=="") {
      $error[] = "provide email id !";  
    }
    else if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Please enter a valid email address !';
    }
    else if($user_pass=="") {
      $error[] = "provide password !";
    }
    else if(strlen($user_pass) < 6){
      $error[] = "Password must be atleast 6 characters"; 
    }
    else if($confirm_user_pass != $user_pass ){
      $error[] = "Password dont match"; 
      echo "MISMATCH";
    }
    else
    {
      try
      {
        $stmt = $user->runQuery("SELECT * FROM users WHERE user_name=:user_name OR user_email=:user_email");
        $stmt->execute(array(':user_name'=>$user_name, ':user_email'=>$user_email));
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
          
        if($row['user_name']==$user_name) {
          $error[] = "sorry username already taken !";
        }
        else if($row['user_email']==$user_email) {
          $error[] = "sorry email id already taken !";
        }
        else
        {
          if($user->register($user_name, $user_email, $user_pass)){  
            echo "SUCCESS";
            }


        }
      }
      
      catch(PDOException $e)
      {
        echo $e->getMessage();
      }
    } 

} 


?>
 
 






